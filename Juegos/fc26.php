<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EA SPORTS FC 26 - Información del juego</title>
    <link rel="stylesheet" href="../Style/fc26.css">
</head>

<body class="fc26-page">
 


<header>
    <a href="../Pagina_principal.php" class="logo">
        <img src="../Imagenes/logo.PNG" alt="Logo">
        <h1>JOYSTICKDRAWER</h1>
    </a>

    <div class="nav-buttons">
        <a href="../Iniciar_sesion.php" class="btn login">Iniciar sesión</a>
        <a href="../Registro.php" class="btn register">Registrarse</a>
    </div>
</header>


<!-- ============================
     SECCIÓN 1: IMAGEN + INFO
     ============================ -->
<section class="game-top">
    
    <div class="game-top-left">
        <img src="../Imagenes/fc26/1.jpg" alt="FC 26">
    </div>

    <div class="game-top-right">
        <h1>EA SPORTS FC™ 26</h1>
        <p>
            EA SPORTS FC™ 26 ofrece una jugabilidad renovada impulsada por los comentarios de la comunidad,
            animaciones más realistas, porteros mejorados, nuevos estilos de juego y una IA más inteligente.
            Vive la experiencia futbolística más completa hasta la fecha.
        </p>
    <form method="POST">
        <button type="submit" name="mostrar_precio" class="btn-orange">Comprar ahora</button>
    </form>
    <?php if (isset($_POST['mostrar_precio'])): ?>

        <div class="precio-box">
            <img src="../Imagenes/fc26/7.avif" class="compra-img">
            <h2>EA SPORTS FC™ 26 – Ultimate Edition</h2>
            <div class="precio-info">
                <p class="precio-original">89,99 €</p>
            </div>
            <p class="precio-nota">
                Pueden aplicarse impuestos aplicables.<br>
                Este título incluye compras opcionales en el juego.
            </p>
            <button class="btn-comprar-final">Comprar en EA App</button>
        </div>

    <?php endif; ?>

        

        
    


        <div id="precio-juego" class="precio-box" style="display: none;">

    <h2>EA SPORTS FC™ 26 - Ultimate Edition</h2>

    <div class="precio-info">
        <p class="precio-actual">22,49 €</p>
        <p class="precio-descuento">-75%</p>
        <p class="precio-original">89,99 €</p>
    </div>

    <p class="precio-nota">
        Pueden aplicarse impuestos aplicables.  
        Este título incluye compras opcionales en el juego.
    </p>

    <button class="btn-comprar-final">Comprar en EA App</button>

    </div>

    </div>

</section>

<!-- ============================
     SECCIÓN 2: VIDEO + INFO
     ============================ -->
<section class="game-video-section">

    <h2>Tráiler oficial</h2>

    <video autoplay loop muted playsinline class="game-video">
        <source src="../Imagenes/fc26/vd1.mp4" type="video/mp4">
    </video>
    
    <p class="video-description">
      Juega a tu manera en EA SPORTS FC™ 26 con regates más ágiles, una posición más inteligente de la IA y movimientos más nítidos y explosivos, todo basado en los comentarios de la comunidad. 
      Los guardametas ahora reaccionan de manera más natural con una posición mejorada, las animaciones son más realistas, y los nuevos estilos de juego y roles de jugadores te ofrecen más formas de definir cómo juega tu equipo.
    </p>

    </section>

    <!-- ============================
         SECCIÓN 3: GALERÍA
         ============================ -->

    <section class="game-gallery">
    <h2>Imágenes del juego</h2>

    <div class="carousel-container">

        <div class="carousel-track">

            <div class="carousel-item">
                <img src="../Imagenes/fc26/1.ico" alt="">
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/fc26/2.jpg" alt="">
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/fc26/3.jpg" alt="">
            </div>

            <div class="carousel-item">
                <img src="../Imagenes/fc26/4.jpg" alt="">
            </div>
             <div class="carousel-item">
                <img src="../Imagenes/fc26/5.jpg" alt="">
            </div>

        </div>

    </div>

</section>

    </section>

    <video autoplay loop muted playsinline class="game-video">
        <source src="../Imagenes/fc26/11.mp4" type="video/mp4">
    </video>
    <p class="video-description">El Club es tuyo. Juega ya a EA SPORTS FC™ 26, con una jugabilidad renovada gracias a 
        los comentarios de la comunidad, desafíos de Mánager en vivo que traen escenarios frescos 
        a la nueva temporada y arquetipos inspirados en Grandes del deporte.</p>

   


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
