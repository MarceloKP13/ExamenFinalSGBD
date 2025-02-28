<?php
session_start(); // Solo esta llamada al principio es necesaria.
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../anexos/imagenes/practicas.png">
    <title>Prácticas Interactivas</title>
    <link rel="stylesheet" href="../anexos/css/practicas.css">
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

    <main>
    <section>
    <h2>1. Hola Mundo Interactivo</h2>
    <form method="POST">
        <label for="codigo">Completa el código para mostrar "Hola Mundo":</label>
        <p>Ejemplo 1: <code>echo 'Hola Mundo';</code></p>
        <p>Ejemplo 2: <code>print 'Hola Mundo';</code></p>
        <p>Ejemplo 3: <code>printf('Hola Mundo');</code></p>
        <input type="text" name="codigo" id="codigo" placeholder="Escribe tu código aquí">
        <button type="submit">Ejecutar</button>
    </form>
    <div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['codigo'])) {
            $codigo = trim($_POST['codigo']);
            // Verifica si el código es correcto en alguna de las formas
            if ($codigo === "echo 'Hola Mundo';" || $codigo === "print 'Hola Mundo';" || $codigo === "printf('Hola Mundo');") {
                echo "<p>¡Correcto! Resultado: Hola Mundo</p>";
            } else {
                echo "<p>Error, inténtalo de nuevo. Usa ejemplos como:<br><code>echo 'Hola Mundo';</code>, <code>print 'Hola Mundo';</code>, o <code>printf('Hola Mundo');</code></p>";
            }
        }
        ?>
    </div>
</section>
        
<section>
    <h2>2. Calculadora PHP</h2>
    <div class="resultado">
        <input type="text" id="resultado" disabled>
    </div>
    <form method="POST">
        <div class="teclado">
            <button type="button" class="boton" onclick="agregarNumero('7')">7</button>
            <button type="button" class="boton" onclick="agregarNumero('8')">8</button>
            <button type="button" class="boton" onclick="agregarNumero('9')">9</button>
            <button type="button" class="boton" onclick="agregarOperacion('/')">÷</button>

            <button type="button" class="boton" onclick="agregarNumero('4')">4</button>
            <button type="button" class="boton" onclick="agregarNumero('5')">5</button>
            <button type="button" class="boton" onclick="agregarNumero('6')">6</button>
            <button type="button" class="boton" onclick="agregarOperacion('*')">x</button>

            <button type="button" class="boton" onclick="agregarNumero('1')">1</button>
            <button type="button" class="boton" onclick="agregarNumero('2')">2</button>
            <button type="button" class="boton" onclick="agregarNumero('3')">3</button>
            <button type="button" class="boton" onclick="agregarOperacion('-')">-</button>

            <button type="button" class="boton" onclick="agregarNumero('0')">0</button>
            <button type="button" class="boton" onclick="agregarPunto()">.</button>
            <button type="button" class="boton boton-igual" onclick="calcular()">=</button>
            <button type="button" class="boton" onclick="agregarOperacion('+')">+</button>

            <button type="button" class="boton boton-ac" onclick="limpiar()">AC</button>
        </div>
    </form>

    <div>
        <?php
        if (isset($_POST['num1'], $_POST['num2'], $_POST['operacion'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacion = $_POST['operacion'];
            $resultado = eval("return \$num1 $operacion \$num2;");
            echo "<p>Resultado: $resultado</p>";
        }
        ?>
    </div>
</section>        
<section>
    <h2>3. Adivina el Número</h2>
    <p>¡Adivina un número entre 1 y 50!</p>

    <?php
    // Si el número no ha sido generado aún, lo generamos aleatoriamente entre 1 y 50
    if (!isset($_SESSION['numero'])) {
        $_SESSION['numero'] = rand(1, 50);
    }
    ?>

    <form method="POST">
        <label for="adivinanza" style="font-size: 18px;">Selecciona un número:</label>
        <input 
            type="range" 
            name="adivinanza" 
            id="adivinanza" 
            min="1" 
            max="50" 
            value="25" 
            step="1" 
            required>
        
        <div style="text-align: center; margin-top: 10px;">
            <span id="valorRange" style="font-size: 24px;">25</span>
        </div>

        <button type="submit">Adivinar</button>
    </form>

    <div style="margin-top: 20px; font-size: 20px; font-weight: bold;">
        <?php
        // Comprobar si el formulario ha sido enviado y si el valor de la adivinanza está presente
        if (isset($_POST['adivinanza'])) {
            $adivinanza = $_POST['adivinanza'];
            
            // Comparar el número adivinado con el número generado
            if ($adivinanza < $_SESSION['numero']) {
                echo "El número es mayor.";
            } elseif ($adivinanza > $_SESSION['numero']) {
                echo "El número es menor.";
            } else {
                echo "¡Felicidades, adivinaste el número!";
                unset($_SESSION['numero']); // Eliminar el número para que se genere uno nuevo
            }
        }
        ?>
    </div>
</section>

<script>
// Script para actualizar el valor mostrado del rango
const rangeInput = document.getElementById("adivinanza");
const valueSpan = document.getElementById("valorRange");

rangeInput.addEventListener("input", function() {
    valueSpan.textContent = rangeInput.value;
});
</script>

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
