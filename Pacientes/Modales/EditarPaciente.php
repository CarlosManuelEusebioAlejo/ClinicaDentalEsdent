      <!----------------------------------------------------------------- Modal Editar Paciente ------------------------------------------------------------------------->
<!-- Modal Editar Paciente -->
<div id="EditPatient-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 805px;">
      <!-- Botón X para cerrar el modal -->
      <button id="close-edit-registro-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
      
      <!-- Contenido del Modal -->
      <h1 class="text-white text-center shadow-md rounded-full mb-10 text-3xl" style="background-color: #B4221B; height: 50px;">
        Editar Registro
      </h1>


          <!-- Campos de entrada -->
          <!-- Sección de Datos Personales -->
          <div class=" p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
            <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
              DATOS PERSONALES
            </h2>
      
            <div class="grid grid-cols-2 gap-6">
                <!-- Input: Nombre(s) -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="NOMBRE(S)">
                </div>
            
                <!-- Input: APELLIDOS -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="APELLIDOS">
                </div>
            
                <!-- Input: Fecha de Nacimiento -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="FECHA DE NACIMIENTO">
                </div>
            
                <!-- Input: Edad -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number" placeholder="EDAD">
                </div>
            
                <!-- Input: Dirección -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="DIRECCIÓN">
                </div>
            
                <!-- Input: Número de Teléfono -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="tel" placeholder="NÚMERO DE TELÉFONO">
                </div>
            
                <!-- Input: Correo Electrónico -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="email" placeholder="CORREO ELECTRÓNICO">
                </div>
            
                <!-- Input: Estado Civil -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="ESTADO CIVIL">
                </div>
            
                <!-- Input: Ocupación -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="OCUPACIÓN">
                </div>
            
                <!-- Input: Recomendación -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="RECOMENDACIÓN">
                </div>
            
                <!-- Select: Género -->
                <select class="pl-8 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Gender">
                  <option disabled selected>GÉNERO</option>
                  <option value="femenino">Femenino</option>
                  <option value="masculino">Masculino</option>
                </select>

                <!-- Input: Estado de embarazo (solo si es femenino) -->
                <div class="w-full col-span-2 text-xs mb-4" id="Embarazo-seccion" style="display: none;">
                  <select class="pl-8 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Estado-embarazo">
                    <option disabled selected>¿Estás embarazada?</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                  </select>

                  <!-- Input: Meses de embarazo (si selecciona que sí está embarazada) -->
                  <input id="Periodo-embarazo" class="pl-8 text-xs py-2 col-span-2 mt-8 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number" placeholder="¿Cuántos meses de embarazo?" style="display: none;">
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
                    <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="Describe el motivo de tu consulta">
                </div>
              
                <!-- Input: Última visita al odontólogo -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">Última visita al odontólogo</label>
                    <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Cuándo fue tu última visita?">
                </div>
              
                <!-- Input: Cuántas veces se cepilla los dientes al día -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Cuántas veces se cepilla sus dientes al día?</label>
                    <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="Indica cuántas veces te cepillas al día">
                </div>
              
                <!-- Select: Sus encías sangran con frecuencia -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Sus encías sangran con frecuencia?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
              
                <!-- Select: Padece de bruxismo -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Padece de bruxismo?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Bruxismo">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Pregunta adicional si selecciona que sí en bruxismo -->
                    <div id="Bruxismo-adicional" style="display: none;" class="mt-2">
                        <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                            <option disabled selected>¿Durante el día o la noche?</option>
                            <option value="dia">Día</option>
                            <option value="noche">Noche</option>
                        </select>
                    </div>
                </div>
              
                <!-- Select: Le han realizado alguna cirugía bucal -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Le han realizado alguna cirugía bucal?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="OPerado_bucal">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    <!-- Input: ¿De qué? (si selecciona que sí) -->
                    <div id="DE-que-operado-bucal" style="display: none;" class="mt-2">
                      <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿De qué?">
                    </div>
                </div>
              
                <!-- Select: Tiene dificultad para abrir o cerrar la boca -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Tiene dificultad para abrir o cerrar la boca?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
              
                <!-- Select: Ha utilizado tratamiento de brackets -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Ha utilizado tratamiento de brackets?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
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
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="MEdicamento">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Input: ¿Cuál? (si selecciona que sí) -->
                    <div id="CUal-medicamento" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Cuál?">
                    </div>
                    </div>
                
                    <!-- Select: ¿Es alérgico a algún medicamento? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Es alérgico a algún medicamento?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="ALergico-medicamento">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Input: ¿A cuál? (si selecciona que sí) -->
                    <div id="CUal-alergico" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿A cuál?">
                    </div>
                    </div>
                
                    <!-- Select: ¿Ha tenido mala experiencia con anestésicos? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Ha tenido mala experiencia con anestésicos?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Lo han operado? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Lo han operado?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="OPerado">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Input: ¿De qué? (si selecciona que sí) -->
                    <div id="DE-que-operado" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿De qué?">
                    </div>
                    </div>
                
                    <!-- Select: ¿Tiene algún marcapasos o le han operado del corazón? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Tiene algún marcapasos o le han operado del corazón?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Está tomando algún anticoagulante oral? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Está tomando algún anticoagulante oral (ASPIRINA, WARFARINA, RIVAROXABÁN, APIXABAN, CLOPIDROGEL)?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="ANticoagulante">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Input: ¿Cuál está tomando? (si selecciona que sí) -->
                    <div id="CUal-anticoagulante" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Cuál está tomando?">
                    </div>
                    </div>
                
                    <!-- Select: ¿Está en tratamiento antidepresivo? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Está en tratamiento antidepresivo?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="ANtidepresivo">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Input: ¿Qué tratamiento toma? (si selecciona que sí) -->
                    <div id="CUal-antidepresivo" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Qué tratamiento toma?">
                    </div>
                    </div>
                
                    <!-- Select: ¿Padece de artritis reumatoide? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Padece de artritis reumatoide?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Padece de osteoporosis? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Padece de osteoporosis?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Tiene diabetes? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Tiene diabetes?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="DIabetes">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Input: ¿Qué valores maneja? (si selecciona que sí) -->
                    <div id="VAlores-diabetes" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Qué valores maneja?">
                    </div>
                    </div>
                
                    <!-- Select: ¿Es hipertenso? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Es hipertenso?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="HIpertenso">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                
                    <!-- Input: ¿Qué valores maneja? (si selecciona que sí) -->
                    <div id="VAlores-hipertenso" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Qué valores maneja?">
                    </div>
                    </div>
                
                    <!-- Resto de las preguntas -->
                    <!-- Select: ¿Le han realizado transfusiones sanguíneas? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Le han realizado transfusiones sanguíneas?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Sangra mucho al cortarse? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Sangra mucho al cortarse?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Ha tenido infarto en el corazón? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Ha tenido infarto en el corazón?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Tiene prótesis en el corazón? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Tiene prótesis en el corazón?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Toma ácido zoledrónico? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Toma ácido zoledrónico?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Toma Fosamax (Alendronato)? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Toma Fosamax (Alendronato)?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Toma Ibandronato (Boniva)? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Toma Ibandronato (Boniva)?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    </div>
                
                    <!-- Select: ¿Toma Actonel (Risedronato)? -->
                    <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Toma Actonel (Risedronato)?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
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
                        <input type="checkbox" class="mr-2">
                        ENFERMEDADES DEL CORAZÓN
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        ENFERMEDADES PULMONALES
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        INSUFICIENCIA RENAL
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        GASTRITIS
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        EPILEPSIA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        DIABETES
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        PARÁLISIS
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        VIH/SIDA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        TUBERCULOSIS
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        HEMOFILIA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        HEPATITIS
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        ANEMIA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        PRESIÓN ALTA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        PRESIÓN BAJA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        ASMA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        ARTRITIS
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        PROBLEMAS DE TIROIDES
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2">
                        CÁNCER
                      </label>
                    </div>
                  
                    <!-- Pregunta: ¿Algún familiar ha padecido de alguna de las enfermedades anteriores? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Algún familiar ha padecido de alguna de las enfermedades anteriores?</label>
                      <select id="Familiar-enfermedad" class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  
                    <!-- Sección que aparece si la respuesta es "Sí" -->
                    <div id="Enfermedades-familiares" style="display: none;">
                      <!-- Enfermedades que han padecido -->
                      <div class="relative mb-4 shadow-sm">
                        <label class="block text-xs text-[#3B3636] mb-1">ENFERMEDADES QUE HAN PADECIDO</label>
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="Ingrese las enfermedades">
                      </div>
                  
                      <!-- ¿Quiénes han padecido las enfermedades? -->
                      <div class="relative mb-4 shadow-sm">
                        <label class="block text-xs text-[#3B3636] mb-1">¿QUIÉNES HAN PADECIDO LAS ENFERMEDADES?</label>
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="Ingrese el parentesco">
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
                      <select id="FUma" class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  
                    <!-- Sección que aparece si la respuesta es "Sí" a Fuma -->
                    <div id="CIgarrillos" style="display: none;">
                      <div class="relative mb-4">
                        <label class="block text-xs text-[#3B3636] mb-1">¿CUÁNTOS CIGARROS AL DÍA?</label>
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number" placeholder="Ingrese cantidad">
                      </div>
                    </div>
                  
                    <!-- Pregunta: ¿Consume algún tipo de droga? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿CONSUME ALGÚN TIPO DE DROGA?</label>
                      <select id="DRoga" class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  
                    <!-- Sección que aparece si la respuesta es "Sí" a Consume algún tipo de droga -->
                    <div id="TIpo-droga" style="display: none;">
                      <div class="relative mb-4">
                        <label class="block text-xs text-[#3B3636] mb-1">¿QUÉ DROGAS ESTÁ CONSUMIENDO?</label>
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="Ingrese las drogas">
                      </div>
                    </div>
                  
                    <!-- Pregunta: ¿Consume bebidas alcohólicas con frecuencia? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿CONSUME BEBIDAS ALCOHÓLICAS CON FRECUENCIA?</label>
                      <select id="ALcohol" class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
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

                    document.getElementById('OPerado-bucal').addEventListener('change', function() {
                    document.getElementById('DE-que-operado-bucal').style.display = this.value === 'si' ? 'block' : 'none';
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

