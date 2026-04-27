<?php
$games = [
    [
        'name' => 'EA SPORTS FC 26',
        'image' => "Imagenes/fifa26.jpg",
        'url'   => 'juegos/fc26.php'
    ],
    [
        'name' => 'Minecraft',
        'image' => "Imagenes/minecraft.jpg",
        'url'   => 'juegos/minecraft.php'
    ],
    [
        'name' => 'Fortnite',
        'image' => "Imagenes/fortnite_logo.jpg",
        'url'   => 'juegos/fortnite.php'
    ],
    [
        'name' => 'MotoGP',
        'image' => "Imagenes/motogp.jpg",
        'url'   => 'juegos/motogp.php'
    ],
    [
        'name' => 'Formula 1',
        'image' => "Imagenes/formula1.png",
        'url'   => 'juegos/f1.php'
    ],
    [
        'name' => 'GTA V',
        'image' => "Imagenes/gtav.png",
        'url'   => 'juegos/gtav.php'
    ],
    [
        'name' => 'Rainbow 6 Siege',
        'image' => "Imagenes/rainbow6siege.png",
        'url'   => 'juegos/r6s.php'
    ],
    [
        'name' => 'CS 2',
        'image' => "Imagenes/cs2.jpg",
        'url'   => 'juegos/cs2.php'
    ],
    [
        'name' => 'League of Legends',
        'image' => "Imagenes/leagueoflegends.jpg",
        'url'   => 'juegos/lol.php'
    ]
];
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda Gaming</title>
    <link rel="stylesheet" href="Style/style.css?v=2">
</head>
<body>

<header>
    <div class="logo">
        <img src="Imagenes/logo.PNG" alt="Logo">
        <h1>JOYSTICKDRAWER</h1>

    </div>

    <div class="nav-buttons">
        <a href="Iniciar_sesion.php" class="btn login">Iniciar sesión</a>
        <a href="Registro.php" class="btn register">Registrarse</a>
    </div>
</header>

<section class="search-section">
    <input type="text" placeholder="Buscar videojuegos...">
    <button>Buscar</button>
</section>

<section class="games">
    <h2>Videojuegos disponibles</h2>

    <div class="game-container">
        <?php foreach($games as $game): ?>
            <div class="game-card">
                <img src="<?php echo $game['image']; ?>" alt="">
                <h3><?php echo $game['name']; ?></h3>

                <button onclick="window.location.href='<?php echo $game['url']; ?>'">
                    Ver más
                </button>

            </div>
        <?php endforeach; ?>
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
                    <img src="Imagenes/icons/instagram.png" alt="Instagram">
                </a>

                <a href="" target="_blank">
                    <img src="Imagenes/icons/tiktok.png" alt="TikTok">
                </a>

                <a href="" target="_blank">
                    <img src="Imagenes/icons/linkedin.png" alt="LinkedIn">
                </a>

                <a href="" target="_blank">
                    <img src="Imagenes/icons/twitch.png" alt="Twitch">
                </a>

                <a href="" target="_blank">
                    <img src="Imagenes/icons/youtube.png" alt="YouTube">
                </a>

                <a href="" target="_blank">
                    <img src="Imagenes/icons/facebook.png" alt="Facebook">
                </a>

                <a href="" target="_blank">
                    <img src="Imagenes/icons/x.png" alt="X">
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