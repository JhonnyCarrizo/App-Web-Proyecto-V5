const erNombre = /^[a-zA-ZáéíóúñüÁÉÍÓÚÑ]+( [a-zA-ZáéíóúÁÉÍÓÚñÑ]+)*$/
const erApellido = /^[a-zA-ZáéíóúñüÁÉÍÓÚÑ]+( [a-zA-ZáéíóúÁÉÍÓÚñÑ]+)*$/
const erUsuario = /^([a-zA-ZáéíóúñüÁÉÍÓÚÑ]){3}([0-9a-zA-ZáéíóúÁÉÍÓÚñÑ]+)*$/
const erContraseña =/^(?=.*[A-Z])(?=(?:.*[a-zñáéíóú]){3,})(?=.*\d)(?=.*[!@#$%^&*(),.?":{}|<>])(?!.*\s).{8,}$/
const $nombreInput = document.getElementById("nombre");
const $apellidoInput = document.getElementById("apellido");
const $usuarioInput = document.getElementById("usuario");
const $passwordInput = document.getElementById("contraseña");
const $VerBtn = document.getElementById("VerContraseñaBtn");
const $verConImg = document.getElementById("VerContraseñaImg");



$passwordInput.addEventListener('input', () => {
    if ($passwordInput.value.trim() !== "") {
        $verConImg.style.display ="inline"
    } else {
        $verConImg.style.display ="none"
    }
});

$VerBtn.addEventListener("click", () => {
    if ($passwordInput.type === "password") {
            $passwordInput.type = "text";
            $verConImg.src = "img/esconder.png"
    } else {
        $passwordInput.type = "password";
        $verConImg.src = "img/vista.png"
    }
});

    $nombreInput.addEventListener('input', () => {
    $nombreInput.setCustomValidity("");
    $nombreInput.style.borderColor = "#06A4AF";
    });

    $apellidoInput.addEventListener('input', () => {
    $apellidoInput.setCustomValidity("");
    $apellidoInput.style.borderColor = "#06A4AF";
    });

    $usuarioInput.addEventListener('input', () => {
    $usuarioInput.setCustomValidity("");
    $usuarioInput.style.borderColor = "#06A4AF";
    });

    $passwordInput.addEventListener('input', () => {
    $passwordInput.setCustomValidity("");
    $passwordInput.style.borderColor = "#06A4AF";
    });



function enviar() {

    let nombre = document.getElementById('nombre').value;
    let apellido = document.getElementById('apellido').value;
    let usuario = document.getElementById('usuario').value;
    let contraseña = document.getElementById('contraseña').value;

    if (erNombre.test(nombre) == false ) {
        $nombreInput.style.borderColor = "red";
        $nombreInput.setCustomValidity('Asegúrese de ingresar su Nombre');
        $nombreInput.reportValidity();
        return false;
    }

    if (erApellido.test(apellido) == false ) {
        $apellidoInput.style.borderColor = "red";
        $apellidoInput.setCustomValidity('Asegúrese de ingresar su Apellido');
        $apellidoInput.reportValidity();
        return false;
    }

    if (usuario === "") {
        $usuarioInput.style.borderColor = "red";
        $usuarioInput.setCustomValidity('Asegúrese de ingresar su nombre de Usuario');
        $usuarioInput.reportValidity();
        return false;
    }

    if (erUsuario.test(usuario) == false ) {
        $usuarioInput.style.borderColor = "red";
        $usuarioInput.setCustomValidity('Minimo 3 letras al comienzo\nSin caracteres especiales\nSin espacios');
        $usuarioInput.reportValidity();
        return false;
    }



    if (contraseña === "") {
        $passwordInput.style.borderColor = "red";
        $passwordInput.setCustomValidity('Asegúrese de ingresar una contraseña');
        $passwordInput.reportValidity();
        return false;
    }

    if (erContraseña.test(contraseña) == false ) {
        $passwordInput.style.borderColor = "red";
       $passwordInput.setCustomValidity('Minimo 8 digitos\nMinimo 3 letras\nMinimo una mayuscula\nMinimo un caracter especial\nMinimo un numero\nSin espacios');
        $passwordInput.reportValidity();
        return false;
    }


return true;
}

