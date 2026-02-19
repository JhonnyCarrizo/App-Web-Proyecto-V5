<?php
//   session_start(); 
//     header("Cache-Control: no-cache, no-store, must-revalidate"); 
//     header("Pragma: no-cache"); 
//     header("Expires: 0"); 
//  if (!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) {
//     header("Location: ../index.php");
//     exit(); 
// }
//   $usuario = $_SESSION['usuario'];

//  if (isset($_SESSION['error'])) {
//      echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
//     unset($_SESSION['error']); 
//  }
// ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/registro_style.css">
    <link rel="icon" type="../image/png" href="../img/icono.png">
    <title>Registro</title>
</head>
<body>

<!-- ZONA DE PRUEBA -->
<div id="contenedor-alerta">
<?php
  session_start(); 
    header("Cache-Control: no-cache, no-store, must-revalidate"); 
    header("Pragma: no-cache"); 
    header("Expires: 0"); 
 if (!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit(); 
}
  $usuario = $_SESSION['usuario'];

 if (isset($_SESSION['error'])) {
     echo '<p id="RegistroAprov"  style="color: red;">' . $_SESSION['error'] . '</p>';
    unset($_SESSION['error']); 
 }
?>
</div>
<!-- FIN DE LA ZONA -->
    <div id="boxPadre" >
        <div id="boxForm" >
            <form id="formulario" method="post" action="../controlador/pro_reg.php" onsubmit=" return enviar()" autocomplete="off" >
                <div id="boxTitulo" >
                    <h1>Registro</h1>
                </div>
                <div id="boxNombre" >
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" >
                </div>
                <div id="boxApellido" >
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Apellido" >
                </div>
                <div id="boxUsuario" >
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Usuario" >                    
                </div>
                <div id="boxContraseña" >
                    <label for="contraseña">Contraseña</label>
                    <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña" >
                        <div id="BoxVerContraseña">
                            <button type="button" id="VerContraseñaBtn">
                                <img src="../img/vista.png" id="VerContraseñaImg">
                            </button>
                        </div>
                </div>
                <div id="boxEnviar" >
                    <input type="submit" name="entrar" value="Enviar">
                </div>
            </form>
        </div>
    </div>
    <script src="../assets/javascript/registro.js" ></script>
</body>
</html>