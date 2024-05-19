function validarFormularioLogin() {
    let email = document.getElementById('email')
    let contraseña = document.getElementById('contraseña')

    if (email.value === '' || contraseña.value === '') {
        Swal.fire({
            title: "Atención!",
            text: "Por favor complete todos los campos!",
            icon: "warning"
        });
        return false;
    }
    console.log("Inicio de sesión correcto...")
    return true;
}

function validarFormularioRegistro() {
    let nombre = document.getElementById("nombre")
    let apellido = document.getElementById("apellido")
    let email = document.getElementById("email")
    let contraseña = document.getElementById("contraseña")
    let fechaNacimiento = document.getElementById("fechaNacimiento")
    let pais = document.getElementById("pais")
    let terms = document.getElementById("terms")

    if (nombre.value === '' || apellido.value === '' || email.value === '' || contraseña.value === '' || fechaNacimiento.value === '' || pais.value === '' || !terms.checked) {
        Swal.fire({
            title: "Atención!",
            text: "Por favor complete todos los campos y acepte los términos y condiciones!",
            icon: "warning"
        });
        return false;
    }
    console.log("Formulario enviado correctamente...");
    return true;
}