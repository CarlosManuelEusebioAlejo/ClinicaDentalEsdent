<!-- Modal Editar Doctor -->
<div id="EditarDoctor-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 800px;">
    <!-- Botón X para cerrar el modal -->
    <button type="button" id="close-editar-doctor-X" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>

    <!-- Título del modal -->
    <div class="rounded-full shadow-md items-center justify-center flex text-center mb-6" style="background-color: #B4221B; height: 50px;">
      <h1 class="text-white text-3xl">Editar Datos del Doctor</h1>
    </div>

    <form id="edit-doctor-form">
      <!-- Sección de Datos Personales -->
      <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
        <h2 class="text-white px-4 pt-1 mb-4 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
          DATOS PERSONALES
        </h2>
        <div class="grid gap-6">
          <!-- Input: Nombre Completo -->
          <div class="relative mb-4">
            <label for="edit-nombre" class="text-gray-700 font-semibold text-sm">Nombre Completo</label>
            <i class='bx bx-user absolute left-3 top-3 text-gray-600'></i>
            <input id="edit-nombre" class="pl-12 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none text-[#3B3636] border-2 border-gray-300 hover:border-[#B4221B] focus:border-[#B4221B]" placeholder="NOMBRE" required>
            <p class="text-gray-500 text-xs">Nombre completo del doctor.</p>
          </div>

          <!-- Input: Correo Electrónico -->
          <div class="relative mb-4">
            <label for="edit-correo" class="text-gray-700 font-semibold text-sm">Correo Electrónico</label>
            <i class='bx bx-envelope absolute left-3 top-3 text-gray-600'></i>
            <input id="edit-correo" class="pl-12 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none text-[#3B3636] border-2 border-gray-300 hover:border-[#B4221B] focus:border-[#B4221B]" placeholder="CORREO ELECTRÓNICO" required>
            <p class="text-gray-500 text-xs">Correo electrónico para contacto.</p>
          </div>

          <!-- Input: Especialidad -->
          <div class="relative mb-4">
            <label for="edit-especialidad" class="text-gray-700 font-semibold text-sm">Especialidad</label>
            <i class='bx bx-briefcase absolute left-3 top-3 text-gray-600'></i>
            <input id="edit-especialidad" class="pl-12 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none text-[#3B3636] border-2 border-gray-300 hover:border-[#B4221B] focus:border-[#B4221B]" placeholder="ESPECIALIDAD" required>
            <p class="text-gray-500 text-xs">Especialidad médica del doctor.</p>
          </div>

          <!-- Input: Número de Teléfono -->
          <div class="relative mb-4">
            <label for="edit-numero" class="text-gray-700 font-semibold text-sm">Número de Teléfono</label>
            <i class='bx bx-phone absolute left-3 top-3 text-gray-600'></i>
            <input id="edit-numero" class="pl-12 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none text-[#3B3636] border-2 border-gray-300 hover:border-[#B4221B] focus:border-[#B4221B]" placeholder="NÚMERO DE TELÉFONO" required>
            <p class="text-gray-500 text-xs">Número de teléfono de contacto.</p>
          </div>

          <!-- Input: Años de Experiencia -->
          <div class="relative mb-4">
            <label for="edit-experiencia" class="text-gray-700 font-semibold text-sm">Años de Experiencia</label>
            <i class='bx bx-calendar absolute left-3 top-3 text-gray-600'></i>
            <input id="edit-experiencia" class="pl-12 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none text-[#3B3636] border-2 border-gray-300 hover:border-[#B4221B] focus:border-[#B4221B]" placeholder="AÑOS DE EXPERIENCIA" required>
            <p class="text-gray-500 text-xs">Años de experiencia profesional.</p>
          </div>

          <!-- Input: Conocimientos Técnicos -->
          <div class="relative mb-4">
            <label for="edit-conocimientos" class="text-gray-700 font-semibold text-sm">Conocimientos Técnicos</label>
            <i class='bx bx-cogs absolute left-3 top-3 text-gray-600'></i>
            <input id="edit-conocimientos" class="pl-12 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none text-[#3B3636] border-2 border-gray-300 hover:border-[#B4221B] focus:border-[#B4221B]" placeholder="CONOCIMIENTOS TÉCNICOS">
            <p class="text-gray-500 text-xs">Conocimientos o habilidades técnicas del doctor.</p>
          </div>
        </div>
      </div>

