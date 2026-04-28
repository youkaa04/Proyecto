<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="Style/style2.css">
</head>
<body>

<!-- LOGO ARRIBA -->
<div class="top-logo">
    <a href="Pagina_principal.php">
        <img src="Imagenes/logo.PNG" alt="Logo">
        <h1>JOYSTICKDRAWER</h1>
    </a>
    
</div>

<div class="container">
    <h2>Crear cuenta</h2>

 <form action="procesar_registro.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="apellido" placeholder="Apellido" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
    <input type="email" name="correo" placeholder="Correo" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <input type="password" name="password2" placeholder="Repetir contraseña" required>
    <button type="submit">Registrarse</button>
</form>


    <p>¿Ya tienes cuenta? <a href="Iniciar_sesion.php">Inicia sesión</a></p>
</div>

</body>
</html>