<!-- Modal Ver Registro -->
<div id="VerRegistro-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 805px;">
      <!-- Botón X para cerrar el modal -->
    <button id="close-ver-registro-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>


     
        <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 50px;">
          <h1 class="text-white text-3xl mr-4">Ver Paciente Registrado</h1>
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
      
            <div class="grid grid-cols-2 gap-6">
                <!-- Input: Nombre(s) -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="NOMBRE(S)" disabled>
                </div>
            
                <!-- Input: APELLIDOS -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled type="text" placeholder="APELLIDOS">
                </div>
            
                <!-- Input: Fecha de Nacimiento -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled type="text" placeholder="FECHA DE NACIMIENTO">
                </div>
            
                <!-- Input: Edad -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled type="number" placeholder="EDAD">
                </div>
            
                <!-- Input: Dirección -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled type="text" placeholder="DIRECCIÓN">
                </div>
            
                <!-- Input: Número de Teléfono -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled type="tel" placeholder="NÚMERO DE TELÉFONO">
                </div>
            
                <!-- Input: Correo Electrónico -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled type="email" placeholder="CORREO ELECTRÓNICO">
                </div>
            
                <!-- Input: Estado Civil -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled type="text" placeholder="ESTADO CIVIL">
                </div>
            
                <!-- Input: Ocupación -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled type="text" placeholder="OCUPACIÓN">
                </div>
            
                <!-- Input: Recomendación -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled type="text" placeholder="RECOMENDACIÓN">
                </div>
            
                <!-- Select: Género -->
                <select class="pl-8 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled id="genero">
                  <option disabled selected>GÉNERO</option>
                  <option value="femenino">Femenino</option>
                  <option value="masculino">Masculino</option>
                </select>

                <!-- Input: Estado de embarazo (solo si es femenino) -->
                <div class="w-full col-span-2 text-xs mb-4" id="embarazo-seccion" style="display: none;">
                  <select class="pl-8 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled id="estado-embarazo">
                    <option disabled selected>¿Estás embarazada?</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>

                  <!-- Input: Meses de embarazo (si selecciona que sí está embarazada) -->
                  <input id="periodo-embarazo" class="pl-8 text-xs py-2 col-span-2 mt-8 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled type="number" placeholder="¿Cuántos meses de embarazo?" style="display: none;">
                </div>

            </div>
            
        </div>

<!--2------------------------- Sección 2 del modal ----------------------------->
        <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
            <div class="mb-8">
                <!-- Título: Motivo de consulta y antecedentes -->
                <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
                  MOTIVO DE CONSULTA Y ANTECEDENTES
                </h2>
              
                <!-- Input: Motivo de Consulta -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">Motivo de consulta</label>
                    <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled type="text" placeholder="Describe el motivo de tu consulta">
                </div>
              
                <!-- Input: Última visita al odontólogo -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">Última visita al odontólogo</label>
                    <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled type="text" placeholder="¿Cuándo fue tu última visita?">
                </div>
              
                <!-- Input: Cuántas veces se cepilla los dientes al día -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Cuántas veces se cepilla sus dientes al día?</label>
                    <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled type="text" placeholder="Indica cuántas veces te cepillas al día">
                </div>
              
                <!-- Select: Sus encías sangran con frecuencia -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Sus encías sangran con frecuencia?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
              
                <!-- Select: Padece de bruxismo -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Padece de bruxismo?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled  id="BRuxismo">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Pregunta adicional si selecciona que sí en bruxismo -->
                    <div id="bruxismo-Adicional" style="display: none;" class="mt-2">
                        <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled>
                            <option disabled selected>¿Durante el día o la noche?</option>
                            <option value="dia">Día</option>
                            <option value="noche">Noche</option>
                        </select>
                    </div>
                </div>
              
                <!-- Select: Le han realizado alguna cirugía bucal -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Le han realizado alguna cirugía bucal?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled>
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
              
                <!-- Select: Tiene dificultad para abrir o cerrar la boca -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Tiene dificultad para abrir o cerrar la boca?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled>
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
              
                <!-- Select: Ha utilizado tratamiento de brackets -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Ha utilizado tratamiento de brackets?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled>
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
            </div>
        </div>
        
              
              

