<!------------------------------------------------------------- Modal Editar Presupuesto -------------------------------------------------------------------->
 <div id="edit-presupuesto-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
    <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">
      <!-- Botón X para cerrar el modal -->
      <button id="close-edit-presupuesto-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
      
      <!-- Título principal -->
      <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">
        Editar Presupuesto
      </h1>
  
      <!-- Sección de Datos del Presupuesto -->
      <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
        <div class="grid grid-cols-2 gap-6">
  
          <!-- Input: Tratamiento -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
            <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Descripción del tratamiento"></textarea>
          </div>

          <!-- Input: Observaciones -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">OBSERVACIONES</label>
            <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Observaciones adicionales"></textarea>
          </div>
  
          <!-- Input: Costo -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">COSTO</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number" placeholder="Costo del tratamiento">
          </div>
  
          <!-- Input: Fecha -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">FECHA</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="date" placeholder="Fecha de la cita">
          </div>
  
          <!-- Input: Válido hasta -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">VÁLIDO HASTA</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="date" placeholder="Válido hasta">
          </div>
          
        </div>
      </div>
  
      <!-- Botones de Cerrar y Guardar -->
      <div class="flex justify-end mt-6">
        <!-- Botón de cerrar -->
        <button id="close-edit-presupuesto-modal-btn" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
          Cerrar
        </button>
        <button id="submit-edit-presupuesto" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
          Actualizar
        </button>
      </div>
    </div>
  </div>
  
  <script>
    const editPresupuestoBtn = document.getElementById('edit-presupuesto-btn');
    const closeEditPresupuestoModalBtn = document.getElementById('close-edit-presupuesto-modal-btn');
    const editPresupuestoModal = document.getElementById('edit-presupuesto-modal');
    const closeEditPresupuestoModalX = document.getElementById('close-edit-presupuesto-modal-x');
  
    // Mostrar el modal al hacer clic en "EDITAR PRESUPUESTO"
    editPresupuestoBtn.addEventListener('click', function() {
      editPresupuestoModal.classList.remove('hidden');
    });
  
    // Cerrar el modal al hacer clic en "Cerrar"
    closeEditPresupuestoModalBtn.addEventListener('click', function() {
      editPresupuestoModal.classList.add('hidden');
    });

    // Cerrar el modal al hacer clic en la "X"
    closeEditPresupuestoModalX.addEventListener('click', function() {
        editPresupuestoModal.classList.add('hidden');
     });
  </script>