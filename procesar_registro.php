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

$nombre    = $_POST['nombre'];
$apellido  = $_POST['apellido'];
$telefono  = $_POST['telefono'];
$correo    = $_POST['correo'];
$password  = $_POST['password'];
$password2 = $_POST['password2'];

// Verificar contraseñas
if ($password !== $password2) {
    die("Las contraseñas no coinciden");
}

// Encriptar contraseña
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Insertar usuario en la base de datos
$stmt = $pdo->prepare("INSERT INTO usuarios (nombre, apellido, telefono, correo, pass) 
                       VALUES (?, ?, ?, ?, ?)");
if ($stmt->execute()) {
    echo "OK";
} else {
    echo "ERROR: " . $stmt->error;
}


if ($stmt->execute([$nombre, $apellido, $telefono, $correo, $password_hash])) {
    echo "Registro completado correctamente";
} else {
    echo "Error al registrar usuario";
}
?>
