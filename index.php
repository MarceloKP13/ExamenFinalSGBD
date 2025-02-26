<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="anexos/imagenes/iconophp.png">
    <title>PHP - Examen Final</title>
    <link rel="stylesheet" href="anexos/css/estilosindex.css">
    <link rel="stylesheet" href="anexos/css/header_footer.css">
</head>
<body>
    <header class="header">
        <h1>PHP - Examen Final</h1>
        <div class="menu-toggle">☰</div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="php/historia.php">Historia</a></li>
                <li><a href="php/conceptos.php">Conceptos</a></li>
                <li><a href="php/practicas.php">Prácticas</a></li>
                <li><a href="php/basededatos.php">Base de Datos</a></li>
                <li><a href="php/recursos.php">Recursos</a></li>
                <li><a href="php/contacto.php">Contacto</a></li>
                <li>
                    <?php if (isset($_SESSION['usuario'])):?>
                        <a href=""><?php echo $_SESSION['usuario'];?></a>
                        <a href="">|</a>
                        <a href="php/auth/salir.php" class = "logout">Cerrar Sesión</a>
                        <?php else:?>
                            <a href="php/iniciarsesion.php">Iniciar Sesión</a>
                            <?php endif; ?>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="intro">
            <h2>Bienvenida a la Guía de PHP</h2>
            <p>Aquí aprenderás sobre PHP, sus características, conceptos fundamentales y su integración con bases de datos.</p>
        </section>

        <section class="cards">
            <div class="card">
                <img src="anexos/imagenes/inicio.png" alt="Inicio">
                <h3>Inicio</h3>
                <p>Introducción general a PHP y su importancia.</p>
                <a href="index.php" class="btn">Ver Más</a>
            </div>

            <div class="card">
                <img src="anexos/imagenes/historia.png" alt="Historia">
                <h3>Historia</h3>
                <p>Introducción general a PHP y su importancia.</p>
                <a href="php/historia.php" class="btn">Ver Más</a>
            </div>
            <div class="card">
                <img src="anexos/imagenes/conceptos.png" alt="Conceptos">
                <h3>Conceptos</h3>
                <p>Principales fundamentos y sintaxis de PHP.</p>
                <a href="php/conceptos.php" class="btn">Ver más</a>
            </div>
            <div class="card">
                <img src="anexos/imagenes/practicas.png" alt="Prácticas">
                <h3>Prácticas</h3>
                <p>Ejercicios y ejemplos prácticos en PHP.</p>
                <a href="php/practicas.php" class="btn">Ver más</a>
            </div>
            <div class="card">
                <img src="anexos/imagenes/basededatos.png" alt="Base de Datos">
                <h3>Base de Datos</h3>
                <p>Conexión de PHP con MySQL y otras bases de datos.</p>
                <a href="php/basededatos.php" class="btn">Ver más</a>
            </div>
            <div class="card">
                <img src="anexos/imagenes/recursos.png" alt="Recursos">
                <h3>Recursos</h3>
                <p>Bibliotecas y herramientas útiles para PHP.</p>
                <a href="php/recursos.php" class="btn">Ver más</a>
            </div>
            <div class="card">
                <img src="anexos/imagenes/contacto.png" alt="Contacto">
                <h3>Contacto</h3>
                <p>Información para comunicarte con nosotros.</p>
                <a href="php/contacto.php" class="btn">Ver más</a>
            </div>
            <div class="card">
                <img src="anexos/imagenes/iniciarsesion.png" alt="Iniciar Sesión">
                <h3>Iniciar Sesión</h3>
                <p>Accede a tu cuenta para más funciones.</p>
                <a href="php/iniciarsesion.php" class="btn">Ver más</a>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-content">
            <p>© Derechos reservados</p>
            <p>Desarrollado por Marcelo Torres</p>
            <p>kevin.torres85@outlook.es | +593 968403024</p>
            <div class="social-links">
                <a href="https://wa.me/593968403024" target="_blank"><img src="anexos/imagenes/whatsapp.png" alt="Whatsapp"></a>
                <a href="https://github.com/MarceloKP13" target="_blank"><img src="anexos/imagenes/github.png" alt="GitHub"></a>
                <a href="https://instagram.com/marce_kp13" target="_blank"><img src="anexos/imagenes/instagram.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>

    <script src="anexos/js/script.js"></script>
    
</body>
</html>