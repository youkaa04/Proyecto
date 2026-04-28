<?php
<<<<<<< HEAD
// Conexión a la BD
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
=======
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
>>>>>>> f5f1341be48cc9897ea0da85436c8acd833bdf08

// Recibir datos del formulario
$nombre     = $_POST['nombre'];
$apellido   = $_POST['apellido'];
$telefono   = $_POST['telefono'];
$email      = $_POST['correo'];
$password   = $_POST['password'];
$password2  = $_POST['password2'];

// Validar contraseñas
if ($password !== $password2) {
    die("Las contraseñas no coinciden");
<<<<<<< HEAD
}

// Verificar si el email ya existe
$stmt = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = ?");
$stmt->execute([$email]);

if ($stmt->rowCount() > 0) {
    die("El correo ya está registrado");
=======
>>>>>>> f5f1341be48cc9897ea0da85436c8acd833bdf08
}

// Encriptar contraseña
$password_hash = password_hash($password, PASSWORD_DEFAULT);

<<<<<<< HEAD
// Insertar usuario
$stmt = $pdo->prepare("
    INSERT INTO usuarios (nombre, apellido, telefono, email, pass, fecha_registro)
    VALUES (?, ?, ?, ?, ?, NOW())
");

$ok = $stmt->execute([
    $nombre,
    $apellido,
    $telefono,
    $email,
    $password_hash
]);

if ($ok) {
    echo "<h2>Registro completado correctamente</h2>";
    echo "<a href='Iniciar_sesion.php'>Iniciar sesión</a>";
=======
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
>>>>>>> f5f1341be48cc9897ea0da85436c8acd833bdf08
} else {
    echo "Error al registrar usuario";
}
?>
