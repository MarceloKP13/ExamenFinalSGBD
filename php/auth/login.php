<?php
// Iniciar sesión
session_start();

include "db.php";

// Procesar el formulario cuando el usuario lo envía
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los valores del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Preparar la consulta para buscar al usuario
    $sql = "SELECT * FROM users WHERE usuario = :usuario LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();

    // Comprobar si el usuario existe
    if ($stmt->rowCount() > 0) {
        $usuario_db = $stmt->fetch(PDO::FETCH_ASSOC);
        // Verificar la contraseña
        if (password_verify($contrasena, $usuario_db['contrasena'])) {
            // Iniciar sesión y almacenar datos del usuario
            $_SESSION['usuario_id'] = $usuario_db['id'];
            $_SESSION['usuario_nombre'] = $usuario_db['nombre_comple'];
            $_SESSION['usuario'] = $usuario_db['usuario']; 
            echo "<script>alert('Inicio de sesión exitoso'); window.location.href='../../index.php';</script>";
            exit();
        } else {
            echo "<script>alert('Contraseña incorrecta. Inténtalo de nuevo.'); window.location.href='../iniciarsesion.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('El usuario no está registrado.'); window.location.href='registro.php';</script>";
        exit();
    }
}
?>