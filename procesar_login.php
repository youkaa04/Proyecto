<?php
session_start();

$host = 'localhost';
$db   = 'joy';
$user = 'admin_ysf';
$pass = '1234';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) {
    die("Error DB: " . $e->getMessage());
}

$email    = $_POST['correo'];
$password = $_POST['password'];

// Buscar usuario
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch();

if (!$user) {
    die("Usuario no encontrado. Regístrate primero.");
}

// Verificar contraseña
if (password_verify($password, $user['pass'])) {
    $_SESSION['usuario'] = $user['nombre'];
<<<<<<< HEAD
    header("Location: Pagina_principal.php");
    exit();
=======
    header("Location: admin.php");
    exit;
>>>>>>> f5f1341be48cc9897ea0da85436c8acd833bdf08
} else {
    echo "Contraseña incorrecta";
}
?>
