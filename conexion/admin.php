<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php
        require 'auth.php';
        require_role('admin');
        require 'db.php';
    
        // Obtener producto a editar si viene por GET
        $edit_product = null;
        if (isset($_GET['edit'])) {
            $stmt = $pdo->prepare("SELECT * FROM products WHERE id=?");
            $stmt->execute([$_GET['edit']]);
            $edit_product = $stmt->fetch(PDO::FETCH_ASSOC);
        }
    
        // Crear/actualizar producto
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_form'])) {
            $id   = $_POST['id'] ?? '';
            $name = $_POST['name'];
            $desc = $_POST['description'];
            $price= $_POST['price'];
            $img  = $_POST['image_url'];
    
            if ($id) {
                $stmt = $pdo->prepare("UPDATE products SET name=?, description=?, price=?, image_url=? WHERE id=?");
                $stmt->execute([$name, $desc, $price, $img, $id]);
            } else {
                $stmt = $pdo->prepare("INSERT INTO products (name, description, price, image_url) VALUES (?,?,?,?)");
                $stmt->execute([$name, $desc, $price, $img]);
            }
    
            header("Location: admin.php");
            exit;
        }
    
        // Crear incidencia
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['incident_form'])) {
            $title = $_POST['title'];
            $desc  = $_POST['description'];
            $stmt = $pdo->prepare("INSERT INTO incidents (title, description, created_by) VALUES (?,?,?)");
            $stmt->execute([$title, $desc, $_SESSION['user_id']]);
        }
    
        $products = $pdo->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
        $incidents = $pdo->query("SELECT * FROM incidents ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <header class="topbar">
      <h1>Panel de administración</h1>
      <div>
        <span>Rol: Admin</span>
        <a href="logout.php" class="btn-secondary">Cerrar sesión</a>
      </div>
    </header>

    <main class="layout">
      <section class="card">
        <h2><?= $edit_product ? "Editar producto #".$edit_product['id'] : "Crear producto" ?></h2>

        <form method="post" class="form-grid">
          <input type="hidden" name="product_form" value="1">
          <input type="hidden" name="id" value="<?= $edit_product['id'] ?? '' ?>">

          <label>Nombre
            <input type="text" name="name" required
                   value="<?= htmlspecialchars($edit_product['name'] ?? '') ?>">
          </label>

          <label>Descripción
            <textarea name="description" required><?= htmlspecialchars($edit_product['description'] ?? '') ?></textarea>
          </label>

          <label>Precio
            <input type="number" step="0.01" name="price" required
                   value="<?= $edit_product['price'] ?? '' ?>">
          </label>

          <label>URL imagen
            <input type="text" name="image_url"
                   value="<?= htmlspecialchars($edit_product['image_url'] ?? '') ?>">
          </label>

          <button type="submit">Guardar producto</button>
        </form>

        <table class="table">
          <thead>
            <tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Acciones</th></tr>
          </thead>
          <tbody>
          <?php foreach ($products as $p): ?>
            <tr>
              <td><?= $p['id'] ?></td>
              <td><?= htmlspecialchars($p['name']) ?></td>
              <td><?= number_format($p['price'],2) ?> €</td>
              <td>
                <a class="btn-small" href="?edit=<?= $p['id'] ?>">Editar</a>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </section>

      <section class="card">
        <h2>Crear incidencia para técnicos</h2>
        <form method="post">
          <input type="hidden" name="incident_form" value="1">
          <label>Título
            <input type="text" name="title" required>
          </label>
          <label>Descripción
            <textarea name="description" required></textarea>
          </label>
          <button type="submit">Enviar incidencia</button>
        </form>

        <h3>Incidencias enviadas</h3>
        <ul class="list">
          <?php foreach ($incidents as $i): ?>
            <li>
              <strong>#<?= $i['id'] ?> <?= htmlspecialchars($i['title']) ?></strong>
              <span class="badge badge-<?= $i['status'] ?>"><?= $i['status'] ?></span>
              <p><?= nl2br(htmlspecialchars($i['description'])) ?></p>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>
    </main>

    </body>
</html>