<!--3------------------------- Sección 3 del modal ----------------------------->
                <div class=" p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
                <div class="mb-8">
                    <!-- Título: Antecedentes Patológicos y Enfermedades -->
                    <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
                        ANTECEDENTES PATOLÓGICOS Y ENFERMEDADES
                    </h2>
                  
                    <!-- Select: ¿Está tomando algún medicamento? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Está tomando algún medicamento?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="Medicamento">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Input: ¿Cuál? (si selecciona que sí) -->
                    <div id="Cual-medicamento" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled type="text" placeholder="¿Cuál?">
                    </div>
                    </div>
                
                    <!-- Select: ¿Es alérgico a algún medicamento? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Es alérgico a algún medicamento?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="Alergico-medicamento">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Input: ¿A cuál? (si selecciona que sí) -->
                    <div id="Cual-alergico" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled type="text" placeholder="¿A cuál?">
                    </div>
                    </div>
                
                    <!-- Select: ¿Ha tenido mala experiencia con anestésicos? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Ha tenido mala experiencia con anestésicos?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Lo han operado? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Lo han operado?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="Operado">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Input: ¿De qué? (si selecciona que sí) -->
                    <div id="De-que-operado" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled type="text" placeholder="¿De qué?">
                    </div>
                    </div>
                
                    <!-- Select: ¿Tiene algún marcapasos o le han operado del corazón? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Tiene algún marcapasos o le han operado del corazón?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Está tomando algún anticoagulante oral? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Está tomando algún anticoagulante oral (ASPIRINA, WARFARINA, RIVAROXABÁN, APIXABAN, CLOPIDROGEL)?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="Anticoagulante">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Input: ¿Cuál está tomando? (si selecciona que sí) -->
                    <div id="Cual-anticoagulante" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled type="text" placeholder="¿Cuál está tomando?">
                    </div>
                    </div>
                
                    <!-- Select: ¿Está en tratamiento antidepresivo? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Está en tratamiento antidepresivo?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="Antidepresivo">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Input: ¿Qué tratamiento toma? (si selecciona que sí) -->
                    <div id="Cual-antidepresivo" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled type="text" placeholder="¿Qué tratamiento toma?">
                    </div>
                    </div>
                
                    <!-- Select: ¿Padece de artritis reumatoide? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Padece de artritis reumatoide?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Padece de osteoporosis? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Padece de osteoporosis?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Tiene diabetes? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Tiene diabetes?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="Diabetes">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Input: ¿Qué valores maneja? (si selecciona que sí) -->
                    <div id="Valores-diabetes" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled type="text" placeholder="¿Qué valores maneja?">
                    </div>
                    </div>
                
                    <!-- Select: ¿Es hipertenso? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Es hipertenso?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="Hipertenso">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Input: ¿Qué valores maneja? (si selecciona que sí) -->
                    <div id="Valores-hipertenso" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled type="text" placeholder="¿Qué valores maneja?">
                    </div>
                    </div>
                
                    <!-- Resto de las preguntas -->
                    <!-- Select: ¿Le han realizado transfusiones sanguíneas? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Le han realizado transfusiones sanguíneas?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Sangra mucho al cortarse? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Sangra mucho al cortarse?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Ha tenido infarto en el corazón? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Ha tenido infarto en el corazón?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Tiene prótesis en el corazón? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Tiene prótesis en el corazón?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Toma ácido zoledrónico? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Toma ácido zoledrónico?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Toma Fosamax (Alendronato)? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Toma Fosamax (Alendronato)?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Toma Ibandronato (Boniva)? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Toma Ibandronato (Boniva)?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Toma Actonel (Risedronato)? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Toma Actonel (Risedronato)?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                </div>
                </div>
                
                



