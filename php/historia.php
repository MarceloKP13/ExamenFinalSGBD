<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../anexos/imagenes/historia.png">
    <title>Historia de PHP</title>
    <link rel="stylesheet" href="../anexos/css/historia.css">
    <link rel="stylesheet" href="../anexos/css/header_footer.css">
</head>
<body>
<header class="header">
        <h1>PHP - Examen Final</h1>
        <div class="menu-toggle">☰</div>
        <nav>
            <ul class="nav-links">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../php/historia.php">Historia</a></li>
                <li><a href="../php/conceptos.php">Conceptos</a></li>
                <li><a href="../php/practicas.php">Prácticas</a></li>
                <li><a href="../php/basededatos.php">Base de Datos</a></li>
                <li><a href="../php/contacto.php">Contacto</a></li>
                <li>
                    <?php if (isset($_SESSION['usuario'])): ?>
                        <a href=""><?php echo $_SESSION['usuario']; ?></a>
                        <a href="">|</a>
                        <a href="auth/salir.php" class="logout">Cerrar Sesión</a>
                    <?php else: ?>
                        <a href="iniciarsesion.php">Iniciar Sesión</a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </header>
    <main class="historia-container">
        <h1>Historia de PHP</h1>
        <section class="historia-content">
            <img src="../anexos/imagenes/conceptos.png" alt="Logo de PHP" class="logo">
            <p>
                PHP (Hypertext Preprocessor) es un lenguaje de programación diseñado para el desarrollo web. Fue creado en 1994 por Rasmus Lerdorf como un conjunto de scripts CGI en Perl para rastrear visitas en su página web personal. Más tarde, lo reescribió en C y lo amplió para manejar formularios web y bases de datos, naciendo así PHP/FI (Personal Home Page / Forms Interpreter).
            </p>
            <p>
                Con el tiempo, PHP evolucionó significativamente, convirtiéndose en un lenguaje con un motor propio, PHP 3 en 1998, y luego PHP 4 en el año 2000, con un núcleo más robusto llamado Zend Engine. Actualmente, PHP sigue siendo uno de los lenguajes más utilizados para desarrollo web, especialmente en sistemas dinámicos y aplicaciones basadas en bases de datos.
            </p>
        </section>
        <section class="versiones">
            <h2>Versiones Importantes</h2>
            <ul>
                <li><strong>PHP 3 (1998):</strong> Introducción del procesamiento de formularios y la comunicación con bases de datos.</li>
                <li><strong>PHP 4 (2000):</strong> Uso del Zend Engine 1.0, mejor rendimiento y orientación a objetos básica.</li>
                <li><strong>PHP 5 (2004):</strong> Mejoras en orientación a objetos y soporte para XML.</li>
                <li><strong>PHP 7 (2015):</strong> Aumento significativo en el rendimiento y menor consumo de memoria.</li>
                <li><strong>PHP 8 (2020):</strong> Nueva compilación JIT (Just-In-Time) y mejoras en la sintaxis.</li>
            </ul>
        </section>
        <div class="video-container">
            <h2> Aprende más sobre PHP</h2>
        </div>
        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ykGRYEX0n60" frameborder="0" allowfullscreen> </iframe>
            <p>Puedes ver el video directamente en <a href="https://www.youtube.com/watch?v=ykGRYEX0n60" target="_blank">YouTube</a>.</p>
        </div>
    </main>
        
        <footer class="footer">
        <div class="footer-content">
            <p>© Derechos reservados</p>
            <p>Desarrollado por Marcelo Torres</p>
            <p>Contacto: kevin.torres85@outlook.es | +593 968403024</p>
            <div class="social-links">
                <a href="https://wa.me/593968403024" target="_blank"><img src="../anexos/imagenes/whatsapp.png" alt="WhatsApp"></a>
                <a href="https://github.com/MarceloKP13" target="_blank"><img src="../anexos/imagenes/github.png" alt="GitHub"></a>
                <a href="https://instagram.com/marce_kp13" target="_blank"><img src="../anexos/imagenes/instagram.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>
    <script src="../anexos/js/script.js"></script>
</body>
</html>