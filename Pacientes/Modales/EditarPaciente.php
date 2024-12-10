<?php foreach ($pacientes as $paciente): ?>
    <!-- Modal único para editar cada paciente -->
    <div id="modal-editar-paciente-<?= $paciente['idPaciente'] ?>" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
        <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 800px;">
            <!-- Botón Cerrar -->
            <button type="button" onclick="closeModal('modal-editar-paciente-<?= $paciente['idPaciente'] ?>')" 
                    class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>

            <!-- Encabezado del Modal -->
            <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 50px;">
                <h1 class="text-white text-3xl mr-4">Editar Datos del Paciente</h1>
            </div>

            <!-- Formulario de Edición de Datos -->
            <form id="form-editar-paciente-<?= $paciente['idPaciente'] ?>" method="POST" action="Solicitudes/EditarPaciente.php">
                <input type="hidden" name="EditaridPaciente" value="<?= $paciente['idPaciente'] ?>">

                <!-- Sección de Datos Personales -->
                <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
                    <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
                        DATOS PERSONALES
                    </h2>
       <!-- Contenedor para fotografía y firma -->
       <div class="w-full flex justify-center items-center gap-8">
        <!-- Espacio para mostrar la fotografía del paciente -->
        <div id="foto-display" class="border-2 border-gray-300 w-64 h-64 rounded-md flex items-center justify-center">
          <span class="text-gray-500">Aquí se mostrará la fotografía</span>
        </div>

        <!-- Espacio para mostrar la firma -->
        <div id="firma-display" class="border-2 border-gray-300 w-64 h-64 rounded-md flex items-center justify-center">
          <span class="text-gray-500">Aquí se mostrará la firma</span>
        </div>
      </div>
      <br>

      <div class="grid grid-cols-2 gap-6">
      <input class="pl-8 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['idPaciente'] ?>" name="EditaridPaciente" readonly>

      <!-- Input: Nombre(s) -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Nombre paciente</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" value="<?= $paciente['Nombre_paciente'] ?>" name="EditarNombre_paciente">
      </div>
      
      <!-- Input: APELLIDOS -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Apellido paciente</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['Apellido_paciente'] ?>" type="text" name="EditarApellido_paciente">
      </div>
      
      <!-- Input: Fecha de Nacimiento -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Fecha nacimiento</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['Fecha_nacimiento'] ?>" type="text" name="EditarFechaNacimiento">
      </div>
    
      <!-- Input: Edad -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Edad</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['Edad'] ?>" type="number" name="EditarEdad">
      </div>
    
      <!-- Input: Dirección -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Dirección</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['Direccion'] ?>" type="text" name="EditarDireccion">
      </div>
    
      <!-- Input: Número de Teléfono -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Telefono</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['Telefono'] ?>" type="tel" name="EditarTelefono">
      </div>
    
      <!-- Input: Correo Electrónico -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Correo electronico</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['Correo'] ?>" type="email" name="EditarCorreo">
      </div>
    
      <!-- Input: Estado Civil -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Estado Civil</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['Estado_Civil'] ?>" type="text" name="EditarEstado_Civil">
      </div>
    
      <!-- Input: Ocupación -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Ocupación</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['Ocupacion'] ?>" type="text" name="EditarOcupacion">
      </div>
    
      <!-- Input: Recomendación -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Recomendación</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['Recomendacion'] ?>" type="text" name="EditarRecomendacion">
      </div>

      <!-- Select: Género -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Género</label>
        <select class="pl-8 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['Genero'] ?>" id="Genero" name="EditarGenero">
          <option value="Femenino">Femenino</option>
          <option value="Masculino">Masculino</option>
        </select>
      </div>

      <!-- Select: Sus encías sangran con frecuencia -->
      <div class="relative">
      <label class="block text-xs text-[#3B3636] mb-1">¿Estás embarazada?</label>
      <!-- Select: Sangrado de Encías -->
        <select class="pl-8 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['Esta_embarazada'] ?>" id="Esta_embarazada" name="EditarEsta_embarazada">
          <option value="Sí">Sí</option>
          <option value="No">No</option>
        </select>
      </div>

      <!-- Input: Motivo de Consulta -->
      <div class="relative">
         <label class="block text-xs text-[#3B3636] mb-1">Meses de gestación</label>
        <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['Meses_de_gestacion'] ?>" type="text"  name="EditarMeses_de_gestacion">
      </div>
    </div>

