<div id="VerRegistro-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 805px;">
    <!-- Botón X para cerrar el modal -->
    <button type="button" id="close-ver-registro-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>

    <!-- Encabezado del modal -->
    <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 50px;">
      <h1 class="text-white text-3xl mr-4">Datos Paciente</h1>
      <button type="button" id="edit-patient-btn" class="w-8 h-8 pt-1 bg-white rounded shadow-md" name="idPaciente">
        <i class="bx bx-edit" style="color:#3c3c3c; font-size: 1.5rem; margin-top: 1.2px;"></i>
      </button>
    </div>

<!--1------------------------- Sección 1 de Datos Personales ------------------------------------>
    <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
      <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
        DATOS PERSONALES
      </h2>

      <div class="flex flex-row justify-center gap-8">
        <!-- Contenedor para la fotografía -->
        <div class="flex flex-col items-center">
          <div id="Foto-display" class="border-2 border-gray-300 w-64 h-64 rounded-md flex items-center justify-center">
            <span class="text-gray-500" id="placeholder-text">Aquí se mostrará la fotografía</span>
            <img id="Paciente-Foto" src="" alt="Fotografía del paciente" class="hidden w-full h-full object-cover rounded-md" />
          </div>
        </div>

        <!-- Contenedor para la firma -->
        <div class="flex flex-col items-center">
          <div id="Firma-display" class="border-2 border-gray-300 w-64 h-64 rounded-md flex items-center justify-center">
            <span class="text-gray-500" id="placeholder-text">Aquí se mostrará la firma</span>
            <img id="Paciente-Firma" src="" alt="Firma del paciente" class="hidden w-full h-full object-cover rounded-md" />
          </div>
        </div>
      </div>
      <br>


      <div class="grid grid-cols-2 gap-6">
          <!-- Input: Nombre(s) -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Nombres del paciente</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" name="Nombre_paciente" disabled>
          </div>
      
          <!-- Input: APELLIDOS -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Apellidos del paciente</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Apellido_paciente">
          </div>
      
          <!-- Input: Fecha de Nacimiento -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Fecha Nacimiento</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="FechaNacimiento">
          </div>
      
          <!-- Input: Edad -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Edad</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Edad">
          </div>
      
          <!-- Input: Dirección -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Domicilio</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Direccion">
          </div>
      
          <!-- Input: Número de Teléfono -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Número de Teléfono</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Telefono">
          </div>
      
          <!-- Input: Correo Electrónico -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Correo Electrónico</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Correo">
          </div>
      
          <!-- Input: Estado Civil -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Estado Civil</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Estado_Civil">
          </div>
      
          <!-- Input: Ocupación -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Ocupación</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name=Ocupacion>
          </div>
      
          <!-- Input: Recomendación -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Recomendación</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Recomendacion">
          </div>

          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Genero</label>
            <input 
              class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
              disabled 
              name="Genero" 
              id="genero"
              value="Femenino"
              >
          </div>
          <div class|="relative" id="embarazada-container" style="display: none;">
            <label class="block text-xs text-[#3B3636] mb-1">Esta embarazada</label>
            <input 
              class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
              disabled 
              name="Esta_embarazada"
            >
          </div>

          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Meses de gestación</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Meses_de_gestacion">
          </div>
      </div>
    </div> 

