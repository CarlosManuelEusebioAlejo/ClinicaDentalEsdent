<!-- Modal Ver Registro -->
<div id="VerRegistro-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 805px;">
    <!-- Botón X para cerrar el modal -->
    <button id="close-ver-registro-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>

    <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 50px;">
      <h1 class="text-white text-3xl mr-4">Datos del Doctor</h1>
      <button id="edit-doctor-btn" class="w-8 h-8 pt-1 bg-white rounded-full shadow-md">
        <i class='bx bx-edit' style='color:#3c3c3c; font-size: 1.5rem; margin-top: 1.2px;'></i>
      </button>
    </div>

    <!-- Sección de Datos Personales -->
    <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
      <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
        DATOS PERSONALES
      </h2>

      <div class="grid gap-6 grid-cols-2">
        <!-- Input: Nombre(s) -->
        <div class="relative mb-4">
          <label for="doctor-name" class="text-gray-700 font-semibold text-sm">Nombre Completo</label>
          <i class='bx bx-user absolute left-3 top-3 text-gray-600'></i>
          <input id="doctor-name" class="pl-12 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none text-[#3B3636] border-2 border-gray-300 hover:border-[#B4221B] focus:border-[#B4221B]" placeholder="NOMBRE" readonly>
          <p class="text-gray-500 text-xs">Nombre completo del doctor.</p>
        </div>

        <!-- Input: Correo Electrónico -->
        <div class="relative mb-4">
          <label for="doctor-email" class="text-gray-700 font-semibold text-sm">Correo Electrónico</label>
          <i class='bx bx-envelope absolute left-3 top-3 text-gray-600'></i>
          <input id="doctor-email" class="pl-12 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none text-[#3B3636] border-2 border-gray-300 hover:border-[#B4221B] focus:border-[#B4221B]" placeholder="CORREO ELECTRÓNICO" readonly>
          <p class="text-gray-500 text-xs">Correo electrónico para contacto.</p>
        </div>

        <!-- Input: Especialidad -->
        <div class="relative mb-4">
          <label for="doctor-specialty" class="text-gray-700 font-semibold text-sm">Especialidad</label>
          <i class='bx bx-briefcase absolute left-3 top-3 text-gray-600'></i>
          <input id="doctor-specialty" class="pl-12 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none text-[#3B3636] border-2 border-gray-300 hover:border-[#B4221B] focus:border-[#B4221B]" placeholder="ESPECIALIDAD" readonly>
          <p class="text-gray-500 text-xs">Especialidad médica del doctor.</p>
        </div>

        <!-- Input: Número de Teléfono -->
        <div class="relative mb-4">
          <label for="doctor-phone" class="text-gray-700 font-semibold text-sm">Número de Teléfono</label>
          <i class='bx bx-phone absolute left-3 top-3 text-gray-600'></i>
          <input id="doctor-phone" class="pl-12 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none text-[#3B3636] border-2 border-gray-300 hover:border-[#B4221B] focus:border-[#B4221B]" placeholder="NÚMERO DE TELÉFONO" readonly>
          <p class="text-gray-500 text-xs">Número de teléfono de contacto.</p>
        </div>

        <!-- Input: Años de Experiencia -->
        <div class="relative mb-4">
          <label for="doctor-experience" class="text-gray-700 font-semibold text-sm">Años de Experiencia</label>
          <i class='bx bx-calendar absolute left-3 top-3 text-gray-600'></i>
          <input id="doctor-experience" class="pl-12 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none text-[#3B3636] border-2 border-gray-300 hover:border-[#B4221B] focus:border-[#B4221B]" placeholder="AÑOS DE EXPERIENCIA" readonly>
          <p class="text-gray-500 text-xs">Años de experiencia profesional.</p>
        </div>

        <!-- Input: Conocimientos Técnicos -->
        <div class="relative mb-4">
          <label for="doctor-skills" class="text-gray-700 font-semibold text-sm">Conocimientos Técnicos</label>
          <i class='bx bx-cogs absolute left-3 top-3 text-gray-600'></i>
          <input id="doctor-skills" class="pl-12 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none text-[#3B3636] border-2 border-gray-300 hover:border-[#B4221B] focus:border-[#B4221B]" placeholder="CONOCIMIENTOS TÉCNICOS" readonly>
          <p class="text-gray-500 text-xs">Conocimientos o habilidades técnicas del doctor.</p>
        </div>
      </div>
    </div>

    <!-- Sección de Certificado -->
    <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
      <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B;">CERTIFICADO</h2>
      <div class="flex justify-center">
        <div id="foto-display" class="border-2 border-gray-300 w-64 h-64 rounded-md flex items-center justify-center shadow-md overflow-hidden">
          <!-- Aquí se mostrará la fotografía -->
          <img id="certificado-img" src="" alt="Certificado" class="w-full h-full object-contain hidden" />
          <span id="placeholder-text" class="text-gray-500">Aquí se mostrará la fotografía</span>
        </div>
      </div>
    </div>

    <!-- Botones de Cerrar -->
    <div class="flex justify-end mt-6">
      <button id="close-ver-registro-btn" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">Cerrar</button>
    </div>
  </div>