<!--2------------------------- Sección 2 de Consulta y antecedentes ------------------------------>
    <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
      <div class="mb-8">
        <!-- Título: Motivo de consulta y antecedentes -->
        <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
          MOTIVO DE CONSULTA Y ANTECEDENTES
        </h2>
        
        <!-- Input: Motivo de Consulta -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">Motivo de consulta</label>
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['Motivo_consulta'] ?>" type="text" placeholder="Describe el motivo de tu consulta" name="EditarMotivo_consulta">
        </div>
        
        <!-- Input: Última visita al odontólogo -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">Última visita al odontólogo</label>
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['Ultimo_visita_odontologo'] ?>" type="text" placeholder="¿Cuándo fue tu última visita?" name="EditarUltima_visita_odontologo">
        </div>
        
        <!-- Input: Cuántas veces se cepilla los dientes al día -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Cuántas veces se cepilla sus dientes al día?</label>
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente['Cepillo_dientes_al_dia'] ?>" type="text" placeholder="Indica cuántas veces te cepillas al día" name="EditarCepillo_dientes_al_dia">
        </div>
        
        <!-- Select: Sus encías sangran con frecuencia -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Sus encías sangran con frecuencia?</label>
          <!-- Select: Sangrado de Encías -->
          <select class="pl-8 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Sangrado_encias" name="EditarSangrado_encias">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
          </select>
        </div>

        <!-- Select: ¿Padece de bruxismo? -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Padece de bruxismo?</label>
          <!-- Select: Sangrado de Encías -->
          <select class="pl-8 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Sangrado_encias" name="EditarAprieta_dientes">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
          </select>
        </div>

        <!-- Select: ¿Durante el día o la noche? -->
        <div class="relative mb-4 shadow-sm">
          <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>"
            name="EditarDurante_dia_o_noche">
            <option value="dia">Día</option>
            <option value="noche">Noche</option>
            <option value="noche">Ambos</option>
          </select>
        </div>
        
        <!-- Select: ¿Le han realizado alguna cirugía bucal? -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Le han realizado alguna cirugía bucal?</label>
          <!-- Select: Sangrado de Encías -->
          <select class="pl-8 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Sangrado_encias" name="EditarHa_realizado_cirugia_bucal">
            <option value="Sí">Sí</option>
            <option value="No">No</option>
          </select>
        </div>

        <!-- Input: Le han realizado alguna cirugía bucal -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" type="text" placeholder="¿De qué?" name="EditarQue_operacion_bucal">
        </div>
        
        <!-- Select: Tiene dificultad para abrir o cerrar la boca -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Tiene dificultad para abrir o cerrar la boca?</label>
          <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Dificultad_abrir_boca"  name="EditarDificultad_abrir_boca">
            <option value="Si">Sí</option>
            <option value="No">No</option>
          </select>
        </div>
        
        <!-- Select: Ha utilizado tratamiento de brackets -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Ha utilizado tratamiento de brackets?</label>
          <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>"  id="Tiene_brackets" name="EditarTiene_brackets">
              <option value="Si">Sí</option>
              <option value="No">No</option>
          </select>
        </div>
      </div>
    </div>