<!--2------------------------- Sección 2 de Consulta y antecedentes ----------------------------->
    <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
      <div class="mb-8">
        <!-- Título: Motivo de consulta y antecedentes -->
        <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
          MOTIVO DE CONSULTA Y ANTECEDENTES
        </h2>
        <!-- Input: Motivo de Consulta -->
        <div class="relative mb-4 shadow-sm">
            <label class="block text-xs text-[#3B3636] mb-1">Motivo de consulta</label>
            <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Motivo_consulta">
        </div>
        
        <!-- Input: Última visita al odontólogo -->
        <div class="relative mb-4 shadow-sm">
            <label class="block text-xs text-[#3B3636] mb-1">Última visita al odontólogo</label>
            <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Ultima_visita_odontologo">
        </div>
        
        <!-- Input: Cuántas veces se cepilla los dientes al día -->
        <div class="relative mb-4 shadow-sm">
            <label class="block text-xs text-[#3B3636] mb-1">¿Cuántas veces se cepilla sus dientes al día?</label>
            <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Cepillo_dientes_al_dia">
        </div>
        
        <!-- Select: Sus encías sangran con frecuencia -->
        <div class="relative mb-4 shadow-sm">
            <label class="block text-xs text-[#3B3636] mb-1">¿Sus encías sangran con frecuencia?</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Sangrado_encias">

        </div>
        
        <!-- Select: Padece de bruxismo -->
        <div class="relative mb-4 shadow-sm" >
          <label class="block text-xs text-[#3B3636] mb-1">¿Padece de bruxismo (Apretar sus dientes)?</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Aprieta_dientes">
        </div>
        <div class="relative mb-4 shadow-sm" >
          <input id="bruxismo" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Durante_dia_o_noche">
        </div>
        
        <!-- Select: Le han realizado alguna cirugía bucal -->
        <div class="relative mb-4 shadow-sm">
            <label class="block text-xs text-[#3B3636] mb-1">¿Le han realizado alguna cirugía bucal?</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Ha_realizado_cirugia_bucal">
        </div>

        <!-- Select: Qué cirugía bucal -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled name="Que_operacion_bucal">
        </div>
        
        <!-- Select: Tiene dificultad para abrir o cerrar la boca -->
        <div class="relative mb-4 shadow-sm">
            <label class="block text-xs text-[#3B3636] mb-1">¿Tiene dificultad para abrir o cerrar la boca?</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled name="Dificultad_abrir_boca">
        
        </div>
        
        <!-- Select: Ha utilizado tratamiento de brackets -->
        <div class="relative mb-4 shadow-sm">
            <label class="block text-xs text-[#3B3636] mb-1">¿Ha utilizado tratamiento de brackets?</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled name="Tiene_brackets">
        </div>
      </div>
    </div>
        
              
              

