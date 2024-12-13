
<!----------------------------------------------------------------- Modal Editar del Tratamiento ------------------------------------------------------------------------->
<div id="edit-trat-Modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">

  <!-- Botón X para cerrar el modal -->
  <button id="close-edit-trat-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
   
    <!-- Título principal -->
    <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 40px;">
      <h1 class="text-white text-2xl mr-4">Información del Tratamiento</h1>
    </div>

    <!-- Sección de Datos Personales -->
    <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
      <div class="grid grid-cols-2 gap-6">
        <!-- Input: Tratamiento -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
          <textarea id="treatmentTextarea" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Observación" disabled></textarea>
        </div>

        <!-- Input: Costo -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">COSTO</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number" placeholder="Costo" disabled>
        </div>
    
        <!-- Input: Observaciones -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">OBSERVACIONES</label>
          <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Observaciones" disabled></textarea>
        </div>
    
        <!-- Select: Doctor -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">DOCTOR</label>
          <select id="doctorSelect" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
              <option disabled selected>Selecciona un doctor</option>
              <option value="doctor1">Dr. Juan Pérez</option>
              <option value="doctor2">Dra. Ana Gómez</option>
          </select>
        </div>
    
        <!-- Input: Próxima cita -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">PRÓXIMA CITA</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="Fecha de la próxima cita" disabled>
        </div>
    
        <!-- Input: Rango de fechas -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">FECHA PARA JUSTIFICANTE</label>
          <div class="flex flex-col gap-2">
              <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" id="startDate" placeholder="Desde (dd/mm/aaaa)" disabled>
              <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" id="endDate" placeholder="Hasta (dd/mm/aaaa)" disabled>
          </div>
          <input type="text" id="dateRange" class="hidden">
        </div>
      </div>
    </div>

    <!-- Botón de cerrar -->
    <div class="flex justify-end mt-6">
      <button onclick="closeTratModal()" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
        Cerrar
      </button>
    </div>
  </div>
</div>

<!-- Modal para Editar Información del Tratamiento -->
<div id="edit-info-Modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">
    <!-- Título principal -->
    <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 40px;">
      <h1 class="text-white text-2xl">Editar Información del Tratamiento</h1>
    </div>

    <!-- Campos del formulario para editar información -->
    <!-- Sección de Datos Personales -->
    <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
      <div class="grid grid-cols-2 gap-6">
        <!-- Input: Tratamiento -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
          <textarea id="treatmentTextarea" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Observación"></textarea>
        </div>

        <!-- Input: Costo -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">COSTO</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number" placeholder="Costo">
        </div>
    
        <!-- Input: Observaciones -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">OBSERVACIONES</label>
          <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Observaciones"></textarea>
        </div>
    
        <!-- Select: Doctor -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">DOCTOR</label>
          <select id="doctorSelect" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
              <option disabled selected>Selecciona un doctor</option>
              <option value="doctor1">Dr. Juan Pérez</option>
              <option value="doctor2">Dra. Ana Gómez</option>
          </select>
        </div>
    
        <!-- Input: Próxima cita -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">PRÓXIMA CITA</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="Fecha de la próxima cita">
        </div>
    
        <!-- Input: Rango de fechas -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">FECHA PARA JUSTIFICANTE</label>
          <div class="flex flex-col gap-2">
              <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="date" id="startDate" placeholder="Desde (dd/mm/aaaa)">
              <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="date" id="endDate" placeholder="Hasta (dd/mm/aaaa)">
          </div>
          <input type="text" id="dateRange" class="hidden">
        </div>
      </div>
    </div>

    <!-- Botón de cerrar -->
    <div class="flex justify-end mt-6">
      <button onclick="closeEditModal()" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
        Cerrar
      </button>
    </div>
  </div>
</div>

<script>
  // Función para abrir el modal de editar información del tratamiento
  function openEditModal() {
    document.getElementById('edit-info-Modal').classList.remove('hidden');
    closeTratModal(); // Cierra el modal de información al abrir el de editar
  }

  // Función para cerrar el modal de editar
  function closeEditModal() {
    document.getElementById('edit-info-Modal').classList.add('hidden');
  }

  // Abrir el modal de editar al hacer clic en el botón de editar paciente
  document.getElementById('edit-patient-btn').addEventListener('click', function() {
    openEditModal();
  });

  // Función para cerrar el modal de Información del Tratamiento
  function closeTratModal() {
    document.getElementById('edit-trat-Modal').classList.add('hidden');
  }

 // Cerrar el modal al hacer clic en la "X"
  const closeEditModalX = document.getElementById('close-edit-trat-modal-x');
  closeInfoModalX.addEventListener('click', function() {
    closeTratoModal();
  });


</script>
