<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="img/icono.png">
    <title>Login</title>
</head>
<body>
    <div id="BoxCuerpo" >
        <div id="BoxLeft" >
            <div id="BoxInf" >
                <img id="logoImg" src="img/icono.png" alt="Logo">
                <h1>U.E.N.DR. MÁXIMO <br> ARTEAGA PÉREZ</h1> 
            </div>
        </div>
        <div id="BoxRight" >
            <form id="formulario" action="controlador/pro_log.php" method="POST" onsubmit="return enviar()" autocomplete="off" >
                <div id="BoxUsuario" >
                    <label for="usuario">Usuario</label><br>
                    <input type="text"  id="usuario" name="usuario" placeholder="Usuario"
                        class="<?php echo (isset($_SESSION['error_login']) && $_SESSION['error_login'] == 'usuario') ? 'error-input' : ''; ?>">
                </div>
                <div id="BoxContraseña" >
                    <label for="contraseña">Contraseña</label>
                    <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" autocomplete="new-password"
                        class="<?php echo (isset($_SESSION['error_login']) && $_SESSION['error_login'] == 'password') ? 'error-input' : ''; ?>">
                    <div id="BoxVerContraseña">
                        <button type="button" id="VerContraseñaBtn">
                            <img src="img/vista.png" id="VerContraseñaImg">
                        </button>
                    </div>
                </div>
                <div id="BoxEntrar" ><input type="submit" name="entrar" value="Entrar"></div>
            </form>
        </div>
    </div>
    <script src="assets/javascript/login.js" ></script>
    <?php unset($_SESSION['error_login']); ?>
</body>
</html>