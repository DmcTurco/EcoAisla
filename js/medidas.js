function guardarDatos() {
    // Obtener los valores de los campos
    var largo = document.getElementById('largo').value;
    var ancho = document.getElementById('ancho').value;
    var grosor = document.getElementById('grosor').value;
    var altura = document.getElementById('altura').value;

    // Guardar los datos en el almacenamiento local
    localStorage.setItem('medidas', JSON.stringify({
        largo: largo,
        ancho: ancho,
        grosor: grosor,
        altura: altura
    }));

    // Mostrar los datos en la consola para verificar
    console.log('Datos de medidas guardados:', {
        largo: largo,
        ancho: ancho,
        grosor: grosor,
        altura: altura
    });


}