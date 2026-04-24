<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Plataforma</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <body>
        <div class="login-container">
          <h1>Iniciar sesión</h1>
          <?php 
            $error = "";
            if ($error): ?><p class="error"><?= htmlspecialchars($error) 
          ?></p><?php endif; ?>
          <form method="post">
            <label>Usuario
              <input type="text" name="username" required>
            </label>
            <label>Contraseña
              <input type="password" name="password" required>
            </label>
            <button type="submit">Entrar</button>
          </form>
          <?php
                session_start();
                require 'db.php';
        
                $error = '';
        
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $username = $_POST['username'] ?? '';
                    $password = $_POST['password'] ?? '';
        
                    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
                    $stmt->execute([$username]);
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
                    if ($user && password_verify($password, $user['password'])) {
                        $_SESSION['user_id'] = $user['id'];
                        $_SESSION['role']    = $user['role'];
        
                        if ($user['role'] === 'admin') {
                            header('Location: admin_dashboard.php');
                        } else {
                            header('Location: tecnico_dashboard.php');
                        }
                        exit;
                    } else {
                        $error = 'Usuario o contraseña incorrectos';
                    }
                }
                ?>
        </div>
        
    </body>
</html>
