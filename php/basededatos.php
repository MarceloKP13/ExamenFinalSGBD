<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../anexos/imagenes/basededatos.png">
    <title>Base de Datos de PHP</title>
    <link rel="stylesheet" href="../anexos/css/basededatos.css">
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

    <main class="main-content">
    <section class="intro">
        <h2>¿Qué es una Base de Datos?</h2>
        <p>Una base de datos es un conjunto de datos organizados de manera que se puedan consultar, actualizar y gestionar de manera eficiente. Las bases de datos son fundamentales para almacenar información en diversas aplicaciones como sistemas bancarios, redes sociales, tiendas en línea y mucho más.</p>
        <div class="basededatos-content">
            <!-- Video de YouTube -->
             <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ZS_kXvOeQ5Y" frameborder="0" allowfullscreen> </iframe>
            <p>Puedes ver el video directamente en <a href="https://www.youtube.com/watch?v=ZS_kXvOeQ5Y" target="_blank">YouTube</a>.</p>
        </div>

        <section class="tipos-bd">
        <h2>Tipos de Bases de Datos</h2>
        <p>Existen dos tipos principales de bases de datos: Relacionales y No Relacionales.</p>
        <ul>
            <li><strong>Relacionales (SQL):</strong> Usan tablas para almacenar datos. Ejemplos: MySQL, PostgreSQL.</li>
            <li><strong>No Relacionales (NoSQL):</strong> Utilizan otros métodos de almacenamiento, como documentos o pares clave-valor. Ejemplos: MongoDB, Firebase.</li>
        </ul>
        <img src="../anexos/imagenes/tiposdb.png" alt="Tipos de Bases de Datos">
    </section>

    <section class="comandos-sql">
        <h2>Comandos SQL Comunes</h2>
        <p>Los comandos SQL se utilizan para interactuar con una base de datos. Aquí tienes algunos de los más comunes:</p>
        <div class="sql-commands">
            <ul>
                <li><code>SELECT * FROM tabla;</code> - Consulta todos los registros de una tabla.</li>
                <li><code>INSERT INTO tabla (columna1, columna2) VALUES (valor1, valor2);</code> - Inserta nuevos registros.</li>
                <li><code>UPDATE tabla SET columna1 = valor1 WHERE columna2 = valor2;</code> - Actualiza registros existentes.</li>
                <li><code>DELETE FROM tabla WHERE columna = valor;</code> - Elimina registros específicos.</li>
            </ul>
        </div>
    </section>

    <section class="tabla-ejemplo">
        <h2>Ejemplo de Tabla SQL</h2>
        <p>A continuación se muestra un ejemplo de cómo se estructura una tabla en una base de datos SQL:</p>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ana Pérez</td>
                    <td>28</td>
                    <td>ana.perez@email.com</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Juan Gómez</td>
                    <td>34</td>
                    <td>juan.gomez@email.com</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Lucía Ramírez</td>
                    <td>25</td>
                    <td>lucia.ramirez@email.com</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="diagrama-er">
    <h2>Diagrama de Entidad-Relación</h2>
    <p>Un diagrama entidad-relación (ER) es una representación visual de las relaciones entre las tablas de una base de datos. A continuación se muestra un ejemplo básico de un diagrama ER.</p>
    
    <!-- Imagen sin lightbox -->
    <div class="diagrama-er-img-container">
        <img src="../anexos/imagenes/diagrama-er.png" class="basededatos-content-img" alt="DiagramaER">
    </div>
</section>

    <section class="comparacion-sql-nosql">
        <h2>Comparación entre SQL y NoSQL</h2>
        <table>
            <thead>
                <tr>
                    <th>Características</th>
                    <th>SQL</th>
                    <th>NoSQL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Estructura</td>
                    <td>Tablas con filas y columnas</td>
                    <td>Varía (documentos, clave-valor, grafos, etc.)</td>
                </tr>
                <tr>
                    <td>Escalabilidad</td>
                    <td>Vertical (mejorar el servidor)</td>
                    <td>Horizontal (agregar más servidores)</td>
                </tr>
                <tr>
                    <td>Consistencia</td>
                    <td>ACID (Atomicidad, Consistencia, Aislamiento, Durabilidad)</td>
                    <td>CAP (Consistencia, Disponibilidad, Tolerancia a particiones)</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="practicas-seguridad">
        <h2>Prácticas de Seguridad en Bases de Datos</h2>
        <p>La seguridad de las bases de datos es crucial. Aquí algunas prácticas recomendadas:</p>
        <ul>
            <li>Usar contraseñas seguras y encriptación.</li>
            <li>Aplicar control de acceso basado en roles.</li>
            <li>Realizar copias de seguridad regularmente.</li>
            <li>Monitorear las conexiones a la base de datos para detectar actividades sospechosas.</li>
        </ul>
    </section>

    <section class="recursos-adicionales">
        <h2>Recursos Adicionales</h2>
        <ul>
            <li><a href="https://www.mysql.com/" target = "_blank">Documentación de MySQL</a></li>
            <li><a href="https://www.postgresql.org/" target = "_blank">Documentación de PostgreSQL</a></li>
            <li><a href="https://www.mongodb.com/" target = "_blank">MongoDB</a></li>
        </ul>
    </section>
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