</div>

<script>
function openVerDoctorModal(idDoctor) {
  // Llamada AJAX para obtener los datos del doctor
  fetch(`Solicitudes/obtener_doctor.php?id_doctor=${idDoctor}`)
    .then(response => response.json())  // Esperamos una respuesta en formato JSON
    .then(data => {
      if (data) {
        // Abre el modal
        const modal = document.getElementById('VerRegistro-modal');
        modal.classList.remove('hidden');
        
        // Rellenar los campos con los datos del doctor
        document.querySelector('#VerRegistro-modal input[placeholder="NOMBRE"]').value = data.Nombre_doctor;
        document.querySelector('#VerRegistro-modal input[placeholder="CORREO ELECTRÓNICO"]').value = data.Correo;
        document.querySelector('#VerRegistro-modal input[placeholder="ESPECIALIDAD"]').value = data.Especialidad;
        document.querySelector('#VerRegistro-modal input[placeholder="NÚMERO DE TELÉFONO"]').value = data.Numero_telefono;
        document.querySelector('#VerRegistro-modal input[placeholder="AÑOS DE EXPERIENCIA"]').value = data.experiencia_anios;
        document.querySelector('#VerRegistro-modal input[placeholder="CONOCIMIENTOS TÉCNICOS"]').value = data.Conocimientos_tecnicos;

        // Asignar id_doctor al botón de editar
        const editButton = document.getElementById('edit-doctor-btn');
        editButton.setAttribute('onclick', `openEditDoctorModal(${idDoctor})`); // Pasar id_doctor al evento de editar
        
        // Si hay una foto del certificado, mostrarla
        const fotoDisplay = document.getElementById('foto-display');
        const certificadoImg = document.getElementById('certificado-img');
        const placeholderText = document.getElementById('placeholder-text');

        if (data.Certificado) {
          // Eliminar el primer "../" en la ruta de la imagen
          const certificadoPath = data.Certificado.replace(/^(\.\.\/)/, ''); // Quita el '../' al inicio de la ruta
          certificadoImg.src = certificadoPath; // Establece la ruta corregida
          certificadoImg.classList.remove('hidden');
          placeholderText.classList.add('hidden');
        } else {
          // Si no hay imagen, mostrar el texto de placeholder
          certificadoImg.classList.add('hidden');
          placeholderText.classList.remove('hidden');
        }
      }
    })
    .catch(error => console.error('Error al obtener los datos del doctor:', error));
}



const closeVerRegistroBtn = document.getElementById('close-ver-registro-btn');
const closeVerRegistroX = document.getElementById('close-ver-registro-x');

closeVerRegistroBtn.addEventListener('click', () => {
  const modal = document.getElementById('VerRegistro-modal');
  modal.classList.add('hidden');
});

closeVerRegistroX.addEventListener('click', () => {
  const modal = document.getElementById('VerRegistro-modal');
  modal.classList.add('hidden');
});
</script>
