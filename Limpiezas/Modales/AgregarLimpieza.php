<!------------------------------------------------------------- Modal Agregar Limpieza -------------------------------------------------------------------->
<div id="limpieza-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
    <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 590px; width: 600px;">
      <!-- Botón X para cerrar el modal -->
      <button id="close-limpieza-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
       
      <!-- Título principal -->
      <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">
        Agregar Limpieza
      </h1>
  
      <!-- Sección de Datos de Limpieza -->
      <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
        <div class="grid grid-cols-2 gap-6">
          <!-- Input: Nombre del Paciente -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">NOMBRE DEL PACIENTE</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="Nombre del paciente">
          </div>
  
          <!-- Input: Número de Teléfono -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">NÚMERO DE TELEFONO</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number"min="0" placeholder="Número de telefono">
          </div>

          <!-- Input: Última Visita -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">ULTIMA VISITA</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="date" placeholder="Última visita">
          </div>

          <!-- Input: Siguiente Visita -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">SIGUIENTE VISITA</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="month" placeholder="Siguiente visita">
          </div>
      
        </div>
      </div>
  
      <div class="flex justify-end mt-6">
        <!-- Botón de cerrar -->
        <button id="close-limpieza-modal-btn" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
          Cerrar
        </button>
        <button id="submit-limpieza" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
          Guardar
        </button>
      </div>
    </div>
</div>
  
<script>
  const addLimpiezaBtn = document.getElementById('add-limpieza-btn');
  const closeLimpiezaModalBtn = document.getElementById('close-limpieza-modal-btn');
  const limpiezaModal = document.getElementById('limpieza-modal');
  const closeLimpiezaModalX = document.getElementById('close-limpieza-modal-x');
  
  // Mostrar el modal al hacer clic en "AGREGAR LIMPIEZA"
  addLimpiezaBtn.addEventListener('click', function() {
    limpiezaModal.classList.remove('hidden');
  });
  
  // Cerrar el modal al hacer clic en "Cerrar"
  closeLimpiezaModalBtn.addEventListener('click', function() {
    limpiezaModal.classList.add('hidden');
  });

  // Cerrar el modal al hacer clic en la "X"
  closeLimpiezaModalX.addEventListener('click', function() {
    limpiezaModal.classList.add('hidden');
  });
</script>