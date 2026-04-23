<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Rainbow Six Siege - Información del juego</title>
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/r6s.css">
</head>

<body class="r6-page">

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
        <img src="../Imagenes/r6s/1.png" alt="Rainbow Six Siege">
    </div>

    <div class="game-top-right">
        <h1>Rainbow Six Siege</h1>
        <p>
            Rainbow Six Siege ofrece acción táctica intensa, destrucción avanzada, operadores únicos
            y partidas competitivas llenas de estrategia. Domina cada asalto con tu equipo y controla
            el campo de batalla.
        </p>

       <form method="POST">
    <button type="submit" name="mostrar_precio" class="btn-orange">Comprar ahora</button>
</form>

<?php if (isset($_POST['mostrar_precio'])) { ?>
    <div class="precio-box">
        <img src="../Imagenes/r6s/5.png" class="compra-img">
        <h2>Rainbow Six Siege – Edición Deluxe</h2>

        <div class="precio-info">
            <p class="precio-original">29,99 €</p>
        </div>

        <p class="precio-nota">
            Pueden aplicarse impuestos aplicables.<br>
            Este título incluye compras opcionales en el juego.
        </p>

        <button class="btn-comprar-final">Comprar en Ubisoft Store</button>
    </div>
<?php } ?>

    </div>
</section>

<!-- ========================= -->
<!-- VIDEO 1 -->
<section class="game-video-section">
    <h2>Tráiler oficial</h2>
    <video autoplay loop muted playsinline class="game-video" controls>
        <source src="../Imagenes/r6s/1.mp4" type="video/mp4">
    </video>
</section>

<!-- ========================= -->
<!-- VIDEO 2 -->
<section class="game-video-section">
    <h2>Gameplay oficial</h2>
    <video autoplay loop muted playsinline class="game-video small" controls>
        <source src="../Imagenes/r6s/2.mp4" type="video/mp4">
    </video>
</section>

<!-- ========================= -->
<!-- GALERÍA -->
<section class="game-gallery">
    <h2>Imágenes del juego</h2>

    <div class="carousel-container">
        <div class="carousel-track">

            <div class="carousel-item">
                <img src="../Imagenes/r6s/1.png">
                <p>Operadores listos para el asalto táctico.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/r6s/2.jpg">
                <p>Destrucción avanzada en cada enfrentamiento.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/r6s/3.jpg">
                <p>Acción intensa en mapas icónicos.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/r6s/4.jpg">
                <p>Trabajo en equipo y estrategia al máximo nivel.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/r6s/5.png">
                <p>Operadores únicos con habilidades especiales.</p>
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
