<!----------------------------------------------------------------- Modal Agregar Doctor ------------------------------------------------------------------------->
<div id="patient-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
    <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 805px;">
        <!-- Botón X para cerrar el modal -->
        <button id="close-add-patient-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
          
        <!-- Sección del modal -->
        <h1 class="text-white text-center shadow-md rounded-full mb-10 text-3xl" style="background-color: #B4221B; height: 50px;">
          Agregar Doctor
        </h1>
      
        <!-- Formulario de datos personales -->
        <form id="AgregarDoctor" action="Solicitudes/AgregarDoctor.php" method="POST" enctype="multipart/form-data">
            <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
              <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
                DATOS PERSONALES
              </h2>
                <div class="grid grid-cols-2 gap-6">
                    <!-- Input: Nombre(s) -->
                    <div class="relative col-span-2">
                        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="NOMBRE"
                               id="Nombre_doctor"
                               name="Nombre_doctor">
                    </div>
                    <!-- Input: Correo Electrónico -->
                    <div class="relative col-span-2">
                        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="email" 
                               placeholder="CORREO ELECTRÓNICO"
                               id="Correo"
                               name="Correo">
                    </div>
                                        <!-- Input: ESPECIALIDAD -->
                                        <div class="relative col-span-2">
                        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="ESPECIALIDAD"
                               id="Especialidad"
                               name="Especialidad">
                    </div>
                    <!-- Input: Número de Teléfono -->
                    <div class="relative col-span-2">
                        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="number" 
                               placeholder="NÚMERO DE TELÉFONO"
                               id="Numero_telefono"
                               name="Numero_telefono">
                    </div>
                    <!-- Input: Años de Experiencia -->
                    <div class="relative col-span-2">
                        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="AÑOS DE EXPERIENCIA"
                               id="Anos_experiencia"
                               name="Anos_experiencia">
                    </div>
                    <!-- Input: Conocimientos Tecnicos -->
                    <div class="relative col-span-2">
                        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="CONOCIMIENTOS TECNICOS"
                               id="Conocimientos_tecnicos"
                               name="Conocimientos_tecnicos">
                    </div>
                    <!-- Input: Contraseña -->
                    <div class="relative col-span-2">
                        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="password" 
                               placeholder="CONTRASEÑA"
                               id="Contrasena"
                               name="Contrasena">
                    </div>
                     <!-- Select: Rol -->
                    <div class="relative col-span-2">
                        <label class="text-xs text-[#3B3636]">ROL</label>
                        <select class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                                id="doctorSelect"
                                name="Rol">
                            <option disabled selected>Selecciona un rol</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Doctor">Doctor</option>
                        </select>
                    </div>
                </div>
            </div>
            <!--6------------------------- Sección 6 del modal -----------------------------> 
            <!-- <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
                        <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B;">
                          FIRMA DEL DOCTOR
                        </h2> -->
                        
                        <!-- Contenedor para el botón y la firma -->
                        <!-- <div class="flex items-center">

                            <button id="add-signature-btn" class="bg-white text-black py-2 px-4 rounded-full shadow-md ml-auto">
                                Agregar Firma
                            </button> -->

                            <!-- Espacio para mostrar la firma -->
                            <!-- <div id="signature-display" class="border-2 border-gray-300 w-1/2 h-64 rounded-md flex items-center justify-center ml-auto" style="height: 250px;">
                                <span class="text-gray-500">Aquí se mostrará la firma</span>
                            </div>
                        </div>
                    </div> -->

                    <!-- Mini Modal para agregar firma -->
                    <!-- <div id="signature-modal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
                        <div class="bg-white p-6 rounded-lg shadow-lg w-[600px] h-[400px]" style="width: 600px; height: 400px;"> 
                            <h3 class="text-lg font-bold mb-4">Dibuje su firma</h3> -->
                            <!-- Área para dibujar la firma
                            <canvas id="signature-pad" class="border-2 border-gray-300 w-full h-32 mb-4" style="height: 250px;"></canvas>
                            
                            <div class="flex justify-between mt-4">
                                <button id="reset-signature" class="bg-blue-100 text-black rounded-full py-2 px-4">Reiniciar</button>
                                <button id="save-signature" class="bg-blue-900 text-white rounded-full py-2 px-4">Guardar Firma</button>
                            </div>
                        </div>
                    </div> -->
            <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
                <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B;">CERTIFICADO</h2>
                
                <div class="flex items-center">
                    <div class="mr-4">
                        <!-- Input del certificado, ahora con name="Certificado" -->
                        <input type="file" id="foto-input" name="Certificado" accept="image/*" class="mb-4">
                    </div>
                    <div id="foto-display" class="border-2 border-gray-300 w-1/2 h-64 rounded-md flex items-center justify-center">
                        <span class="text-gray-500">Aquí se mostrará la fotografía</span>
                    </div>
                </div>
            </div>

            <!-- Botones dentro del formulario -->
            <div class="flex justify-end mt-6">
                <button type="button" id="close-modal-btn" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
                    Cerrar
                </button>
                <button type="submit" id="submit-patient" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
                    Agregar Doctor
                </button>
            </div>
        </form>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Selecciona el formulario por ID
        const form = document.getElementById('AgregarDoctor');

        // Verifica si hay un parámetro en la URL que indica éxito o error
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('success') === 'true') {
            // Mensaje de éxito al registrar el doctor
            Swal.fire({
                title: "¡Buen trabajo!",
                text: "¡El doctor se ha registrado correctamente!",
                icon: "success",
                timer: 2000, // La alerta se cierra automáticamente después de 2 segundos
                showConfirmButton: false
            });
        } else if (urlParams.get('error') === 'duplicate_email') {
            // Mensaje de error si el correo está duplicado
            Swal.fire({
                title: "Error",
                text: "Este correo ya se encuentra registrado. Por favor, intenta con otro.",
                icon: "error",
                timer: 2000, // La alerta se cierra automáticamente después de 2 segundos
                showConfirmButton: false
            });
        }

        // Maneja el envío del formulario
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Evita el envío del formulario para mostrar la alerta

            // Muestra la alerta de "Registro en curso"
            Swal.fire({
                title: "¡Registro en curso!",
                text: "El doctor está siendo registrado. Por favor, espere.",
                icon: "info",
                html: '<i class="fas fa-check-circle" style="color: green; font-size: 3rem;"></i>', // Palomita verde
                timerProgressBar: true,
                timer: 1500, // Duración del mensaje (1.5 segundos)
                showConfirmButton: false,
                didOpen: () => {
                    Swal.showLoading(); // Muestra la animación de carga
                }
            }).then(() => {
                form.submit(); // Envía el formulario después de mostrar la alerta
            });
        });
    });
