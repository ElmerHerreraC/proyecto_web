<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
    <div class="wrapper">
        <form action="" method="POST">
            <h1><strong>Registro</strong></h1>
            <hr>
            <?php
                if (isset($_GET['error'])) {
                    echo '<div class="alert alert-primary"><strong>Un Dato ya esta registrado</strong></div>';
                }
                ?>
            <div class="input-box">
                <input type="text" placeholder="Usuarios" name="usuario" id="usuario" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Correo Electronico" name="correo" id="correo" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña" name="contrasena" id="contrasena" required> 
                <i class='bx bxs-lock' ></i>       
            </div>
            <button type="submit" class="btn">Registrar</button>

            <div class="register-link">
                <p>¿Ya tienes Cuenta?,  <a href="login.php">Inicia Sesion</a></p>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>