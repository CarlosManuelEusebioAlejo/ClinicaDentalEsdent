<!----------------------------------------------------------------- Modal ver Radiografía ------------------------------------------------------------------------->
<div id="verRadiografiaModal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
    <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 500px; width: 600px;">
      <!-- Botón X para cerrar el modal -->
      <button id="close-ver-radiografia-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
        
      <!-- Título principal -->
      <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">
        Ver Radiografía
      </h1>
  
      <div class="p-6 rounded-sm shadow-md mb-6" style="background-color: #f5f7ff;">
        <!-- Espacio para la imagen de radiografía -->
        <div class="flex bg-white justify-center items-center">
          <img id="radiografiaImage" src="" alt="Imagen de la radiografía" class="w-full h-60 object-contain rounded-lg shadow-lg" style="height: 240px;">
        </div>
      </div>
  
      <!-- Botón de cerrar -->
      <div class="flex justify-end mt-2">
        <button onclick="closeVerRadiografiaModal()" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
          Cerrar
        </button>
      </div>
  
    </div>
  </div>
  
  <script>
    // Función para abrir el modal de radiografía
    function openVerRadiografiaModal() {
      document.getElementById('verRadiografiaModal').classList.remove('hidden');
    }
  
    // Función para cerrar el modal de radiografía
    function closeVerRadiografiaModal() {
      document.getElementById('verRadiografiaModal').classList.add('hidden');
    }
    
    // Seleccionar el botón de cerrar "X" y el modal
    const closeVerRadiografiaModalX = document.getElementById('close-ver-radiografia-modal-x');
    const verRadiografiaModal = document.getElementById('verRadiografiaModal');

    // Cerrar el modal al hacer clic en la "X"
    closeVerRadiografiaModalX.addEventListener('click', function() {
        verRadiografiaModal.classList.add('hidden');
    });
  </script>