</script>



      
<script>
  const addPatientBtn = document.getElementById('add-patient-btn');
  const closeModalBtn = document.getElementById('close-modal-btn');
  const modal = document.getElementById('patient-modal');
  const genderSelect = document.getElementById('gender');
  const embarazoSection = document.getElementById('embarazo-section');
  const mesesEmbarazoInput = document.getElementById('meses-embarazo');
  const closeAddPatientModalX = document.getElementById('close-add-patient-modal-x');

  // Mostrar el modal al hacer clic en "AGREGAR PACIENTE"
  addPatientBtn.addEventListener('click', function() {
    modal.classList.remove('hidden');
  });

  // Cerrar el modal al hacer clic en "Cerrar"
  closeModalBtn.addEventListener('click', function() {
    modal.classList.add('hidden');
  });

  // Cerrar el modal al hacer clic en la "X"
  closeAddPatientModalX.addEventListener('click', function() {
    modal.classList.add('hidden');
  });


  
 

  //JS de la sexta seccion del modal
  const addSignatureBtn = document.getElementById('add-signature-btn');
    const signatureModal = document.getElementById('signature-modal');
    const signaturePad = document.getElementById('signature-pad');
    const signatureDisplay = document.getElementById('signature-display');
    const resetSignatureBtn = document.getElementById('reset-signature');
    const saveSignatureBtn = document.getElementById('save-signature');

    let isDrawing = false;
    const ctx = signaturePad.getContext('2d');

    // Abrir el modal
    addSignatureBtn.addEventListener('click', () => {
        signatureModal.classList.remove('hidden');
        ctx.clearRect(0, 0, signaturePad.width, signaturePad.height); // Limpiar el canvas
    });

    // Dibujar la firma
    signaturePad.addEventListener('mousedown', (e) => {
        isDrawing = true;
        ctx.moveTo(e.offsetX, e.offsetY);
    });

    signaturePad.addEventListener('mousemove', (e) => {
        if (isDrawing) {
            ctx.lineTo(e.offsetX, e.offsetY);
            ctx.stroke();
        }
    });

    signaturePad.addEventListener('mouseup', () => {
        isDrawing = false;
        ctx.beginPath(); // Resetear el path
    });

    // Reiniciar la firma
    resetSignatureBtn.addEventListener('click', () => {
        ctx.clearRect(0, 0, signaturePad.width, signaturePad.height);
    });

    // Guardar la firma
    saveSignatureBtn.addEventListener('click', () => {
        const dataUrl = signaturePad.toDataURL();
        signatureDisplay.innerHTML = `<img src="${dataUrl}" alt="Firma" class="h-full"/>`;
        signatureModal.classList.add('hidden'); // Cerrar el modal
    });

    // JS de la séptima sección del modal
    const photoInput = document.getElementById('foto-input'); // Asegúrate de que el id coincida
    const photoDisplay = document.getElementById('foto-display');

    // Mostrar la fotografía seleccionada
    photoInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                photoDisplay.innerHTML = `<img src="${e.target.result}" alt="Fotografía del paciente" class="h-full w-full object-cover rounded-md"/>`;
            }
            reader.readAsDataURL(file);
        }
    });
</script>
      