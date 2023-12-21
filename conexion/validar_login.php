<?php
    include 'conexion.php';
    $bean=new Conexion();

    $correo=$_POST['email_usu'];
    $contrasena=$_POST['contrasena'];

    $validar_login = mysqli_query($bean->getConexion(),"SELECT email_usu, contrasena FROM usuario WHERE email_usu='$correo' AND contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        echo '
            <script>
                window.location = "../index.php";
            </script>
        ';
        exit;
    }else{
        echo '
            <script>
                window.location = "../login.php?error";
            </script>
        ';
        exit;
    }

?>