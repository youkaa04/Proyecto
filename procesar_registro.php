<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

// Verificar contraseñas
if ($password !== $password2) {
    echo "Las contraseñas no coinciden";
    exit();
}

// Encriptar contraseña
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Aquí luego puedes guardar en base de datos

echo "Registro completado correctamente";
?>