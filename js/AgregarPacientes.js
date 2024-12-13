document.addEventListener('DOMContentLoaded', () => {
    const agregarButton = document.getElementById('agregar'); // Selecciona el botón "agregar"

    agregarButton.addEventListener('click', (event) => {
        event.preventDefault(); // Prevenir el comportamiento predeterminado del botón

        // Verificar si hay un modal de actualización abierto
        const modalesActivos = document.querySelectorAll('.modal:not(.hidden)');
        if (modalesActivos.length > 0) {
            // Si un modal de actualización está abierto, no permitir agregar paciente
            Swal.fire({
                icon: 'warning',
                title: 'Error',
                text: 'Por favor, cierre el modal de edición antes de agregar un nuevo paciente.',
            });
            return; // Salir sin ejecutar el código de agregar paciente
        }

        // Ahora manejamos el formulario de agregar paciente
        const form = document.getElementById('formAgregarPaciente'); // Seleccionamos el formulario
        const formData = new FormData(form);

        fetch('Solicitudes/AgregarPaciente.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data); // Para verificar la respuesta
            if (data.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: data.message,
                }).then(() => {
                    const modalElement = document.getElementById('registroPacienteModalLabel');
                    if (modalElement) {
                        const modalInstance = bootstrap.Modal.getInstance(modalElement);
                        if (modalInstance) {
                            modalInstance.hide();
                        }
                    }
                    window.location.href = 'index.php'; // Redirigir a la página principal
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: data.message,
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Ocurrió un problema al procesar la solicitud.',
            });
        });
    });
});
