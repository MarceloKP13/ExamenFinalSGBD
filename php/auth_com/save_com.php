<?php
// Incluir archivo de conexión
include __DIR__ . '/conexion_com.php';

// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Si el nombre está vacío, asignamos "Anónimo"
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : 'Anónimo';
    $comentario = $_POST['comentario'];

    // Preparar la consulta SQL
    $sql = "INSERT INTO comentarios (nombre, comentario) VALUES ('$nombre', '$comentario')";

    // Ejecutar la consulta y verificar si se insertó correctamente
    if (mysqli_query($conexion, $sql)) {
        echo "<script>alert('Gracias por tu comentario, será tomado en cuenta.'); window.location.href='../contacto.php';</script>";
    } else {
        echo "Error al guardar el comentario: " . mysqli_error($conexion);
    }
}

// Cerrar la conexión
mysqli_close($conexion);
?>