<!--3------------------------- Sección 3 de Patologicos y enfermedades -------------------------->
              <div class=" p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
                <div class="mb-8">
                  <!-- Título: Antecedentes Patológicos y Enfermedades -->
                  <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
                      ANTECEDENTES PATOLÓGICOS Y ENFERMEDADES
                  </h2>
                  
                    <!-- Select: ¿Está tomando algún medicamento? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Está tomando algún medicamento?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Toma_medicamentos">
                    </div>
                    <!-- Input: ¿Cuál? (si selecciona que sí) -->
                    <div class="relative mb-4 shadow-sm">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Que_medicamento">
                    </div>
                
                    <!-- Select: ¿Es alérgico a algún medicamento? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Es alérgico a algún medicamento?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Alergico_a_medicamento">
                    </div>
                    <!-- Select: ¿Medicamento al que es alergico? -->
                    <div class="relative mb-4 shadow-sm">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Medicamento_que_es_alergico">
                    </div>
    
                    <!-- Select: ¿Ha tenido mala experiencia con anestésicos? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Ha tenido mala experiencia con anestésicos?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Mala_experiencia_con_anestesicos">
                    </div>
                    <!-- Select: ¿Anestésicos con mala experiencia? -->
                    <div class="relative mb-4 shadow-sms">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Cual_anestesico">
                    </div>
                
                    <!-- Select: ¿Lo han operado? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Lo han operado?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Lo_han_operado">
                    </div>
                    <!-- Select: ¿De que lo han operado? -->
                    <div class="relative mb-4 shadow-sm">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Que_operacion_le_han_hecho">
                    </div>

                    <!-- Select: ¿Tiene algún marcapasos o le han operado del corazón? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">Lo han operado del corazón?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Lo_han_operado_corazon">
                    </div>

                    <!-- Select: ¿Tiene algún marcapasos o le han operado del corazón? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Tiene marcapasos del corazón?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Tiene_marcapasos_corazon">
                    </div>
                
                    <!-- Select: ¿Está tomando algún anticoagulante oral? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Está tomando algún anticoagulante oral?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Toma_anticoagulante">
                    </div>
                    <!-- Select: ¿Cuál anticoagulante toma? -->
                    <div class="relative mb-4 shadow-sm">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Cual_anticoagulante_toma">
                    </div>
                    
                    <!-- Select: ¿Está en tratamiento antidepresivo? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Está en tratamiento antidepresivo?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Tiene_tratamiento_antidepresivo">
                    </div>
                    <!-- Select: ¿Qué tratamiento toma? -->
                    <div class="relative mb-4 shadow-sm">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Que_Tratamiento_Antidepresivo">
                    </div>
                
                    <!-- Select: ¿Padece de artritis reumatoide? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Padece de artritis reumatoide?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Artritis_reumatoide">
                    </div>
                
                    <!-- Select: ¿Padece de osteoporosis? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Padece de osteoporosis?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Padece_osteoporosis">
                    </div>
                
                    <!-- Select: ¿Tiene diabetes? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Tiene diabetes?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Tiene_diabetes">
                    </div>
                    <!-- Select:  ¿Qué valores maneja?  -->
                    <div class="relative mb-4 shadow-sm">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Que_valores_diabetes_maneja">
                    </div>
                
                    <!-- Select: ¿Es hipertenso? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Es hipertenso?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Es_hipertenso">                
                    </div>
                    <!-- Select: ¿Qué valores maneja? -->
                    <div class="relative mb-4 shadow-sm">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Valores_hipertenso_maneja">                
                    </div>

                    <!-- Select: ¿Le han realizado transfusiones sanguíneas? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Le han realizado transfusiones sanguíneas?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Le_han_realizado_transfusion_sanguinea">
                    </div>
                
                    <!-- Select: ¿Sangra mucho al cortarse? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Sangra mucho al cortarse?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Sangra_al_cortarse">
                    </div>
                
                    <!-- Select: ¿Ha tenido infarto en el corazón? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Ha tenido infarto en el corazón?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Ha_tenido_infarto_corazon">
                    </div>
                
                    <!-- Select: ¿Tiene prótesis en el corazón? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Tiene prótesis en el corazón?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Tiene_protesis_corazon">
                    </div>
                
                    <!-- Select: ¿Toma ácido zoledrónico? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Toma ácido zoledrónico?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"disabled name="Toma_acido_zoledronico">
                    </div>
                
                    <!-- Select: ¿Toma Fosamax (Alendronato)? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Toma Fosamax (Alendronato)?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Toma_fosamax_alendronato">
                    </div>
                
                    <!-- Select: ¿Toma Ibandronato (Boniva)? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Toma Ibandronato (Boniva)?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled type="text" name="Toma_ibandronato_boniva">
                    </div>
                
                    <!-- Select: ¿Toma Actonel (Risedronato)? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Toma Actonel (Risedronato)?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Toma_actonel_risedronato">
                    </div>
                </div>
              </div>
                
                



<!--4------------------------- Sección 4 de Salud ----------------------------------------------->             
                  <div class=" p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
                    <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
                        SALUD
                    </h2>
                    <p class="text-xs text-[#3B3636] mb-4">(Favor de marcar las enfermedades que padezca o haya padecido)</p>
                    <div class="grid grid-cols-2 gap-6 mb-4">
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Enfermedades_corazon" disabled>
                        ENFERMEDADES DEL CORAZÓN
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Enfermedades_pulmonares" disabled>
                        ENFERMEDADES PULMONALES
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Insuficiencia_renal" disabled>
                        INSUFICIENCIA RENAL
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Gastritis" disabled>
                        GASTRITIS
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Epilepsia" disabled>
                        EPILEPSIA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Diabetes" disabled>
                        DIABETES
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Paralisis" disabled>
                        PARÁLISIS
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="vih_sida" disabled>
                        VIH/SIDA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Tuberculosis" disabled>
                        TUBERCULOSIS
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Hemofilia" disabled>
                        HEMOFILIA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Hepatitis" disabled>
                        HEPATITIS
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Anemia" disabled>
                        ANEMIA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Presion_alta" disabled>
                        PRESIÓN ALTA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Presion_baja" disabled>
                        PRESIÓN BAJA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Asma" disabled>
                        ASMA
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Artritis" disabled>
                        ARTRITIS
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Tiroides" disabled>
                        PROBLEMAS DE TIROIDES
                      </label>
                      <label class="flex items-center">
                        <input type="checkbox" class="mr-2" data-enfermedades="Cancer" disabled>
                        CÁNCER
                      </label>
                    </div>
                  
                    <!-- Pregunta: ¿Algún familiar ha padecido de alguna de las enfermedades anteriores? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Algún familiar ha padecido de alguna de las enfermedades anteriores?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Familiar_padecido_enfermedades">
                    </div>

                    <!-- Pregunta: ¿Algún familiar ha padecido de alguna de las enfermedades anteriores? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">Enfermedades que han padecido</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Enfermedades_padecidas">
                    </div>

                    <!-- Pregunta: ¿Quiénes han padecido las enfermedades? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">Quienes han padecido las enfermedades</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Quien_padecio">
                    </div>
                  </div>
