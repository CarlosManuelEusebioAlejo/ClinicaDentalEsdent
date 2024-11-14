  <!------------------------------------------------------------- Modal Agregar Video -------------------------------------------------------------------->
  <div id="add-video-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
      <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 380px; width: 500px;">
          <!-- Botón X para cerrar el modal -->
          <button id="close-add-video-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
          
          <!-- Título principal -->
          <h1 class="text-white text-center rounded-full mb-6 text-2xl" style="background-color: #B4221B; height: 40px;">
              Agregar Video Descriptivo
          </h1>
          <form id="AgregarVideo" action="Solicitudes/AgregarExplicacion.php" method="POST">
              <!-- Sección de Datos del Video -->
              <div class="p-6 rounded-sm shadow-md" style="background-color: #f5f7ff;">
                  <div class="grid grid-cols-2 gap-6">
                      <!-- Input: Descripción -->
                      <div class="relative col-span-2">
                          <label class="text-xs text-[#3B3636]">DESCRIPCIÓN</label>
                          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                                type="text" 
                                placeholder="Ingrese un título descriptivo"
                                id="Descripcion"
                                name="Descripcion">
                      </div>

                      <!-- Input: URL -->
                      <div class="relative col-span-2">
                          <label class="text-xs text-[#3B3636]">URL</label>
                          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                                type="text" 
                                placeholder="Ingrese el URL"
                                id="Url"
                                name="Url">
                      </div>
                  </div>
              </div>

              <div class="flex justify-end mt-4">
                  <!-- Botón de cerrar -->
                  <button id="close-add-video-modal-btn" type="button" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
                      Cerrar
                  </button>
                  <!-- Botón de agregar -->
                  <button id="submit-add-video" type="submit" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
                      Agregar
                  </button>
              </div>
          </form>
      </div>
  </div>

  <script>
      document.addEventListener('DOMContentLoaded', (event) => {
          const form = document.getElementById('AgregarVideo'); // Asegúrate de que el ID coincida con el formulario

          form.addEventListener('submit', (event) => {
              event.preventDefault(); // Prevenir el envío del formulario por defecto

              Swal.fire({
                  title: "¿Estás seguro?",
                  text: "¡Se agregará un nuevo video descriptivo!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonText: "Sí, agregar",
                  cancelButtonText: "No, cancelar",
                  reverseButtons: true
              }).then((result) => {
                  if (result.isConfirmed) {
                      const formData = new FormData(form);
              
                      fetch('Solicitudes/AgregarExplicacion.php', {
                          method: 'POST',
                          body: formData
                      })
                      .then(response => response.json())
                      .then(data => {
                          console.log(data); // Para verificar la respuesta
                          if (data.status === 'success') {
                              Swal.fire({
                                  icon: 'success',
                                  title: 'Éxito',
                                  text: data.message,
                              }).then(() => {
                                  addVideoModal.classList.add('hidden'); // Cerrar el modal
                                  window.location.href = 'index.php'; // Redirigir a index.php
                              });
                          } else {
                              Swal.fire({
                                  icon: 'error',
                                  title: 'Error',
                                  text: data.message,
                              });
                          }
                      })
                      .catch(error => {
                          Swal.fire({
                              icon: 'error',
                              title: 'Error',
                              text: 'Hubo un problema al procesar la solicitud, O el video ya se encuentra registrado',
                          });
                          console.error('Error:', error); // Información adicional del error
                      });
                  } else if (result.dismiss === Swal.DismissReason.cancel) {
                      Swal.fire(
                          "Cancelado",
                          "No se ha agregado el video descriptivo",
                          "info"
                      );
                  }
              });
          });
      });
  </script>

  <script>
      // Variables de elementos
      const addVideoBtn = document.getElementById('add-video-btn');
      const addVideoModal = document.getElementById('add-video-modal');
      const closeAddVideoModalBtn = document.getElementById('close-add-video-modal-btn');
      const closeAddVideoModalX = document.getElementById('close-add-video-modal-x');

      // Función para abrir el modal
      if (addVideoBtn) {
          addVideoBtn.addEventListener('click', function() {
              addVideoModal.classList.remove('hidden');
          });
      }

      // Función para cerrar el modal al hacer clic en "Cerrar"
      closeAddVideoModalBtn.addEventListener('click', function(event) {
          event.preventDefault(); // Evita el envío del formulario
          addVideoModal.classList.add('hidden');
      });

      // Función para cerrar el modal al hacer clic en la "X"
      closeAddVideoModalX.addEventListener('click', function() {
          addVideoModal.classList.add('hidden');
      });
  </script>

