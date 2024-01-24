<?php
class Conexion{
    function getConexion(){
        //variables
        $url="localhost:3307";
        $user="root";
        $pass="";
        $bd="inkspiral";
        $cn=mysqli_connect($url,$user,$pass,$bd);
        if(mysqli_connect_error()){
            echo 'error nro: '.mysqli_connect_errno();
        }
        return $cn;
    }


}
?>