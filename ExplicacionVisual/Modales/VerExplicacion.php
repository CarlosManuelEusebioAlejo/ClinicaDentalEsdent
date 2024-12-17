<!-- Modal ver Video -->
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
        <!-- Iframe para YouTube -->
        <iframe id="videoContent" class="w-full h-60 object-contain rounded-lg shadow-lg" style="height: 240px;" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
      </div>
    </div>

    <!-- Descripción del video -->
    <div class="p-6 rounded-sm shadow-md mb-6" style="background-color: #f5f7ff;">
      <p id="videoDescription" class="text-lg text-gray-800"></p>
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
// Función para abrir el modal de video y cargar los datos dinámicamente
function openVerVideoModal(id_video) {
  // Realizar la solicitud al servidor para obtener la URL y la descripción del video
  fetch(`Solicitudes/obtenerVideo.php?id_video=${id_video}`)
    .then(response => response.json())
    .then(data => {
      // Comprobar si hay datos
      if (data.error) {
        alert('No se pudo encontrar el video');
      } else {
        // Obtener el ID de YouTube a partir de la URL
        const youtubeUrl = data.Url;
        const youtubeId = youtubeUrl.split('v=')[1].split('&')[0];  // Extraer el ID del video de YouTube

        // Rellenar el iframe con el enlace de YouTube
        const videoElement = document.getElementById('videoContent');
        videoElement.src = `https://www.youtube.com/embed/${youtubeId}`;

        // Rellenar la descripción
        document.getElementById('videoDescription').textContent = data.Descripcion;

        // Mostrar el modal
        document.getElementById('verVideoModal').classList.remove('hidden');
      }
    })
    .catch(error => {
      console.error('Error al obtener los datos del video:', error);
      alert('Hubo un error al cargar el video.');
    });
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
