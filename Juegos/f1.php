<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formula 1 - Información del juego</title>
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/f1.css">
</head>

<body class="f1-page">

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
        <img src="../Imagenes/formula1.png" alt="Formula 1">
    </div>

    <div class="game-top-right">
        <h1>FÓRMULA 1</h1>
        <p>
            Vive la emoción de la máxima categoría del automovilismo.  
            Compite en circuitos icónicos, domina cada curva y siente la velocidad real de la F1.
        </p>

        <form method="POST">
            <button type="submit" name="mostrar_precio" class="btn-orange">Comprar ahora</button>
        </form>

        <?php if (isset($_POST['mostrar_precio'])): ?>
        <div class="precio-box">
            <img src="../Imagenes/f1/2.jpg" class="compra-img">
            <h2>F1 – Ultimate Edition</h2>

            <div class="precio-info">
                <p class="precio-original">59,99 €</p>
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
VIDEO 1 – TRÁILER
============================ -->
<section class="game-video-section">
    <h2>Tráiler oficial</h2>

    <video autoplay loop muted playsinline class="game-video" controls>
        <source src="../Imagenes/f1/1.mp4" type="video/mp4">
    </video>
</section>

<!-- ============================
VIDEO 2 – GAMEPLAY
============================ -->
<section class="game-video-section">
    <h2>Gameplay oficial</h2>

    <video autoplay loop muted playsinline class="game-video small" controls>
        <source src="../Imagenes/f1/2.mp4" type="video/mp4">
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
                <img src="../Imagenes/f1/1.jpg">
                <p class="img-desc">Circuitos icónicos alrededor del mundo.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/f1/2.jpg">
                <p class="img-desc">Pilotos y escuderías oficiales.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/f1/3.jpg">
                <p class="img-desc">Carreras llenas de adrenalina.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/f1/4.jpg">
                <p class="img-desc">Detalles técnicos impresionantes.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/f1/5.jpg">
                <p class="img-desc">Vehículos recreados al milímetro.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/f1/6.jpg">
                <p class="img-desc">La experiencia definitiva de F1.</p>
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
