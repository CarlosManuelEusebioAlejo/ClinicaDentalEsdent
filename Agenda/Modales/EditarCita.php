<div id="editar-modal" class="fixed inset-0 flex z-50 items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: auto; width: 500px; max-height: 800px;">
    <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 50px;">
      <h1 class="text-white text-3xl mr-4">Editar Cita</h1>
    </div>
    <div id="editar-detalles">
      <!-- Campos para editar la cita -->
      <form id="editar-form">
        <input type="hidden" id="editar-id-cita">  <!-- Campo oculto para id_cita -->
        <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
          <!-- Otros campos para editar -->
          <div class="relative mb-4">
            <span class="text-gray-700 font-semibold">PACIENTE</span>
            <input type="text" id="editar-paciente" class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md" placeholder="Nombre del Paciente" disabled>
          </div>
          <div class="relative mb-4">
            <span class="text-gray-700 font-semibold">UNIDAD</span>
            <select id="editar-unidad" class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md">
              <option value="1">Unidad 1</option>
              <option value="2">Unidad 2</option>
              <option value="3">Unidad 3</option>
            </select>
          </div>
          <div class="relative mb-4">
            <span class="text-gray-700 font-semibold">MOTIVO</span>
            <textarea id="editar-motivo" class="pl-4 py-2 text-sm bg-[#E6ECF8] w-full shadow-md" placeholder="Motivo de la Cita" rows="4"></textarea>
          </div>
          <div class="relative mb-4">
            <span class="text-gray-700 font-semibold">DOCTOR</span>
            <select id="editar-doctor" class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md">
              <!-- Los doctores se cargarán dinámicamente aquí -->
            </select>
          </div>
          <div class="relative mb-4">
            <span class="text-gray-700 font-semibold">FECHA</span>
            <input type="date" id="editar-inicio" class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md">
          </div>
          <div class="relative mb-4">
            <span class="text-gray-700 font-semibold">HORA INICIO</span>
            <input type="time" id="editar-inicio-time" class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md">
          </div>
          <div class="relative mb-4">
            <span class="text-gray-700 font-semibold">HORA FINALIZACIÓN</span>
            <input type="time" id="editar-fin" class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md">
          </div>
        </div>
      </form>
    </div>
    <div class="flex justify-end space-x-2 mt-4">
      <!-- Botón para cancelar -->
      <button id="cancelar-editar" class="text-white px-4 py-2 rounded-full shadow-inner" style="background-color: #B4221B;">
        Cerrar
      </button>

      <!-- Botón para guardar -->
      <button id="guardar-editar" class="text-white px-4 py-2 rounded-full shadow-inner" style="background-color: #B4221B;">
        Actualizar
      </button>
    </div>
  </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function () {
  const guardarEditarBtn = document.getElementById('guardar-editar'); // Botón de "Actualizar"

  // Manejo del botón "Actualizar" en el modal de edición
  guardarEditarBtn.addEventListener('click', async () => {
    const idCita = document.getElementById('editar-id-cita').value; // Obtener id_cita del campo oculto
    if (idCita) {
      try {
        // Validar que los campos esenciales estén completos
        if (!document.getElementById('editar-doctor').value || !document.getElementById('editar-motivo').value || !document.getElementById('editar-inicio').value || !document.getElementById('editar-inicio-time').value || !document.getElementById('editar-fin').value) {
          Swal.fire('Error', 'Por favor, complete todos los campos.', 'error');
          return; // Detener la actualización si falta algún campo
        }

        // Obtener el id_doctor y nombre_doctor del select
        const selectDoctor = document.getElementById('editar-doctor');
        const idDoctor = selectDoctor.value;
        const nombreDoctor = selectDoctor.options[selectDoctor.selectedIndex].text;

        // Mostrar SweetAlert de confirmación para la actualización
        const result = await Swal.fire({
          title: '¿Estás seguro de que deseas actualizar esta cita?',
          text: 'Una vez actualizada, no podrás deshacer esta acción.',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Sí, actualizar',
          cancelButtonText: 'Cancelar',
        });

        if (result.isConfirmed) {
          // Si se confirma, hacer la solicitud para actualizar la cita
          const response = await fetch('Solicitudes/ActualizarCita.php', {
            method: 'POST',
            body: JSON.stringify({
              id_cita: idCita,
              paciente: document.getElementById('editar-paciente').value,
              unidad: document.getElementById('editar-unidad').value,
              motivo: document.getElementById('editar-motivo').value,
              doctor: idDoctor, // Aquí se pasa el id_doctor
              nombre_doctor: nombreDoctor, // Aquí se pasa el nombre_doctor
              fecha_inicio: document.getElementById('editar-inicio').value,
              hora_inicio: document.getElementById('editar-inicio-time').value,
              hora_fin: document.getElementById('editar-fin').value,
            }),
            headers: {
              'Content-Type': 'application/json',
            },
          });

          if (response.ok) {
            Swal.fire('¡Actualizado!', 'La cita se ha actualizado correctamente.', 'success').then(() => {
              // Cerrar el modal de edición
              document.getElementById('editar-modal').classList.add('hidden');
              
              // Refrescar la página después de que la alerta se cierre
              window.location.reload(); // Esto recarga la página
            });
          } else {
            Swal.fire('Error', 'Hubo un problema al actualizar la cita.', 'error');
          }
        }
      } catch (error) {
        console.error('Error al actualizar la cita:', error);
        Swal.fire('Error', 'Hubo un error inesperado.', 'error');
      }
    }
  });
});

</script>
