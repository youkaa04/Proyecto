<?php
session_start();

$host = 'localhost';
$db   = 'joy';
$user = 'admin_ysf';
$pass = '1234';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error DB: " . $e->getMessage());
}

$nombre = $_POST['nombre'];
$password = $_POST['password'];

// Buscar usuario
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nombre = ?");
$stmt->execute([$nombre]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    die("Usuario no encontrado");
}

// Verificar contraseña
if (password_verify($password, $user['pass'])) {
    $_SESSION['usuario'] = $user['nombre'];
    header("Location: admin.php");
    exit;
} else {
    echo "Contraseña incorrecta";
}
?>
