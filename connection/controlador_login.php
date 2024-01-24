<?php
include("conexion.php");
    if (!empty($_POST["btningresar"])) {
        if (empty($_POST["correo"]) || empty($_POST["contrasena"])) {
            echo '<div class="alert alert-danger">LOS CAMPOS ESTÁN VACÍOS</div>';
        } else {
            $correo = $_POST["correo"];
            $contrasena = $_POST["contrasena"];
            $sql = $conexion->query("SELECT * FROM usuario WHERE correo='$correo' AND contrasena='$contrasena'");
            if ($sql->num_rows > 0) {
                header("Location: ../index.php");
                exit();
            } else {
                echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            }
        }
    }
?>