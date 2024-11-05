<!----------------------------------------------------------------- Modal ver Video ------------------------------------------------------------------------->
<div id="verVideoModal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
    <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 500px; width: 600px;">
      <!-- Botón X para cerrar el modal -->
      <button id="close-ver-video-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
          
      <!-- Título principal -->
      <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">
        Video Descriptivo
      </h1>
  
      <div class="p-6 rounded-sm shadow-md mb-6" style="background-color: #f5f7ff;">
        <!-- Espacio para el video -->
        <div class="flex bg-white justify-center items-center">
          <video id="videoContent" class="w-full h-60 object-contain rounded-lg shadow-lg" style="height: 240px;" controls>
            <source src="" type="video/mp4">
            Tu navegador no soporta la reproducción de videos.
          </video>
        </div>
      </div>
  
      <!-- Botón de cerrar -->
      <div class="flex justify-end mt-2">
        <button onclick="closeVerVideoModal()" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
          Cerrar
        </button>
      </div>
    </div>
  </div>
  
  <script>
    // Función para abrir el modal de video
    function openVerVideoModal() {
      document.getElementById('verVideoModal').classList.remove('hidden');
    }
  
    // Función para cerrar el modal de video
    function closeVerVideoModal() {
      document.getElementById('verVideoModal').classList.add('hidden');
    }
    
    // Cerrar el modal al hacer clic en la "X"
    document.getElementById('close-ver-video-modal-x').addEventListener('click', function() {
      closeVerVideoModal();
    });
  </script>