<!--4------------------------- Sección 4 del modal ----------------------------->             
            <div class=" p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
                
                    <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
                        SALUD
                    </h2>
                    <p class="text-xs text-[#3B3636] mb-4">(Favor de marcar las enfermedades que padezca o haya padecido)</p>
                  
                    <div class="grid grid-cols-2 gap-6 mb-4">
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        ENFERMEDADES DEL CORAZÓN
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        ENFERMEDADES PULMONALES
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        INSUFICIENCIA RENAL
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        GASTRITIS
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        EPILEPSIA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        DIABETES
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        PARÁLISIS
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        VIH/SIDA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        TUBERCULOSIS
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        HEMOFILIA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        HEPATITIS
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        ANEMIA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        PRESIÓN ALTA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        PRESIÓN BAJA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        ASMA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        ARTRITIS
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        PROBLEMAS DE TIROIDES
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" disabled>
                        CÁNCER
                      </label>
                    </div>
                  
                    <!-- Pregunta: ¿Algún familiar ha padecido de alguna de las enfermedades anteriores? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Algún familiar ha padecido de alguna de las enfermedades anteriores?</label>
                      <select id="FAmiliar-enfermedad" class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  
                    <!-- Sección que aparece si la respuesta es "Sí" -->
                    <div id="ENfermedades-familiares" style="display: none;">
                      <!-- Enfermedades que han padecido -->
                      <div class="relative mb-4 shadow-sm">
                        <label class="block text-xs text-[#3B3636] mb-1">ENFERMEDADES QUE HAN PADECIDO</label>
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled type="text" placeholder="Ingrese las enfermedades">
                      </div>
                  
                      <!-- ¿Quiénes han padecido las enfermedades? -->
                      <div class="relative mb-4 shadow-sm">
                        <label class="block text-xs text-[#3B3636] mb-1">¿QUIÉNES HAN PADECIDO LAS ENFERMEDADES?</label>
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled type="text" placeholder="Ingrese el parentesco">
                      </div>
                    </div>
                  </div>
                  





<!--5------------------------- Sección 5 del modal -----------------------------> 
                  <div class=" p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
                    <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B;">
                        HÁBITOS PERNICIOSOS
                    </h2>
                    
                  
                    <!-- Pregunta: ¿Fuma? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿FUMA?</label>
                      <select id="Fuma" class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  
                    <!-- Sección que aparece si la respuesta es "Sí" a Fuma -->
                    <div id="Cigarrillos" style="display: none;">
                      <div class="relative mb-4">
                        <label class="block text-xs text-[#3B3636] mb-1">¿CUÁNTOS CIGARROS AL DÍA?</label>
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled type="number" placeholder="Ingrese cantidad">
                      </div>
                    </div>
                  
                    <!-- Pregunta: ¿Consume algún tipo de droga? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿CONSUME ALGÚN TIPO DE DROGA?</label>
                      <select id="Droga" class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  
                    <!-- Sección que aparece si la respuesta es "Sí" a Consume algún tipo de droga -->
                    <div id="Tipo-droga" style="display: none;">
                      <div class="relative mb-4">
                        <label class="block text-xs text-[#3B3636] mb-1">¿QUÉ DROGAS ESTÁ CONSUMIENDO?</label>
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="Ingrese las drogas" disabled>
                      </div>
                    </div>
                  
                    <!-- Pregunta: ¿Consume bebidas alcohólicas con frecuencia? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿CONSUME BEBIDAS ALCOHÓLICAS CON FRECUENCIA?</label>
                      <select id="Alcohol" class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled>
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>
                  


  
<!--7------------------------- Sección 7 del modal ----------------------------->   
                    <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
                        <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B;">FOTOGRAFÍA DEL PACIENTE</h2>
                        
                        <div class="flex items-center">
                          <!-- Contenedor para seleccionar la fotografía -->
                          <div class="mr-4">
                              <input type="file" id="Foto-input" accept="image/*" class="mb-4" disabled>
                          </div>
                      
                          <!-- Espacio para mostrar la fotografía -->
                          <div id="Foto-display" class="border-2 border-gray-300 w-64 h-64 rounded-md flex items-center justify-center" disabled  >
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


