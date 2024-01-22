var elementoSeleccionado = null; // Variable global para almacenar el elemento seleccionado

function seleccionarImagen(elemento, urlImagen, descripcion) {
    // Desmarcar el elemento anteriormente seleccionado
    if (elementoSeleccionado !== null) {
        elementoSeleccionado.classList.remove('selected');
    }

    // Marcar el nuevo elemento seleccionado
    elemento.classList.add('selected');
    elementoSeleccionado = elemento;

    // Mostrar la imagen en el lienzo
    var lienzo = document.getElementById('lienzo');
    lienzo.style.backgroundImage = `url('${urlImagen}')`;

    // Actualizar el nombre de la imagen en la tarjeta
    document.querySelector('.card-title').innerText = descripcion;

    // Actualizar el texto del párrafo
    document.querySelector('.card-text').innerText = `Esta es la imagen que has seleccionado: ${descripcion}`;

    // Guardar la URL de la imagen seleccionada en el almacenamiento local
    localStorage.setItem('imagenSeleccionada', urlImagen);
}