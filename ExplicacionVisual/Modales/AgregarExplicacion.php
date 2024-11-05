
<!------------------------------------------------------------- Modal Agregar Video -------------------------------------------------------------------->
<div id="add-video-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
    <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 380px; width: 500px;">
      <!-- Botón X para cerrar el modal -->
      <button id="close-add-video-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
         
      <!-- Título principal -->
      <h1 class="text-white text-center rounded-full mb-6 text-2xl" style="background-color: #B4221B; height: 40px;">
        Agregar Video Descriptivo
      </h1>
  
      <!-- Sección de Datos del Video -->
      <div class="p-6 rounded-sm shadow-md" style="background-color: #f5f7ff;">
        <div class="grid grid-cols-2 gap-6">

          <!-- Input: Descripción -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">DESCRIPCIÓN</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="Ingrese un título descriptivo">
          </div>
  
          <!-- Input: URL -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">URL</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="Ingrese el URL">
          </div>
      
        </div>
      </div>
  
      <div class="flex justify-end mt-4">
        <!-- Botón de cerrar -->
        <button id="close-add-video-modal-btn" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
          Cerrar
        </button>
        <button id="submit-add-video" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
          Agregar
        </button>
      </div>
    </div>
</div>
  
<script>
  const addVideoBtn = document.getElementById('add-video-btn');
  const closeAddVideoModalBtn = document.getElementById('close-add-video-modal-btn');
  const addVideoModal = document.getElementById('add-video-modal');
  const closeAddVideoModalX = document.getElementById('close-add-video-modal-x');
  
  // Mostrar el modal al hacer clic en "AGREGAR VIDEO"
  addVideoBtn.addEventListener('click', function() {
    addVideoModal.classList.remove('hidden');
  });
  
  // Cerrar el modal al hacer clic en "Cerrar"
  closeAddVideoModalBtn.addEventListener('click', function() {
    addVideoModal.classList.add('hidden');
  });
  // Cerrar el modal al hacer clic en la "X"
  closeAddVideoModalX.addEventListener('click', function() {
          addVideoModal.classList.add('hidden');
        });
</script>