<?php foreach ($pacientes as $pacienteE): ?>
    <!-- Modal único para editar cada paciente -->
    <div id="modal-editar-paciente-<?= htmlspecialchars($pacienteE['idPaciente']) ?>" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
        <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 800px;">
            <!-- Botón Cerrar -->
            <button type="button" onclick="closeModal('modal-editar-paciente-<?= htmlspecialchars($pacienteE['idPaciente']) ?>')" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>

            <!-- Encabezado del Modal -->
            <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 50px;">
                <h1 class="text-white text-3xl mr-4">Editar Datos del Paciente</h1>
            </div>


                <!-- Sección de Datos Personales -->
                <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
                    <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
                        DATOS PERSONALES
                    </h2>

                    <!-- Formulario de edición -->
                    <form id="formActualizarPaciente-<?= htmlspecialchars($pacienteE['idPaciente']) ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="EditaridPaciente" value="<?= htmlspecialchars($pacienteE['idPaciente']) ?>">

<!-- Contenedor para fotografía y firma -->
<div class="w-full flex flex-col items-center gap-8">
  <!-- Espacio para mostrar la fotografía del paciente -->
  <div id="foto-display" class="border-2 border-gray-300 w-64 h-64 rounded-md overflow-hidden flex items-center justify-center bg-[#E6ECF8] shadow-lg">
    <?php if (!empty($pacienteE['Foto_paciente'])): ?>
      <!-- Si hay una fotografía cargada previamente -->
      <img id="preview-image" src="../<?= str_replace('../', '', $pacienteE['Foto_paciente']) ?>" alt="Fotografía del paciente" class="w-full h-full object-cover">
    <?php else: ?>
      <!-- Si no hay fotografía cargada -->
      <span id="placeholder" class="text-gray-500 text-center">Aquí se mostrará la fotografía</span>
    <?php endif; ?>
  </div>

  <!-- Botón para subir o cambiar la fotografía -->
  <div class="flex flex-col items-center">
    <label for="foto-paciente" class="cursor-pointer bg-blue-500 text-white py-2 px-4 rounded-full shadow-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:outline-none">
      Subir fotografía
    </label>
    <input type="file" id="foto-paciente" name="Foto_paciente" accept="image/*" class="hidden" onchange="previewImage(event)">
  </div>
</div>

<script>
  // Función para previsualizar la imagen subida
  function previewImage(event) {
    const file = event.target.files[0];
    const previewContainer = document.getElementById('foto-display');
    const placeholder = document.getElementById('placeholder');
    const previewImage = document.getElementById('preview-image');

    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        // Si hay un marcador, lo eliminamos
        if (placeholder) placeholder.remove();
        
        // Si ya hay una imagen previa, actualizamos el src
        if (previewImage) {
          previewImage.src = e.target.result;
        } else {
          // Si no hay imagen previa, creamos una nueva etiqueta img
          const newImage = document.createElement('img');
          newImage.id = 'preview-image';
          newImage.src = e.target.result;
          newImage.alt = "Vista previa";
          newImage.className = "w-full h-full object-cover";
          previewContainer.appendChild(newImage);
        }
      };
      reader.readAsDataURL(file);
    }
  }
</script>



      <br>

      <div class="grid grid-cols-2 gap-6">

      <!-- Input: Nombre(s) -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Nombre paciente</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" value="<?= $pacienteE['Nombre_paciente'] ?>" name="EditarNombre_paciente">
      </div>
      
      <!-- Input: APELLIDOS -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Apellido paciente</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" value="<?= $pacienteE['Apellido_paciente'] ?>" name="EditarApellido_paciente">
      </div>
      
      <!-- Input: Fecha de Nacimiento -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Fecha nacimiento</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" value="<?= $pacienteE['Fecha_nacimiento'] ?>" name="EditarFechaNacimiento">
      </div>
    
      <!-- Input: Edad -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Edad</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number" value="<?= $pacienteE['Edad'] ?>" name="EditarEdad">
      </div>
    
      <!-- Input: Dirección -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Dirección</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" value="<?= $pacienteE['Direccion'] ?>" name="EditarDireccion">
      </div>
    
      <!-- Input: Número de Teléfono -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Telefono</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="tel" value="<?= $pacienteE['Telefono'] ?>"  name="EditarTelefono">
      </div>
    
      <!-- Input: Correo Electrónico -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Correo electronico</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="email" value="<?= $pacienteE['Correo'] ?>" name="EditarCorreo">
      </div>
    
      <!-- Input: Estado Civil -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Estado Civil</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" value="<?= $pacienteE['Estado_civil'] ?>" name="EditarEstado_Civil">
      </div>
    
      <!-- Input: Ocupación -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Ocupación</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" value="<?= $pacienteE['Ocupacion'] ?>" name="EditarOcupacion">
      </div>
    
      <!-- Input: Recomendación -->
      <div class="relative">
        <label class="block text-xs text-[#3B3636] mb-1">Recomendación</label>
        <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" value="<?= $pacienteE['Recomendacion'] ?>" name="EditarRecomendacion">
      </div>

