function validarFormularioRegistroVideojuego() {
    let nombre = document.getElementById("nombre")
    let descripcion = document.getElementById("descripcion")
    let genero = document.getElementById("genero")
    let consola = document.getElementById("consola")
    let anio = document.getElementById("anio")
    let estrellas = document.getElementById("estrellas")
    let empresa = document.getElementById("empresa")

    if (nombre.value === '' || descripcion.value === '' || genero.value === '' || consola.value === '' || anio.value === '' || estrellas.value === '' || empresa.value === '') {
        Swal.fire({
            title: "Atención!",
            text: "Por favor complete todos los campos!",
            icon: "warning"
        });
        return false;
    }
    console.log("Formulario enviado correctamente...");
    return true;
}