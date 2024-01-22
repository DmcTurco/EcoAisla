var elementoSeleccionado = null;

function seleccionarColor(elemento, color, nombreColor) {
    // Desmarcar el elemento anteriormente seleccionado
    if (elementoSeleccionado !== null) {
        elementoSeleccionado.classList.remove('selected');
    }

    // Marcar el nuevo elemento seleccionado
    elemento.classList.add('selected');
    elementoSeleccionado = elemento;

    // Aplicar el color a cada bloque en el lienzo
    var bloques = document.querySelectorAll('.bloque');
    bloques.forEach(function (bloque) {
        bloque.style.backgroundColor = color;
    });

    // Actualizar el nombre del color en la tarjeta
    document.querySelector('.card-title').innerText = nombreColor;

    // Actualizar el texto del párrafo
    document.querySelector('.card-text').innerHTML = `Este es el color que has seleccionado: ${nombreColor}`;

    // Guardar el color seleccionado en el almacenamiento local
    localStorage.setItem('colorSeleccionado', color);
}

// Crear los bloques en el lienzo
var lienzo = document.getElementById('lienzo');
for (var i = 0; i < 6; i++) {
    var bloque = document.createElement('div');
    bloque.className = 'bloque';
    lienzo.appendChild(bloque);
}

function validarSeleccion() {
    console.log('llegue aqui');

    // Verificar si se ha seleccionado un color
    var colorSeleccionado = localStorage.getItem('colorSeleccionado');

    console.log('Llegué aquí. Color seleccionado: ' + colorSeleccionado);

    return false;
    if (colorSeleccionado === null) {
        alert('Debes seleccionar un color antes de continuar.');
        return false; // Detener el envío del formulario
    }

    // Capturar el evento de envío del formulario y llamar a la función validarSeleccion
    document.getElementById('miFormulario').addEventListener('submit', validarSeleccion);

    // Aquí puedes realizar cualquier otra validación necesaria

    return true; // Permitir el envío del formulario
}
