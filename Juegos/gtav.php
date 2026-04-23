<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>GTA V - Información del juego</title>
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/gtav.css">
</head>

<body class="gtav-page">

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
        <img src="../Imagenes/gtav/1.png" alt="GTA V">
    </div>

    <div class="game-top-right">
        <h1>Grand Theft Auto V</h1>
        <p>
            Explora Los Santos y Blaine County en una aventura llena de acción, crimen y libertad total.
            Vive la historia de Michael, Franklin y Trevor, o crea tu propio imperio en GTA Online.
        </p>

        <form method="POST">
            <button type="submit" name="mostrar_precio" class="btn-orange">Comprar ahora</button>
        </form>

        <?php if (isset($_POST['mostrar_precio'])): ?>
        <div class="precio-box">
            <img src="../Imagenes/gtav/4.jpg" class="compra-img">
            <h2>GTA V – Premium Edition</h2>

            <div class="precio-info">
                <p class="precio-original">29,99 €</p>
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

<!-- ============================
VIDEO 1
============================ -->
<section class="game-video-section">
    <h2>Tráiler oficial</h2>

    <video autoplay loop muted playsinline class="game-video" controls>
        <source src="../Imagenes/gtav/1.mp4" type="video/mp4">
    </video>
</section>

<!-- ============================
VIDEO 2
============================ -->
<section class="game-video-section">
    <h2>Gameplay oficial</h2>

    <video autoplay loop muted playsinline class="game-video small" controls>
        <source src="../Imagenes/gtav/2.mp4" type="video/mp4">
    </video>
</section>

<!-- ============================
GALERÍA
============================ -->
<section class="game-gallery">
    <h2>Imágenes del juego</h2>

    <div class="carousel-container">
        <div class="carousel-track">

            <div class="carousel-item">
                <img src="../Imagenes/gtav/2.jpg">
                <p class="img-desc">Acción explosiva en cada misión.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/gtav/3.jpg">
                <p class="img-desc">Carreras, persecuciones y caos urbano.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/gtav/4.jpg">
                <p class="img-desc">Personajes icónicos y memorables.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/gtav/5.jpg">
                <p class="img-desc">Detalles impresionantes en cada vehículo.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/gtav/6.jpg">
                <p class="img-desc">Explora un mundo abierto lleno de posibilidades.</p>
            </div>

        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer-inner">

        <div class="footer-left">
            <h3>Contacto</h3>
            <p>Soporte: <a href="mailto:suporte.joystickdrawer@gmail.com">suporte.joystickdrawer@gmail.com</a></p>
        </div>

        <div class="footer-right">
            <h3>Síguenos</h3>
            <div class="social-icons">

                <a href="" target="_blank">
                    <img src="../Imagenes/icons/instagram.png" alt="Instagram">
                </a>

                <a href="" target="_blank">
                    <img src="../Imagenes/icons/tiktok.png" alt="TikTok">
                </a>

                <a href="" target="_blank">
                    <img src="../Imagenes/icons/linkedin.png" alt="LinkedIn">
                </a>

                <a href="" target="_blank">
                    <img src="../Imagenes/icons/twitch.png" alt="Twitch">
                </a>

                <a href="" target="_blank">
                    <img src="../Imagenes/icons/youtube.png" alt="YouTube">
                </a>

                <a href="" target="_blank">
                    <img src="../Imagenes/icons/facebook.png" alt="Facebook">
                </a>

                <a href="" target="_blank">
                    <img src="../Imagenes/icons/x.png" alt="X">
                </a>

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
