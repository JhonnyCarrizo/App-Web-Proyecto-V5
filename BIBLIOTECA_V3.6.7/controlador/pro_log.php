<?php
 require_once('../DB.php'); 
 session_start(); 

 if(isset($_POST['entrar'])){
     $usuarioX = $_POST['usuario'];
     $contraX = $_POST['contraseña'];

     $stmt = $conn->prepare("SELECT contraseña FROM user WHERE usuario = ?");
     $stmt->bind_param("s", $usuarioX);
     $stmt->execute();
     $resultado = $stmt->get_result();

     if($fila = $resultado->fetch_assoc()){ 
         if (password_verify($contraX, $fila['contraseña'])) {
             $_SESSION['usuario'] = $usuarioX; 
             header("location:../ini-reg/inicio.php");
             exit();
         } else {
            $_SESSION['error_login'] = "password";
            header("location:../index.php");
            exit();
            }
     } else {
            $_SESSION['error_login'] = "usuario";
            header("location:../index.php");
            exit();
     }
 }
?>