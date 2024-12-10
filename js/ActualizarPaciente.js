document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.btnActualizarPaciente').forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            const pacienteId = button.getAttribute('data-id');
            const form = document.getElementById(`formActualizarPaciente-${pacienteId}`);
            const modal = document.getElementById(`modal-editar-paciente-${pacienteId}`);

            if (modal && form) {
                // Primero, cerramos cualquier modal activo antes de mostrar el nuevo
                const modalesActivos = document.querySelectorAll('.modal:not(.hidden)');
                if (modalesActivos.length > 0) {
                    modalesActivos.forEach(modal => modal.classList.add('hidden')); // Cerrar los modales activos
                }

                modal.classList.remove('hidden');
                Swal.fire({
                    title: "¿Estás seguro?",
                    text: "¡Se actualizarán los datos del paciente!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Sí, actualizar",
                    cancelButtonText: "No, cancelar"
                }).then(result => {
                    if (result.isConfirmed) {
                        const formData = new FormData(form);
                        fetch('Solicitudes/EditarPaciente.php', {
                            method: 'POST',
                            body: formData
                        }).then(response => response.json())
                          .then(data => {
                              if (data.status === 'success') {
                                  Swal.fire("Actualizado", data.message, "success").then(() => location.reload());
                              } else {
                                  Swal.fire("Error", data.message, "error");
                              }
                          }).catch(() => Swal.fire("Error", "Error en el servidor", "error"));
                    }
                });
            } else {
                console.error(`Formulario o modal no encontrado para ID: ${pacienteId}`);
            }
        });
    });
});