<!-- Sección de Certificado -->
<div class="p-6 rounded-lg shadow-xl mb-10" style="background-color: #fff;">
  <h2 class="text-white px-4 pt-1 mb-4 rounded-full text-xl" style="background-color: #B4221B;">
    CERTIFICADO
  </h2>
  <div class="flex items-center justify-center">
    <div class="flex items-center space-x-6">
      <!-- Input para seleccionar el archivo con estilo -->
      <label for="foto-input2" class="flex items-center justify-center p-4 bg-black text-white rounded-full cursor-pointer hover:bg-gray-800 transition-all duration-300 shadow-lg">
        <i class="bx bx-upload text-3xl mr-3"></i> Subir Certificado
      </label>
      <input type="file" id="foto-input2" name="Certificado" accept="image/*" class="hidden">
      
      <!-- Contenedor de la imagen -->
      <div id="foto-display2" class="border-2 border-gray-300 w-64 h-64 rounded-md flex items-center justify-center relative overflow-hidden shadow-lg bg-gray-100">
        <!-- Imagen del certificado -->
        <img id="certificado-img3" src="" class="hidden w-full h-full object-cover rounded-md absolute inset-0">
        <!-- Texto de placeholder -->
        <span id="placeholder-text" class="text-gray-600 font-semibold">Arrastra o selecciona una imagen</span>
      </div>
    </div>
  </div>
</div>




<!-- Botones de Cerrar y Guardar -->
<div class="flex justify-between mt-6">
  <button type="button" id="close-editar-doctor-btn" class="text-white px-4 py-2 rounded-full shadow-inner" style="background-color: #B4221B;">Cerrar</button>
  <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-full shadow-md hover:bg-green-600">
    Guardar Cambios
  </button>
</div>
</form>
</div>
</div>

<script>
// Evento para manejar la carga de la imagen
const fotoInput2 = document.getElementById('foto-input2');
const fotoDisplay2 = document.getElementById('foto-display2');
const certificadoImg = document.getElementById('certificado-img3');
const placeholderText = document.getElementById('placeholder-text');

// Evento de carga de archivo
fotoInput2.addEventListener('change', function(event) {
  const file = event.target.files[0]; // Obtener el archivo seleccionado

  if (file) {
    const reader = new FileReader(); // Crear un lector de archivos

    // Función que se ejecuta cuando la lectura del archivo se completa
    reader.onload = function(e) {
      certificadoImg.src = e.target.result; // Establece la URL de la imagen
      certificadoImg.classList.remove('hidden'); // Muestra la imagen
      placeholderText.classList.add('hidden'); // Oculta el texto de placeholder
    };

    reader.readAsDataURL(file); // Leer el archivo como una URL de datos
  } else {
    certificadoImg.classList.add('hidden'); // Oculta la imagen si no hay archivo
    placeholderText.classList.remove('hidden'); // Muestra el texto de placeholder
  }
});

// Si ya existe un certificado, mostrar la imagen
function showExistingCertificate(certificadoPath) {
  if (certificadoPath) {
    // Eliminar el primer "../" en la ruta de la imagen
    const certificadoSrc = certificadoPath.replace(/^(\.\.\/)/, ''); // Quita el '../' al inicio de la ruta
    certificadoImg.src = certificadoSrc; // Establece la ruta corregida
    certificadoImg.classList.remove('hidden'); // Muestra la imagen
    placeholderText.classList.add('hidden'); // Oculta el texto de placeholder
  } else {
    certificadoImg.classList.add('hidden'); // Oculta la imagen
    placeholderText.classList.remove('hidden'); // Muestra el texto de placeholder
  }
}

</script>

