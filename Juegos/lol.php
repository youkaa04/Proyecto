<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>League of Legends - Información del juego</title>
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/lol.css">
</head>
<body class="lol-page">
<header>
    <a href="../Pagina_principal.php" class="logo">
        <img src="../Imagenes/logo.PNG" alt="logo"/>
        <h1>JOYSTICKDRAWER</h1>
    </a>
    <div class="nav-buttons">
        <a href="../Iniciar_sesion.php" class="btn login">Iniciar sesión</a>
        <a href="../Registro.php" class="btn register">Registrarse</a>
    </div>
</header>

<section class="game-top">
    <div class="game-top-left">
        <img src="../Imagenes/lol/1.jpg" alt="League of Legends">
    </div>
    <div class="game-top-right">
        <h1>League of Legends</h1>
        <p>League of Legends combina estrategia profunda, acción competitiva y trabajo en equipo en un campo de batalla en constante cambio. Elige a tu campeón, domina la grieta del invocador y guía a tu equipo hacia la victoria.</p>
        <form method="POST">
            <button type="submit" name="mostrar_precio" class="btn-orange">Comprar ahora</button>
        </form>
        <?php if (isset($_POST['mostrar_precio'])): ?>
        <div class="precio-box">
            <img src="../Imagenes/lol/1.jpg" class="compra-img">
            <h2>League of Legends | Paquete Deluxe</h2>
            <div class="precio-info">
                <p class="precio-original">39,99 €</p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<section class="game-video-section">
    <h2>Trailer oficial</h2>
    <video autoplay loop muted playsinline class="game-video small" controls>
        <source src="../Imagenes/lol/2.mp4" type="video/mp4">
    </video>
</section>

<section class="game-video-section">
    <h2>Gameplay oficial</h2>
    <video autoplay loop muted playsinline class="game-video" controls>
        <source src="../Imagenes/lol/1.mp4" type="video/mp4">
    </video>
</section>

<section class="game-gallery">
    <h2>Imágenes del juego</h2>
    <div class="carousel-container">
        <div class="carousel-track">
            <div class="carousel-item">
                <img src="../Imagenes/lol/1.jpg">
                <p class="img-desc">Batallas intensas en la Grieta del Invocador.</p>
            </div>
            <div class="carousel-item">
                <img src="../Imagenes/lol/2.png">
                <p class="img-desc">Campeones únicos con habilidades increíbles.</p>
            </div>
            <div class="carousel-item">
                <img src="../Imagenes/lol/3.jpg">
                <p class="img-desc">Estrategia y trabajo en equipo en cada partida.</p>
            </div>
            <div class="carousel-item">
                <img src="../Imagenes/lol/4.jpg">
                <p class="img-desc">Mapas icónicos y objetivos decisivos.</p>
            </div>
            <div class="carousel-item">
                <img src="../Imagenes/lol/5.jpg">
                <p class="img-desc">Skins legendarias y eventos especiales.</p>
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
