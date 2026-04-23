<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Técnico</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        require 'auth.php';
        require_role('tecnico');
        require 'db.php';

        // Actualizar estado incidencia
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['incident_update'])) {
            $id     = $_POST['id'];
            $status = $_POST['status'];
            $stmt = $pdo->prepare("UPDATE incidents SET status=?, assigned_to=? WHERE id=?");
            $stmt->execute([$status, $_SESSION['user_id'], $id]);
        }

        // Actualizar producto (solo edición rápida)
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_quick'])) {
            $id   = $_POST['id'];
            $price= $_POST['price'];
            $stmt = $pdo->prepare("UPDATE products SET price=? WHERE id=?");
            $stmt->execute([$price, $id]);
        }

        $incidents = $pdo->query("SELECT i.*, u.username AS creador
                                  FROM incidents i
                                  LEFT JOIN users u ON u.id=i.created_by
                                  ORDER BY i.created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
        $products = $pdo->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <header class="topbar">
          <h1>Panel de técnicos</h1>
          <div>
            <span>Rol: Técnico</span>
            <a href="logout.php" class="btn-secondary">Cerrar sesión</a>
          </div>
    </header>
    
    <main class="layout">
      <section class="card">
        <h2>Incidencias</h2>
        <table class="table">
          <thead>
            <tr><th>ID</th><th>Título</th><th>Creador</th><th>Estado</th><th>Acción</th></tr>
          </thead>
          <tbody>
          <?php foreach ($incidents as $i): ?>
            <tr>
              <td><?= $i['id'] ?></td>
              <td><?= htmlspecialchars($i['title']) ?></td>
              <td><?= htmlspecialchars($i['creador'] ?? 'Admin') ?></td>
              <td><?= $i['status'] ?></td>
              <td>
                <form method="post" class="inline-form">
                  <input type="hidden" name="incident_update" value="1">
                  <input type="hidden" name="id" value="<?= $i['id'] ?>">
                  <select name="status">
                    <option value="abierta"    <?= $i['status']=='abierta'?'selected':'' ?>>Abierta</option>
                    <option value="en_proceso" <?= $i['status']=='en_proceso'?'selected':'' ?>>En proceso</option>
                    <option value="cerrada"    <?= $i['status']=='cerrada'?'selected':'' ?>>Cerrada</option>
                  </select>
                  <button type="submit">Actualizar</button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </section>

      <section class="card">
        <h2>Productos (edición rápida)</h2>
        <table class="table">
          <thead>
            <tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Actualizar</th></tr>
          </thead>
          <tbody>
          <?php foreach ($products as $p): ?>
            <tr>
              <td><?= $p['id'] ?></td>
              <td><?= htmlspecialchars($p['name']) ?></td>
              <td>
                <form method="post" class="inline-form">
                  <input type="hidden" name="product_quick" value="1">
                  <input type="hidden" name="id" value="<?= $p['id'] ?>">
                  <input type="number" step="0.01" name="price" value="<?= $p['price'] ?>">
                  <button type="submit">Guardar</button>
                </form>
              </td>
              <td></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </section>
    </main>
    </body>
</html>