<script>
// Llamada AJAX para obtener los datos del doctor
// Llamada AJAX para obtener los datos del doctor
function openEditDoctorModal(idDoctor) {
  fetch(`Solicitudes/obtener_doctor.php?id_doctor=${idDoctor}`)
    .then(response => response.json())
    .then(data => {
      if (data) {
        const modal = document.getElementById('EditarDoctor-modal');
        modal.classList.remove('hidden');
        
        // Rellenar el formulario con los datos del doctor
        document.getElementById('edit-nombre').value = data.Nombre_doctor;
        document.getElementById('edit-correo').value = data.Correo;
        document.getElementById('edit-especialidad').value = data.Especialidad;
        document.getElementById('edit-numero').value = data.Numero_telefono;
        document.getElementById('edit-experiencia').value = data.experiencia_anios;
        document.getElementById('edit-conocimientos').value = data.Conocimientos_tecnicos;

        const form = document.getElementById('edit-doctor-form');
        form.setAttribute('data-id-doctor', idDoctor);

        // Mostrar la imagen del certificado si existe
        const fotoDisplay2 = document.getElementById('foto-display2');
        const certificadoImg3 = document.getElementById('certificado-img3');
        const placeholderText = document.getElementById('placeholder-text');

        if (data.Certificado) {
          // Eliminar el primer "../" en la ruta de la imagen
          const certificadoPath = data.Certificado.replace(/^(\.\.\/)/, ''); // Quita el '../' al inicio de la ruta
          certificadoImg3.src = certificadoPath; // Establece la ruta corregida
          certificadoImg3.classList.remove('hidden');
          placeholderText.classList.add('hidden');
        } else {
          // Si no hay imagen, mostrar el texto de placeholder
          certificadoImg3.classList.add('hidden');
          placeholderText.classList.remove('hidden');
        }
      }
    })
    .catch(error => console.error('Error al obtener los datos del doctor:', error));
}


// Cerrar modal
const closeEditarDoctorBtn = document.getElementById('close-editar-doctor-btn');
closeEditarDoctorBtn.addEventListener('click', () => {
  const modal = document.getElementById('EditarDoctor-modal');
  modal.classList.add('hidden');

  
});

// Cerrar modal
const closeEditarDoctorX = document.getElementById('close-editar-doctor-X');
closeEditarDoctorX.addEventListener('click', () => {
  const modal = document.getElementById('EditarDoctor-modal');
  modal.classList.add('hidden');

  
});
</script>

<script>
// Enviar los datos editados
const editDoctorForm = document.getElementById('edit-doctor-form');
editDoctorForm.addEventListener('submit', function(event) {
  event.preventDefault();

  const idDoctor = editDoctorForm.getAttribute('data-id-doctor');
  const nombre = document.getElementById('edit-nombre').value;
  const correo = document.getElementById('edit-correo').value;
  const especialidad = document.getElementById('edit-especialidad').value;
  const numero = document.getElementById('edit-numero').value;
  const experiencia = document.getElementById('edit-experiencia').value;
  const conocimientos = document.getElementById('edit-conocimientos').value;
  const certificado = fotoInput2.files[0]; // Obtener el archivo de certificado

  // Muestra alerta de carga con SweetAlert
  Swal.fire({
    title: 'Cargando...',
    text: 'Por favor, espere mientras se guardan los cambios.',
    showConfirmButton: false,
    didOpen: () => {
      Swal.showLoading(); // Muestra el icono de carga
    }
  });

  // Preparar el formulario de datos para enviar
  const formData = new FormData();
  formData.append('id_doctor', idDoctor);
  formData.append('Nombre_doctor', nombre);
  formData.append('Correo', correo);
  formData.append('Especialidad', especialidad);
  formData.append('Numero_telefono', numero);
  formData.append('experiencia_anios', experiencia);
  formData.append('Conocimientos_tecnicos', conocimientos);
  
  // Verificar si hay archivo de certificado y agregarlo
  if (certificado) {
    formData.append('Certificado', certificado);
  }

  // Enviar la solicitud al servidor
  fetch('Solicitudes/EditarDoctor.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())  // Usamos json() para obtener la respuesta como objeto
  .then(data => {
    // Cerrar el SweetAlert y mostrar el mensaje de éxito o error
    if (data.success) {
      Swal.fire({
        title: '¡Éxito!',
        text: 'Los datos del doctor han sido actualizados correctamente.',
        icon: 'success',
        confirmButtonText: 'Cerrar'
      }).then(() => {
        // Recargar la página después de cerrar el SweetAlert
        window.location.reload();
      });
    } else {
      Swal.fire({
        title: '¡Error!',
        text: 'Hubo un error al guardar los cambios. Inténtalo nuevamente.',
        icon: 'error',
        confirmButtonText: 'Cerrar'
      });
    }
  })
  .catch(error => {
    // Si ocurre un error, mostrar el mensaje de error
    Swal.fire({
      title: '¡Error!',
      text: 'Hubo un problema de conexión. Por favor, intenta más tarde.',
      icon: 'error',
      confirmButtonText: 'Cerrar'
    });
    console.error('Error al enviar la solicitud:', error);
  });
});

</script>


