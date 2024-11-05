<!----------------------------------------------------------------- Modal ver Justificante ------------------------------------------------------------------------->
<div id="justificanteModal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 755px; width: 600px;">
    <!-- Botón X para cerrar el modal -->
    <button id="close-justificante-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
    
    <!-- Título principal -->
    <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 40px;">
      <h1 class="text-white text-2xl ml-12 mr-12">Justificante</h1>
      <!-- Botón para abrir el modal de editar paciente -->
      <button id='print-btn' class="w-6 h-6 bg-white rounded shadow-md">
        <i class='bx bx-printer' style='color:#3c3c3c; font-size: 1.5rem;'></i>
      </button>
    </div>

    <!-- Sección de Datos Personales -->
    <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
      <div class="grid grid-cols-2 gap-6">
        <!-- Input: Tratamiento -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
          <textarea id="treatmentTextareaJustificante" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Observación" disabled></textarea>
        </div>

        <!-- Input: Observaciones -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">OBSERVACIONES</label>
          <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Observaciones" disabled></textarea>
        </div>

        <!-- Select: Doctor -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">DOCTOR</label>
          <select id="doctorSelectJustificante" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
            <option disabled selected>Selecciona un doctor</option>
            <option value="doctor1">Dr. Juan Pérez</option>
            <option value="doctor2">Dra. Ana Gómez</option>
          </select>
        </div>

        <!-- Input: Rango de fechas -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">FECHA PARA JUSTIFICANTE</label>
          <div class="flex flex-col gap-2">
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="date" id="startDateJustificante" placeholder="Desde (dd/mm/aaaa)" disabled>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="date" id="endDateJustificante" placeholder="Hasta (dd/mm/aaaa)" disabled>
          </div>
          <input type="text" id="dateRangeJustificante" class="hidden">
        </div>
      </div>
    </div>

    <!-- Botón de cerrar -->
    <div class="flex justify-end mt-6">
      <button onclick="closeJustificanteModal()" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
        Cerrar
      </button>
    </div>
  </div>
</div>

<script>
  // Funciones para abrir y cerrar el modal de justificante
  function openJustificanteModal() {
    document.getElementById('justificanteModal').classList.remove('hidden');
  }

  function closeJustificanteModal() {
    document.getElementById('justificanteModal').classList.add('hidden');
  }

  // Cerrar el modal al hacer clic en la "X"
  const closeJustificanteModalX = document.getElementById('close-justificante-modal-x');
  closeJustificanteModalX.addEventListener('click', function() {
    closeJustificanteModal();
  });
</script>