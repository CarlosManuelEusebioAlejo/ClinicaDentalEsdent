<?php foreach ($pacientes as $pacientev): ?>
    <!-- Modal único para cada paciente -->
    <div id="modal-ver-paciente-<?= $pacientev['idPaciente'] ?>" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
        <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 800px;">
            <!-- Botón Cerrar -->
            <button type="button" onclick="closeModal('modal-ver-paciente-<?= $pacientev['idPaciente'] ?>')" 
                    class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>

            <!-- Encabezado del Modal -->
            <div class="rounded-full shadow-md flex items-center justify-between text-center m-4 px-4 py-2" style="background-color: #B4221B;">
                <h1 class="text-white text-3xl">Datos del Paciente</h1>
                
                <!-- Botón Editar Paciente -->
                <button type="button" onclick="openEditarPacienteModal(<?= $pacientev['idPaciente'] ?>)" 
                        id="edit-patient-btn-<?= $pacientev['idPaciente'] ?>" 
                        class="w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center hover:shadow-lg">
                    <i class="bx bx-edit" style="color:#3c3c3c; font-size: 1.5rem;"></i>
                </button>

                <!-- Botón Imprimir PDF -->
                <button id="download-pdf<?= $pacientev['idPaciente'] ?>" 
                        class="flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg shadow-md hover:shadow-lg transition-all"
                        onclick="generatePDF(<?= $pacientev['idPaciente'] ?>)">
                    <i class="bx bx-download" style="font-size: 1.5rem;"></i> 
                    <span>Imprimir PDF</span>
                </button>
            </div>

            <script>
function generatePDF(pacienteId) {
    // Cambia la URL según la ruta de tu archivo PHP que genera el PDF
    var url = 'pdf/pdf.php?idPaciente=' + pacienteId;
    window.open(url, '_blank'); // Abre el PDF en una nueva pestaña
}
</script>

            <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
                <h2 class="text-white px-4 pt-1 mb-10 rounded-full text-xl" style="background-color: #B4221B; height: 40px;">
                    DATOS PERSONALES
                </h2>
                <div class="flex flex-row justify-center gap-8">
  <!-- Fotografía del paciente -->
  <div class="flex flex-col items-center cursor-pointer group">
    <div id="VFoto-display" class="border-2 border-gray-300 w-64 h-64 rounded-md flex items-center justify-center overflow-hidden relative group">
      <span class="text-gray-500 absolute z-10 group-hover:hidden" id="Vplaceholder-text"></span>
      <img id="VPaciente-Foto" 
           src="../<?= !empty($pacientev['Foto_paciente']) ? str_replace('../', '', $pacientev['Foto_paciente']) : 'Fotos_pacientes/default.webp' ?>" 
           class="w-full h-full object-cover rounded-md transition-all duration-300 transform group-hover:scale-110 group-hover:opacity-90" 
           onclick="openImageInModal(this)" />
    </div>
  </div>

  <!-- Firma del paciente -->
  <div class="flex flex-col items-center cursor-pointer group">
    <div id="VFirma-display" class="border-2 border-gray-300 w-64 h-64 rounded-md flex items-center justify-center overflow-hidden relative group">
      <span class="text-gray-500 absolute z-10 group-hover:hidden" id="Vplaceholder-text"></span>
      <img id="VPaciente-Firma" 
           src="../<?= !empty($pacientev['Firma']) ? str_replace('../', '', $pacientev['Firma']) : 'firmas_pacientes/default.png' ?>" 
           alt="Firma del paciente" 
           class="w-full h-full object-contain rounded-md transition-all duration-300 transform group-hover:scale-110 group-hover:opacity-90" 
           onclick="openImageInModal(this)" />
    </div>
  </div>
