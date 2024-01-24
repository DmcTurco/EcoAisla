var elementoSeleccionado = null; // Variable global para almacenar el elemento seleccionado

function seleccionarImagen(elemento, urlImagen, urlEstampado, descripcion) {

    // Guardar la información de la imagen seleccionada en el almacenamiento local
    localStorage.setItem('imagenSeleccionada', JSON.stringify({
        urlEstampado: urlEstampado,
        descripcion: descripcion
    }));

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



}