<?php
    $conexion=new mysqli("localhost","root","","inkspiral",3307);
    $conexion->set_charset("utf8");

    if(mysqli_connect_errno()){
        echo 'Conexion Fallida : ', mysqli_connect_errno();
        exit();
    }
?>