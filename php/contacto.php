<?php
session_start();
include __DIR__ . '/auth_com/conexion_com.php';

if (!$conexion) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

$comentarios = "SELECT * FROM comentarios ORDER BY fecha DESC";
$result = mysqli_query($conexion, $comentarios);

if (!$result) {
    die("Error en la consulta: " . mysqli_error($conexion));
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../anexos/imagenes/contacto.png">
    <title>Contactos</title>
    <link rel="stylesheet" href="../anexos/css/contacto.css">
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
                        <a href=""><?php echo $_SESSION['usuario']; ?> | </a>
                        <a href="auth/salir.php" class="logout">Cerrar Sesión</a>
                    <?php else: ?>
                        <a href="iniciarsesion.php">Iniciar Sesión</a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </header>

    <section class="contactos-container">
        <h2>Contactos</h2>
        <div class="tarjeta">
            <div class="imagen">
                <img src="../anexos/imagenes/marce.jpg" alt="Foto de empleado">
            </div>
            <div class="informacion">
                <p style="font-size: 22px;" ><strong>DISEÑADOR WEB</strong></p>
                <p><strong>Nombre:</strong> Kevin Marcelo Torres Pinza.</p>
                <p><strong>Diseñador:</strong> Estudiante de Desarrollo de Software.</p>
                <p><strong>Correo:</strong> <span class="correo" onclick="copyToClipboard(this)">kevin.torres85@outlook.es</span></p>
                <p><strong>Celular:</strong> <span class="telefono" onclick="copyToClipboard(this)">+593 96 8403 024</span></p>
            </div>
            <div class="redes">
                <p>Visita sus redes</p>
                <a href="https://www.facebook.com/MarceloKP13" target="_blank"><img src="../anexos/imagenes/facebook.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/marce_kp13/" target="_blank"><img src="../anexos/imagenes/instagram.png" alt="Instagram"></a>
                <a href="https://www.tiktok.com/@marcelokp13" target="_blank"><img src="../anexos/imagenes/tiktok.png" alt="Tik Tok"></a>
                <a href="https://github.com/MarceloKP13" target="_blank"><img src="../anexos/imagenes/github2.png" alt="Git Hub"></a>
                <a href="https://wa.me/+593968403024" target="_blank"><img src="../anexos/imagenes/whatsapp2.png" alt="WhatsApp"></a>
            </div>
        </div>

        <button class="comentarios-btn" onclick="toggleComentariosForm()">Deja tu comentario</button>

        <div id="comentarios-form" style="display:none;">
    <h3>Deja tu comentario</h3>
    <form action="auth_com/save_com.php" method="POST">
        <textarea name="comentario" rows="4" placeholder="Escribe tu comentario aquí..." required></textarea><br>
        
        <label>
            <input type="checkbox" name="usuario_registrado" id="usuario_registrado" <?php if (isset($_SESSION['usuario'])) echo "checked"; ?>>
            Usar mis datos registrados
        </label><br>
        
        <div id="usuario-datos" style="display: none;">
            <input type="hidden" name="nombre" value="<?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Anónimo'; ?>">
            <p><strong>Nombre:</strong> <?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Anónimo'; ?></p>
        </div>

        <button type="submit">Enviar comentario</button>
    </form>
</div>

<script>
    // Mostrar/ocultar datos del usuario según el checkbox
    document.getElementById("usuario_registrado").addEventListener('change', function() {
        var usuarioDatos = document.getElementById("usuario-datos");
        if (this.checked) {
            usuarioDatos.style.display = "block";
            document.querySelector('input[name="nombre"]').value = "<?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : ''; ?>";
        } else {
            usuarioDatos.style.display = "none";
            document.querySelector('input[name="nombre"]').value = "Anónimo";
        }
    });

    // Inicializar el estado según si el usuario está registrado
    if (document.getElementById("usuario_registrado").checked) {
        document.getElementById("usuario-datos").style.display = "block";
    }
</script>

        <div id="comentarios">
            <?php
            while ($comentario = mysqli_fetch_assoc($result)) {
                echo "<div class='comentario'>";
                echo "<p><strong>" . ($comentario['nombre'] ?: 'Anónimo') . ":</strong> " . $comentario['comentario'] . "</p>";
                echo "<p><em>" . $comentario['fecha'] . "</em></p>";
                echo "</div>";
            }
            ?>
        </div>
    </section>

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

    <script>
        function toggleComentariosForm() {
            var form = document.getElementById("comentarios-form");
            form.style.display = (form.style.display === "none" || form.style.display === "") ? "block" : "none";
        }
    </script>

</body>
</html>