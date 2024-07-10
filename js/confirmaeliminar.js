function confirmarEliminarUsuario(id_usuario) {
   
    Swal.fire({
        title: 'Atención!',
        text: "¿Desea eliminar el usuario con Id " + id_usuario + "?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#848bc0',
        cancelButtonColor: '#181419',
        confirmButtonText: 'Eliminar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
           
            window.location.href = 'eliminarusuario2.php?id_usuario=' + id_usuario;
        }
    });
}

function confirmarEliminarVideojuego(id_videojuego) {
    
    Swal.fire({
        title: 'Atención!',
        text: "¿Desea eliminar el juego con Id " + id_videojuego + "?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#848bc0',
        cancelButtonColor: '#181419',
        confirmButtonText: 'Eliminar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
           
            window.location.href = 'eliminarvideojuego2.php?id_videojuego=' + id_videojuego;
        }
    });
}