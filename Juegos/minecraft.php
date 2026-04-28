<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Minecraft - Información del juego</title>
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/minecraft.css">
</head>

<body class="mc-page">

<header>
    <a href="/Proyecto/Pagina_principal.php" class="logo">
        <img src="../Imagenes/Logo.PNG" alt="Logo">
        <h1>JOYSTICKDRAWER</h1>
    </a>

    <div class="nav-buttons">
        <?php if (isset($_SESSION['usuario'])): ?>
            <a href="../logout.php" class="btn logout">Cerrar sesión</a>
            <?php echo "Hola " . $_SESSION['usuario']; ?>

        <?php else: ?>
            <a href="../Iniciar_sesion.php" class="btn login">Iniciar sesión</a>
            <a href="../Registro.php" class="btn register">Registrarse</a>
        <?php endif; ?>
    </div>
</header>

<section class="game-top">

    <div class="game-top-left">
        <img src="../Imagenes/minecraft/logo.jpg" alt="Minecraft">
    </div>

    <div class="game-top-right">
        <strong>Descubre el mundo de Minecraft</strong>
        <p>
           Crea todo lo que puedas imaginar, descubre misterios espeluznantes y sobrevive a la noche en el juego de aventura tipo sandbox definitivo. En Minecraft, cada partida es diferente y 
           te esperan aventuras inolvidables a la vuelta de la esquina. Explora y crea tu camino a un mundo infinito al que le puedes dar forma bloque a bloque.
        </p>

        <form method="POST">
            <button type="submit" name="mostrar_precio" class="btn-orange">Comprar ahora</button>
        </form>

        <?php if (isset($_POST['mostrar_precio'])): ?>
        <div class="precio-box">
            <img src="../Imagenes/minecraft/1.jpg" class="compra-img">
            <h2>Minecraft – Edición Deluxe</h2>

            <div class="precio-info">
                <p class="precio-original">29,99 €</p>
            </div>

            <p class="precio-nota">
                Pueden aplicarse impuestos aplicables.<br>
                Este título incluye compras opcionales en el juego.
            </p>

            <button class="btn-comprar-final">Comprar en Minecraft.net</button>
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
        <source src="../Imagenes/minecraft/1.mp4" type="video/mp4">
    </video>
</section>

<!-- ============================
VIDEO 2
============================ -->
<section class="game-video-section">
    <h2>Gameplay oficial</h2>

    <video autoplay loop muted playsinline class="game-video" controls>
        <source src="../Imagenes/minecraft/1.mp4" type="video/mp4">
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
                <img src="../Imagenes/minecraft/1.jpg">
                <p class="img-desc">Explora mundos infinitos.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/minecraft/2.jpg">
                <p class="img-desc">Construye lo que imagines.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/minecraft/3.jpg">
                <p class="img-desc">Sobrevive a la noche.</p>
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/minecraft/4.jpg">
                <p class="img-desc">Juega con amigos.</p>
            </div>

              <div class="carousel-item">
                <img src="../Imagenes/minecraft/5.jpg">
                <p class="img-desc">Juega con amigos.</p>
            </div>

              <div class="carousel-item">
                <img src="../Imagenes/minecraft/6.jpg">
                <p class="img-desc">Juega con amigos.</p>
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

                <a href="https://www.instagram.com/joystickdrawer/" target="_blank">
                    <img src="../Imagenes/icons/instagram.png" alt="Instagram">
                </a>

                <a href="https://www.tiktok.com/@joystickdrawer" target="_blank">
                    <img src="../Imagenes/icons/tiktok.png" alt="TikTok">
                </a>

                <a href="https://www.linkedin.com/feed/" target="_blank">
                    <img src="../Imagenes/icons/linkedin.png" alt="LinkedIn">
                </a>

                <a href="https://www.twitch.tv/" target="_blank">
                    <img src="../Imagenes/icons/twitch.png" alt="Twitch">
                </a>

                <a href="https://www.youtube.com/" target="_blank">
                    <img src="../Imagenes/icons/youtube.png" alt="YouTube">
                </a>

                <a href="" target="_blank">
                    <img src="../Imagenes/icons/facebook.png" alt="Facebook">
                </a>

                <a href="https://x.com/JoyStickDrawer" target="_blank">
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
