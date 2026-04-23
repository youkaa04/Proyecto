<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="Style/style2.css">
</head>
<body>

<div class="top-logo">
    <a href="Pagina_principal.php">
    <img src="Imagenes/logo.PNG" alt="Logo">
    <h1>JOYSTICKDRAWER</h1>
</div>

<div class="container">
    <h2>Iniciar sesión</h2>

    <form action="procesar_login.php" method="POST">

        <input type="text" name="nombre" placeholder="Nombre *" required>
        <input type="password" name="password" placeholder="Contraseña *" required>

        <button type="submit">Entrar</button>

    </form>

    <p>¿No tienes cuenta? <a href="Registro.php">Regístrate</a></p>
</div>

</body>
</html>