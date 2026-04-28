<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Counter‑Strike 2 - Información del juego</title>
    <link rel="stylesheet" href="../Style/style.css">
    <link rel="stylesheet" href="../Style/cs2.css">
</head>

<body class="cs2-page">

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
        <img src="../Imagenes/cs2/1.png" alt="CS2">
    </div>

    <div class="game-top-right">
        <h1>Counter‑Strike 2</h1>
        <p>
            Counter‑Strike 2 lleva el clásico shooter táctico al siguiente nivel con un motor renovado,
            físicas mejoradas, mapas rediseñados, humo dinámico y una jugabilidad más precisa que nunca.
            Domina cada ronda con estrategia, reflejos y trabajo en equipo.
        </p>

        <form method="POST">
            <button type="submit" name="mostrar_precio" class="btn-orange">Comprar ahora</button>
        </form>

        <?php if (isset($_POST['mostrar_precio'])) { ?>
        <div class="precio-box">
            <img src="../Imagenes/cs2/5.jpg" class="compra-img">
            <h2>Counter‑Strike 2 — Edición Competitiva</h2>

            <div class="precio-info">
                <p class="precio-original">29,99 €</p>
            </div>

            <p class="precio-nota">
                Pueden aplicarse impuestos aplicables.<br>
                Este título incluye compras opcionales en el juego.
            </p>

            <button class="btn-comprar-final">Comprar en Steam</button>
        </div>
        <?php } ?>
    </div>
</section>

<!-- ========================= -->
<!-- VIDEO 1 -->
<section class="game-video-section">
    <h2>Tráiler oficial</h2>
    <video autoplay loop muted playsinline class="game-video" controls>
        <source src="../Imagenes/cs2/1.mp4" type="video/mp4">
    </video>
</section>

<!-- ========================= -->
<!-- VIDEO 2 -->
<section class="game-video-section">
    <h2>Gameplay oficial</h2>
    <video autoplay loop muted playsinline class="game-video small" controls>
        <source src="../Imagenes/cs2/2.mp4" type="video/mp4">
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
