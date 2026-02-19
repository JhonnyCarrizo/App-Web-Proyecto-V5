<?php

   session_start(); 
     header("Cache-Control: no-cache, no-store, must-revalidate"); 
     header("Pragma: no-cache"); 
     header("Expires: 0"); 
  if (!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) {
     header("Location: ../index.php");
     exit(); 
 }

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../assets/css/inicio_style.css">
    <link rel="icon" type="image/png" href="../img/icono.png">
    <title>Página de Inicio</title>
</head>
<body>
    <div id="boxPadre" >
        <div id="prestamo" class="contenedor" > <a href="prestamo.php"><img src="../img/main_img/prestamo.png"> </a></div>
        <div id="devolucion" class="contenedor" > <a href="devolucion.php"><img src="../img/main_img/devolucion.png"> </a></div>
        <div id="registro" class="contenedor" > <a href="registro.php"><img src="../img/main_img/registro.png"> </a></div>
        <div id="cantidad" class="contenedor" > <a href="cantidad.php"><img src="../img/main_img/cantidad.png"> </a></div>
        <div id="libros" class="contenedor" > <a href="libros.php"><img src="../img/main_img/libros.png"> </a></div>
        <div id="salir" class="contenedor" > <a href="../cerrar.php"><img src="../img/main_img/salir.png"> </a></div>
    </div>
    <script src="../assets/javascript/inicio.js" ></script>
</body>
</html>