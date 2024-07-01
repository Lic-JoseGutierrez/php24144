function validarFormularioLogin() {
    let email = document.getElementById('email')
    let password = document.getElementById('password')

    if (email.value === '' || password.value === '') {
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
    let password = document.getElementById("password")
    let fechaNacimiento = document.getElementById("fechaNacimiento")
    let pais = document.getElementById("pais")
    let telefono = document.getElementById("telefono")
    let dni = document.getElementById("dni")
    let edad = document.getElementById("edad")
    let terms = document.getElementById("terms")

    if (nombre.value === '' || apellido.value === '' || email.value === '' || password.value === '' || fechaNacimiento.value === '' || pais.value === '' || telefono.value === '' || dni.value === '' || edad.value === '' || !terms.checked) {
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