<!------------------------------------------------------------- Modal para editar la cita -------------------------------------------------------------------->
<div id="editar-modal" class="fixed inset-0 flex z-50 items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: auto; width: 500px; max-height: 800px;">
    <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 50px;">
      <h1 class="text-white text-3xl mr-4">Editar Cita</h1>
    </div>
    <div id="editar-detalles">
      <!-- Campos para editar la cita -->
      <form id="editar-form">
      <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
        <div class="relative mb-4">
          <span class="text-gray-700 font-semibold">PACIENTE</span>
          <input 
            type="text"
            id="editar-paciente"
            class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black font-medium"
            placeholder="Nombre del Paciente">
        </div>
        <div class="relative mb-4">
          <span class="text-gray-700 font-semibold">UNIDAD</span>
          <input 
            type="text"
            id="editar-unidad"
            class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black font-medium"
            placeholder="Unidad Médica">
        </div>
        <div class="relative mb-4">
          <span class="text-gray-700 font-semibold">MOTIVO</span>
          <textarea 
            id="editar-motivo"
            class="pl-4 py-2 text-sm bg-[#E6ECF8] w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black font-medium rounded-md"
            placeholder="Motivo de la Cita"
            rows="4"
            style="resize: none;"
          ></textarea>
        </div>

        <div class="relative mb-4">
          <span class="text-gray-700 font-semibold">DOCTOR</span>
          <input 
            type="text"
            id="editar-doctor"
            class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black font-medium"
            placeholder="Nombre del Doctor">
        </div>
        <div class="relative mb-4">
          <span class="text-gray-700 font-semibold">FECHA</span>
          <input 
            type="date"
            id="editar-inicio"
            class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black font-medium">
        </div>
        <div class="relative mb-4">
          <span class="text-gray-700 font-semibold">HORA INICIO</span>
          <input 
            type="time"
            id="editar-inicio"
            class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black font-medium">
        </div>
        <div class="relative mb-4">
          <span class="text-gray-700 font-semibold">HORA FINALIZACIÓN</span>
          <input 
            type="time"
            id="editar-fin"
            class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black font-medium">
        </div>
      </form>
      </div>
    </div>
    <div class="flex justify-end space-x-2 mt-4">
      <!-- Botón para cancelar -->
      <button id="cancelar-editar" class="text-white px-4 py-2 rounded-full shadow-inner" style="background-color: #B4221B;">
        Cerrar
      </button>

      <!-- Botón para guardar -->
      <button id="guardar-editar" class="text-white px-4 py-2 rounded-full shadow-inner hover:shadow-lg transition-transform transform hover:scale-105" style="background-color: #B4221B;">
        Actualizar
      </button>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
  const editarModalEl = document.getElementById('editar-modal');
  const cancelarEditarBtn = document.getElementById('cancelar-editar');
  const abrirEditarBtn = document.getElementById('editar-modal-btn');

  // Abrir el modal de editar
  abrirEditarBtn.addEventListener('click', () => {
    // Asegúrate de que el modal de editar esté encima del modal de ver
    document.getElementById('cita-modal').classList.add('hidden'); // Oculta el modal de ver
    editarModalEl.classList.remove('hidden'); // Muestra el modal de editar
  });

  // Cerrar el modal de editar
  cancelarEditarBtn.addEventListener('click', () => {
    editarModalEl.classList.add('hidden'); // Oculta el modal de editar
    document.getElementById('cita-modal').classList.remove('hidden'); // Opcional: Muestra el modal de ver si es necesario
  });
});
</script>