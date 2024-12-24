<?php foreach ($historial as $a): ?>
<div id="edit-trat-Modal<?= $a['id_tratamiento']; ?>" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">

    <!-- Botón X para cerrar el modal -->
    <button id="close-edit-trat-modal-x<?= $a['id_tratamiento']; ?>" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>

    <!-- Título -->
    <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 40px;">
      <h1 class="text-white text-2xl">Editar Tratamiento</h1>
    </div>

    <!-- Formulario -->
    <form id="edit-treatment-form<?= $a['id_tratamiento']; ?>" class="p-6 rounded-sm shadow-md" style="background-color: #f5f7ff;">
      <div class="grid grid-cols-2 gap-6">
        <input type="hidden" name="EDITAR_id_tratamiento" value="<?= $a['id_tratamiento']; ?>">

        <!-- Tratamiento -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
          <textarea id="edit-treatmentTextarea<?= $a['id_tratamiento']; ?>" name="EDITAR_Tratamiento" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Editar Tratamiento"></textarea>
        </div>

        <!-- Observaciones -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">OBSERVACIONES</label>
          <textarea id="edit-observationsTextarea<?= $a['id_tratamiento']; ?>" name="EDITAR_Observaciones" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Editar Observaciones"></textarea>
        </div>

        <!-- Costo -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">COSTO</label>
          <input id="edit-costInput<?= $a['id_tratamiento']; ?>" name="EDITAR_costo" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number" placeholder="Editar Costo">
        </div>

        <!-- Select: Doctor -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">DOCTOR</label>
          <select id="edit-doctor<?= $a['id_tratamiento']; ?>" name="EDITAR_doctor" required class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
            <option disabled selected>Selecciona un doctor</option>
            <?php
            $conn = new mysqli("localhost", "root", "", "clinicadentalesdent");
            if ($conn->connect_error) die("Conexión fallida: " . $conn->connect_error);
            $result = $conn->query("SELECT id_doctor, Nombre_doctor FROM doctores");
            while ($row = $result->fetch_assoc()) {
                $value = $row['id_doctor']; // Solo el ID
                echo "<option value='{$value}'>{$row['Nombre_doctor']}</option>";
            }
            $conn->close();
            ?>
          </select>
        </div>

        <!-- Fecha -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">FECHA DE REGISTRO</label>
          <input id="edit-treatmentDateInput<?= $a['id_tratamiento']; ?>" name="EDITAR_fecha_registro" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="date" placeholder="Editar Fecha">
        </div>
      </div>

      <!-- Botón Guardar -->
      <div class="flex justify-end mt-6">
        <button type="submit" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #1E8449;">Guardar Cambios</button>
        <button type="button" onclick="closeEditTratModal(<?= $a['id_tratamiento']; ?>)" class="text-white px-4 py-2 rounded-full shadow-inner" style="background-color: #B4221B;">Cancelar</button>
      </div>
    </form>
  </div>
</div>
<?php endforeach; ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
// Abrir y cerrar modal dinámicamente
<?php foreach ($historial as $a): ?>
document.getElementById('edit-patient-btn<?= $a['id_tratamiento']; ?>').addEventListener('click', function () {
    openEditModal(<?= $a['id_tratamiento']; ?>);
});

document.getElementById('edit-treatment-form<?= $a['id_tratamiento']; ?>').addEventListener('submit', function (e) {
    e.preventDefault(); // Evitar recargar la página
    updateTreatment(<?= $a['id_tratamiento']; ?>, this);
});
<?php endforeach; ?>

function openEditModal(idTratamiento) {
    const modal = document.getElementById(`edit-trat-Modal${idTratamiento}`);
    modal.classList.remove('hidden');

    fetch(`Solicitudes/Verhistorial.php?id_tratamiento=${idTratamiento}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById(`edit-treatmentTextarea${idTratamiento}`).value = data.Tratamiento || '';
            document.getElementById(`edit-costInput${idTratamiento}`).value = data.Costo || '';
            document.getElementById(`edit-observationsTextarea${idTratamiento}`).value = data.Observacion || '';
            document.getElementById(`edit-doctor${idTratamiento}`).value = data.id_doctor || '';
            document.getElementById(`edit-treatmentDateInput${idTratamiento}`).value = formatDateForInput(data.Fecha || '');
        })
        .catch(error => console.error('Error al cargar los datos:', error));
}

function closeEditTratModal(id) {
    const modal = document.getElementById(`edit-trat-Modal${id}`);
    modal.classList.add('hidden');
}

function updateTreatment(idTratamiento, form) {
    const formData = new FormData(form);
    fetch(`Solicitudes/ActualizarTratamiento.php`, {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            Swal.fire({
                title: 'Éxito',
                text: 'Tratamiento actualizado con éxito',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Cerrar el modal y recargar la página después de que el usuario cierre la alerta
                    closeEditTratModal(idTratamiento);
                    location.reload(); // Recargar la página
                }
            });
        } else {
            Swal.fire({
                title: 'Error',
                text: 'Error al actualizar el tratamiento',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
        }
    })
    .catch(error => {
        console.error('Error al enviar los datos:', error);
        Swal.fire({
            title: 'Error',
            text: 'Ocurrió un error al intentar actualizar el tratamiento',
            icon: 'error',
            confirmButtonText: 'Aceptar'
        });
    });
}


function formatDateForInput(dateString) {
    const date = new Date(dateString);
    return date.toISOString().split('T')[0];
}
</script>