<!--3------------------------- Sección 3 de Patológicos y enfermedades --------------------------->
    <div class=" p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
      <div class="mb-8">
        <!-- Título: Antecedentes Patológicos y Enfermedades -->
        <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
            ANTECEDENTES PATOLÓGICOS Y ENFERMEDADES
        </h2>
        
        <!-- Select: ¿Está tomando algún medicamento? -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Está tomando algún medicamento?</label>
          <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Toma_medicamentos" name="EditarToma_medicamentos">
              <option value="Si">Sí</option>
              <option value="No">No</option>
          </select>
        </div>
        <!-- Input:  ¿Cuál? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" type="text" placeholder="¿Qué medicamento?" name="EditarQue_medicamento">
        </div>
      
        <!-- Select: ¿Es alérgico a algún medicamento? -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Es alérgico a algún medicamento?</label>
          <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Alergico_a_medicamento" name="EditarAlergico_a_medicamento">
              <option value="Si">Sí</option>
              <option value="No">No</option>
          </select>
        </div>
        <!-- Input:  ¿Cuál? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" type="text" placeholder="¿Qué medicamento?" name="EditarMedicamento_que_es_alergico">
        </div>
      
        <!-- Select: ¿Ha tenido mala experiencia con anestésicos? -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Ha tenido mala experiencia con anestésicos?</label>
          <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Mala_experiencia_con_anestesicos" name="EditarMala_experiencia_con_anestesicos">
            <option value="Si">Sí</option>
            <option value="No">No</option>
          </select>
        </div>
        <!-- Input:  ¿Cuál? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" type="text" placeholder="¿Cuál anestesico?" name="EditarCual_anestesico">
        </div>
      
        <!-- Select: ¿Lo han operado? -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Lo han operado?</label>
          <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Lo_han_operado" name="EditarLo_han_operado">
            <option value="Si">Sí</option>
            <option value="No">No</option>
          </select>
        </div>
        <!-- Input:  ¿De qué? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" type="text" placeholder="¿De Qué?" name="EditarQue_operacion_le_han_hecho">
        </div>

        <!-- Select: ¿Lo han operado? -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Lo han operado del corazón?</label>
          <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Lo_han_operado_corazon" name="EditarLo_han_operado_corazon">
            <option value="Si">Sí</option>
            <option value="No">No</option>
          </select>
        </div>
        <!-- Input:  ¿De qué? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" type="text" placeholder="¿Tiene algún marcapasos del corazón?" name="EditarTiene_marcapasos_corazon">
        </div>
      
        <!-- Select: ¿Está tomando algún anticoagulante oral? -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Está tomando algún anticoagulante oral (ASPIRINA, WARFARINA, RIVAROXABÁN, APIXABAN, CLOPIDROGEL)?</label>
          <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Toma_anticoagulante" name="EditarToma_anticoagulante">
            <option value="Si">Sí</option>
            <option value="No">No</option>
          </select>
        </div>
        <!-- Input:  ¿De qué? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" type="text" placeholder="¿Cuál anticoagulante toma?" name="EditarCual_anticoagulante_toma">
        </div>
      
        <!-- Select: ¿Está en tratamiento antidepresivo? -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Está en tratamiento antidepresivo?</label>
          <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Tiene_tratamiento_antidepresivo" name="EditarTiene_tratamiento_antidepresivo">
            <option value="Si">Sí</option>
            <option value="No">No</option>
          </select>
        </div>
        <!-- Input:  ¿De qué? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" type="text" placeholder="¿Qué Tratamiento Antidepresivo?" name="EditarQue_Tratamiento_Antidepresivo">
        </div>

        <!-- Select: ¿Tiene diabetes? -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Tiene diabetes?</label>
          <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Tiene_diabetes" name="EditarTiene_diabetes">
            <option value="Si">Sí</option>
            <option value="No">No</option>
          </select>
        </div>
        <!-- Input:  ¿De qué? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" type="text" placeholder="¿Qué valores diabetes maneja?" name="EditarQue_valores_diabetes_maneja">
        </div>

        <!-- Select: ¿Es hipertenso? -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Es hipertenso?</label>
          <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Es_hipertenso" name="EditarEs_hipertenso">
            <option value="Si">Sí</option>
            <option value="No">No</option>
          </select>
        </div>
        <!-- Input:  ¿De qué? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" type="text" placeholder="¿Valores hipertenso maneja?" name="EditarValores_hipertenso_maneja">
        </div>
      
        <!-- Select: ¿Padece de artritis reumatoide? -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Padece de artritis reumatoide?</label>
          <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Artritis_reumatoide" name="EditarArtritis_reumatoide">
            <option value="Si">Sí</option>
            <option value="No">No</option>
          </select>
        </div>
      
        <!-- Select: ¿Padece de osteoporosis? -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Padece de osteoporosis?</label>
          <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Padece_osteoporosis" name="EditarPadece_osteoporosis">
            <option value="Si">Sí</option>
            <option value="No">No</option>
          </select>
        </div>
      
        <!-- Resto de las preguntas -->
        <!-- Select: ¿Le han realizado transfusiones sanguíneas? -->
        <div class="relative mb-4 shadow-sm">
        <label class="block text-xs text-[#3B3636] mb-1">¿Le han realizado transfusiones sanguíneas?</label>
        <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Le_han_realizado_transfusion_sanguinea" name="EditarLe_han_realizado_transfusion_sanguinea">
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>
        </div>
      
        <!-- Select: ¿Sangra mucho al cortarse? -->
        <div class="relative mb-4 shadow-sm">
        <label class="block text-xs text-[#3B3636] mb-1">¿Sangra mucho al cortarse?</label>
        <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Sangra_al_cortarse" name="EditarSangra_al_cortarse">
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>
        </div>
      
        <!-- Select: ¿Ha tenido infarto en el corazón? -->
        <div class="relative mb-4 shadow-sm">
        <label class="block text-xs text-[#3B3636] mb-1">¿Ha tenido infarto en el corazón?</label>
        <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Ha_tenido_infarto_corazon" name="EditarHa_tenido_infarto_corazon">
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>
        </div>
      
        <!-- Select: ¿Tiene prótesis en el corazón? -->
        <div class="relative mb-4 shadow-sm">
        <label class="block text-xs text-[#3B3636] mb-1">¿Tiene prótesis en el corazón?</label>
        <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Tiene_protesis_corazon" name="EditarTiene_protesis_corazon">
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>
        </div>
      
        <!-- Select: ¿Toma ácido zoledrónico? -->
        <div class="relative mb-4 shadow-sm">
        <label class="block text-xs text-[#3B3636] mb-1">¿Toma ácido zoledrónico?</label>
        <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Toma_acido_zoledronico" name="EditarToma_acido_zoledronico">
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>
        </div>
      
        <!-- Select: ¿Toma Fosamax (Alendronato)? -->
        <div class="relative mb-4 shadow-sm">
        <label class="block text-xs text-[#3B3636] mb-1">¿Toma Fosamax (Alendronato)?</label>
        <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Toma_fosamax_alendronato" name="EditarToma_fosamax_alendronato">
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>
        </div>
      
        <!-- Select: ¿Toma Ibandronato (Boniva)? -->
        <div class="relative mb-4 shadow-sm">
        <label class="block text-xs text-[#3B3636] mb-1">¿Toma Ibandronato (Boniva)?</label>
        <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Toma_ibandronato_boniva" name="EditarToma_ibandronato_boniva">
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>
        </div>
      
        <!-- Select: ¿Toma Actonel (Risedronato)? -->
        <div class="relative mb-4 shadow-sm">
        <label class="block text-xs text-[#3B3636] mb-1">¿Toma Actonel (Risedronato)?</label>
        <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Toma_actonel_risedronato" name="EditarToma_actonel_risedronato">
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>
        </div>
      </div>
    </div>
                
