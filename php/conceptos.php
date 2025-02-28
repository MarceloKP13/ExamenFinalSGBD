<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../anexos/imagenes/conceptos.png">
    <title>Conceptos de PHP</title>
    <link rel="stylesheet" href="../anexos/css/conceptos.css">
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
        <div class="main-content">
            <!-- Selector para elegir el concepto a mostrar -->
            <label for="conceptos">Selecciona un concepto de PHP:</label>
            <select id="conceptos" onchange="mostrarContenido()">
                <option value="0"disabled selected>Selecciona un concepto</option>
                <option value="1">1. Introducción a PHP</option>
                <option value="2">2. Sintaxis Básica de PHP</option>
                <option value="3">3. Estructuras de Control en PHP</option>
                <option value="4">4. Funciones en PHP</option>
                <option value="5">5. Arrays en PHP</option>
                <option value="6">6. Buenas Prácticas y Seguridad en PHP</option>
                <option value="7">7. Resumen Visual y Práctico</option>
            </select>
            <div id="contenido">
                <!-- Aquí se cargará el contenido dependiendo de la opción seleccionada -->
            </div>
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
    <script>
        function mostrarContenido() {
            var contenido = document.getElementById("contenido");
            var opcion = document.getElementById("conceptos").value;
            
            // Limpiar contenido actual
            contenido.innerHTML = '';

            if (opcion == '1') {
                contenido.innerHTML = `
                <h2>Introducción a PHP</h2>
                <p>PHP es un lenguaje de programación utilizado principalmente en desarrollo web para crear páginas dinámicas. Se usa para generar contenido dinámico, interactuar con bases de datos, procesar formularios y mucho más.</p>
                <img src="../anexos/imagenes/code1.png" alt="Introducción a PHP" class="img-responsive">
                <p>PHP se ejecuta en el servidor, lo que significa que el código PHP se procesa antes de ser enviado al navegador. Esto permite la creación de páginas web más interactivas y dinámicas, como foros, tiendas en línea y sistemas de gestión de contenido.</p>
                <div class="card">
                <h3>¿Por qué elegir PHP?</h3>
                <ul>
                <li>Es fácil de aprender.</li>
                <li>Es ampliamente utilizado y soportado.</li>
                <li>Es compatible con casi todas las bases de datos.</li>
                <li>Es open-source y gratuito.</li>
                </ul>
                <p>PHP tiene una gran comunidad de desarrolladores que ayudan a mantener su crecimiento y mejoría constantes.</p>
                </div>
                <img src="../anexos/imagenes/code2.png" alt="Uso de PHP en desarrollo web" class="img-responsive">
                <p>Ejemplo básico de código PHP:</p>
                <div class="code-box">
                <pre>
                &lt;?php
                echo "¡Hola, Mundo!";
                ?&gt;
                </pre>
                </div>
                <p>Este sencillo script en PHP imprime el mensaje <strong>"¡Hola, Mundo!"</strong> en la página web.</p>
                <img src="../anexos/imagenes/code4.png" alt="Resultado de código PHP" class="img-responsive">
                <p>Ahora que sabes un poco más sobre PHP, puedes comenzar a explorar su sintaxis y características más profundas. A continuación, te mostraremos 
                cómo escribir y ejecutar código PHP en tus archivos.</p>
    
                `;
    
            } else if (opcion == '2') {
                contenido.innerHTML = `
                <h2 class="titulo">Sintaxis Básica de PHP</h2>
                <p class="descripcion">PHP es un lenguaje de programación del lado del servidor que permite crear contenido dinámico en las páginas web. Todo código PHP debe escribirse dentro de la estructura:</p>
                <div class="code-box">
                <pre>
                &lt;?php
                // Código PHP aquí
                ?&gt;
                </pre>
                </div> <p class="descripcion">Cuando guardamos un archivo con extensión <code>.php</code>, el servidor procesará el código PHP antes de enviarlo al navegador.</p><div class="card">
            <h3 class="card-title">Ejemplo básico: Mostrar un mensaje en pantalla</h3>
            <div class="code-box">
                <pre>
&lt;?php
    echo "¡Hola, Mundo!";
?&gt;
                </pre>
            </div>
            <p class="descripcion">Este código imprime "¡Hola, Mundo!" en la página web.</p>
        </div>

        <h3 class="subtitulo">Declaración de Variables</h3>
        <p class="descripcion">Las variables en PHP comienzan con el signo <code>$</code> y no requieren definir un tipo de dato específico.</p>
        
        <div class="grid-container">
            <div class="grid-item">
                <h4 class="card-title">Ejemplo de Variables</h4>
                <div class="code-box">
                    <pre>
&lt;?php
    $nombre = "Marcelo";
    $edad = 22;
    echo "Mi nombre es " . $nombre . " y tengo " . $edad . " años.";
?&gt;
                    </pre>
                </div>
            </div>
            <div class="grid-item">
                <h4 class="card-title">Salida esperada:</h4>
                <div class="output-box">
                    Mi nombre es Marcelo y tengo 23 años.
                </div>
            </div>
        </div>

        <h3 class="subtitulo">Comentarios en PHP</h3>
        <p class="descripcion">Los comentarios ayudan a documentar el código y pueden ser de una o varias líneas.</p>

        <table class="styled-table">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Sintaxis</th>
                    <th>Ejemplo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Comentario de una línea</td>
                    <td><code>// Comentario aquí</code></td>
                    <td>
                        <div class="code-box">
                            <pre>
// Esto es un comentario
echo "Hola";
                            </pre>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Comentario de varias líneas</td>
                    <td><code>/* Comentario */</code></td>
                    <td>
                        <div class="code-box">
                            <pre>
/* Esto es un comentario
   de varias líneas */
echo "Hola";
                            </pre>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <p class="descripcion">Ahora que conoces la sintaxis básica de PHP, puedes comenzar a crear scripts más avanzados.</p>
    `;
} else if (opcion == '3') {
    contenido.innerHTML = `
        <h2>Estructuras de Control en PHP</h2>
        <p>Las estructuras de control permiten modificar el flujo de ejecución del código. En PHP, existen varios tipos, tales como condicionales, bucles y estructuras de selección. A continuación, se presentan los principales condicionales con ejemplos:</p>
        
        <!-- Tabla de Condicionales -->
        <table>
            <tr>
                <th>Condicional</th>
                <th>Descripción</th>
                <th>Ejemplo</th>
            </tr>
            <tr>
                <td>if</td>
                <td>Evalúa una condición y ejecuta un bloque de código si se cumple.</td>
                <td><pre>if (\$x > 0) { echo "Positivo"; }</pre></td>
            </tr>
            <tr>
                <td>else</td>
                <td>Ejecuta un bloque de código si no se cumple la condición del <code>if</code>.</td>
                <td><pre>else { echo "Negativo"; }</pre></td>
            </tr>
            <tr>
                <td>else if</td>
                <td>Permite evaluar múltiples condiciones alternativas.</td>
                <td><pre>else if (\$x == 0) { echo "Cero"; }</pre></td>
            </tr>
            <tr>
                <td>switch</td>
                <td>Compara una variable con diferentes valores posibles.</td>
                <td><pre>switch (\$x) { case 1: echo "Uno"; break; }</pre></td>
            </tr>
        </table>

        <p>Además de los condicionales básicos, PHP ofrece otras estructuras como <code>switch</code> para realizar evaluaciones complejas de múltiples condiciones, y también permite combinar condicionales para hacer estructuras más complejas.</p>

        <!-- Condicionales Avanzados -->
        <h3>Condicionales Avanzados</h3>
        <p>PHP permite combinar condicionales y realizar comprobaciones más complejas:</p>
        
        <table>
            <tr>
                <th>Condicional</th>
                <th>Descripción</th>
                <th>Ejemplo</th>
            </tr>
            <tr>
                <td>if-else combinado</td>
                <td>Combina <code>if</code> y <code>else</code> para cubrir varios casos.</td>
                <td><pre>if (\$x > 0) { echo "Positivo"; } else { echo "No positivo"; }</pre></td>
            </tr>
            <tr>
                <td>if-else if-else</td>
                <td>Permite evaluar múltiples condiciones en secuencia.</td>
                <td><pre>if (\$x > 0) { echo "Positivo"; } else if (\$x == 0) { echo "Cero"; } else { echo "Negativo"; }</pre></td>
            </tr>
        </table>

        <p>Es importante tener en cuenta que las estructuras de control pueden ser anidadas para crear soluciones complejas a problemas más avanzados. El uso adecuado de <code>switch</code> y <code>if</code> garantiza un código claro y eficiente.</p>

        <!-- Ejemplo práctico con Switch -->
        <h3>Ejemplo práctico con Switch</h3>
        <p>El <code>switch</code> es ideal cuando tenemos que comparar una sola variable con varios valores posibles:</p>
        
        <div class="code-box">
            <pre>
$color = "rojo";
switch (\$color) {
    case "rojo":
        echo "Es el color rojo.";
        break;
    case "azul":
        echo "Es el color azul.";
        break;
    default:
        echo "Color desconocido.";
}
            </pre>
        </div>
        
        <h3>Anidación de Condicionales</h3>
        <p>A veces es necesario evaluar varias condiciones de forma jerárquica, para eso utilizamos la anidación de condicionales.</p>
        
        <div class="code-box">
            <pre>
if (\$x > 0) {
    if (\$x % 2 == 0) {
        echo "Es positivo y par";
    } else {
        echo "Es positivo y impar";
    }
} else {
    echo "No es positivo";
}
            </pre>
        </div>
        
        <p>En este ejemplo, primero evaluamos si \$x es positivo y luego si es par o impar.</p>
    `;
} else if (opcion == '4') {
    contenido.innerHTML = `
        <h2>Funciones en PHP</h2>
        <p>Las funciones en PHP permiten encapsular bloques de código que puedes reutilizar. Se pueden declarar con parámetros y devolver valores. A continuación, te explico cómo declarar y usar funciones en PHP.</p>

        <!-- Explicación de cómo declarar funciones -->
        <h3>¿Cómo declarar una función en PHP?</h3>
        <p>Para declarar una función en PHP, utilizamos la palabra clave <code>function</code>, seguida del nombre de la función y los parámetros entre paréntesis. Luego, colocamos el código dentro de llaves <code>{ }</code> que se ejecutará cuando llamamos a la función.</p>

        <div class="card">
            <pre>
&lt;?php
function saludar(\$nombre) {
    return "Hola, " . \$nombre;
}
echo saludar("Marcelo");
?&gt;
            </pre>
        </div>
        
        <p>En este ejemplo, hemos declarado una función llamada <code>saludar()</code> que toma un parámetro <code>\$nombre</code> y devuelve un saludo personalizado. El valor devuelto por la función se puede usar de diferentes maneras, en este caso, lo mostramos con <code>echo</code>.</p>

        <!-- Explicación sobre pasar parámetros -->
        <h3>Pasar parámetros a una función</h3>
        <p>Las funciones pueden aceptar uno o más parámetros. Estos parámetros son valores que se pasan a la función cuando se llama. Los parámetros se definen entre paréntesis en la declaración de la función, y cuando llamamos a la función, los proporcionamos en el mismo orden.</p>
        <p>Por ejemplo:</p>
        
        <div class="card">
            <pre>
&lt;?php
function sumar(\$a, \$b) {
    return \$a + \$b;
}
echo sumar(5, 10); // 15
?&gt;
            </pre>
        </div>

        <p>En este caso, la función <code>sumar()</code> toma dos parámetros: <code>\$a</code> y <code>\$b</code>, y devuelve la suma de ambos. Al llamar a la función con los valores 5 y 10, la salida es 15.</p>

        <!-- Explicación sobre retornar valores -->
        <h3>Devolver valores desde una función</h3>
        <p>Las funciones en PHP pueden devolver valores utilizando la palabra clave <code>return</code>. Esto permite que la función calcule algo o realice una tarea, y luego pase el resultado a quien la haya llamado.</p>
        <p>Por ejemplo:</p>

        <div class="card">
            <pre>
&lt;?php
function multiplicar(\$a, \$b) {
    return \$a * \$b;
}
echo multiplicar(4, 3); // 12
?&gt;
            </pre>
        </div>

        <p>En este ejemplo, la función <code>multiplicar()</code> toma dos parámetros y devuelve el producto de ambos. El valor devuelto se puede usar como cualquier otra variable.</p>

        <!-- Tabla de funciones comunes en PHP -->
        <h3>Funciones Comunes en PHP</h3>
        <p>A continuación, te mostramos algunas de las funciones más comunes en PHP:</p>
        
        <table border="1">
            <tr>
                <th>Función</th>
                <th>Descripción</th>
                <th>Ejemplo</th>
            </tr>
            <tr>
                <td>strlen()</td>
                <td>Devuelve la longitud de una cadena.</td>
                <td><pre>echo strlen("Hola"); // 4</pre></td>
            </tr>
            <tr>
                <td>str_replace()</td>
                <td>Reemplaza una subcadena en una cadena.</td>
                <td><pre>echo str_replace("Hola", "Adiós", "Hola Mundo"); // "Adiós Mundo"</pre></td>
            </tr>
            <tr>
                <td>array_push()</td>
                <td>Agrega uno o más elementos al final de un arreglo.</td>
                <td><pre>\$arr = [1, 2, 3]; array_push(\$arr, 4); // \$arr = [1, 2, 3, 4]</pre></td>
            </tr>
            <tr>
                <td>date()</td>
                <td>Devuelve la fecha y hora actual según el formato proporcionado.</td>
                <td><pre>echo date("Y-m-d"); // 2025-02-26</pre></td>
            </tr>
            <tr>
                <td>round()</td>
                <td>Redondea un número al valor más cercano.</td>
                <td><pre>echo round(3.14159, 2); // 3.14</pre></td>
            </tr>
        </table>

        <p>Estas son solo algunas de las muchas funciones que PHP ofrece. Puedes utilizar estas funciones para facilitar el trabajo con cadenas, arreglos y fechas, entre otros.</p>
    `;
} else if (opcion == '5') { 
    contenido.innerHTML = `
        <h2>Arrays en PHP</h2>
        <p>Un array es una estructura que permite almacenar múltiples valores en una sola variable. Existen dos tipos principales de arrays en PHP: arrays indexados y arrays asociativos. A continuación, te explico ambos tipos con ejemplos.</p>

        <!-- Array Indexado -->
        <h3>Array Indexado</h3>
        <p>Un <strong>array indexado</strong> es un array donde los índices son números enteros que empiezan desde 0 por defecto. Los valores se almacenan en el array y se accede a ellos mediante el índice.</p>
        
        <div class="grid-container">
            <div class="grid-item">
                <h4>Array:</h4>
                <pre>$array = ["Manzana", "Banana", "Cereza"];</pre>
            </div>
            <div class="grid-item">
                <h4>Índices y Valores:</h4>
                <pre>
Índice 0 => Manzana
Índice 1 => Banana
Índice 2 => Cereza
                </pre>
            </div>
        </div>

        <p>Para acceder a un elemento de un array indexado, usamos el índice entre corchetes:</p>
        <pre>echo $array[0]; // Manzana</pre>

        <p>Y para modificar un valor, usamos el índice y asignamos un nuevo valor:</p>
        <pre>$array[1] = "Pera";</pre>
        <p>Ahora, el array será:</p>
        <pre>$array = ["Manzana", "Pera", "Cereza"];</pre>

        <!-- Array Asociativo -->
        <h3>Array Asociativo</h3>
        <p>Un <strong>array asociativo</strong> es un array donde los índices son cadenas de texto, no números. Los índices pueden ser cualquier nombre que elijas, y se usan para acceder a los valores de manera más descriptiva.</p>

        <div class="grid-container">
            <div class="grid-item">
                <h4>Array:</h4>
                <pre>$array = ["nombre" => "Marcelo", "edad" => 22];</pre>
            </div>
            <div class="grid-item">
                <h4>Índices y Valores:</h4>
                <pre>
Índice "nombre" => Marcelo
Índice "edad" => 22
                </pre>
            </div>
        </div>

        <p>Para acceder a un elemento de un array asociativo, usamos el índice como una clave de texto:</p>
        <pre>echo $array["nombre"]; // Marcelo</pre>

        <p>Y para modificar un valor, usamos el índice y asignamos un nuevo valor:</p>
        <pre>$array["edad"] = 23;</pre>
        <p>Ahora, el array será:</p>
        <pre>$array = ["nombre" => "Marcelo", "edad" => 23];</pre>

        <h3>Resumen</h3>
        <p>En resumen:</p>
        <ul>
            <li>Un array <strong>indexado</strong> usa índices numéricos.</li>
            <li>Un array <strong>asociativo</strong> usa índices como claves de texto.</li>
        </ul>
    `;
} else if (opcion == '6') {
    contenido.innerHTML = `
        <h2>Buenas Prácticas y Seguridad en PHP</h2>
        <p>Es fundamental validar las entradas del usuario para evitar vulnerabilidades en tu aplicación web, como el ataque de <strong>SQL Injection</strong>, que puede permitir a un atacante ejecutar comandos SQL maliciosos en tu base de datos. A continuación, te explico cómo proteger tu aplicación de estas vulnerabilidades y garantizar que tu código sea seguro.</p>

        <!-- Card para validar y sanitizar entradas -->
<div class="card">
    <h3>1. Validar y Sanitizar Entradas</h3>
    <p>Siempre valida y sanitiza las entradas de los usuarios para asegurarte de que los datos recibidos sean seguros. Un ejemplo de cómo sanitizar la entrada de un formulario en PHP sería:</p>
    <pre>
&lt;?php
// Validar y sanitizar entradas
$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
?&gt;
    </pre>
    <!-- Botón redirigiendo a una página relacionada, abriendo en una nueva pestaña -->
    <a class="btn-seguridad" href="https://www.php.net/manual/es/filter.examples.validation.php" target="_blank">Ver más sobre Validación</a>
</div>

<!-- Card para prevenir SQL Injection -->
<div class="card">
    <h3>2. Proteger contra SQL Injection</h3>
    <p>El uso de consultas preparadas y parámetros vinculados es una de las mejores formas de protegerse contra <strong>SQL Injection</strong>. En lugar de concatenar variables directamente en tus consultas SQL, utiliza sentencias preparadas para garantizar que los datos sean tratados correctamente:</p>
    <pre>
&lt;?php
// Usando PDO para proteger contra SQL Injection
$pdo = new PDO("mysql:host=localhost;dbname=mi_base_de_datos", "usuario", "contraseña");
$query = $pdo->prepare("SELECT * FROM usuarios WHERE nombre = :nombre");
$query->bindParam(':nombre', $nombre, PDO::PARAM_STR);
$query->execute();
?&gt;
    </pre>
    <!-- Botón redirigiendo a una página relacionada, abriendo en una nueva pestaña -->
    <a class="btn-seguridad" href="https://www.php.net/manual/es/pdo.prepared-statements.php" target="_blank">Ver más sobre SQL Injection</a>
</div>

<!-- Card para contraseñas seguras -->
<div class="card">
    <h3>3. Usar Contraseñas Seguras</h3>
    <p>Es crucial almacenar contraseñas de forma segura utilizando técnicas de hashing. No almacenes contraseñas en texto claro. Usa funciones como <code>password_hash()</code> y <code>password_verify()</code> para proteger las contraseñas:</p>
    <pre>
&lt;?php
// Hash de la contraseña
$hash = password_hash($contraseña, PASSWORD_DEFAULT);

// Verificar la contraseña
if (password_verify($contraseña, $hash)) {
    echo "Contraseña válida";
} else {
    echo "Contraseña incorrecta";
}
?&gt;
    </pre>
    <!-- Botón redirigiendo a una página relacionada, abriendo en una nueva pestaña -->
    <a class="btn-seguridad" href="https://www.php.net/manual/es/function.password-hash.php" target="_blank">Ver más sobre Contraseñas Seguras</a>
</div>



        <h3>Resumen de Buenas Prácticas</h3>
        <ul>
            <li><strong>Validar y sanitizar siempre las entradas del usuario</strong> para evitar datos maliciosos.</li>
            <li><strong>Proteger contra SQL Injection</strong> usando consultas preparadas y parámetros vinculados.</li>
            <li><strong>Usar contraseñas seguras</strong>, almacenándolas de forma segura mediante hashing.</li>
        </ul>

        <p>Implementar estas buenas prácticas de seguridad te ayudará a proteger tu aplicación web y mantenerla a salvo de posibles ataques.</p>
    `;
} else if (opcion == '7') {
    contenido.innerHTML = `
        <h2>Resumen Visual y Práctico</h2>
        <table border="1">
            <tr>
                <th>Lo que se debe hacer</th>
                <th>Lo que no se debe hacer</th>
            </tr>
            <tr>
                <td><strong>Usar funciones para organizar el código</strong><br> Las funciones ayudan a modularizar el código, lo que facilita su reutilización y mantenimiento. </td>
                <td><strong>No usar código repetido sin modularizar</strong><br> Es importante evitar la duplicación de código, ya que hace más difícil su mantenimiento y aumenta las posibilidades de errores.</td>
            </tr>
            <tr>
                <td><strong>Validar todas las entradas del usuario</strong><br> Siempre valida y sanitiza las entradas del usuario para evitar inyecciones maliciosas y otros problemas de seguridad.</td>
                <td><strong>No confiar en la entrada del usuario sin validación</strong><br> Nunca confíes ciegamente en lo que los usuarios ingresan en formularios u otros inputs. La validación es esencial.</td>
            </tr>
            <tr>
                <td><strong>Usar consultas preparadas y parámetros vinculados (PDO)</strong><br> Utiliza consultas preparadas y parámetros vinculados para evitar SQL Injection y garantizar la seguridad de la base de datos.</td>
                <td><strong>No usar consultas SQL concatenadas directamente</strong><br> Concatenar datos directamente en las consultas SQL puede permitir que un atacante ejecute código malicioso en la base de datos.</td>
            </tr>
            <tr>
                <td><strong>Almacenar contraseñas de forma segura (hashing)</strong><br> Usa funciones como <code>password_hash()</code> y <code>password_verify()</code> para almacenar contraseñas de forma segura.</td>
                <td><strong>No almacenar contraseñas en texto plano</strong><br> Nunca almacenes contraseñas en texto claro. Siempre usa un algoritmo de hashing para proteger las contraseñas.</td>
            </tr>
            <tr>
                <td><strong>Comentar y documentar el código</strong><br> Los comentarios y la documentación ayudan a otros desarrolladores a entender el propósito del código y cómo funciona.</td>
                <td><strong>No dejar código sin comentarios</strong><br> Dejar código sin comentarios o documentación puede hacer que sea difícil de entender o mantener en el futuro.</td>
            </tr>
            <tr>
                <td><strong>Usar el operador de tipo estrictamente <code>===</code> en lugar de <code>==</code></strong><br> El operador <code>===</code> compara tanto el valor como el tipo de las variables, lo que ayuda a evitar errores sutiles.</td>
                <td><strong>No usar <code>==</code> para comparar valores de diferentes tipos</strong><br> <code>==</code> puede llevar a resultados inesperados si las variables son de diferentes tipos.</td>
            </tr>
            <tr>
                <td><strong>Controlar errores de forma adecuada</strong><br> Utiliza excepciones o registros de errores para capturar y manejar los errores de manera que no afecten la experiencia del usuario.</td>
                <td><strong>No mostrar errores directamente al usuario</strong><br> Mostrar errores en pantalla puede revelar información sensible sobre el sistema y permitir a los atacantes explotarlos.</td>
            </tr>
            <tr>
                <td><strong>Utilizar variables y constantes descriptivas</strong><br> Usar nombres de variables y constantes claros y descriptivos facilita la comprensión del código.</td>
                <td><strong>No usar nombres de variables ambiguos</strong><br> Los nombres como <code>$a</code>, <code>$temp</code> o <code>$var</code> no indican el propósito de la variable.</td>
            </tr>
            <tr>
                <td><strong>Usar el operador ternario para simplificar condicionales simples</strong><br> El operador ternario (<code>condición ? valor_true : valor_false</code>) puede hacer que el código sea más conciso y fácil de leer.</td>
                <td><strong>No usar condicionales largos innecesarios</strong><br> Es mejor evitar tener condicionales excesivamente largos que dificulten la lectura y mantenimiento del código.</td>
            </tr>
        </table>
    `;
}

        }
    </script>
</body>
</html>