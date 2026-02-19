<?php
    require_once('../class/regis.php');
    require_once('../DB.php');

    session_start(); 
    $r = new Registro();

    if (isset($_POST['entrar'])) {
        $r->setNombre($_POST['nombre']);
        $r->setApellido($_POST['apellido']);
        $r->setUsuario($_POST['usuario']);
        $r->setContraseña($_POST['contraseña']);

        if ($r->guardar($conn)) {
            $_SESSION['usuario'] = $_POST['usuario']; 

            $_SESSION['error'] = "Éxito";
            header("Location: ../ini-reg/registro.php?status=success");

            exit(); 
        } else {
            $_SESSION['error'] = "Error al registrar el usuario.";
            header("Location: ../ini-reg/registro.php");
        }
    } else {
        header("Location:../ini-reg/registro.php");
        exit();
    }

?>