<?php foreach ($historial as $a): ?>
<!-- Modal ver Información -->
<div id="infoModal<?= $a['id_tratamiento']; ?>" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">
    <button id="close-info-modal-x<?= $a['id_tratamiento']; ?>" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
    <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 40px;">
      <h1 class="text-white text-2xl mr-4">Información del Tratamiento</h1>
      
      <button id='edit-patient-btn<?= $a['id_tratamiento']; ?>' class="w-6 h-6 bg-white rounded shadow-md">
        <i class='bx bx-edit' style='color:#3c3c3c; font-size: 1.5rem;'></i>
      </button>
    </div>

    <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
      <div class="grid grid-cols-2 gap-6">
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
          <textarea id="treatmentTextarea<?= $a['id_tratamiento']; ?>" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Tratamiento" disabled></textarea>
        </div>

        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">COSTO</label>
          <input id="costInput<?= $a['id_tratamiento']; ?>" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number" placeholder="Costo" disabled>
        </div>
    
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">OBSERVACIONES</label>
          <textarea id="observationsTextarea<?= $a['id_tratamiento']; ?>" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Observaciones" disabled></textarea>
        </div>
    
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">DOCTOR</label>
          <textarea id="doctor<?= $a['id_tratamiento']; ?>" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Observaciones" disabled></textarea>
        </div>
    
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">FECHA DE REGISTRO</label>
          <input id="treatmentDateInput<?= $a['id_tratamiento']; ?>" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="Fecha de registro" disabled>
        </div>
      </div>
    </div>

    <div class="flex justify-end mt-6">
      <button onclick="closeInfoModal(<?= $a['id_tratamiento']; ?>)" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
        Cerrar
      </button>
    </div>
  
  </div>
</div>
<?php endforeach; ?>

<script>
function openInfoModal(idTratamiento) {
    const modal = document.getElementById(`infoModal${idTratamiento}`);
    modal.classList.remove('hidden');

    // Hacer la petición al backend usando el id_tratamiento
    fetch(`Solicitudes/VerHistorial.php?id_tratamiento=${idTratamiento}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('No se pudo cargar la información del tratamiento.');
            }
            return response.json();
        })
        .then(data => {
            // Asignar los datos al modal
            document.getElementById(`treatmentTextarea${idTratamiento}`).value = data.Tratamiento || '';
            document.getElementById(`costInput${idTratamiento}`).value = data.Costo || '';
            document.getElementById(`observationsTextarea${idTratamiento}`).value = data.Observacion || '';
            document.getElementById(`doctor${idTratamiento}`).value = data.Nombre_doctor || '';
            document.getElementById(`treatmentDateInput${idTratamiento}`).value = data.Fecha || '';
        })
        .catch(error => {
            console.error(error);
            alert('Hubo un problema al cargar los datos.');
        });
}

function closeInfoModal(idTratamiento) {
    const modal = document.getElementById(`infoModal${idTratamiento}`);
    modal.classList.add('hidden');
}

<?php foreach ($historial as $a): ?>
document.getElementById('close-info-modal-x<?= $a['id_tratamiento']; ?>').addEventListener('click', () => closeInfoModal(<?= $a['id_tratamiento']; ?>));
<?php endforeach; ?>
</script>