<!--5------------------------- Sección 5 de Habitos perniciosos ---------------------------------> 
                  <div class=" p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
                    <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B;">
                        HÁBITOS PERNICIOSOS
                    </h2>
                    
                  
                    <!-- Pregunta: ¿Fuma? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Fuma?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Fuma">
                    </div>

                    <!-- Pregunta: ¿Fuma? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Cuántos cigarros al dia?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Cuantos_cigarros_al_dia_fuma">
                    </div>
                  
                    <!-- Pregunta: ¿Consume algún tipo de droga? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Consume drogas?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Consume_drogas">
                    </div>

                    <!-- Pregunta: ¿Qué drogas está consumiendo? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Qué drogas está consumiendo?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Drogas_consumiendo">
                    </div>
                  
                    <!-- Pregunta: ¿Consume bebidas alcohólicas con frecuencia? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿CONSUME BEBIDAS ALCOHÓLICAS CON FRECUENCIA?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled name="Consume_alcohol">

                    </div>
                  </div>
                  
<!--7------------------------- Sección 7 de Fotografia y firma  --------------------------------->   

      <!-- Botones de Guardar y Cerrar -->
      <div class="flex justify-end mt-6">
        <button type="button" id="close-ver-registro-btn" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">Cerrar</button>
        <button class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;"><i class="bx bx-printer" style="color:#3c3c3c; font-size: 1.5rem; margin-top: 1.2px;"></i></button>
    </div>
  </div>
</div>

<!-- JavaScript para abrir y cerrar el modal -->
<script>    

