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
        <!-- Botón para abrir el modal --
        <button id="edit-patient-btn" class="bg-transparent border-0 cursor-pointer">
          <i class='bx bx-id-card text-lg mx-2'></i>
        </button>-->


           <!-- Sección de Datos Personales -->
           <div class=" p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
            <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
              DATOS PERSONALES
            </h2>
      
            <div class="grid  gap-6"></div>
                <!-- Input: Nombre(s) -->
                <div class="relative mb-4">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"disabled type="text" placeholder="NOMBRE">
                </div>

                <!-- Input: Correo Electrónico -->
                <div class="relative mb-4">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"disabled type="email" placeholder="CORREO ELECTRÓNICO">
                </div>
            
                <!-- Input: ESPECIALIDAD -->
                <div class="relative mb-4">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"disabled type="text" placeholder="ESPECIALIDAD">
                </div>

                <!-- Input: Número de Teléfono -->
                <div class="relative mb-4">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"disabled type="tel" placeholder="NÚMERO DE TELÉFONO">
                </div>

                <!-- Input: Años de Experiencia -->
                <div class="relative mb-4">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"disabled type="text" placeholder="AÑOS DE EXPERIENCIA">
                </div>

                <!-- Input: Conocimientos Tecnicos -->
                <div class="relative mb-4">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"disabled type="text" placeholder="CONOCIMIENTOS TECNICOS">
                </div>
            
                <!-- Input: Contraseña -->
                <div class="relative mb-4">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"disabled   type="password" placeholder="CONTRASEÑA">
                </div>

                 <!-- Select: Rol -->
                <div class="relative">
                    <label class="text-xs text-[#3B3636]">ROL</label>
                    <select id="doctorSelect" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Selecciona un rol</option>
                        <option value="admin">Administrador</option>
                        <option value="doc">Doctor</option>
                    </select>
                </div>
           </div>
                  

<!--7------------------------- Sección 7 del modal ----------------------------->   
          <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
            <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B;">CERTIFICADO</h2>
            
            <!-- Espacio para mostrar la fotografía, centrado -->
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


  const generoSelect = document.getElementById('genero');
  const embarazoSeccion = document.getElementById('embarazo-seccion');
  const estadoEmbarazo = document.getElementById('estado-embarazo');
  const periodoEmbarazoInput = document.getElementById('periodo-embarazo');

  generoSelect.addEventListener('change', function() {
    if (this.value === 'femenino') {
      embarazoSeccion.style.display = 'block';
    } else {
      embarazoSeccion.style.display = 'none';
      periodoEmbarazoInput.style.display = 'none';
    }
  });

  estadoEmbarazo.addEventListener('change', function(event) {
    if (event.target.value === 'si') {
      periodoEmbarazoInput.style.display = 'block';
    } else {
      periodoEmbarazoInput.style.display = 'none';
    }
  });

        
        
        //JS de la segunda seccion del modal 
        document.getElementById('BRuxismo').addEventListener('change', function() {
          var Bruxismoadicional = document.getElementById('bruxismo-Adicional');
          if (this.value === 'si') {
            Bruxismoadicional.style.display = 'block';
          } else {
            Bruxismoadicional.style.display = 'none';
          }
        });


        //JS de la tercera seccion del modal 
        document.getElementById('Medicamento').addEventListener('change', function() {
                    document.getElementById('Cual-medicamento').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('Alergico-medicamento').addEventListener('change', function() {
                    document.getElementById('Cual-alergico').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('Operado').addEventListener('change', function() {
                    document.getElementById('De-que-operado').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('Anticoagulante').addEventListener('change', function() {
                    document.getElementById('Cual-anticoagulante').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('Antidepresivo').addEventListener('change', function() {
                    document.getElementById('Cual-antidepresivo').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('Diabetes').addEventListener('change', function() {
                    document.getElementById('Valores-diabetes').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('Hipertenso').addEventListener('change', function() {
                    document.getElementById('Valores-hipertenso').style.display = this.value === 'si' ? 'block' : 'none';
                    });


        //JS de la cuarta seccion del modal 
        document.getElementById('FAmiliar-enfermedad').addEventListener('change', function() {
                      const ENfermedadesFamiliares = document.getElementById('ENfermedades-familiares');
                      if (this.value === 'si') {
                        ENfermedadesFamiliares.style.display = 'block';
                      } else {
                        ENfermedadesFamiliares.style.display = 'none';
                      }
                    });
              
        //JS de la quinta seccion del modal 
        document.getElementById('Fuma').addEventListener('change', function() {
                      const Cigarrillos = document.getElementById('Cigarrillos');
                      if (this.value === 'si') {
                        Cigarrillos.style.display = 'block';
                      } else {
                        Cigarrillos.style.display = 'none';
                      }
                    });
                  
                    document.getElementById('Droga').addEventListener('change', function() {
                      const TipoDroga = document.getElementById('Tipo-droga');
                      if (this.value === 'si') {
                        TipoDroga.style.display = 'block';
                      } else {
                        TipoDroga.style.display = 'none';
                      }
                    });


                    
        //JS de la séptima seccion del modal
        const FotoInput = document.getElementById('Foto-input');
        const FotoDisplay = document.getElementById('Foto-display');

        // Mostrar la fotografía seleccionada
        FotoInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    FotoDisplay.innerHTML = `<img src="${e.target.result}" alt="Fotografía del paciente" class="h-full w-full object-cover rounded-md"/>`;
                }
                reader.readAsDataURL(file);
            }
        });

</script>



