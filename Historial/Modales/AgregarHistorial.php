<!------------------------------------------------------------- Modal Agregar tratamiento -------------------------------------------------------------------->

    <div id="treatment-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
      <div class=" p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">
          <!-- Botón X para cerrar el modal -->
 <button id="close-treatment-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>

        <!-- Título principal -->
        <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">
          Agregar Tratamiento
        </h1>

        <!-- Sección de Datos Personales -->
        <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
        <div class="grid grid-cols-2 gap-6">
          <!-- Input: Tratamiento -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
            <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Observación"></textarea>
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
      
          <!-- Input: Fecha de la próxima cita -->
          <div class="relative col-span-2">
              <label class="text-xs text-[#3B3636]">PROXIMA CITA</label>
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

      <div class="flex justify-end mt-6">
          <!-- Botón de cerrar -->
          <button id="close-modal-btn" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
            Cerrar
          </button>
          <button id="submit-treatment" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
            Agregar Tratamiento
          </button>
      </div>

  <script>
      const addTreatmentBtn = document.getElementById('add-treatment-btn');
      const closeModalBtn = document.getElementById('close-modal-btn');
      const modal = document.getElementById('treatment-modal');
      
      // Mostrar el modal al hacer clic en "AGREGAR PACIENTE"
      addTreatmentBtn.addEventListener('click', function() {
        modal.classList.remove('hidden');
      });
      
      // Cerrar el modal al hacer clic en "Cerrar"
      closeModalBtn.addEventListener('click', function() {
        modal.classList.add('hidden');
      });
      
      // Cerrar el modal al hacer clic en la "X"
      const closeTreatmentModalX = document.getElementById('close-treatment-modal-x');
      closeTreatmentModalX.addEventListener('click', function() {
        modal.classList.add('hidden');
      });
      

    // Script para manejar el calendario de selección de rango de fechas
    const startDateInput = document.getElementById('startDate');
          const endDateInput = document.getElementById('endDate');
      
          startDateInput.addEventListener('focus', function () {
              this.type = 'date';
          });
      
          endDateInput.addEventListener('focus', function () {
              this.type = 'date';
          });
      
          startDateInput.addEventListener('blur', function () {
              if (!this.value) {
                  this.type = 'text';
              }
          });
      
          endDateInput.addEventListener('blur', function () {
              if (!this.value) {
                  this.type = 'text';
              }
          });

  </script>
