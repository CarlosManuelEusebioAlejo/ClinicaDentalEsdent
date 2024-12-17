<!-- Modal Editar Doctor -->
<div id="EditarDoctor-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 805px;">
    <!-- Botón X para cerrar el modal -->
    <button id="close-editar-doctor-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>

    <!-- Título del modal -->
    <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 50px;">
      <h1 class="text-white text-3xl mr-4">Editar Datos del Doctor</h1>

    </div>
 <form id="edit-doctor-form">
    <!-- Sección de Datos Personales -->
    <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
      <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
        DATOS PERSONALES
      </h2>

      <div class="grid gap-6">
        <!-- Input: Nombre(s) -->
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

        <!-- Input: Contraseña -->
        <div class="relative mb-4">
          <label for="edit-contrasena" class="text-gray-700 font-semibold text-sm">Contraseña</label>
          <i class='bx bx-lock absolute left-3 top-3 text-gray-600'></i>
          <input id="edit-contrasena" class="pl-12 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none text-[#3B3636] border-2 border-gray-300 hover:border-[#B4221B] focus:border-[#B4221B]" placeholder="CONTRASEÑA">
          <p class="text-gray-500 text-xs">Contraseña del doctor (cifrada).</p>
        </div>
      </div>
    </div>

    <!-- Botones de Cerrar y Guardar -->
    <div class="flex justify-between mt-6">
      <button id="close-editar-doctor-btn" class="text-white px-4 py-2 rounded-full shadow-inner" style="background-color: #B4221B;">Cerrar</button>
      <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded-full shadow-md hover:bg-green-600">
        Guardar Cambios
      </button>
    </div>
</form>
  </div>
</div>


<script>
function openEditDoctorModal(idDoctor) {
  // Llamada AJAX para obtener los datos del doctor
  fetch(`Solicitudes/obtener_doctor.php?id_doctor=${idDoctor}`)
    .then(response => response.json())  // Esperamos una respuesta en formato JSON
    .then(data => {
      if (data) {
        // Abre el modal de edición
        const modal = document.getElementById('EditarDoctor-modal');
        modal.classList.remove('hidden');
        
        // Rellenar los campos con los datos del doctor para editar
        document.getElementById('edit-nombre').value = data.Nombre_doctor;
        document.getElementById('edit-correo').value = data.Correo;
        document.getElementById('edit-especialidad').value = data.Especialidad;
        document.getElementById('edit-numero').value = data.Numero_telefono;
        document.getElementById('edit-experiencia').value = data.experiencia_anios;
        document.getElementById('edit-conocimientos').value = data.Conocimientos_tecnicos;
        document.getElementById('edit-contrasena').value = data.Contrasena;

        // Guardar el id_doctor para usarlo al enviar el formulario
        const form = document.getElementById('edit-doctor-form');
        form.setAttribute('data-id-doctor', idDoctor);
      }
    })
    .catch(error => console.error('Error al obtener los datos del doctor:', error));
}

// Función para cerrar el modal de edición
const closeEditarDoctorBtn = document.getElementById('close-editar-doctor-x');
closeEditarDoctorBtn.addEventListener('click', () => {
  const modal = document.getElementById('EditarDoctor-modal');
  modal.classList.add('hidden');
});

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
  const contrasena = document.getElementById('edit-contrasena').value;

  // Muestra alerta de carga con SweetAlert
  Swal.fire({
    title: 'Cargando...',
    text: 'Por favor, espere mientras se guardan los cambios.',
    showConfirmButton: false,
    didOpen: () => {
      Swal.showLoading(); // Muestra el icono de carga
    }
  });

  // Enviar los datos modificados al servidor usando AJAX
  fetch('Solicitudes/EditarDoctor.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({
      id_doctor: idDoctor,
      Nombre_doctor: nombre,
      Correo: correo,
      Especialidad: especialidad,
      Numero_telefono: numero,
      experiencia_anios: experiencia,
      Conocimientos_tecnicos: conocimientos,
      Contrasena: contrasena
    })
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      // Si la actualización fue exitosa, muestra un mensaje de éxito
      Swal.fire({
        title: '¡Éxito!',
        text: 'Los datos del doctor han sido actualizados correctamente.',
        icon: 'success',
        confirmButtonText: 'Cerrar'
      }).then(() => {
        // Recargar la página después de mostrar el mensaje de éxito
        window.location.reload();
      });
    } else {
      // Si hubo un error, muestra un mensaje de error
      Swal.fire({
        title: '¡Error!',
        text: 'Hubo un error al guardar los cambios. Inténtalo nuevamente.',
        icon: 'error',
        confirmButtonText: 'Cerrar'
      });
    }
  })
  .catch(error => {
    // Muestra un mensaje de error si la solicitud falla
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