<!--4------------------------- Sección 4 de Salud ------------------------------------------------>             
    <div class=" p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
      <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
          SALUD
      </h2>
      <p class="text-xs text-[#3B3636] mb-4">(Favor de marcar las enfermedades que padezca o haya padecido)</p>
      <div class="grid grid-cols-2 gap-6 mb-4">
        <label class="flex items-center">
        <input type="checkbox" class="mr-2" data-enfermedad="Enfermedades_corazon">
          ENFERMEDADES DEL CORAZÓN
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="">
          ENFERMEDADES PULMONALES
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="">
          INSUFICIENCIA RENAL
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="">
          GASTRITIS
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="">
          EPILEPSIA
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="">
          DIABETES
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="">
          PARÁLISIS
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="">
          VIH/SIDA
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="">
          TUBERCULOSIS
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="">
          HEMOFILIA
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="">
          HEPATITIS
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="Anemia">
          ANEMIA
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="Presion_alta" name="EditarPresion_alta">
          PRESIÓN ALTA
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="Presion_baja" name="EditarPresion_baja">
          PRESIÓN BAJA
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="Asma" name="EditarAsma">
          ASMA
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="Artritis">
          ARTRITIS
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="Artritis">
          PROBLEMAS DE TIROIDES
        </label>
        <label class="flex items-center">
          <input type="checkbox" class="mr-2" data-enfermedad="Cancer">
          CÁNCER
        </label>
      </div>
      <!-- Pregunta: ¿Algún familiar ha padecido de alguna de las enfermedades anteriores? -->
      <div class="relative mb-4 shadow-sm">
        <label class="block text-xs text-[#3B3636] mb-1">¿Algún familiar ha padecido de alguna de las enfermedades anteriores?</label>
        <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Familiar_padecido_enfermedades" name="EditarFamiliar_padecido_enfermedades">
          <option disabled selected>Seleccione</option>
          <option value="Si">Sí</option>
          <option value="No">No</option>
        </select>
      </div>
      <!-- Input:  ¿Cuál? -->
      <div class="relative mb-4 shadow-sm">
        <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" type="text" placeholder="¿Emfermedades padecidad?" name="EditarQue_medicamento">
      </div>
      <!-- Input:  ¿Cuál? -->
      <div class="relative mb-4 shadow-sm">
        <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" type="text" placeholder="¿Quienés han padecido las enfermedades?" name="EditarQue_medicamento">
      </div>
    </div>