<!-- Select: Género -->
<div class="relative">
  <label class="block text-xs text-[#3B3636] mb-1">Género</label>
  <select class="pl-8 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Genero" name="EditarGenero">
    <option value="Femenino" <?= ($pacienteE['Genero'] == 'Femenino') ? 'selected' : '' ?>>Femenino</option>
    <option value="Masculino" <?= ($pacienteE['Genero'] == 'Masculino') ? 'selected' : '' ?>>Masculino</option>
  </select>
</div>


<!-- Select: ¿Estás embarazada? -->
<div class="relative">
  <label class="block text-xs text-[#3B3636] mb-1">¿Estás embarazada?</label>
  <!-- Select: Sangrado de Encías -->
  <select class="pl-8 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Esta_embarazada" name="EditarEsta_embarazada">
    <option value="Sí" <?= ($pacienteE['Esta_embarazada'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Esta_embarazada'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

      <!-- Input: Motivo de Consulta -->
      <div class="relative">
         <label class="block text-xs text-[#3B3636] mb-1">Meses de gestación</label>
        <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text"  name="EditarMeses_de_gestacion">
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
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="Describe el motivo de tu consulta" value="<?= $pacienteE['Motivo_consulta'] ?>" name="EditarMotivo_consulta">
        </div>
        
        <!-- Input: Última visita al odontólogo -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">Última visita al odontólogo</label>
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Cuándo fue tu última visita?" value="<?= $pacienteE['Ultima_visita_odontologo'] ?>" name="EditarUltima_visita_odontologo">
        </div>
        
        <!-- Input: Cuántas veces se cepilla los dientes al día -->
        <div class="relative mb-4 shadow-sm">
          <label class="block text-xs text-[#3B3636] mb-1">¿Cuántas veces se cepilla sus dientes al día?</label>
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="Indica cuántas veces te cepillas al día" value="<?= $pacienteE['Cepillo_dientes_al_dia'] ?>" name="EditarCepillo_dientes_al_dia">
        </div>
        
<!-- Select: Sus encías sangran con frecuencia -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Sus encías sangran con frecuencia?</label>
  <!-- Select: Sangrado de Encías -->
  <select class="pl-8 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Sangrado_encias" name="EditarSangrado_encias">
    <option value="Si" <?= ($pacienteE['Sangrado_encias'] == 'Si') ? 'selected' : '' ?>>Sí</option> 
    <option value="No" <?= ($pacienteE['Sangrado_encias'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

<!-- Select: ¿Padece de bruxismo? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Padece de bruxismo?</label>
  <!-- Select: Bruxismo -->
  <select class="pl-8 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Sangrado_encias" name="EditarAprieta_dientes">
    <option value="Si" <?= ($pacienteE['Aprieta_dientes'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Aprieta_dientes'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>


<!-- Select: ¿Durante el día o la noche? -->
<div class="relative mb-4 shadow-sm">
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" name="EditarDurante_dia_o_noche">
    <option value="día" <?= ($pacienteE['Durante_dia_o_noche'] == 'día') ? 'selected' : '' ?>>Día</option>
    <option value="noche" <?= ($pacienteE['Durante_dia_o_noche'] == 'noche') ? 'selected' : '' ?>>Noche</option>
    <option value="Ambos" <?= ($pacienteE['Durante_dia_o_noche'] == 'Ambos') ? 'selected' : '' ?>>Ambos</option>
  </select>
</div>

        
<!-- Select: ¿Le han realizado alguna cirugía bucal? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Le han realizado alguna cirugía bucal?</label>
  <!-- Select: Sangrado de Encías -->
  <select class="pl-8 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Sangrado_encias" name="EditarHa_realizado_cirugia_bucal">
    <option value="Si" <?= ($pacienteE['Ha_realizado_cirugia_bucal'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Ha_realizado_cirugia_bucal'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>


        <!-- Input: Le han realizado alguna cirugía bucal -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿De qué?" value="<?= $pacienteE['Que_operacion_bucal'] ?>" name="EditarQue_operacion_bucal">
        </div>
        
<!-- Select: Tiene dificultad para abrir o cerrar la boca -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Tiene dificultad para abrir o cerrar la boca?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Dificultad_abrir_boca" name="EditarDificultad_abrir_boca">
    <option value="Si" <?= ($pacienteE['Dificultad_abrir_boca'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Dificultad_abrir_boca'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

        
<!-- Select: Ha utilizado tratamiento de brackets -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Ha utilizado tratamiento de brackets?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Tiene_brackets" name="EditarTiene_brackets">
    <option value="Si" <?= ($pacienteE['Tiene_brackets'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Tiene_brackets'] == 'No') ? 'selected' : '' ?>>No</option>
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
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Toma_medicamentos" name="EditarToma_medicamentos">
    <option value="Si" <?= ($pacienteE['Toma_medicamentos'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Toma_medicamentos'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

        <!-- Input:  ¿Cuál? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Qué medicamento?" value="<?= $pacienteE['Que_medicamento'] ?>" name="EditarQue_medicamento">
        </div>
      
<!-- Select: ¿Es alérgico a algún medicamento? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Es alérgico a algún medicamento?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Alergico_a_medicamento" name="EditarAlergico_a_medicamento">
    <option value="Si" <?= ($pacienteE['Alergico_a_medicamento'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Alergico_a_medicamento'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

        <!-- Input:  ¿Cuál? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Qué medicamento?" value="<?= $pacienteE['Medicamento_que_es_alergico'] ?>" name="EditarMedicamento_que_es_alergico">
        </div>
      
<!-- Select: ¿Ha tenido mala experiencia con anestésicos? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Ha tenido mala experiencia con anestésicos?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Mala_experiencia_con_anestesicos" name="EditarMala_experiencia_con_anestesicos">
    <option value="Si" <?= ($pacienteE['Mala_experiencia_con_anestesicos'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Mala_experiencia_con_anestesicos'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

        <!-- Input:  ¿Cuál? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Cuál anestesico?" value="<?= $pacienteE['Cual_anestesico'] ?>" name="EditarCual_anestesico">
        </div>
      
<!-- Select: ¿Lo han operado? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Lo han operado?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Lo_han_operado" name="EditarLo_han_operado">
    <option value="Si" <?= ($pacienteE['Lo_han_operado'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Lo_han_operado'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

        <!-- Input:  ¿De qué? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿De Qué?" value="<?= $pacienteE['Que_operacion_le_han_hecho'] ?>" name="EditarQue_operacion_le_han_hecho">
        </div>

<!-- Select: ¿Lo han operado del corazón? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Lo han operado del corazón?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Lo_han_operado_corazon" name="EditarLo_han_operado_corazon">
    <option value="Si" <?= ($pacienteE['Lo_han_operado_corazon'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Lo_han_operado_corazon'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

        <!-- Input:  ¿De qué? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Tiene algún marcapasos del corazón?" value="<?= $pacienteE['Tiene_marcapasos_corazon'] ?>" name="EditarTiene_marcapasos_corazon">
        </div>
      
<!-- Select: ¿Está tomando algún anticoagulante oral? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Está tomando algún anticoagulante oral (ASPIRINA, WARFARINA, RIVAROXABÁN, APIXABAN, CLOPIDROGEL)?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Toma_anticoagulante" name="EditarToma_anticoagulante">
    <option value="Si" <?= ($pacienteE['Toma_anticoagulante'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Toma_anticoagulante'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

        <!-- Input:  ¿De qué? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Cuál anticoagulante toma?" value="<?= $pacienteE['Cual_anticoagulante_toma'] ?>" name="EditarCual_anticoagulante_toma">
        </div>
      
<!-- Select: ¿Está en tratamiento antidepresivo? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Está en tratamiento antidepresivo?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Tiene_tratamiento_antidepresivo" name="EditarTiene_tratamiento_antidepresivo">
    <option value="Si" <?= ($pacienteE['Tiene_tratamiento_antidepresivo'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Tiene_tratamiento_antidepresivo'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

        <!-- Input:  ¿De qué? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Qué Tratamiento Antidepresivo?" value="<?= $pacienteE['Que_Tratamiento_Antidepresivo'] ?>" name="EditarQue_Tratamiento_Antidepresivo">
        </div>

<!-- Select: ¿Tiene diabetes? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Tiene diabetes?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Tiene_diabetes" name="EditarTiene_diabetes">
    <option value="Si" <?= ($pacienteE['Tiene_diabetes'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Tiene_diabetes'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

        <!-- Input:  ¿De qué? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Qué valores diabetes maneja?" value="<?= $pacienteE['Que_valores_diabetes_maneja'] ?>" name="EditarQue_valores_diabetes_maneja">
        </div>

<!-- Select: ¿Es hipertenso? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Es hipertenso?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Es_hipertenso" name="EditarEs_hipertenso">
    <option value="Si" <?= ($pacienteE['Es_hipertenso'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Es_hipertenso'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

        <!-- Input:  ¿De qué? -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Valores hipertenso maneja?" value="<?= $pacienteE['Valores_hipertenso_maneja'] ?>" name="EditarValores_hipertenso_maneja">
        </div>
      
<!-- Select: ¿Padece de artritis reumatoide? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Padece de artritis reumatoide?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Artritis_reumatoide" name="EditarArtritis_reumatoide">
    <option value="Si" <?= ($pacienteE['Artritis_reumatoide'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Artritis_reumatoide'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

      
<!-- Select: ¿Padece de osteoporosis? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Padece de osteoporosis?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Padece_osteoporosis" name="EditarPadece_osteoporosis">
    <option value="Si" <?= ($pacienteE['Padece_osteoporosis'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Padece_osteoporosis'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

<!-- Select: ¿Le han realizado transfusiones sanguíneas? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Le han realizado transfusiones sanguíneas?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Le_han_realizado_transfusion_sanguinea" name="EditarLe_han_realizado_transfusion_sanguinea">
    <option value="Si" <?= ($pacienteE['Le_han_realizado_transfusion_sanguinea'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Le_han_realizado_transfusion_sanguinea'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

      
<!-- Select: ¿Sangra mucho al cortarse? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Sangra mucho al cortarse?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Sangra_al_cortarse" name="EditarSangra_al_cortarse">
    <option value="Si" <?= ($pacienteE['Sangra_al_cortarse'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Sangra_al_cortarse'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

<!-- Select: ¿Ha tenido infarto en el corazón? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Ha tenido infarto en el corazón?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Ha_tenido_infarto_corazon" name="EditarHa_tenido_infarto_corazon">
    <option value="Si" <?= ($pacienteE['Ha_tenido_infarto_corazon'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Ha_tenido_infarto_corazon'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

      
<!-- Select: ¿Tiene prótesis en el corazón? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Tiene prótesis en el corazón?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Tiene_protesis_corazon" name="EditarTiene_protesis_corazon">
    <option value="Si" <?= ($pacienteE['Tiene_protesis_corazon'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Tiene_protesis_corazon'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

<!-- Select: ¿Toma ácido zoledrónico? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Toma ácido zoledrónico?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Toma_acido_zoledronico" name="EditarToma_acido_zoledronico">
    <option value="Si" <?= ($pacienteE['Toma_acido_zoledronico'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Toma_acido_zoledronico'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

<!-- Select: ¿Toma Fosamax (Alendronato)? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Toma Fosamax (Alendronato)?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Toma_fosamax_alendronato" name="EditarToma_fosamax_alendronato">
    <option value="Si" <?= ($pacienteE['Toma_fosamax_alendronato'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Toma_fosamax_alendronato'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

      
<!-- Select: ¿Toma Ibandronato (Boniva)? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Toma Ibandronato (Boniva)?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Toma_ibandronato_boniva" name="EditarToma_ibandronato_boniva">
    <option value="Si" <?= ($pacienteE['Toma_ibandronato_boniva'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Toma_ibandronato_boniva'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

<!-- Select: ¿Toma Actonel (Risedronato)? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Toma Actonel (Risedronato)?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Toma_actonel_risedronato" name="EditarToma_actonel_risedronato">
    <option value="Si" <?= ($pacienteE['Toma_actonel_risedronato'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Toma_actonel_risedronato'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

      </div>
    </div>
                
<!--4------------------------- Sección 4 de Salud ------------------------------------------------>
<div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
    <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
        SALUD
    </h2>
    <p class="text-xs text-[#3B3636] mb-4">(Favor de marcar las enfermedades que padezca o haya padecido)</p>
    <div class="grid grid-cols-2 gap-6 mb-4">
        <!-- Enfermedad del corazón -->
        <label class="flex items-center">
            <input type="hidden" name="EditarEnfermedades_corazon" value="No">
            <input type="checkbox" class="mr-2" name="EditarEnfermedades_corazon" value="Si" 
                <?php if($pacienteE['Enfermedades_corazon'] == "Si") echo 'checked'; ?>>
            ENFERMEDADES DEL CORAZÓN
        </label>

        <!-- Enfermedades pulmonares -->
        <label class="flex items-center">
            <input type="hidden" name="EditarEnfermedades_pulmonares" value="No">
            <input type="checkbox" class="mr-2" name="EditarEnfermedades_pulmonares" value="Si" 
                <?php if($pacienteE['Enfermedades_pulmonares'] == "Si") echo 'checked'; ?>>
            ENFERMEDADES PULMONARES
        </label>

        <!-- Insuficiencia renal -->
        <label class="flex items-center">
            <input type="hidden" name="EditarInsuficiencia_renal" value="No">
            <input type="checkbox" class="mr-2" name="EditarInsuficiencia_renal" value="Si" 
                <?php if($pacienteE['Insuficiencia_renal'] == "Si") echo 'checked'; ?>>
            INSUFICIENCIA RENAL
        </label>

        <!-- Gastritis -->
        <label class="flex items-center">
            <input type="hidden" name="EditarGastritis" value="No">
            <input type="checkbox" class="mr-2" name="EditarGastritis" value="Si" 
                <?php if($pacienteE['Gastritis'] == "Si") echo 'checked'; ?>>
            GASTRITIS
        </label>

        <!-- Epilepsia -->
        <label class="flex items-center">
            <input type="hidden" name="EditarEpilepsia" value="No">
            <input type="checkbox" class="mr-2" name="EditarEpilepsia" value="Si" 
                <?php if($pacienteE['Epilepsia'] == "Si") echo 'checked'; ?>>
            EPILEPSIA
        </label>

        <!-- Diabetes -->
        <label class="flex items-center">
            <input type="hidden" name="EditarDiabetes" value="No">
            <input type="checkbox" class="mr-2" name="EditarDiabetes" value="Si" 
                <?php if($pacienteE['Diabetes'] == "Si") echo 'checked'; ?>>
            DIABETES
        </label>

        <!-- Parálisis -->
        <label class="flex items-center">
            <input type="hidden" name="EditarParalisis" value="No">
            <input type="checkbox" class="mr-2" name="EditarParalisis" value="Si" 
                <?php if($pacienteE['Paralisis'] == "Si") echo 'checked'; ?>>
            PARÁLISIS
        </label>

        <!-- VIH/SIDA -->
        <label class="flex items-center">
            <input type="hidden" name="Editarvih_sida" value="No">
            <input type="checkbox" class="mr-2" name="Editarvih_sida" value="Si" 
                <?php if($pacienteE['vih_sida'] == "Si") echo 'checked'; ?>>
            VIH/SIDA
        </label>

        <!-- Tuberculosis -->
        <label class="flex items-center">
            <input type="hidden" name="EditarTuberculosis" value="No">
            <input type="checkbox" class="mr-2" name="EditarTuberculosis" value="Si" 
                <?php if($pacienteE['Tuberculosis'] == "Si") echo 'checked'; ?>>
            TUBERCULOSIS
        </label>

        <!-- Hemofilia -->
        <label class="flex items-center">
            <input type="hidden" name="EditarHemofilia" value="No">
            <input type="checkbox" class="mr-2" name="EditarHemofilia" value="Si" 
                <?php if($pacienteE['Hemofilia'] == "Si") echo 'checked'; ?>>
            HEMOFILIA
        </label>

        <!-- Hepatitis -->
        <label class="flex items-center">
            <input type="hidden" name="EditarHepatitis" value="No">
            <input type="checkbox" class="mr-2" name="EditarHepatitis" value="Si" 
                <?php if($pacienteE['Hepatitis'] == "Si") echo 'checked'; ?>>
            HEPATITIS
        </label>

        <!-- Anemia -->
        <label class="flex items-center">
            <input type="hidden" name="EditarAnemia" value="No">
            <input type="checkbox" class="mr-2" name="EditarAnemia" value="Si" 
                <?php if($pacienteE['Anemia'] == "Si") echo 'checked'; ?>>
            ANEMIA
        </label>

        <!-- Presión Alta -->
        <label class="flex items-center">
            <input type="hidden" name="EditarPresion_alta" value="No">
            <input type="checkbox" class="mr-2" name="EditarPresion_alta" value="Si" 
                <?php if($pacienteE['Presion_alta'] == "Si") echo 'checked'; ?>>
            PRESIÓN ALTA
        </label>

        <!-- Presión Baja -->
        <label class="flex items-center">
            <input type="hidden" name="EditarPresion_baja" value="No">
            <input type="checkbox" class="mr-2" name="EditarPresion_baja" value="Si" 
                <?php if($pacienteE['Presion_baja'] == "Si") echo 'checked'; ?>>
            PRESIÓN BAJA
        </label>

        <!-- Asma -->
        <label class="flex items-center">
            <input type="hidden" name="EditarAsma" value="No">
            <input type="checkbox" class="mr-2" name="EditarAsma" value="Si" 
                <?php if($pacienteE['Asma'] == "Si") echo 'checked'; ?>>
            ASMA
        </label>

        <!-- Artritis -->
        <label class="flex items-center">
            <input type="hidden" name="EditarArtritis" value="No">
            <input type="checkbox" class="mr-2" name="EditarArtritis" value="Si" 
                <?php if($pacienteE['Artritis'] == "Si") echo 'checked'; ?>>
            ARTRITIS
        </label>

        <!-- Tiroides -->
        <label class="flex items-center">
            <input type="hidden" name="EditarTiroides" value="No">
            <input type="checkbox" class="mr-2" name="EditarTiroides" value="Si" 
                <?php if($pacienteE['Tiroides'] == "Si") echo 'checked'; ?>>
            PROBLEMAS DE TIROIDES
        </label>

        <!-- Cáncer -->
        <label class="flex items-center">
            <input type="hidden" name="EditarCancer" value="No">
            <input type="checkbox" class="mr-2" name="EditarCancer" value="Si" 
                <?php if($pacienteE['Cancer'] == "Si") echo 'checked'; ?>>
            CÁNCER
        </label>
    </div>

<!-- Pregunta: ¿Algún familiar ha padecido de alguna de las enfermedades anteriores? -->
<div class="relative mb-4 shadow-sm">
  <label class="block text-xs text-[#3B3636] mb-1">¿Algún familiar ha padecido de alguna de las enfermedades anteriores?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Familiar_padecido_enfermedades" name="EditarFamiliar_padecido_enfermedades">
    <option disabled <?= ($pacienteE['Familiar_padecido_enfermedades'] == '') ? 'selected' : '' ?>>Seleccione</option>
    <option value="Si" <?= ($pacienteE['Familiar_padecido_enfermedades'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Familiar_padecido_enfermedades'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

<!-- Input: ¿Cuál? -->
<div class="relative mb-4 shadow-sm">
  <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Enfermedades padecidas?" name="EditarEnfermedades_padecidas" value="<?= $pacienteE['Enfermedades_padecidas'] ?>">
</div>

<!-- Input: ¿Quiénes han padecido las enfermedades? -->
<div class="relative mb-4 shadow-sm">
  <input class="pl-4 py-2 text-xs bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿Quiénes han padecido las enfermedades?" name="EditarQuien_padecio" value="<?= $pacienteE['Quien_padecio'] ?>">
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
  <select id="Fuma" class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" name="EditarFuma">
    <option disabled <?= ($pacienteE['Fuma'] == '') ? 'selected' : '' ?>>Seleccione</option>
    <option value="Si" <?= ($pacienteE['Fuma'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Fuma'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

<!-- Input: ¿Cuántos cigarrillos al día? -->
<div class="relative mb-4">
  <input class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="number" placeholder="¿CUÁNTOS CIGARROS AL DÍA?" name="EditarCigarros_dia" value="<?= $pacienteE['Cuantos_cigarros_al_dia_fuma'] ?>">
</div>

<!-- Pregunta: ¿Consume algún tipo de droga? -->
<div class="relative mb-4">
  <label class="block text-xs text-[#3B3636] mb-1">¿CONSUME ALGÚN TIPO DE DROGA?</label>
  <select class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="Consume_drogas" name="EditarConsume_drogas">
    <option disabled <?= ($pacienteE['Consume_drogas'] == '') ? 'selected' : '' ?>>Seleccione</option>
    <option value="Si" <?= ($pacienteE['Consume_drogas'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Consume_drogas'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

      
<!-- Input: ¿Qué drogas está consumiendo? -->
<div class="relative mb-4">
  <input class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="¿QUÉ DROGAS ESTÁ CONSUMIENDO?" name="EditarDrogas_consumiendo" value="<?= $pacienteE['Drogas_consumiendo'] ?>">
</div>

<!-- Pregunta: ¿Consume bebidas alcohólicas con frecuencia? -->
<div class="relative mb-4">
  <label class="block text-xs text-[#3B3636] mb-1">¿CONSUME BEBIDAS ALCOHÓLICAS CON FRECUENCIA?</label>
  <select id="Consume_alcohol" class="pl-4 py-2 bg-[#E6ECF8] col-span-2 text-xs rounded-full w-full drop-shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" name="EditarConsume_alcohol">
    <option disabled <?= ($pacienteE['Consume_alcohol'] == '') ? 'selected' : '' ?>>Seleccione</option>
    <option value="Si" <?= ($pacienteE['Consume_alcohol'] == 'Si') ? 'selected' : '' ?>>Sí</option>
    <option value="No" <?= ($pacienteE['Consume_alcohol'] == 'No') ? 'selected' : '' ?>>No</option>
  </select>
</div>

    </div>

                    <!-- Botones de acción -->
                    <div class="flex justify-end space-x-4">
                        <button type="button" onclick="closeModal('modal-editar-paciente-<?= htmlspecialchars($pacienteE['idPaciente']) ?>')" class="px-6 py-2 bg-gray-300 text-gray-700 rounded-lg">Cancelar</button>
                        <button id="btnActualizarPaciente-<?= htmlspecialchars($pacienteE['idPaciente']) ?>" class="btnActualizarPaciente" data-id="<?= htmlspecialchars($pacienteE['idPaciente']) ?>">Actualizar</button>
                    </div>
                </form>
            </div>
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
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'Solicitudes/VerPaciente.php?id=' + id, true);

    xhr.onload = function() {
        if (xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.error) {
                alert(response.error);
            } else {
                // Llenar los datos del paciente en el modal

                // Llenar los checkboxes de enfermedades
                const enfermedadesCheckboxes = document.querySelectorAll("[data-enfermedades]");
                enfermedadesCheckboxes.forEach((checkbox) => {
                    const enfermedad = checkbox.dataset.enfermedades; // Obtén el nombre de la enfermedad
                    if (response[enfermedad] === "Si") {
                        checkbox.checked = true; // Marca el checkbox si el paciente tiene esta enfermedad
                    } else {
                        checkbox.checked = false; // Desmarca si el paciente no tiene esta enfermedad
                    }
                });

                // Muestra el modal específico para el paciente
                document.getElementById("modal-editar-paciente-" + id).classList.remove("hidden");
            }
        } else {
            alert('Error al cargar los datos del paciente.');
        }
    };

    xhr.onerror = function() {
        alert('Error de conexión al servidor.');
    };

    xhr.send();
}
</script>
