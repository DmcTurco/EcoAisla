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

    // Guardar el color seleccionado en localStorage
    localStorage.setItem('colorSeleccionado', JSON.stringify({
        color: color,
        nombreColor: nombreColor
    }));
}

// Crear los bloques en el lienzo
var lienzo = document.getElementById('lienzo');
for (var i = 0; i < 6; i++) {
    var bloque = document.createElement('div');
    bloque.className = 'bloque';
    lienzo.appendChild(bloque);
}

function validarSeleccion() {

    var colorSeleccionado = localStorage.getItem('colorSeleccionado');

    if (colorSeleccionado === null) {
        alert('Debes seleccionar un color antes de continuar.');
        return false;
    }
    return true;

}

var miFormulario = document.getElementById('FormColor');
if (miFormulario) {
    miFormulario.addEventListener('submit', function (event) {
        if (!validarSeleccion()) {
            event.preventDefault();
            return;
        }
    });
} else {
    console.error('Elemento con ID "FormColor" no encontrado.');
}
