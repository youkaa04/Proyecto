<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MotoGP - Información del juego</title>

    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/motogp.css">
</head>

<body class="motogp-page">

<header>
    <a href="../Pagina_principal.php" class="logo">
        <img src="../Imagenes/logo.PNG" alt="logo">
        <h1>JOYSTICKDRAWER</h1>
    </a>

    <div class="nav-buttons">
        <a href="../Iniciar_sesion.php" class="btn login">Iniciar sesión</a>
        <a href="../Registro.php" class="btn register">Registrarse</a>
    </div>
</header>

<section class="game-top">

    <div class="game-top-left">
        <img src="../Imagenes/motogp.jpg" alt="MotoGP">
    </div>

    <div class="game-top-right">
        <h1>MotoGP™</h1>
        <p>
            Vive la experiencia oficial del campeonato mundial de motociclismo.
            Con físicas realistas, circuitos oficiales y una jugabilidad que te hará sentir la velocidad extrema.
        </p>

        <form method="POST">
            <button type="submit" name="mostrar_precio" class="btn-orange">Comprar ahora</button>
        </form>

        <?php
            $mostrar_precio = false;
            
            if (isset($_POST['mostrar_precio'])) {
                $mostrar_precio = true;
            }
        ?>

        <?php if ($mostrar_precio): ?>
        <div class="precio-box">
            <img class="compra-img" src="../Imagenes/motogp/1.jpg">
            <h2>MotoGP™ Ultimate Edition</h2>

            <div class="precio-info">
                <p class="precio-original">49,99 €</p>
            </div>

            <p class="precio-nota">
                Pueden aplicarse impuestos aplicables.<br>
                Este título incluye compras opcionales en el juego.
            </p>

            <button class="btn-comprar-final">Comprar en Steam</button>
        </div>
        <?php endif; ?>

    </div>
</section>

<section class="game-video-section">
    <h2>Tráiler oficial</h2>
    <video autoplay loop muted playsinline class="game-video" controls>
        <source src="../Imagenes/motogp/1.mp4" type="video/mp4">
    </video>
</section>

<section class="game-video-section">
    <h2>Gameplay oficial</h2>
    <video autoplay loop muted playsinline class="game-video" controls>
        <source src="../Imagenes/motogp/2.mp4" type="video/mp4">
    </video>
</section>

<section class="game-gallery">
    <h2>Imágenes del juego</h2>

    <div class="carousel-container">
        <div class="carousel-track">

            <div class="carousel-item"><img src="../Imagenes/motogp/1.jpg"></div>
            <div class="carousel-item"><img src="../Imagenes/motogp/2.jpg"></div>
            <div class="carousel-item"><img src="../Imagenes/motogp/3.jpg"></div>
            <div class="carousel-item"><img src="../Imagenes/motogp/4.jpg"></div>
            <div class="carousel-item"><img src="../Imagenes/motogp/5.jpg"></div>

        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer-inner">

        <div class="footer-left">
            <h3>Contacto</h3>
            <p>Soporte: <a href="mailto:soporte@joystickdrawer.com">soporte@joystickdrawer.com</a></p>
        </div>

        <div class="footer-right">
            <h3>Síguenos</h3>
            <div class="social-icons">
                <a href="https://instagram.com" target="_blank"><img src="../Imagenes/icons/instagram.png"></a>
                <a href="https://tiktok.com" target="_blank"><img src="../Imagenes/icons/tiktok.png"></a>
                <a href="https://linkedin.com" target="_blank"><img src="../Imagenes/icons/linkedin.png"></a>
                <a href="https://twitch.tv" target="_blank"><img src="../Imagenes/icons/twitch.png"></a>
                <a href="https://youtube.com" target="_blank"><img src="../Imagenes/icons/youtube.png"></a>
                <a href="https://facebook.com" target="_blank"><img src="../Imagenes/icons/facebook.png"></a>
                <a href="https://x.com" target="_blank"><img src="../Imagenes/icons/x.png"></a>
            </div>
        </div>

    </div>

    <div class="pie_container">
        <strong class="pie_strong">
            Plataforma feta amb estima per la Comunitat Valenciana.<br>
            Un punt de trobada per a tots els valencians i valencianes.
        </strong>
    </div>

    <div class="footer-bottom">
        © 2026 JOYSTICKDRAWER — Todos los derechos reservados
    </div>
</footer>

</body>
</html>
