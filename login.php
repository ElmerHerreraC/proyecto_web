<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <div class="wrapper">
        <form action="">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Correo Electronico" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña" required> 
                <i class='bx bxs-lock' ></i>       
            </div>
            <div class="remember-forgot">
                <label class="white-checkbox">
                    <input type="checkbox">Recuerdame
                </label>
                <a href="#">Olvide mi contraseña</a>
            </div>

            <button type="submit" class="btn">Iniciar Sesion</button>

            <div class="register-link">
                <p>¿No tienes Cuenta?,  <a href="#">Registrate</a></p>
            </div>
        </form>
    </div>
</body>
</html>