<!----------------------------------------------------------------- Modal Agregar Paciente ------------------------------------------------------------------------->
<div id="patient-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
    <div class=" p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 805px;">
        <!-- Botón X para cerrar el modal -->
        <button id="close-add-patient-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
        
        <!--1------------------------- Sección 1 del modal ----------------------------->
        <h1 class="text-white text-center shadow-md rounded-full mb-10 text-3xl" style="background-color: #B4221B; height: 50px;">
          Registro de pacientes
        </h1>
        <form action="" method="POST">
        <!-- Sección de Datos Personales -->
        <div class=" p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
            <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
              DATOS PERSONALES
            </h2>
            <div class="grid grid-cols-2 gap-6">
                <!-- Input: Nombre(s) -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                           type="text" 
                           placeholder="NOMBRE(S)"
                           id="Nombre" 
                           name="Nombre">
                </div>
            
                <!-- Input: APELLIDOS -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                           type="text" 
                           placeholder="APELLIDOS"
                           id="Apellido" 
                           name="Apellido">
                </div>
            
                <!-- Input: Fecha de Nacimiento -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                           type="text" 
                           placeholder="FECHA DE NACIMIENTO"
                           id="Fecha_nacimiento" 
                           name="Fecha_nacimiento">
                </div>
            
                <!-- Input: Edad -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                           type="number" 
                           placeholder="EDAD"
                           id="Edad" 
                           name="Edad">
                </div>
            
                <!-- Input: Dirección -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                           type="text" 
                           placeholder="DIRECCIÓN"
                           id="Direccion" 
                           name="Direccion">
                </div>
            
                <!-- Input: Número de Teléfono -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                           type="tel" 
                           placeholder="NÚMERO DE TELÉFONO"
                           id="Telefono" 
                           name="Telefono">
                </div>
            
                <!-- Input: Correo Electrónico -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                           type="email" 
                           placeholder="CORREO ELECTRÓNICO"
                           id="Correo" 
                           name="Correo">
                </div>
            
                <!-- Input: Estado Civil -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                           type="text" 
                           placeholder="ESTADO CIVIL"
                           id="Estado_civil" 
                           name="Estado_civil">
                </div>
            
                <!-- Input: Ocupación -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                           type="text" 
                           placeholder="OCUPACIÓN"
                           id="Ocupacion" 
                           name="Ocupacion">
                </div>
            
                <!-- Input: Recomendación -->
                <div class="relative">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                           type="text" 
                           placeholder="RECOMENDACIÓN"
                           id="Recomendacion" 
                           name="Recomendacion">
                </div>
            
                <!-- Select: Género -->
                <select class="pl-8 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                        id="gender"
                        name="Genero">
                    <option disabled selected>GÉNERO</option>
                    <option value="femenino">Masculino</option>
                    <option value="masculino">Femenino</option>
                    <option value="masculino">Otro</option>
                </select>
            
                <!-- Input: Estado de embarazo (solo si es femenino) -->
                <div class="w-full col-span-2 text-xs mb-4" id="embarazo-section" style="display: none;">
                    <select class="pl-8 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                            id="Esta_embarazada" 
                            name="Esta_embarazada">
                        <option disabled selected>¿Estás embarazada?</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
            
                    <!-- Input: Meses de embarazo (si selecciona que sí está embarazada) -->
                    <input class="pl-8 text-xs py-2 col-span-2 mt-8 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                           id="meses-embarazo"  
                           name="Meses_de_gestacion"
                           type="number" 
                           placeholder="¿Cuántos meses de embarazo?" 
                           style="display: none;">
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
                    <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                           type="text" 
                           placeholder="Describe el motivo de tu consulta"
                           id="Motivo_consulta" 
                           name="Motivo_consulta">
                </div>
              
                <!-- Input: Última visita al odontólogo -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">Última visita al odontólogo</label>
                    <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                           type="text" 
                           placeholder="¿Cuándo fue tu última visita?"
                           id="Ultima_visita_odontologo" 
                           name="Ultima_visita_odontologo">
                </div>
              
                <!-- Input: Cuántas veces se cepilla los dientes al día -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Cuántas veces se cepilla sus dientes al día?</label>
                    <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                           type="text" 
                           placeholder="Indica cuántas veces te cepillas al día"
                           id="Cepillo_dientes_al_dia" 
                           name="Cepillo_dientes_al_dia">
                </div>
              
                <!-- Select: Sus encías sangran con frecuencia -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Sus encías sangran con frecuencia?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                            id="Sangrado_encias" 
                            name="Sangrado_encias">
                        <option disabled selected>Seleccione</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                        <option value="Aveces">No</option>
                    </select>
                </div>
              
                <!-- Select: Padece de bruxismo -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Padece de bruxismo (Apretar sus dientes)?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                            id="bruxismo"
                            name="Aprieta_dientes">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    <!-- Pregunta adicional si selecciona que sí en bruxismo -->
                    <div id="bruxismo-adicional" style="display: none;" class="mt-2">
                        <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                            name="Durante_dia_o_noche">
                            <option disabled selected>¿Durante el día o la noche?</option>
                            <option value="dia">Día</option>
                            <option value="noche">Noche</option>
                            <option value="noche">Ambos</option>
                        </select>
                    </div>
                </div>
              
                <!-- Select: Le han realizado alguna cirugía bucal -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Le han realizado alguna cirugía bucal?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                            id="operado-bucal"
                            name="Ha_realizado_cirugia_bucal">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    <!-- Input: ¿De qué? (si selecciona que sí) -->
                    <div id="de-que-operado-bucal" style="display: none;" class="mt-2">
                      <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                            type="text" 
                            placeholder="¿Cuál?"
                            id="Que_operacion_bucal"
                            name="Que_operacion_bucal">
                    </div>
                </div>
              
                <!-- Select: Tiene dificultad para abrir o cerrar la boca -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Tiene dificultad para abrir o cerrar la boca?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                            id="Dificultad_abrir_boca" 
                            name="Dificultad_abrir_boca">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
              
                <!-- Select: Ha utilizado tratamiento de brackets -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Ha utilizado tratamiento de brackets?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                            id="Tiene_brackets" 
                            name="Tiene_brackets">
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
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                            id="medicamento"
                            name="Toma_medicamentos">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>

                    <!-- Input: ¿Cuál? (si selecciona que sí) -->
                    <div id="cual-medicamento" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="¿Cuál?"
                               id="Que_medicamento" 
                               name="Que_medicamento">
                    </div>
                </div>
            
                <!-- Select: ¿Es alérgico a algún medicamento? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Es alérgico a algún medicamento?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                            id="alergico-medicamento"
                            name="Alergico_a_medicamento">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    <!-- Input: ¿A cuál? (si selecciona que sí) -->
                    <div id="cual-alergico" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="¿A cuál?"
                               id="Medicamento_que_es_alergico" 
                               name="Medicamento_que_es_alergico">
                    </div>
                </div>

                <!-- Select: ¿Ha tenido mala experiencia con anestésicos? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Ha tenido mala experiencia con anestésicos?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                            id="experiencia-anestesicos"
                            name="Mala_experiencia_con_anestesicos">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    <!-- Input: ¿A cuál? (si selecciona que sí) -->
                    <div id="cual-anestesico" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="¿A cuál?"
                               id="Cual_anestesico" 
                               name="Cual_anestesico">
                    </div>
                </div>
            
                <!-- Select: ¿Lo han operado? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Lo han operado?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                            id="operado"
                            name="Lo_han_operado">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    <!-- Input: ¿De qué? (si selecciona que sí) -->
                    <div id="de-que-operado" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                              type="text" 
                              placeholder="¿De qué?"
                              id="Que_operacion_le_han_hecho" 
                              name="Que_operacion_le_han_hecho">
                    </div>
                </div>

                <!-- Select: ¿Le han operado del corazón? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Le han operado del corazón?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                            id="operado-corazon"
                            name="Lo_han_operado_corazon">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                    <!-- Input: ¿De qué? (si selecciona que sí) -->
                    <div id="operacion-corazon" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="¿Tiene algún marcapasos?"
                               id="Tiene_marcapasos_corazon"
                               name="Tiene_marcapasos_corazon">
                    </div>
                </div>
            
                <!-- Select: ¿Está tomando algún anticoagulante oral? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Está tomando algún anticoagulante oral?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                            id="anticoagulante"
                            name="Toma_anticoagulante">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>

                    <!-- Input: ¿Cuál está tomando? (si selecciona que sí) -->
                    <div id="cual-anticoagulante" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="¿Cuál está tomando?"
                               id="Cual_anticoagulante_toma" 
                               name="Cual_anticoagulante_toma">
                    </div>
                </div>
            
                <!-- Select: ¿Está en tratamiento antidepresivo? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Está en tratamiento antidepresivo?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                            id="antidepresivo"
                            name="Tiene_tratamiento_antidepresivo">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>

                    <!-- Input: ¿Qué tratamiento toma? (si selecciona que sí) -->
                    <div id="cual-antidepresivo" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="¿Qué tratamiento toma?"
                               id="Que_Tratamiento_Antidepresivo"
                               name="Que_Tratamiento_Antidepresivo">
                    </div>
                </div>
            
                <!-- Select: ¿Padece de artritis reumatoide? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Padece de artritis reumatoide?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                            id="Artritis_reumatoide" 
                            name="Artritis_reumatoide">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
            
                <!-- Select: ¿Padece de osteoporosis? -->
                <div class="relative mb-4 shadow-sm">
                <label class="block text-xs text-[#3B3636] mb-1">¿Padece de osteoporosis?</label>
                <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                        id="Padece_osteoporosis" 
                        name="Padece_osteoporosis">
                    <option disabled selected>Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>
                </div>
            
                <!-- Select: ¿Tiene diabetes? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Tiene diabetes?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                            id="diabetes"
                            name="Tiene_diabetes">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>

                    <!-- Input: ¿Qué valores maneja? (si selecciona que sí) -->
                    <div id="valores-diabetes" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="¿Qué valores maneja?"
                               id="Que_valores_diabetes_maneja" 
                               name="Que_valores_diabetes_maneja">
                    </div>
                </div>
            
                <!-- Select: ¿Es hipertenso? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Es hipertenso?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                            id="hipertenso"
                            name="Es_hipertenso">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>

                    <!-- Input: ¿Qué valores maneja? (si selecciona que sí) -->
                    <div id="valores-hipertenso" style="display: none;" class="mt-2">
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="¿Qué valores maneja?"
                               id="Valores_hipertenso_maneja" 
                               name="Valores_hipertenso_maneja">
                    </div>
                </div>
            
                <!-- Resto de las preguntas -->

                <!-- Select: ¿Le han realizado transfusiones sanguíneas? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Le han realizado transfusiones sanguíneas?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                            id="Le_han_realizado_transfusion_sanguinea" 
                            name="Le_han_realizado_transfusion_sanguinea">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
            
                <!-- Select: ¿Sangra mucho al cortarse? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Sangra mucho al cortarse?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                            id="Sangra_al_cortarse" 
                            name="Sangra_al_cortarse">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
            
                <!-- Select: ¿Ha tenido infarto en el corazón? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Ha tenido infarto en el corazón?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                            id="Ha_tenido_infarto_corazon" 
                            name="Ha_tenido_infarto_corazon">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
            
                <!-- Select: ¿Tiene prótesis en el corazón? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Tiene prótesis en el corazón?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                            id="Tiene_protesis_corazon" 
                            name="Tiene_protesis_corazon">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
            
                <!-- Select: ¿Toma ácido zoledrónico? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Toma ácido zoledrónico?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                            id="Toma_acido_zoledronico" 
                            name="Toma_acido_zoledronico">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
            
                <!-- Select: ¿Toma Fosamax (Alendronato)? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Toma Fosamax (Alendronato)?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                            id="Toma_fosamax_alendronato" 
                            name="Toma_fosamax_alendronato">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
            
                <!-- Select: ¿Toma Ibandronato (Boniva)? -->
                <div class="relative mb-4 shadow-sm">
                <label class="block text-xs text-[#3B3636] mb-1">¿Toma Ibandronato (Boniva)?</label>
                <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                        id="Toma_ibandronato_boniva" 
                        name="Toma_ibandronato_boniva">
                    <option disabled selected>Seleccione</option>
                    <option value="si">Sí</option>
                    <option value="no">No</option>
                </select>
                </div>
            
                <!-- Select: ¿Toma Actonel (Risedronato)? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Toma Actonel (Risedronato)?</label>
                    <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                            id="Toma_actonel_risedronato" 
                            name="Toma_actonel_risedronato">
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
                        <input type="hidden" name="Enfermedades_corazon" value="No">
                        <input type="checkbox" class="mr-2" id="Enfermedades_corazon" name="Enfermedades_corazon" value="Si">
                        ENFERMEDADES DEL CORAZÓN
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Enfermedades_pulmonares" value="No">
                        <input type="checkbox" class="mr-2" id="Enfermedades_pulmonares" name="Enfermedades_pulmonares" value="Si">
                        ENFERMEDADES PULMONALES
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Insuficiencia_renal" value="No">
                        <input type="checkbox" class="mr-2" id="Insuficiencia_renal" name="Insuficiencia_renal" value="Si">
                        INSUFICIENCIA RENAL
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Gastritis" value="No">
                        <input type="checkbox" class="mr-2" id="Gastritis" name="Gastritis" value="Si">
                        GASTRITIS
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Epilepsia" value="No">
                        <input type="checkbox" class="mr-2" id="Epilepsia" name="Epilepsia" value="Si">
                        EPILEPSIA
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Diabetes" value="No">
                        <input type="checkbox" class="mr-2" id="Diabetes" name="Diabetes" value="Si">
                        DIABETES
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Paralisis" value="No">
                        <input type="checkbox" class="mr-2" id="Paralisis" name="Paralisis" value="Si">
                        PARÁLISIS
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="vih_sida" value="No">
                        <input type="checkbox" class="mr-2" id="vih_sida" name="vih_sida" value="Si">
                        VIH/SIDA
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Tuberculosis" value="No">
                        <input type="checkbox" class="mr-2" id="Tuberculosis" name="Tuberculosis" value="Si">
                        TUBERCULOSIS
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Hemofilia" value="No">
                        <input type="checkbox" class="mr-2" id="Hemofilia" name="Hemofilia" value="Si">
                        HEMOFILIA
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Hepatitis" value="No">
                        <input type="checkbox" class="mr-2" id="Hepatitis" name="Hepatitis" value="Si">
                        HEPATITIS
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Anemia" value="No">
                        <input type="checkbox" class="mr-2" id="Anemia" name="Anemia" value="Si">
                        ANEMIA
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Presion_alta" value="No">
                        <input type="checkbox" class="mr-2" id="Presion_alta" name="Presion_alta" value="Si">
                        PRESIÓN ALTA
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Presion_baja" value="No">
                        <input type="checkbox" class="mr-2" id="Presion_baja" name="Presion_baja" value="Si">
                        PRESIÓN BAJA
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Asma" value="No">
                        <input type="checkbox" class="mr-2" id="Asma" name="Asma" value="Si">
                        ASMA
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Artritis" value="No">
                        <input type="checkbox" class="mr-2" id="Artritis" name="Artritis" value="Si">
                        ARTRITIS
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Tiroides" value="No">
                        <input type="checkbox" class="mr-2" id="Tiroides" name="Tiroides" value="Si">
                        PROBLEMAS DE TIROIDES
                    </label>
                    <label class="flex items-center">
                        <input type="hidden" name="Cancer" value="No">
                        <input type="checkbox" class="mr-2" id="Cancer" name="Cancer" value="Si">
                        CÁNCER
                    </label>
                </div>
                  
                <!-- Pregunta: ¿Algún familiar ha padecido de alguna de las enfermedades anteriores? -->
                <div class="relative mb-4 shadow-sm">
                    <label class="block text-xs text-[#3B3636] mb-1">¿Algún familiar ha padecido de alguna de las enfermedades anteriores?</label>
                    <select id="familiar-enfermedad" class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                            id="Familiar_padecido_enfermedades" 
                            name=Familiar_padecido_enfermedades">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                    </select>
                </div>
                  
                    <!-- Sección que aparece si la respuesta es "Sí" -->
                    <div id="enfermedades-familiares" style="display: none;">
                      <!-- Enfermedades que han padecido -->
                      <div class="relative mb-4 shadow-sm">
                        <label class="block text-xs text-[#3B3636] mb-1">ENFERMEDADES QUE HAN PADECIDO</label>
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="Ingrese las enfermedades"
                               id="Enfermedades_padecidas" 
                               name="Enfermedades_padecidas">
                      </div>
                  
                      <!-- ¿Quiénes han padecido las enfermedades? -->
                      <div class="relative mb-4 shadow-sm">
                        <label class="block text-xs text-[#3B3636] mb-1">¿QUIÉNES HAN PADECIDO LAS ENFERMEDADES?</label>
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="Ingrese el parentesco"
                               id="Quien_padecio" 
                               name="Quien_padecio">
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
                        <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                                id="fuma"
                                name="Fuma">
                            <option disabled selected>Seleccione</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                  
                    <!-- Sección que aparece si la respuesta es "Sí" a Fuma -->
                    <div id="cigarrillos" style="display: none;">
                      <div class="relative mb-4">
                        <label class="block text-xs text-[#3B3636] mb-1">¿CUÁNTOS CIGARROS AL DÍA?</label>
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="number" 
                               placeholder="Ingrese cantidad"
                               id="Cuantos_cigarros_al_dia_fuma" 
                               name="Cuantos_cigarros_al_dia_fuma" 
                               min="0">
                      </div>
                    </div>
                  
                    <!-- Pregunta: ¿Consume algún tipo de droga? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿CONSUME ALGÚN TIPO DE DROGA?</label>
                      <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                              id="droga"
                              name="Consume_drogas">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  
                    <!-- Sección que aparece si la respuesta es "Sí" a Consume algún tipo de droga -->
                    <div id="tipo-droga" style="display: none;">
                      <div class="relative mb-4">
                        <label class="block text-xs text-[#3B3636] mb-1">¿QUÉ DROGAS ESTÁ CONSUMIENDO?</label>
                        <input class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                               type="text" 
                               placeholder="Ingrese las drogas"
                               id="Drogas_consumiendo" 
                               name="Drogas_consumiendo">
                      </div>
                    </div>
                  
                    <!-- Pregunta: ¿Consume bebidas alcohólicas con frecuencia? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿CONSUME BEBIDAS ALCOHÓLICAS CON FRECUENCIA?</label>
                      <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                              id="alcohol"
                              name="Consume_alcohol">
                        <option disabled selected>Seleccione</option>
                        <option value="si">Sí</option>
                        <option value="no">No</option>
                      </select>
                    </div>
                  </div>
                  



                    <!--6------------------------- Sección 6 del modal -----------------------------> 
                    <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
                        <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B;">
                          FIRMA DEL PACIENTE
                        </h2>
                        
                        <!-- Contenedor para el botón y la firma -->
                        <div class="flex items-center">
                            <!-- Botón para agregar firma -->
                            <button id="add-signature-btn" class="bg-white text-black py-2 px-4 rounded-full shadow-md ml-auto">
                                Agregar Firma
                            </button>

                            <!-- Espacio para mostrar la firma -->
                            <div id="signature-display" class="border-2 border-gray-300 w-1/2 h-64 rounded-md flex items-center justify-center ml-auto" style="height: 250px;">
                                <span class="text-gray-500">Aquí se mostrará la firma</span>
                            </div>
                        </div>
                    </div>

                    <!-- Mini Modal para agregar firma -->
                    <div id="signature-modal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
                        <div class="bg-white p-6 rounded-lg shadow-lg w-[600px] h-[400px]" style="width: 600px; height: 400px;"> <!-- Aumentando el tamaño -->
                            <h3 class="text-lg font-bold mb-4">Dibuje su firma</h3>
                            <!-- Área para dibujar la firma -->
                            <canvas id="signature-pad" class="border-2 border-gray-300 w-full h-32 mb-4" style="height: 250px;"></canvas>
                            
                            <div class="flex justify-between mt-4">
                                <button id="reset-signature" class="bg-blue-100 text-black rounded-full py-2 px-4">Reiniciar</button>
                                <button id="save-signature" class="bg-blue-900 text-white rounded-full py-2 px-4">Guardar Firma</button>
                            </div>
                        </div>
                    </div>


  
                    <!--7------------------------- Sección 7 del modal ----------------------------->   
                    <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
                        <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B;">FOTOGRAFÍA DEL PACIENTE</h2>
                        
                        <div class="flex items-center">
                            <!-- Contenedor para seleccionar la fotografía -->
                            <div class="mr-4">
                                <input type="file" id="photo-input" accept="image/*" class="mb-4">
                            </div>

                            <!-- Espacio para mostrar la fotografía -->
                            <div id="photo-display" class="border-2 border-gray-300 w-1/2 h-64 rounded-md flex items-center justify-center">
                                <span class="text-gray-500">Aquí se mostrará la fotografía</span>
                            </div>
                        </div>
                    </div>

                    <script>
                        
                    </script>




              
         
      
          <div class="flex justify-end mt-6">
          <!-- Botón de cerrar -->
          <button id="close-modal-btn" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
            Cerrar
          </button>
            <button id="submit-patient" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
              Agregar Paciente
            </button>
          </div>
        </div>
      </div>
      
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
      
        // Ocultar o mostrar el estado de embarazo según el género seleccionado
        genderSelect.addEventListener('change', function() {
          if (this.value === 'femenino') {
            embarazoSection.style.display = 'block';
          } else {
            embarazoSection.style.display = 'none';
            mesesEmbarazoInput.style.display = 'none';
          }
        });
      
        embarazoSection.addEventListener('change', function(event) {
          if (event.target.value === 'si') {
            mesesEmbarazoInput.style.display = 'block';
          } else {
            mesesEmbarazoInput.style.display = 'none';
          }
        });

        
        
        //JS de la segunda seccion del modal 
        document.getElementById('bruxismo').addEventListener('change', function() {
          var bruxismoAdicional = document.getElementById('bruxismo-adicional');
          if (this.value === 'si') {
            bruxismoAdicional.style.display = 'block';
          } else {
            bruxismoAdicional.style.display = 'none';
          }
        });


        //JS de la tercera seccion del modal 
                    document.getElementById('medicamento').addEventListener('change', function() {
                    document.getElementById('cual-medicamento').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('alergico-medicamento').addEventListener('change', function() {
                    document.getElementById('cual-alergico').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('operado').addEventListener('change', function() {
                    document.getElementById('de-que-operado').style.display = this.value === 'si' ? 'block' : 'none';
                    });

                    document.getElementById('operado-bucal').addEventListener('change', function() {
                    document.getElementById('de-que-operado-bucal').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('anticoagulante').addEventListener('change', function() {
                    document.getElementById('cual-anticoagulante').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('antidepresivo').addEventListener('change', function() {
                    document.getElementById('cual-antidepresivo').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('diabetes').addEventListener('change', function() {
                    document.getElementById('valores-diabetes').style.display = this.value === 'si' ? 'block' : 'none';
                    });
                
                    document.getElementById('hipertenso').addEventListener('change', function() {
                    document.getElementById('valores-hipertenso').style.display = this.value === 'si' ? 'block' : 'none';
                    });

                    document.getElementById('experiencia-anestesicos').addEventListener('change', function() {
                    document.getElementById('cual-anestesico').style.display = this.value === 'si' ? 'block' : 'none';
                    });

                    document.getElementById('operado-corazon').addEventListener('change', function() {
                    document.getElementById('operacion-corazon').style.display = this.value === 'si' ? 'block' : 'none';
                    });

                    


        //JS de la cuarta seccion del modal 
        document.getElementById('familiar-enfermedad').addEventListener('change', function() {
                      const enfermedadesFamiliares = document.getElementById('enfermedades-familiares');
                      if (this.value === 'si') {
                        enfermedadesFamiliares.style.display = 'block';
                      } else {
                        enfermedadesFamiliares.style.display = 'none';
                      }
                    });
              
        //JS de la quinta seccion del modal 
        document.getElementById('fuma').addEventListener('change', function() {
                      const cigarrillos = document.getElementById('cigarrillos');
                      if (this.value === 'si') {
                        cigarrillos.style.display = 'block';
                      } else {
                        cigarrillos.style.display = 'none';
                      }
                    });
                  
                    document.getElementById('droga').addEventListener('change', function() {
                      const tipoDroga = document.getElementById('tipo-droga');
                      if (this.value === 'si') {
                        tipoDroga.style.display = 'block';
                      } else {
                        tipoDroga.style.display = 'none';
                      }
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

        //JS de la séptima seccion del modal
        const photoInput = document.getElementById('photo-input');
                    const photoDisplay = document.getElementById('photo-display');

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
      