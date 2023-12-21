<?php
session_start();
include 'conexion.php';
$bean = new Conexion();

$id=$_POST['id_usu'];
$usuario = $_POST['nombre_usu'];
$correo = $_POST['email_usu'];
$contrasena = $_POST['contrasena'];

// Validar si el usuario o el correo ya existen en la base de datos
$validar_usuario = mysqli_query($bean->getConexion(), "SELECT * FROM usuario WHERE nombre_usu='$usuario'");
$validar_correo = mysqli_query($bean->getConexion(), "SELECT * FROM usuario WHERE email_usu='$correo'");

// Verificar si hubo algún error en las consultas SELECT
if (!$validar_usuario || !$validar_correo) {
    die("Error en la consulta: " . mysqli_error($bean->getConexion()));
}

// Verificar si el usuario ya existe
if (mysqli_num_rows($validar_usuario) > 0) {
    header("location: ../register.php?error=usuario");
    exit;
}

// Verificar si el correo ya existe
if (mysqli_num_rows($validar_correo) > 0) {
    header("location: ../register.php?error=correo");
    exit;
}

// Si el usuario y el correo no existen, realizar el registro
$sql = "INSERT INTO usuario VALUES (null, '$usuario', '$correo', '$contrasena', 'usuario')";
$registro = mysqli_query($bean->getConexion(), $sql);

if ($registro) {
    $_SESSION["data"] = 1;
    header("location: ../login.php");
    exit;
} else {
    header("location: ../register.php?error");
    exit;
}
?>