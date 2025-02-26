<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inciar Sesión</title>
    <link rel="stylesheet" href="../anexos/css/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="../php/auth/login.php" method="POST">
            <div class="input-group">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="input-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <button type=submit>Ingresar</button>
            <p class="register-link">¿No tienes una cuenta? <a href="auth/registro.php">Regístrate aquí</a></p>
        </form>
    </div>
</body>
</html>