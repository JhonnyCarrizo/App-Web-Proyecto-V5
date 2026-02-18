<?php
require_once('DB.php');

if(isset($_POST['entrar'])){
    if(empty($_POST["usuario"])and empty($_POST["contraseña"])){
       
    }else{
        $usuario=$_POST["usuario"];
        $contraseña=$_POST["contraseña"];
        $sql=$conn->query("SELECT * from user where usuario='$usuario' and contraseña='$contraseña'");
        if($datos=$sql->fetch_object()){
            header("location:inicio.php");
        }else{
            header("location:index.php");
            echo 'ACCESO DENEGADO';  
        }
    }
}


?>