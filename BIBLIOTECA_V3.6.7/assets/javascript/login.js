window.addEventListener('pageshow', function(event) {
    if (event.persisted) {
        document.getElementById("formulario").reset();
    }
});

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

    $usuarioInput.addEventListener('input', () => {
    $usuarioInput.setCustomValidity("");
    $usuarioInput.style.borderColor = "#06A4AF";
    });

    $passwordInput.addEventListener('input', () => {
    $passwordInput.setCustomValidity("");
    $passwordInput.style.borderColor = "#06A4AF";
    });


window.addEventListener('DOMContentLoaded', () => {

    if ($usuarioInput.classList.contains('error-input')) {
        $usuarioInput.setCustomValidity('Este Usuario no existe');
        $usuarioInput.reportValidity();
    }
    
    if ($passwordInput.classList.contains('error-input')) {
        $passwordInput.setCustomValidity('Contraseña incorrecta');
        $passwordInput.reportValidity();
    }
});



function enviar() {

    if($usuarioInput.value.trim() === "") {
        $usuarioInput.setCustomValidity('Asegúrese de ingresar su Usuario');
        $usuarioInput.reportValidity();
        return false;
    }


    if($passwordInput.value.trim() === "") {
        $passwordInput.setCustomValidity('Asegúrese de ingresar su Contraseña');
        $passwordInput.reportValidity();
        return false;
    }
    


        $usuarioInput.setCustomValidity('');
        $passwordInput.setCustomValidity('');
        return true;
 
};