document.addEventListener("DOMContentLoaded", function() {
  const generoInput = document.getElementById("genero");
  const embarazadaContainer = document.getElementById("embarazada-container");

  // Verificar el valor del campo de género
  if (generoInput.value.trim().toLowerCase() === "femenino") {
    embarazadaContainer.style.display = "block"; // Mostrar si es femenino
  } else {
    embarazadaContainer.style.display = "none"; // Ocultar si no es femenino
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

<script>
document.addEventListener("DOMContentLoaded", function() {
  // Seleccionar todos los botones de "Ver Registro"
  const verRegistroBtns = document.querySelectorAll(".ver-registro-btn");

  // Función para abrir el modal y cargar los datos
  verRegistroBtns.forEach(button => {
    button.addEventListener("click", function() {
      const idPaciente = this.getAttribute("data-id"); // Obtener el idPaciente del botón

      // Hacer una llamada AJAX para obtener los datos del paciente
      fetch(`getPaciente.php?id=${idPaciente}`)
        .then(response => response.json())
        .then(data => {
          // Cargar los datos del paciente en los campos del modal "Ver Paciente"
          document.querySelector("#VerRegistro-modal button[name='idPaciente']").value = data.idPaciente;
          document.querySelector("#VerRegistro-modal input[name='Nombre_paciente']").value = data.Nombre_paciente;
          document.querySelector("#VerRegistro-modal input[name='Apellido_paciente']").value = data.Apellido_paciente;
          document.querySelector("#VerRegistro-modal input[name='FechaNacimiento']").value = data.FechaNacimiento;
          document.querySelector("#VerRegistro-modal input[name='Edad']").value = data.Edad;
          document.querySelector("#VerRegistro-modal input[name='Direccion']").value = data.Direccion;
          document.querySelector("#VerRegistro-modal input[name='Telefono']").value = data.Telefono;
          document.querySelector("#VerRegistro-modal input[name='Correo']").value = data.Correo;
          document.querySelector("#VerRegistro-modal input[name='Estado_Civil']").value = data.Estado_Civil;
          document.querySelector("#VerRegistro-modal input[name='Ocupacion']").value = data.Ocupacion;
          document.querySelector("#VerRegistro-modal input[name='Recomendacion']").value = data.Recomendacion;
          document.querySelector("#VerRegistro-modal input[name='Genero']").value = data.Genero;
          document.querySelector("#VerRegistro-modal input[name='Esta_embarazada']").value = data.Esta_embarazada; 
          document.querySelector("#VerRegistro-modal input[name='Meses_de_gestacion']").value = data.Meses_de_gestacion;
          document.querySelector("#VerRegistro-modal input[name='Motivo_consulta']").value = data.Motivo_consulta;
          document.querySelector("#VerRegistro-modal input[name='Ultima_visita_odontologo']").value = data.Ultima_visita_odontologo;
          document.querySelector("#VerRegistro-modal input[name='Cepillo_dientes_al_dia']").value = data.Cepillo_dientes_al_dia;
          document.querySelector("#VerRegistro-modal input[name='Sangrado_encias']").value = data.Sangrado_encias;
          document.querySelector("#VerRegistro-modal input[name='Aprieta_dientes']").value = data.Aprieta_dientes;
          document.querySelector("#VerRegistro-modal input[name='Durante_dia_o_noche']").value = data.Durante_dia_o_noche;
          document.querySelector("#VerRegistro-modal input[name='Ha_realizado_cirugia_bucal']").value = data.Ha_realizado_cirugia_bucal;
          document.querySelector("#VerRegistro-modal input[name='Que_operacion_bucal']").value = data.Que_operacion_bucal;
          document.querySelector("#VerRegistro-modal input[name='Dificultad_abrir_boca']").value = data.Dificultad_abrir_boca;
          document.querySelector("#VerRegistro-modal input[name='Tiene_brackets']").value = data.Tiene_brackets;
          document.querySelector("#VerRegistro-modal input[name='Toma_medicamentos']").value = data.Toma_medicamentos;
          document.querySelector("#VerRegistro-modal input[name='Que_medicamento']").value = data.Que_medicamento;
          document.querySelector("#VerRegistro-modal input[name='Alergico_a_medicamento']").value = data.Alergico_a_medicamento;
          document.querySelector("#VerRegistro-modal input[name='Medicamento_que_es_alergico']").value = data.Medicamento_que_es_alergico;
          document.querySelector("#VerRegistro-modal input[name='Mala_experiencia_con_anestesicos']").value = data.Mala_experiencia_con_anestesicos;
          document.querySelector("#VerRegistro-modal input[name='Cual_anestesico']").value = data.Cual_anestesico;
          document.querySelector("#VerRegistro-modal input[name='Lo_han_operado']").value = data.Lo_han_operado;
          document.querySelector("#VerRegistro-modal input[name='Que_operacion_le_han_hecho']").value = data.Que_operacion_le_han_hecho; 
          document.querySelector("#VerRegistro-modal input[name='Lo_han_operado_corazon']").value = data.Lo_han_operado_corazon;
          document.querySelector("#VerRegistro-modal input[name='Tiene_marcapasos_corazon']").value = data.Tiene_marcapasos_corazon;  
          document.querySelector("#VerRegistro-modal input[name='Toma_anticoagulante']").value = data.Toma_anticoagulante;
          document.querySelector("#VerRegistro-modal input[name='Cual_anticoagulante_toma']").value = data.Cual_anticoagulante_toma;  
          document.querySelector("#VerRegistro-modal input[name='Tiene_tratamiento_antidepresivo']").value = data.Tiene_tratamiento_antidepresivo;
          document.querySelector("#VerRegistro-modal input[name='Que_Tratamiento_Antidepresivo']").value = data.Que_Tratamiento_Antidepresivo;
          document.querySelector("#VerRegistro-modal input[name='Artritis_reumatoide']").value = data.Artritis_reumatoide;
          document.querySelector("#VerRegistro-modal input[name='Padece_osteoporosis']").value = data.Padece_osteoporosis; 
          document.querySelector("#VerRegistro-modal input[name='Tiene_diabetes']").value = data.Tiene_diabetes;
          document.querySelector("#VerRegistro-modal input[name='Que_valores_diabetes_maneja']").value = data.Que_valores_diabetes_maneja; 
          document.querySelector("#VerRegistro-modal input[name='Es_hipertenso']").value = data.Es_hipertenso;
          document.querySelector("#VerRegistro-modal input[name='Valores_hipertenso_maneja']").value = data.Valores_hipertenso_maneja;
          document.querySelector("#VerRegistro-modal input[name='Le_han_realizado_transfusion_sanguinea']").value = data.Le_han_realizado_transfusion_sanguinea;
          document.querySelector("#VerRegistro-modal input[name='Sangra_al_cortarse']").value = data.Sangra_al_cortarse;
          document.querySelector("#VerRegistro-modal input[name='Ha_tenido_infarto_corazon']").value = data.Ha_tenido_infarto_corazon;
          document.querySelector("#VerRegistro-modal input[name='Tiene_protesis_corazon']").value = data.Tiene_protesis_corazon;
          document.querySelector("#VerRegistro-modal input[name='Toma_acido_zoledronico']").value = data.Toma_acido_zoledronico;
          document.querySelector("#VerRegistro-modal input[name='Toma_fosamax_alendronato']").value = data.Toma_fosamax_alendronato;
          document.querySelector("#VerRegistro-modal input[name='Toma_ibandronato_boniva']").value = data.Toma_ibandronato_boniva;
          document.querySelector("#VerRegistro-modal input[name='Toma_actonel_risedronato']").value = data.Toma_actonel_risedronato; 


          document.querySelector("#VerRegistro-modal input[name='Familiar_padecido_enfermedades']").value = data.Familiar_padecido_enfermedades;
          document.querySelector("#VerRegistro-modal input[name='Enfermedades_padecidas']").value = data.Enfermedades_padecidas;
          document.querySelector("#VerRegistro-modal input[name='Quien_padecio']").value = data.Quien_padecio;
          
          document.querySelector("#VerRegistro-modal input[name='Fuma']").value = data.Fuma;
          document.querySelector("#VerRegistro-modal input[name='Cuantos_cigarros_al_dia_fuma']").value = data.Cuantos_cigarros_al_dia_fuma; 
          document.querySelector("#VerRegistro-modal input[name='Consume_drogas']").value = data.Consume_drogas;
          document.querySelector("#VerRegistro-modal input[name='Drogas_consumiendo']").value = data.Drogas_consumiendo;
          document.querySelector("#VerRegistro-modal input[name='Consume_alcohol']").value = data.Consume_alcohol;



let fotoPaciente = data.Foto_paciente;  


if (fotoPaciente.startsWith('../')) {
    fotoPaciente = fotoPaciente.substring(3);  
}


const fotoImg = document.getElementById('Paciente-Foto');
fotoImg.src = fotoPaciente; 


document.getElementById('placeholder-text').style.display = 'none';
fotoImg.style.display = 'block';  

  
          // Llenar los checkboxes de enfermedades con base en los datos del paciente
          const enfermedadesCheckboxes = document.querySelectorAll("#VerRegistro-modal [data-enfermedades]");
          enfermedadesCheckboxes.forEach((checkbox) => {
            const enfermedades = checkbox.dataset.enfermedades; // Obtén el identificador del checkbox
            if (data[enfermedades] === "Si") { // Compara con los datos del paciente
              checkbox.checked = true; // Marca el checkbox si aplica
            } else {            
                            checkbox.checked = false; // Desmarca si no aplica
            }
          });
          // Mostrar el modal de "Ver Paciente"
          document.getElementById("VerRegistro-modal").classList.remove("hidden");
        })

    });
  });

  // Función para cerrar el modal de "Ver Paciente"
  document.getElementById("close-ver-registro-x").addEventListener("click", function() {
    document.getElementById("VerRegistro-modal").classList.add("hidden");
  }); 

  // Función para cerrar el modal de "Ver Paciente"
  document.getElementById("close-ver-registro-btn").addEventListener("click", function() {
    document.getElementById("VerRegistro-modal").classList.add("hidden");
  }); 

  // Función para cerrar el modal de "Editar Paciente"
  document.getElementById("close-edit-registro-x").addEventListener("click", function() {
    document.getElementById("EditPatient-modal").classList.add("hidden");
  });
});

</script>

