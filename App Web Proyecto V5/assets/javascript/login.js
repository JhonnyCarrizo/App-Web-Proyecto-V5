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
    });

    $passwordInput.addEventListener('input', () => {
    $passwordInput.setCustomValidity("");
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

    else {
        $usuarioInput.setCustomValidity('');
        $passwordInput.setCustomValidity('');
        return true;
    }
 
};