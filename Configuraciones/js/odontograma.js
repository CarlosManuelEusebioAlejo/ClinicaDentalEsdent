document.addEventListener('DOMContentLoaded', () => {
    // Inicializar colores y posiciones desde la base de datos
    initializeColors();

    // Delegación de eventos para botones dentro de los contenedores
    document.getElementById('contenedor-cuadrados').addEventListener('click', handleButtonClick);
    document.getElementById('contenedor-cuadrados2').addEventListener('click', handleButtonClick);
});

// Variables para el botón activo
let activeButton = null;
let activeButtonId = null;

// Inicializar colores y posiciones desde la base de datos
function initializeColors() {
    const idPaciente = document.querySelector('input[name="idPaciente"]').value;

    fetch('Solicitudes/Obtener_Colores.php', {
        method: 'POST',
        body: new URLSearchParams({ idPaciente })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            data.colors.forEach(({ OD, Color, Posicion }) => {
                // Selector más específico para evitar conflictos
                const button = document.querySelector([data-num="${OD}"][data-pos="${Posicion}"]);
                if (button) {
                    button.style.backgroundColor = Color; // Asignar color al botón
                    button.setAttribute('data-pos', Posicion); // Confirmar que la posición esté correctamente asignada
                }
            });
        } else {
            console.error('Error al obtener los colores:', data.message);
        }
    })
    .catch(error => console.error('Error:', error));
}

// Manejar el clic en los botones
function handleButtonClick(event) {
    const button = event.target.closest('button'); // Detectar el botón clickeado
    if (!button) return; // Ignorar clics fuera de los botones

    const buttonId = btn${button.dataset.num}; // Generar un ID único basado en "data-num"
    button.setAttribute('id', buttonId);

    openSeleccionarDienteModal(button, buttonId);
}

// Abrir modal y guardar el botón activo
function openSeleccionarDienteModal(button, buttonId) {
    activeButton = button;
    activeButtonId = buttonId;

    const modal = document.getElementById('seleccionarDienteModal');
    modal.classList.remove('hidden');

    document.getElementById('posicion').value = button.getAttribute('data-pos') || ''; // Asignar posición
    document.getElementById('numeroFila').value = button.getAttribute('data-num') || ''; // Asignar número de fila
}

// Cerrar el modal
function closeSeleccionarDienteModal() {
    document.getElementById('seleccionarDienteModal').classList.add('hidden');
}

// Guardar el color seleccionado
function guardarColor() {
    const colorPicker = document.getElementById('colorPicker');
    const colorDiente = colorPicker.value;

    if (!activeButton || !colorDiente) {
        Swal.fire({
            icon: 'warning',
            title: 'Información incompleta',
            text: 'Por favor, seleccione un botón y un color antes de guardar.',
        });
        return;
    }

    const diagnostico = document.querySelector('textarea[name="Diagnostico"]').value;
    const tratamiento = document.querySelector('textarea[name="Tratamiento"]').value;
    const observaciones = document.querySelector('textarea[name="Observaciones"]').value;
    const presupuesto = document.querySelector('input[name="Presupuesto"]').value;

    if (!diagnostico || !tratamiento || !presupuesto) {
        Swal.fire({
            icon: 'error',
            title: 'Campos incompletos',
            text: 'Por favor, complete todos los campos requeridos.',
        });
        return;
    }

    const formData = new FormData();
    formData.append('idPaciente', document.querySelector('input[name="idPaciente"]').value);
    formData.append('colorDiente', colorDiente);
    formData.append('posicion', activeButton.getAttribute('data-pos'));
    formData.append('numeroFila', activeButton.getAttribute('data-num'));
    formData.append('Diagnostico', diagnostico);
    formData.append('Tratamiento', tratamiento);
    formData.append('Observaciones', observaciones);
    formData.append('Presupuesto', presupuesto);

    fetch('Solicitudes/Agregar_Odontograma.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => handleResponse(data))
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Hubo un problema al guardar los datos.',
        });
    });
}

function handleResponse(data) {
    if (data.status === 'success') {
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: data.message,
        }).then(() => {
            closeSeleccionarDienteModal();
            activeButton.style.backgroundColor = data.colorDiente; // Actualizar el color del botón
            location.reload(); // Recargar la página
        });
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: data.message,
        });
    }
}


function deleteEntry(idOdontograma) {
    // Confirmación antes de proceder con la eliminación
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#B4221B',
        cancelButtonColor: '#3c3c3c',
        confirmButtonText: 'Sí, eliminarlo',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            // Realizar la solicitud al servidor para eliminar el odontograma
            fetch('Solicitudes/eliminar_odontograma.php', {
                method: 'POST',
                body: new URLSearchParams({ id_odontograma: idOdontograma })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Mostrar mensaje de éxito
                    Swal.fire({
                        icon: 'success',
                        title: 'Eliminado',
                        text: 'El odontograma ha sido eliminado.',
                    }).then(() => {
                        // Esperar a que la animación de la alerta se complete y luego recargar la página
                        location.reload();  // Recargar la página para ver los cambios
                    });
                } else {
                    // En caso de error, mostrar un mensaje de error
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'No se pudo eliminar el odontograma.',
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Hubo un problema al conectar con el servidor.',
                });
            });
        }
    });
}