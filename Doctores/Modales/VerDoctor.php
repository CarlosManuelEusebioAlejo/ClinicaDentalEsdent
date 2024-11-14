<!-- Modal Ver Registro -->
<div id="VerRegistro-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 805px;">
    <!-- Botón X para cerrar el modal -->
    <button id="close-ver-registro-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>

    <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 50px;">
      <h1 class="text-white text-3xl mr-4">Datos del Doctor</h1>
      <button id='edit-patient-btn' class="w-8 h-8 pt-1 bg-white rounded  shadow-md">
        <i class='bx bx-edit' style='color:#3c3c3c; font-size: 1.5rem; margin-top: 1.2px;'></i>
      </button>
    </div>

    <!-- Sección de Datos Personales -->
    <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
      <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
        DATOS PERSONALES
      </h2>

      <div class="grid gap-6"></div>
      <!-- Input: Nombre(s) -->
      <div class="relative mb-4">
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" placeholder="NOMBRE">
      </div>
      <!-- Input: Correo Electrónico -->
      <div class="relative mb-4">
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" placeholder="CORREO ELECTRÓNICO">
      </div>
      <!-- Input: Especialidad -->
      <div class="relative mb-4">
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" placeholder="ESPECIALIDAD">
      </div>
      <!-- Input: Número de Teléfono -->
      <div class="relative mb-4">
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" placeholder="NÚMERO DE TELÉFONO">
      </div>
      <!-- Input: Años de Experiencia -->
      <div class="relative mb-4">
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" placeholder="AÑOS DE EXPERIENCIA">
      </div>
      <!-- Input: Conocimientos Técnicos -->
      <div class="relative mb-4">
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" placeholder="CONOCIMIENTOS TÉCNICOS">
      </div>
      <!-- Input: Contraseña -->
      <div class="relative mb-4">
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" placeholder="CONTRASEÑA">
      </div>
      <!-- Input: Rol -->
      <div class="relative mb-4">
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" placeholder="CONTRASEÑA">
      </div>

    <!-- Sección de Certificado -->
    <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
      <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B;">CERTIFICADO</h2>
      <div class="flex justify-center">
        <div id="foto-display" class="border-2 border-gray-300 w-64 h-64 rounded-md flex items-center justify-center">
          <span class="text-gray-500" id="placeholder-text">Aquí se mostrará la fotografía</span>
        </div>
      </div>
    </div>

    <!-- Botones de Guardar y Cerrar -->
    <div class="flex justify-end mt-6">
      <button id="close-ver-registro-btn" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">Cerrar</button>
      <button id="submit-patient" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">Agregar Paciente</button>
    </div>
  </div>
</div>

<!-- JavaScript para abrir y cerrar el modal -->
<script>
  const verRegistroBtns = document.querySelectorAll('.ver-registro-btn');
  const verRegistroModal = document.getElementById('VerRegistro-modal');
  const closeVerRegistroBtn = document.getElementById('close-ver-registro-btn');
  const closeVerRegistroX = document.getElementById('close-ver-registro-x');

  // Mostrar el modal al hacer clic en cualquiera de los botones
  verRegistroBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      verRegistroModal.classList.remove('hidden');
    });
  });

  // Cerrar el modal al hacer clic en el botón de cerrar
  closeVerRegistroBtn.addEventListener('click', function() {
    verRegistroModal.classList.add('hidden');
  });

  // Cerrar el modal al hacer clic en la "X"
  closeVerRegistroX.addEventListener('click', function() {
    verRegistroModal.classList.add('hidden');
  });
</script>



