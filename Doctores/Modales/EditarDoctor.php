      <!----------------------------------------------------------------- Modal Editar Paciente ------------------------------------------------------------------------->
<!-- Modal Editar Paciente -->
<div id="EditPatient-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 805px;">
     <!-- Botón X para cerrar el modal -->
     <button id="close-edit-registro-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
      <!-- Contenido del Modal -->
      <h1 class="text-white text-center shadow-md rounded-full mb-10 text-3xl" style="background-color: #B4221B; height: 50px;">
        Editar Datos del Doctor
      </h1>


          <!-- Campos de entrada -->
          <!-- Sección de Datos Personales -->
          <div class=" p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
            <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
              DATOS PERSONALES
            </h2>
      
            <div class="grid grid-cols-2 gap-6">
              <!-- Input: Nombre(s) -->
              <div class="relative col-span-2">
                  <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="NOMBRE">
              </div>

              <!-- Input: Correo Electrónico -->
              <div class="relative col-span-2">
                  <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="email" placeholder="CORREO ELECTRÓNICO">
              </div>
          
              <!-- Input: ESPECIALIDAD -->
              <div class="relative col-span-2">
                  <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="ESPECIALIDAD">
              </div>

              <!-- Input: Número de Teléfono -->
              <div class="relative col-span-2">
                  <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="tel" placeholder="NÚMERO DE TELÉFONO">
              </div>

              <!-- Input: Años de Experiencia -->
              <div class="relative col-span-2">
                  <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="AÑOS DE EXPERIENCIA">
              </div>

              <!-- Input: Conocimientos Tecnicos -->
              <div class="relative col-span-2">
                  <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="CONOCIMIENTOS TECNICOS">
              </div>
          
              <!-- Input: Contraseña -->
              <div class="relative col-span-2">
                  <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="password" placeholder="CONTRASEÑA">
              </div>

               <!-- Select: Rol -->
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">ROL</label>
                  <select id="doctorSelect" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                      <option disabled selected>Selecciona un rol</option>
                      <option value="admin">Administrador</option>
                      <option value="doc">Doctor</option>
                  </select>
              </div>
          
          </div>
          </div>
                  


  
<!--7------------------------- Sección 7 del modal ----------------------------->   
                    <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
                        <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B;">CERTIFICADO</h2>
                        
                        <div class="flex items-center">
                            <!-- Contenedor para seleccionar la fotografía -->
                            <div class="mr-4">
                                <input type="file" id="foto-input" accept="image/*" class="mb-4">
                            </div>

                            <!-- Espacio para mostrar la fotografía -->
                            <div id="foto-display" class="border-2 border-gray-300 w-1/2 h-64 rounded-md flex items-center justify-center">
                                <span class="text-gray-500">Aquí se mostrará la fotografía</span>
                            </div>
                        </div>
                    </div>

                    <script>
                        
                    </script>




              
         
        <!-- Botones de Guardar y Cerrar -->
        <div class="flex justify-end mt-6">
          <button id="close-patient-modal-btn" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">Volver</button>
          <button id="submit-patient" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">Agregar Paciente</button>
      </div>
         
          </div>
        </div>
      </div>

    
  </div>
</div>

<!-- JavaScript para abrir y cerrar el modal -->
<script>
  const editPatientBtn = document.getElementById('edit-patient-btn');
  const editPatientModal = document.getElementById('EditPatient-modal');
  const closePatientModalBtn = document.getElementById('close-patient-modal-btn');
  const closeEditRegistroX = document.getElementById('close-edit-registro-x');

  // Mostrar el modal al hacer clic en el botón
  editPatientBtn.addEventListener('click', function() {
      editPatientModal.classList.remove('hidden');
  });

  // Cerrar el modal al hacer clic en el botón de cerrar
  closePatientModalBtn.addEventListener('click', function() {
      editPatientModal.classList.add('hidden');
  });

  // Cerrar el modal al hacer clic en la "X"
  closeEditRegistroX.addEventListener('click', function() {
      editPatientModal.classList.add('hidden'); // Cambiado a 'editPatientModal'
  });




        const GenderSelect = document.getElementById('Gender');
        const EmbarazoSeccion = document.getElementById('Embarazo-seccion');
        const EstadoEmbarazo = document.getElementById('Estado-embarazo');
        const PeriodoEmbarazoInput = document.getElementById('Periodo-embarazo');

        GenderSelect.addEventListener('change', function() {
          if (this.value === 'femenino') {
            EmbarazoSeccion.style.display = 'block';
          } else {
            EmbarazoSeccion.style.display = 'none';
            PeriodoEmbarazoInput.style.display = 'none';
          }
        });

        EstadoEmbarazo.addEventListener('change', function(event) {
          if (event.target.value === 'si') {
            PeriodoEmbarazoInput.style.display = 'block';
          } else {
            PeriodoEmbarazoInput.style.display = 'none';
          }
        });

        
        
        //JS de la segunda seccion del modal 
        document.getElementById('Bruxismo').addEventListener('change', function() {
          var BruxismoAdicional = document.getElementById('Bruxismo-adicional');
          if (this.value === 'si') {
            BruxismoAdicional.style.display = 'block';
          } else {
            BruxismoAdicional.style.display = 'none';
          }
        });


        //JS de la tercera seccion del modal 
        document.getElementById('MEdicamento').addEventListener('change', function() {
                    document.getElementById('CUal-medicamento').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('ALergico-medicamento').addEventListener('change', function() {
                    document.getElementById('CUal-alergico').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('OPerado').addEventListener('change', function() {
                    document.getElementById('DE-que-operado').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('ANticoagulante').addEventListener('change', function() {
                    document.getElementById('CUal-anticoagulante').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('ANtidepresivo').addEventListener('change', function() {
                    document.getElementById('CUal-antidepresivo').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('DIabetes').addEventListener('change', function() {
                    document.getElementById('VAlores-diabetes').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('HIpertenso').addEventListener('change', function() {
                    document.getElementById('VAlores-hipertenso').style.display = this.value === 'si' ? 'block' : 'none';
                    });


        //JS de la cuarta seccion del modal 
        document.getElementById('Familiar-enfermedad').addEventListener('change', function() {
                      const EnfermedadesFamiliares = document.getElementById('Enfermedades-familiares');
                      if (this.value === 'si') {
                        EnfermedadesFamiliares.style.display = 'block';
                      } else {
                        EnfermedadesFamiliares.style.display = 'none';
                      }
                    });
              
        //JS de la quinta seccion del modal 
        document.getElementById('FUma').addEventListener('change', function() {
                      const CIgarrillos = document.getElementById('CIgarrillos');
                      if (this.value === 'si') {
                        CIgarrillos.style.display = 'block';
                      } else {
                        CIgarrillos.style.display = 'none';
                      }
                    });
                  
                    document.getElementById('DRoga').addEventListener('change', function() {
                      const TIpoDroga = document.getElementById('TIpo-droga');
                      if (this.value === 'si') {
                        TIpoDroga.style.display = 'block';
                      } else {
                        TIpoDroga.style.display = 'none';
                      }
                    });


        //JS de la séptima seccion del modal
        const fotoInput = document.getElementById('foto-input');
                    const fotoDisplay = document.getElementById('foto-display');

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

