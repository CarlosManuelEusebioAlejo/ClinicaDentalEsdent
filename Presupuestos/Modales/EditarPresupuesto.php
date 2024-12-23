<div id="edit-presupuesto-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
    <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">
        <!-- Botón X para cerrar el modal -->
        <button id="close-edit-presupuesto-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
        
        <!-- Título principal -->
        <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">
            Editar Presupuesto
        </h1>

        <!-- Formulario de Presupuesto -->
        <form id="edit-presupuesto-form">
            <input type="hidden" name="id_presupuesto" id="edit-presupuesto">
    
            <!-- Sección de Datos del Presupuesto -->
            <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
                <div class="grid grid-cols-2 gap-6">
                    <!-- Input: Tratamiento -->
                    <div class="relative col-span-2">
                        <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
                        <textarea id="edit-tratamiento" name="tratamiento" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Descripción del tratamiento"></textarea>
                    </div>

                    <!-- Input: Observaciones -->
                    <div class="relative col-span-2">
                        <label class="text-xs text-[#3B3636]">OBSERVACIONES</label>
                        <textarea id="edit-observaciones" name="observaciones" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Observaciones adicionales"></textarea>
                    </div>
        
                    <!-- Input: Costo -->
                    <div class="relative col-span-2">
                        <label class="text-xs text-[#3B3636]">COSTO</label>
                        <input id="edit-costo" name="costo" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number" placeholder="Costo del tratamiento" required>
                    </div>
        
                    <!-- Input: Fecha -->
                    <div class="relative col-span-2">
                        <label class="text-xs text-[#3B3636]">FECHA</label>
                        <input id="edit-fecha" name="fecha" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="date" required>
                    </div>
        
                    <!-- Input: Válido hasta -->
                    <div class="relative col-span-2">
                        <label class="text-xs text-[#3B3636]">VÁLIDO HASTA</label>
                        <input id="edit-valido-hasta" name="valido_hasta" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="date" required>
                    </div>
                </div>
            </div>
        
            <!-- Botones de Cerrar y Guardar -->
            <div class="flex justify-end mt-6">
                <!-- Botón de cerrar -->
                <button type="button" id="close-edit-presupuesto-modal-btn" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
                    Cerrar
                </button>
                <button type="submit" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
</div>

<script>
// Función para abrir el modal y cargar los datos del presupuesto
function EditarPresupuesto(id) {
    const modal = document.getElementById('edit-presupuesto-modal');
    
    // Mostrar el modal
    modal.classList.remove('hidden');
    
    // Realizar solicitud para obtener los datos del presupuesto
    fetch(`Solicitudes/ObtenerPresupuesto.php?id=${id}`)
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                // Rellenar los campos con los datos del presupuesto
                document.getElementById('edit-presupuesto').value = data.presupuesto.id_presupuesto;
                document.getElementById('edit-tratamiento').value = data.presupuesto.Tratamiento;
                document.getElementById('edit-observaciones').value = data.presupuesto.Observaciones;
                document.getElementById('edit-costo').value = data.presupuesto.Costo;
                document.getElementById('edit-fecha').value = data.presupuesto.Fecha;
                document.getElementById('edit-valido-hasta').value = data.presupuesto.Valido_hasta;
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'No se pudo cargar la información del presupuesto.',
                });
            }
        })
        .catch(error => console.error('Error:', error));
}

// Enviar los datos actualizados
document.getElementById('edit-presupuesto-form').addEventListener('submit', function(e) {
    e.preventDefault();  // Evitar el envío del formulario por defecto

    const formData = new FormData(this);
    
    // Convertir los datos del formulario a un objeto JSON
    const presupuestoData = Object.fromEntries(formData.entries());

    // Enviar la solicitud de actualización
    fetch('Solicitudes/EditarPresupuesto.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(presupuestoData),
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: 'Presupuesto actualizado correctamente.',
            }).then(() => {
                // Recargar la página después de la actualización
                location.reload();
            });
            // Cerrar el modal
            document.getElementById('edit-presupuesto-modal').classList.add('hidden');
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Error al actualizar el presupuesto: ' + data.message,
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Error en la solicitud.',
        });
    });
});

// Cerrar el modal al hacer clic en los botones
document.getElementById('close-edit-presupuesto-modal-x').addEventListener('click', () => {
    document.getElementById('edit-presupuesto-modal').classList.add('hidden');
});
document.getElementById('close-edit-presupuesto-modal-btn').addEventListener('click', () => {
    document.getElementById('edit-presupuesto-modal').classList.add('hidden');
});
</script>

