<?php
require_once('../class/regis.php');
require_once('../DB.php');
session_start(); 

$r = new Registro();

if (isset($_POST['entrar'])) {
    $nombre = ($_POST['nombre']);
    $apellido = ($_POST['apellido']);
    $usuario = ($_POST['usuario']);
    $contraseña = ($_POST['contraseña']);

    $erNombre   = "/^[a-zA-ZáéíóúñüÁÉÍÓÚÑ]+( [a-zA-ZáéíóúÁÉÍÓÚñÑ]+)*$/";
    $erUsuario  = "/^([a-zA-ZáéíóúñüÁÉÍÓÚÑ]){3}([0-9a-zA-ZáéíóúÁÉÍÓÚñÑ]+)*$/";
    $erPassword = "/^(?=.*[A-Z])(?=(?:.*[a-zñáéíóú]){3,})(?=.*\d)(?=.*[!@#$%^&*(),.?\":{}|<>])(?!.*\s).{8,}$/";

    if (empty($nombre) || empty($apellido) || empty($usuario) || empty($contraseña)) {
        $_SESSION['errores'] = "Todos los campos son obligatorios.";
        header("Location: ../ini-reg/registro.php");
        exit(); 
    }
        if (!preg_match($erNombre, $nombre)) {
            $_SESSION['errores'] = "Nombre no válido.";
            header("Location: ../ini-reg/registro.php");
            exit(); 
        } else if (!preg_match($erNombre, $apellido)) {
                $_SESSION['errores'] = "Apellido no válido.";
                header("Location: ../ini-reg/registro.php");
                exit();
        } else if (!preg_match($erUsuario, $usuario)) {
                $_SESSION['errores'] = "Usuario: Mínimo 3 letras al inicio, sin espacios ni caracteres especiales.";
                header("Location: ../ini-reg/registro.php");
                exit();
        } else if (!preg_match($erPassword, $contraseña)) {
                $_SESSION['errores'] = "Contraseña: Mínimo 8 caracteres, 3 letras, 1 mayúscula, 1 número y 1 símbolo.";
                header("Location: ../ini-reg/registro.php");
                exit();
        }
    $r->setNombre($nombre);
    $r->setApellido($apellido);
    $r->setUsuario($usuario);
    $r->setContraseña($contraseña);

    if ($r->guardar($conn)) {
        $_SESSION = array(); 
        if (ini_get("session.use_cookies")) {
            
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();         
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
        header("Location: ../index.php");
        exit(); 
    }
}
?>