</div>

            <br>

            <!-- Datos del paciente -->
            <div class="grid grid-cols-2 gap-6">
          <!-- Input: Nombre(s) -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Nombres del paciente</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="VNombre_paciente" value="<?= $pacientev['Nombre_paciente'] ?>" disabled>
          </div>
      
          <!-- Input: APELLIDOS -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Apellidos del paciente</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VApellido_paciente" value="<?= $pacientev['Apellido_paciente'] ?>">
          </div>
      
          <!-- Input: Fecha de Nacimiento -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Fecha Nacimiento</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VFechaNacimiento" value="<?= $pacientev['Fecha_nacimiento'] ?>">
          </div>
      
          <!-- Input: Edad -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Edad</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VEdad" value="<?= $pacientev['Edad'] ?>">
          </div>
      
          <!-- Input: Dirección -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Domicilio</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VDireccion" value="<?= $pacientev['Direccion'] ?>">
          </div>
      
          <!-- Input: Número de Teléfono -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Número de Teléfono</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VTelefono" value="<?= $pacientev['Telefono'] ?>">
          </div>
      
          <!-- Input: Correo Electrónico -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Correo Electrónico</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VCorreo" value="<?= $pacientev['Correo'] ?>">
          </div>
      
          <!-- Input: Estado Civil -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Estado Civil</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VEstadoCivil" value="<?= $pacientev['Estado_civil'] ?>">
          </div>
      
          <!-- Input: Ocupación -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Ocupación</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VOcupacion" value="<?= $pacientev['Ocupacion'] ?>">
          </div>
      
          <!-- Input: Recomendación -->
          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Recomendación</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VRecomendacion" value="<?= $pacientev['Recomendacion'] ?>">
          </div>

          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Genero</label>
            <input 
              class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
              disabled 
              value="<?= $pacientev['Genero'] ?>"
              >
          </div>
          <div class|="relative" id="Vembarazada-container" style="display: none;">
            <label class="block text-xs text-[#3B3636] mb-1">Esta embarazada</label>
            <input 
              class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
              disabled 
              value="<?= $pacientev['Esta_embarazada'] ?>"
            >
          </div>

          <div class="relative">
            <label class="block text-xs text-[#3B3636] mb-1">Meses de gestación</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VMeses_de_gestacion" value="<?= $pacientev['Meses_de_gestacion'] ?>">
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
            <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VMotivo_consulta" value="<?= $pacientev['Motivo_consulta'] ?>">
        </div>
        
        <!-- Input: Última visita al odontólogo -->
        <div class="relative mb-4 shadow-sm">
            <label class="block text-xs text-[#3B3636] mb-1">Última visita al odontólogo</label>
            <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VUltima_visita_odontologo" value="<?= $pacientev['Ultima_visita_odontologo'] ?>">
        </div>
        
        <!-- Input: Cuántas veces se cepilla los dientes al día -->
        <div class="relative mb-4 shadow-sm">
            <label class="block text-xs text-[#3B3636] mb-1">¿Cuántas veces se cepilla sus dientes al día?</label>
            <input class="pl-4 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VCepillo_dientes_al_dia" value="<?= $pacientev['Cepillo_dientes_al_dia'] ?>">
        </div>
        
        <!-- Select: Sus encías sangran con frecuencia -->
        <div class="relative mb-4 shadow-sm">
            <label class="block text-xs text-[#3B3636] mb-1">¿Sus encías sangran con frecuencia?</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VSangrado_encias" value="<?= $pacientev['Sangrado_encias'] ?>">

        </div>
        
        <!-- Select: Padece de bruxismo -->
        <div class="relative mb-4 shadow-sm" >
          <label class="block text-xs text-[#3B3636] mb-1">¿Padece de bruxismo (Apretar sus dientes)?</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VAprieta_dientes" value="<?= $pacientev['Aprieta_dientes'] ?>">
        </div>
        <div class="relative mb-4 shadow-sm" >
          <input  class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VDurante_dia_o_noche" value="<?= $pacientev['Durante_dia_o_noche'] ?>">
        </div>
        
        <!-- Select: Le han realizado alguna cirugía bucal -->
        <div class="relative mb-4 shadow-sm">
            <label class="block text-xs text-[#3B3636] mb-1">¿Le han realizado alguna cirugía bucal?</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VHa_realizado_cirugia_bucal" value="<?= $pacientev['Ha_realizado_cirugia_bucal'] ?>">
        </div>

        <!-- Select: Qué cirugía bucal -->
        <div class="relative mb-4 shadow-sm">
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled id="VQue_operacion_bucal" value="<?= $pacientev['Que_operacion_bucal'] ?>">
        </div>
        
        <!-- Select: Tiene dificultad para abrir o cerrar la boca -->
        <div class="relative mb-4 shadow-sm">
            <label class="block text-xs text-[#3B3636] mb-1">¿Tiene dificultad para abrir o cerrar la boca?</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled id="VDificultad_abrir_boca" value="<?= $pacientev['Dificultad_abrir_boca'] ?>">
        
        </div>
        
        <!-- Select: Ha utilizado tratamiento de brackets -->
        <div class="relative mb-4 shadow-sm">
            <label class="block text-xs text-[#3B3636] mb-1">¿Ha utilizado tratamiento de brackets?</label>
            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"  disabled id="VTiene_brackets" value="<?= $pacientev['Tiene_brackets'] ?>">
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
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VToma_medicamentos" value="<?= $pacientev['Toma_medicamentos'] ?>">
                    </div>
                    <!-- Input: ¿Cuál? (si selecciona que sí) -->
                    <div class="relative mb-4 shadow-sm">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VQue_medicamento" value="<?= $pacientev['Que_medicamento'] ?>">
                    </div>
                
                    <!-- Select: ¿Es alérgico a algún medicamento? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Es alérgico a algún medicamento?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VAlergico_a_medicamento" value="<?= $pacientev['Alergico_a_medicamento'] ?>">
                    </div>
                    <!-- Select: ¿Medicamento al que es alergico? -->
                    <div class="relative mb-4 shadow-sm">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VMedicamento_que_es_alergico" value="<?= $pacientev['Medicamento_que_es_alergico'] ?>">
                    </div>
    
                    <!-- Select: ¿Ha tenido mala experiencia con anestésicos? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Ha tenido mala experiencia con anestésicos?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VMala_experiencia_con_anestesicos" value="<?= $pacientev['Mala_experiencia_con_anestesicos'] ?>">
                    </div>
                    <!-- Select: ¿Anestésicos con mala experiencia? -->
                    <div class="relative mb-4 shadow-sms">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VCual_anestesico" value="<?= $pacientev['Cual_anestesico'] ?>">
                    </div>
                
                    <!-- Select: ¿Lo han operado? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Lo han operado?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VLo_han_operado" value="<?= $pacientev['Lo_han_operado'] ?>">
                    </div>
                    <!-- Select: ¿De que lo han operado? -->
                    <div class="relative mb-4 shadow-sm">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VQue_operacion_le_han_hecho" value="<?= $pacientev['Que_operacion_le_han_hecho'] ?>">
                    </div>

                    <!-- Select: ¿Tiene algún marcapasos o le han operado del corazón? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">Lo han operado del corazón?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VLo_han_operado_corazon" value="<?= $pacientev['Lo_han_operado_corazon'] ?>">
                    </div>

                    <!-- Select: ¿Tiene algún marcapasos o le han operado del corazón? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Tiene marcapasos del corazón?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VTiene_marcapasos_corazon" value="<?= $pacientev['Tiene_marcapasos_corazon'] ?>">
                    </div>
                
                    <!-- Select: ¿Está tomando algún anticoagulante oral? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Está tomando algún anticoagulante oral?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VToma_anticoagulante" value="<?= $pacientev['Toma_anticoagulante'] ?>">
                    </div>
                    <!-- Select: ¿Cuál anticoagulante toma? -->
                    <div class="relative mb-4 shadow-sm">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VCual_anticoagulante_toma" value="<?= $pacientev['Cual_anticoagulante_toma'] ?>">
                    </div>
                    
                    <!-- Select: ¿Está en tratamiento antidepresivo? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Está en tratamiento antidepresivo?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VTiene_tratamiento_antidepresivo" value="<?= $pacientev['Tiene_tratamiento_antidepresivo'] ?>">
                    </div>
                    <!-- Select: ¿Qué tratamiento toma? -->
                    <div class="relative mb-4 shadow-sm">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VQue_Tratamiento_Antidepresivo" value="<?= $pacientev['Que_Tratamiento_Antidepresivo'] ?>">
                    </div>
                
                    <!-- Select: ¿Padece de artritis reumatoide? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Padece de artritis reumatoide?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VArtritis_reumatoide" value="<?= $pacientev['Artritis_reumatoide'] ?>">
                    </div>
                
                    <!-- Select: ¿Padece de osteoporosis? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Padece de osteoporosis?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VPadece_osteoporosis" value="<?= $pacientev['Padece_osteoporosis'] ?>">
                    </div>
                
                    <!-- Select: ¿Tiene diabetes? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Tiene diabetes?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VTiene_diabetes" value="<?= $pacientev['Tiene_diabetes'] ?>">
                    </div>
                    <!-- Select:  ¿Qué valores maneja?  -->
                    <div class="relative mb-4 shadow-sm">
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VQue_valores_diabetes_maneja" value="<?= $pacientev['Que_valores_diabetes_maneja'] ?>">
                    </div>
                
                    <!-- Select: ¿Es hipertenso? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Es hipertenso?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VEs_hipertenso" value="<?= $pacientev['Es_hipertenso'] ?>">                
                    </div>
                    <!-- Select: ¿Qué valores maneja? -->
                    <div class="relative mb-4 shadow-sm">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VValores_hipertenso_maneja" value="<?= $pacientev['Valores_hipertenso_maneja'] ?>">                
                    </div>

                    <!-- Select: ¿Le han realizado transfusiones sanguíneas? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Le han realizado transfusiones sanguíneas?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VLe_han_realizado_transfusion_sanguinea" value="<?= $pacientev['Le_han_realizado_transfusion_sanguinea'] ?>">
                    </div>
                
                    <!-- Select: ¿Sangra mucho al cortarse? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Sangra mucho al cortarse?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VSangra_al_cortarse" value="<?= $pacientev['Sangra_al_cortarse'] ?>">
                    </div>
                
                    <!-- Select: ¿Ha tenido infarto en el corazón? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Ha tenido infarto en el corazón?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VHa_tenido_infarto_corazon" value="<?= $pacientev['Ha_tenido_infarto_corazon'] ?>">
                    </div>
                
                    <!-- Select: ¿Tiene prótesis en el corazón? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Tiene prótesis en el corazón?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VTiene_protesis_corazon" value="<?= $pacientev['Tiene_protesis_corazon'] ?>">
                    </div>
                
                    <!-- Select: ¿Toma ácido zoledrónico? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Toma ácido zoledrónico?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"disabled id="VToma_acido_zoledronico" value="<?= $pacientev['Toma_acido_zoledronico'] ?>">
                    </div>
                
                    <!-- Select: ¿Toma Fosamax (Alendronato)? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Toma Fosamax (Alendronato)?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VToma_fosamax_alendronato" value="<?= $pacientev['Toma_fosamax_alendronato'] ?>">
                    </div>
                
                    <!-- Select: ¿Toma Ibandronato (Boniva)? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Toma Ibandronato (Boniva)?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled type="text" id="VToma_ibandronato_boniva" value="<?= $pacientev['Toma_ibandronato_boniva'] ?>">
                    </div>
                
                    <!-- Select: ¿Toma Actonel (Risedronato)? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Toma Actonel (Risedronato)?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VToma_actonel_risedronato" value="<?= $pacientev['Toma_actonel_risedronato'] ?>">
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
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VFamiliar_padecido_enfermedades" value="<?= $pacientev['Familiar_padecido_enfermedades'] ?>">
                    </div>

                    <!-- Pregunta: ¿Algún familiar ha padecido de alguna de las enfermedades anteriores? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">Enfermedades que han padecido</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VEnfermedades_padecidas" value="<?= $pacientev['Enfermedades_padecidas'] ?>">
                    </div>

                    <!-- Pregunta: ¿Quiénes han padecido las enfermedades? -->
                    <div class="relative mb-4 shadow-sm">
                      <label class="block text-xs text-[#3B3636] mb-1">Quienes han padecido las enfermedades</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VQuien_padecio" value="<?= $pacientev['Quien_padecio'] ?>">
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
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VFuma" value="<?= $pacientev['Fuma'] ?>">
                    </div>

                    <!-- Pregunta: ¿Fuma? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Cuántos cigarros al dia?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VCuantos_cigarros_al_dia_fuma" value="<?= $pacientev['Cuantos_cigarros_al_dia_fuma'] ?>">
                    </div>
                  
                    <!-- Pregunta: ¿Consume algún tipo de droga? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Consume drogas?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VConsume_drogas" value="<?= $pacientev['Consume_drogas'] ?>">
                    </div>

                    <!-- Pregunta: ¿Qué drogas está consumiendo? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿Qué drogas está consumiendo?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VDrogas_consumiendo" value="<?= $pacientev['Drogas_consumiendo'] ?>">
                    </div>
                  
                    <!-- Pregunta: ¿Consume bebidas alcohólicas con frecuencia? -->
                    <div class="relative mb-4">
                      <label class="block text-xs text-[#3B3636] mb-1">¿CONSUME BEBIDAS ALCOHÓLICAS CON FRECUENCIA?</label>
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" disabled id="VConsume_alcohol" value="<?= $pacientev['Consume_alcohol'] ?>">

                    </div>
                  </div>

        <!-- Botón de Cerrar -->
        <div class="flex justify-end mt-2">
            <button type="button" id="close-ver-paciente-btn" onclick="closeModalbtn('modal-ver-paciente-<?= $pacientev['idPaciente'] ?>')" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
                Cerrar
            </button>
        </div>
    </div>
</div>

        </div>
    </div>
<?php endforeach; ?>

<script>
// Función para cerrar el modal con el id dinámico
function closeModal(modalId) {
    document.getElementById(modalId).classList.add("hidden");
}

// Función para cerrar el modal con el id dinámico
function closeModalbtn(modalId) {
    document.getElementById(modalId).classList.add("hidden");
}

// Función para abrir el modal con los datos del paciente
function openVerPacienteModal(id) {
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


                // Mostrar el modal
                document.getElementById("modal-ver-paciente-" + id).classList.remove("hidden");
            }
        } else {
            alert("Hubo un problema al cargar los detalles del paciente.");
        }
    };
    xhr.send();
}

</script>