<!--5------------------------- Sección 5 de Habitos perniciosos ----------------------------------> 
    <div class=" p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
      <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B;">
          HÁBITOS PERNICIOSOS
      </h2>

      <!-- Pregunta: ¿Fuma? -->
      <div class="relative mb-4">
        <label class="block text-xs text-[#3B3636] mb-1">¿FUMA?</label>
        <select id="Fuma" class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" name="EditarFuma">
          <option disabled selected>Seleccione</option>
          <option value="Si">Sí</option>
          <option value="No">No</option>
        </select>
      </div>

      <div class="relative mb-4">
        <input class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" type="number" placeholder="¿CUÁNTOS CIGARROS AL DÍA?">
      </div>
    
      <!-- Pregunta: ¿Consume algún tipo de droga? -->
      <div class="relative mb-4">
        <label class="block text-xs text-[#3B3636] mb-1">¿CONSUME ALGÚN TIPO DE DROGA?</label>
        <select  class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" id="Consume_drogas" name="EditarConsume_drogas">
          <option disabled selected>Seleccione</option>
          <option value="Si">Sí</option>
          <option value="No">No</option>
        </select>
      </div>
      
      <div class="relative mb-4">
        <input class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" type="text" placeholder="¿QUÉ DROGAS ESTÁ CONSUMIENDO?">
      </div>
    
      <!-- Pregunta: ¿Consume bebidas alcohólicas con frecuencia? -->
      <div class="relative mb-4">
        <label class="block text-xs text-[#3B3636] mb-1">¿CONSUME BEBIDAS ALCOHÓLICAS CON FRECUENCIA?</label>
        <select id="Consume_alcohol" class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" value="<?= $paciente[''] ?>" name="EditarConsume_alcohol">
          <option disabled selected>Seleccione</option>
          <option value="Si">Sí</option>
          <option value="No">No</option>
        </select>
      </div>
    </div>

                    <!-- Añadir más campos según sea necesario -->
                </div>

                <!-- Botones de Acción -->
                <div class="flex justify-end space-x-4">
                    <button type="button" onclick="closeModal('modal-editar-paciente-<?= $paciente['idPaciente'] ?>')" 
                            class="px-6 py-2 bg-gray-300 text-gray-700 rounded-lg">
                        Cancelar
                    </button>
                    <button type="submit" class="px-6 py-2 bg-green-600 text-white rounded-lg">
                        Guardar Cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
<?php endforeach; ?>

<script>
// Función para cerrar el modal con el id dinámico
function closeModal(modalId) {
    document.getElementById(modalId).classList.add("hidden");
}

// Función para abrir el modal de edición del paciente
function openEditarPacienteModal(id) {
    // Muestra el modal específico para el paciente
    document.getElementById("modal-editar-paciente-" + id).classList.remove("hidden");
}
</script>
