export function enviarIdPaciente(idPaciente) {
    // Preparar los datos
    const data = { idPaciente: idPaciente };

    // Enviar el ID usando AJAX (fetch)
    fetch('/../ClinicaDentalEsdent/Radiografias/Solicitudes/mostrar_radiografia.php', {
        method: 'POST', // Usamos POST para enviar datos
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data) // Convertimos el objeto a JSON
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json(); // Parsear respuesta JSON
    })
    .then(result => {
        if (result.status === 'success') {
            console.log('Radiografías cargadas:', result.data);
            mostrarRadiografias(result.data); // Función para mostrar radiografías en la página
        } else {
            console.error('Error al cargar radiografías:', result.message);
            alert('Error: ' + result.message);
        }
    })
    .catch(error => {
        console.error('Error en la petición:', error);
        alert('Hubo un problema al cargar las radiografías.');
    });
}

// Función para mostrar las radiografías en la página
function mostrarRadiografias(radiografias) {
    const listaRadiografias = document.getElementById('lista-radiografias');
    listaRadiografias.innerHTML = ''; // Limpiar lista anterior

    if (radiografias.length === 0) {
        listaRadiografias.innerHTML = '<p>No hay radiografías para este paciente.</p>';
        return;
    }

    radiografias.forEach(radiografia => {
        const item = document.createElement('li');
        item.textContent = radiografia.nombre_archivo; // Ajustar con la propiedad adecuada
        listaRadiografias.appendChild(item);
    });
}
