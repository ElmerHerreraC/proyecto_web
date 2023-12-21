<?php
    $conexion=new mysqli("localhost","root","","login","3307");
    $conexion->xml_set_charset("utf8");

    if(mysqli_connect_errno()){
        echo 'Conexion Fallida : ', mysqli_connect_errno();
        exit();
    }
?>