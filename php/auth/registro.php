<?php
session_start();

include "db.php";

// Procesar el formulario cuando el usuario lo envía
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los valores del formulario
    $nombre = $_POST['nombre_comple'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Encriptar contraseña

    // Verificar si el usuario ya existe
    $sql_check = "SELECT * FROM users WHERE usuario = :usuario OR correo = :correo";
    $stmt_check = $pdo->prepare($sql_check);
    $stmt_check->bindParam(':usuario', $usuario);
    $stmt_check->bindParam(':correo', $correo);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        echo "<script>alert('El usuario o correo ya está registrado. Intente con otro.'); window.location.href='registro.php';</script>";
        exit();
    }

    // Insertar nuevo usuario en la base de datos
    $sql = "INSERT INTO users (nombre_comple, usuario, correo, contrasena) VALUES (:nombre, :usuario, :correo, :contrasena)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':contrasena', $contrasena);

    if ($stmt->execute()) {
        // Iniciar la sesión para el nuevo usuario
        $_SESSION['usuario'] = $usuario; // Guardar el nombre de usuario en la sesión
        $_SESSION['usuario_id'] = $pdo->lastInsertId();
        $_SESSION['usuario_nombre'] = $nombre;
        echo "<script>alert('Registro exitoso. Bienvenido, $usuario!'); window.location.href='../../index.php';</script>";
        exit();
    } else {
        echo "<script>alert('Error en el registro. Inténtalo de nuevo.'); window.location.href='registro.php';</script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="../../anexos/css/login.css">
</head>
<body>
    <div class="registro-container">
        <h2>Crear Cuenta</h2>
        <form action="registro.php" method = "POST">
            <div class="input-group">
                <label for="nombre comple">Nombre Completo</label>
                <input type="text" id ="nombre_comple" name ="nombre_comple" required>
            </div>
            <div class="input-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" id ="correo" name ="correo" required>
            </div>
            <div class="input-group">
                <label for="usuario">Usuario</label>
                <input type="text" id ="usuario" name ="usuario" required>
            </div>
            <div class="input-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" id ="contrasena" name ="contrasena" required>
            </div>
            <button type ="submit">Registrarse</button>
            <p class="login-link">¿Ya tienes cuenta? <a href="../iniciarsesion.php">Inicia sesión aquí</a></p>
        </form>
    </div>
</body>
</html>