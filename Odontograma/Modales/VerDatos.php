
<!----------------------------------------------------------------- Modal Ver Datos del Odontograma --------------------------------------------------------------------------->
<div id="odontogramaModal" class="fixed inset-0 flex z-50 items-center justify-center bg-opacity-50 bg-black hidden">
    <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 710px; width: 600px;">
        <!-- Botón X para cerrar el modal -->
       <button id="close-odontograma-modal-x" onclick="closeOdontogramaModal()" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
       
        <!-- Título principal -->
        <h1 class="text-white text-center rounded-full text-2xl" style="background-color: #B4221B; height: 40px;">
            Observaciones
        </h1>

        <!-- Sección de Datos del Odontograma -->
        <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
            <div class="grid grid-cols-2 gap-6">
                        <!-- Input: Descripción -->
                        <div class="relative col-span-2">
                            <label class="text-xs text-[#3B3636]">DIAGNOSTICO</label>
                            <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-20" 
                                placeholder="Observaciones adicionales"
                                name="Diagnostico" disabled>
                            </textarea>
                        </div>
                        <!-- Input: Descripción -->
                         <div class="relative col-span-2">
                            <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
                            <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-20" 
                                placeholder="Observaciones adicionales"
                                name="Tratamiento" disabled>
                            </textarea>
                        </div>
                        <!-- Input: Descripción -->
                        <div class="relative col-span-2">
                            <label class="text-xs text-[#3B3636]">OBSERVACIONES</label>
                            <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-20" 
                                placeholder="Observaciones adicionales"
                                name="Observaciones" disabled>
                            </textarea>
                        </div>
                        
                        <div class="relative col-span-2">
                            <label class="text-xs text-[#3B3636]">Presupuesto</label>
                            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" name="Presupuesto" disabled></input>
                        </div>
            </div>
        </div>

        <!-- Botones para cerrar -->
        <div class="flex justify-end ">
            <button class="text-white py-2 px-4 mr-2 rounded-full" onclick="closeOdontogramaModal()" style="background-color: #B4221B;">CERRAR</button>
        </div>
    </div>
</div>

<script>
function openOdontogramaModal(idOdontograma) {
    // Mostrar el modal
    const modal = document.getElementById('odontogramaModal');
    modal.classList.remove('hidden');

    // Realizar solicitud al servidor para obtener los datos del odontograma
    fetch('Solicitudes/obtener_odontograma.php', {
        method: 'POST',
        body: new URLSearchParams({ id_odontograma: idOdontograma })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            // Rellenar los campos del modal con los datos obtenidos
            modal.querySelector('textarea[name="Observaciones"]').value = data.odontograma.Observacion || '';
            modal.querySelector('textarea[name="Diagnostico"]').value = data.odontograma.Diagnostico || '';
            modal.querySelector('textarea[name="Tratamiento"]').value = data.odontograma.Tratamiento || '';
            modal.querySelector('input[name="Presupuesto"]').value = data.odontograma.Presupuesto || '';
        } else {
            console.error('Error al obtener los datos del odontograma:', data.message);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No se pudieron cargar los datos del odontograma.',
            });
        }
    })


}

function closeOdontogramaModal() {
    const modal = document.getElementById('odontogramaModal');
    modal.classList.add('hidden');
}

</script>