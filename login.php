<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="wrapper">
        <form action="conexion/validar_login.php" method="POST">
            <h1><strong>Login</strong></h1>
            <hr>
            <?php
                if (isset($_GET['error'])) {
                    echo '<div class="alert alert-primary"><strong>Acceso denegado</strong></div>';
                }
                ?>
            <div class="input-box">
                <input type="text" name="email_usu" placeholder="Correo Electronico" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña" name="contrasena" required>
                <i class='bx bxs-lock'></i>
            </div>
            <div class="remember-forgot">
                <label class="white-checkbox">
                    <input type="checkbox" name="recuerdame">Recuerdame
                </label>
                <a href="#">Olvide mi contraseña</a>
            </div>

            <button type="submit" class="btn">Iniciar Sesion</button>

            <div class="register-link">
                <p>¿No tienes Cuenta?, <a href="register.php">Registrate</a></p>
            </div>
        </form>
    </div>
</body>

</html>