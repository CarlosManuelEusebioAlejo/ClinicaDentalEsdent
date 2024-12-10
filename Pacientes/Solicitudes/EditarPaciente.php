<?php
include('../../Configuraciones/conexion.php'); // Incluye el archivo de conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recupera y sanitiza los datos enviados desde el formulario
    $ID_Paciente                           = mysqli_real_escape_string($conn, $_POST['EditaridPaciente']); // Recuperar el ID
    $Nombre                                 = mysqli_real_escape_string($conn, $_POST['EditarNombre_paciente']);
    $Apellido                               = mysqli_real_escape_string($conn, $_POST['EditarApellido_paciente']);
    $Fecha_nacimiento                       = mysqli_real_escape_string($conn, $_POST['EditarFechaNacimiento']);
    $Edad                                   = mysqli_real_escape_string($conn, $_POST['EditarEdad']);
    $Direccion                              = mysqli_real_escape_string($conn, $_POST['EditarDireccion']);
    $Correo                                 = mysqli_real_escape_string($conn, $_POST['EditarCorreo']);
    $Estado_civil                           = mysqli_real_escape_string($conn, $_POST['EditarEstado_Civil']);
    $Telefono                               = mysqli_real_escape_string($conn, $_POST['EditarTelefono']);
    $Ocupacion                              = mysqli_real_escape_string($conn, $_POST['EditarOcupacion']);
    $Recomendacion                          = mysqli_real_escape_string($conn, $_POST['EditarRecomendacion']);
    $Genero                                 = mysqli_real_escape_string($conn, $_POST['EditarGenero']);
    $Esta_embarazada                        = mysqli_real_escape_string($conn, $_POST['EditarEsta_embarazada']);
    $Meses_de_gestacion                     = mysqli_real_escape_string($conn, $_POST['EditarMeses_de_gestacion']);
  
    $Motivo_consulta                        = mysqli_real_escape_string($conn, $_POST['EditarMotivo_consulta']);
    $Ultima_visita_odontologo               = mysqli_real_escape_string($conn, $_POST['EditarUltima_visita_odontologo']);
    $Cepillo_dientes_al_dia                 = mysqli_real_escape_string($conn, $_POST['EditarCepillo_dientes_al_dia']);
    $Sangrado_encias                        = mysqli_real_escape_string($conn, $_POST['EditarSangrado_encias']);
    $Aprieta_dientes                        = mysqli_real_escape_string($conn, $_POST['EditarAprieta_dientes']);
    $Durante_dia_o_noche                    = mysqli_real_escape_string($conn, $_POST['EditarDurante_dia_o_noche']);
    $Ha_realizado_cirugia_bucal             = mysqli_real_escape_string($conn, $_POST['EditarHa_realizado_cirugia_bucal']);
    $Que_operacion_bucal                    = mysqli_real_escape_string($conn, $_POST['EditarQue_operacion_bucal']);
    $Dificultad_abrir_boca                  = mysqli_real_escape_string($conn, $_POST['EditarDificultad_abrir_boca']);
    $Tiene_brackets                         = mysqli_real_escape_string($conn, $_POST['EditarTiene_brackets']);

    $Toma_medicamentos                      = mysqli_real_escape_string($conn, $_POST['EditarToma_medicamentos'] ?? '');
    $Que_medicamento                        = mysqli_real_escape_string($conn, $_POST['EditarQue_medicamento'] ?? '');
    $Alergico_a_medicamento                 = mysqli_real_escape_string($conn, $_POST['EditarAlergico_a_medicamento'] ?? '');
    $Medicamento_que_es_alergico            = mysqli_real_escape_string($conn, $_POST['EditarMedicamento_que_es_alergico'] ?? '');
    $Mala_experiencia_con_anestesicos       = mysqli_real_escape_string($conn, $_POST['EditarMala_experiencia_con_anestesicos'] ?? '');
    $Cual_anestesico                        = mysqli_real_escape_string($conn, $_POST['EditarCual_anestesico'] ?? '');
    $Lo_han_operado                         = mysqli_real_escape_string($conn, $_POST['EditarLo_han_operado'] ?? '');
    $Que_operacion_le_han_hecho             = mysqli_real_escape_string($conn, $_POST['EditarQue_operacion_le_han_hecho'] ?? '');
    $Lo_han_operado_corazon                 = mysqli_real_escape_string($conn, $_POST['EditarLo_han_operado_corazon'] ?? '');
    $Tiene_marcapasos_corazon               = mysqli_real_escape_string($conn, $_POST['EditarTiene_marcapasos_corazon'] ?? '');
    $Toma_anticoagulante                    = mysqli_real_escape_string($conn, $_POST['EditarToma_anticoagulante'] ?? '');
    $Cual_anticoagulante_toma               = mysqli_real_escape_string($conn, $_POST['EditarCual_anticoagulante_toma'] ?? '');
    $Tiene_tratamiento_antidepresivo        = mysqli_real_escape_string($conn, $_POST['EditarTiene_tratamiento_antidepresivo'] ?? '');
    $Que_Tratamiento_Antidepresivo          = mysqli_real_escape_string($conn, $_POST['EditarTiene_tratamiento_antidepresivo'] ?? '');
    $Artritis_reumatoide                    = mysqli_real_escape_string($conn, $_POST['EditarArtritis_reumatoide'] ?? '');
    $Padece_osteoporosis                    = mysqli_real_escape_string($conn, $_POST['EditarPadece_osteoporosis'] ?? '');
    $Tiene_diabetes                         = mysqli_real_escape_string($conn, $_POST['EditarTiene_diabetes'] ?? '');
    $Que_valores_diabetes_maneja            = mysqli_real_escape_string($conn, $_POST['EditarQue_valores_diabetes_maneja'] ?? '');
    $Es_hipertenso                          = mysqli_real_escape_string($conn, $_POST['EditarEs_hipertenso'] ?? '');
    $Valores_hipertenso_maneja              = mysqli_real_escape_string($conn, $_POST['EditarValores_hipertenso_maneja'] ?? '');
    $Le_han_realizado_transfusion_sanguinea = mysqli_real_escape_string($conn, $_POST['EditarLe_han_realizado_transfusion_sanguinea'] ?? '');
    $Sangra_al_cortarse                     = mysqli_real_escape_string($conn, $_POST['EditarSangra_al_cortarse'] ?? '');
    $Ha_tenido_infarto_corazon              = mysqli_real_escape_string($conn, $_POST['EditarHa_tenido_infarto_corazon'] ?? '');
    $Tiene_protesis_corazon                 = mysqli_real_escape_string($conn, $_POST['EditarTiene_protesis_corazon'] ?? '');
    $Toma_acido_zoledronico                 = mysqli_real_escape_string($conn, $_POST['EditarToma_acido_zoledronico'] ?? '');
    $Toma_fosamax_alendronato               = mysqli_real_escape_string($conn, $_POST['EditarToma_fosamax_alendronato'] ?? '');
    $Toma_ibandronato_boniva                = mysqli_real_escape_string($conn, $_POST['EditarToma_ibandronato_boniva'] ?? '');
    $Toma_actonel_risedronato               = mysqli_real_escape_string($conn, $_POST['EditarToma_actonel_risedronato'] ?? '');

    $Enfermedades_corazon                   = mysqli_real_escape_string($conn, $_POST['EditarEnfermedades_corazon'] ?? '');
    $Enfermedades_pulmonares                = mysqli_real_escape_string($conn, $_POST['EditarEnfermedades_pulmonares'] ?? '');
    $Insuficiencia_renal                    = mysqli_real_escape_string($conn, $_POST['EditarInsuficiencia_renal'] ?? '');
    $Gastritis                              = mysqli_real_escape_string($conn, $_POST['EditarGastritis'] ?? '');
    $Epilepsia                              = mysqli_real_escape_string($conn, $_POST['EditarEpilepsia'] ?? '');
    $Diabetes                               = mysqli_real_escape_string($conn, $_POST['EditarDiabetes'] ?? '');
    $Paralisis                              = mysqli_real_escape_string($conn, $_POST['EditarParalisis'] ?? '');
    $vih_sida                               = mysqli_real_escape_string($conn, $_POST['Editarvih_sida'] ?? '');
    $Tuberculosis                           = mysqli_real_escape_string($conn, $_POST['EditarTuberculosis'] ?? '');
    $Hemofilia                              = mysqli_real_escape_string($conn, $_POST['EditarHemofilia'] ?? '');
    $Hepatitis                              = mysqli_real_escape_string($conn, $_POST['Editarhepatitis'] ?? '');
    $Anemia                                 = mysqli_real_escape_string($conn, $_POST['EditarAnemia'] ?? '');
    $Presion_alta                           = mysqli_real_escape_string($conn, $_POST['EditarPresion_alta'] ?? '');
    $Presion_baja                           = mysqli_real_escape_string($conn, $_POST['EditarPresion_baja'] ?? '');
    $Asma                                   = mysqli_real_escape_string($conn, $_POST['EditarAsma'] ?? '');
    $Artritis                               = mysqli_real_escape_string($conn, $_POST['EditarArtritis'] ?? '');
    $Tiroides                               = mysqli_real_escape_string($conn, $_POST['EditarTiroides'] ?? '');
    $Cancer                                 = mysqli_real_escape_string($conn, $_POST['EditarCancer'] ?? '');

    $Familiar_padecido_enfermedades         = mysqli_real_escape_string($conn, $_POST['EditarFamiliar_padecido_enfermedades'] ?? '');
    $Enfermedades_padecidas                 = mysqli_real_escape_string($conn, $_POST['EditarEnfermedades_padecidas'] ?? '');
    $Quien_padecio                          = mysqli_real_escape_string($conn, $_POST['EditarQuien_padecio'] ?? '');
    
    $Fuma                                   = mysqli_real_escape_string($conn, $_POST['EditarFuma'] ?? '');
    $Cuantos_cigarros_al_dia_fuma           = mysqli_real_escape_string($conn, $_POST['EditarCigarros_dia'] ?? ''); 
    $Consume_drogas                         = mysqli_real_escape_string($conn, $_POST['EditarConsume_drogas'                      ] ?? '');
    $Drogas_consumiendo =  mysqli_real_escape_string($conn, $_POST['EditarDrogas_consumiendo'] ?? '');
    $Consume_alcohol = mysqli_real_escape_string($conn, $_POST['EditarConsume_alcohol'] ?? '');


    $Foto_paciente = ''; // Inicializar la variable de foto

    // Verificar si se cargó una nueva foto
    if (isset($_FILES['Foto_paciente']) && $_FILES['Foto_paciente']['error'] === UPLOAD_ERR_OK) {
        $fotoTmpPath = $_FILES['Foto_paciente']['tmp_name']; // Ruta temporal del archivo
        $fotoFileName = uniqid() . '_' . $_FILES['Foto_paciente']['name']; // Nombre único
        $fotoFilePath = '../../Fotos_pacientes/' . $fotoFileName; // Ruta destino
    
        // Mover el archivo a la ruta final
        if (move_uploaded_file($fotoTmpPath, $fotoFilePath)) {
            $Foto_paciente = $fotoFilePath; // Guardar la ruta en la variable
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'No se pudo guardar la foto en el servidor.'
            );
            header('Content-Type: application/json');
            echo json_encode($response);
            exit;
        }
    } else {
        // Si no se cargó una nueva foto, se mantiene la foto que ya tiene el paciente (puedes usar una lógica para conservar la foto existente).
        // En este caso, si no hay nueva foto, puedes obtener la foto de la base de datos o dejarla vacía.
        // Si ya tienes la foto en la base de datos, no es necesario hacer nada aquí.
        $Foto_paciente = ''; // Mantener la foto existente (puedes cargarla de la base de datos si es necesario)
    }

    // Actualiza la información del paciente en la base de datos
    $query = "UPDATE pacientes SET 
                Nombre_paciente                         ='$Nombre',
                Apellido_paciente                       ='$Apellido',
                Fecha_nacimiento                        ='$Fecha_nacimiento',
                Edad                                    ='$Edad',
                Direccion                               ='$Direccion',
                Correo                                  ='$Correo', 
                Estado_civil                            ='$Estado_civil',
                Telefono                                ='$Telefono',  
                Ocupacion                               ='$Ocupacion',
                Recomendacion                           ='$Recomendacion',
                Genero                                  ='$Genero',
                Esta_embarazada                         ='$Esta_embarazada',
                Meses_de_gestacion                      ='$Meses_de_gestacion',
                Motivo_consulta                         ='$Motivo_consulta',
                Ultima_visita_odontologo                ='$Ultima_visita_odontologo',
                Cepillo_dientes_al_dia                  ='$Cepillo_dientes_al_dia',
                Sangrado_encias                         ='$Sangrado_encias',
                Aprieta_dientes                         ='$Aprieta_dientes',
                Durante_dia_o_noche                     ='$Durante_dia_o_noche',
                Ha_realizado_cirugia_bucal              ='$Ha_realizado_cirugia_bucal',
                Que_operacion_bucal                     ='$Que_operacion_bucal',
                Dificultad_abrir_boca                   ='$Dificultad_abrir_boca',
                Tiene_brackets                          ='$Tiene_brackets',
                Toma_medicamentos                       ='$Toma_medicamentos',
                Que_medicamento                         ='$Que_medicamento',
                Alergico_a_medicamento                  ='$Alergico_a_medicamento',
                Medicamento_que_es_alergico             ='$Medicamento_que_es_alergico',
                Mala_experiencia_con_anestesicos        ='$Mala_experiencia_con_anestesicos',
                Cual_anestesico                         ='$Cual_anestesico',
                Lo_han_operado                          ='$Lo_han_operado',
                Que_operacion_le_han_hecho              ='$Que_operacion_le_han_hecho',
                Lo_han_operado_corazon                  ='$Lo_han_operado_corazon',
                Tiene_marcapasos_corazon                ='$Tiene_marcapasos_corazon',
                Toma_anticoagulante                     ='$Toma_anticoagulante',
                Cual_anticoagulante_toma                ='$Cual_anticoagulante_toma',
                Tiene_tratamiento_antidepresivo         ='$Tiene_tratamiento_antidepresivo',
                Que_Tratamiento_Antidepresivo           ='$Que_Tratamiento_Antidepresivo',
                Artritis_reumatoide                     ='$Artritis_reumatoide',
                Padece_osteoporosis                     ='$Padece_osteoporosis',
                Tiene_diabetes                          ='$Tiene_diabetes',
                Que_valores_diabetes_maneja             ='$Que_valores_diabetes_maneja',
                Es_hipertenso                           ='$Es_hipertenso',
                Valores_hipertenso_maneja               ='$Valores_hipertenso_maneja',
                Le_han_realizado_transfusion_sanguinea  ='$Le_han_realizado_transfusion_sanguinea',
                Sangra_al_cortarse                      ='$Sangra_al_cortarse',
                Ha_tenido_infarto_corazon               ='$Ha_tenido_infarto_corazon',
                Toma_acido_zoledronico                  ='$Toma_acido_zoledronico',
                Toma_fosamax_alendronato                ='$Toma_fosamax_alendronato',
                Toma_ibandronato_boniva                 ='$Toma_ibandronato_boniva',
                Toma_actonel_risedronato                ='$Toma_actonel_risedronato',
                Enfermedades_corazon                    ='$Enfermedades_corazon',
                Enfermedades_pulmonares                 ='$Enfermedades_pulmonares',
                Insuficiencia_renal                     ='$Insuficiencia_renal',
                Gastritis                               ='$Gastritis',
                Epilepsia                               ='$Epilepsia',
                Diabetes                                ='$Diabetes',
                Paralisis                               ='$Paralisis',
                vih_sida                                ='$vih_sida',
                Tuberculosis                            ='$Tuberculosis',
                Hemofilia                               ='$Hemofilia',
                Hepatitis                               ='$Hepatitis',
                Anemia                                  ='$Anemia',
                Presion_alta                            ='$Presion_alta',
                Presion_baja                            ='$Presion_baja',
                Asma                                    ='$Asma',
                Artritis                                ='$Artritis',
                Tiroides                                ='$Tiroides',
                Cancer                                  ='$Cancer',
                Familiar_padecido_enfermedades          ='$Familiar_padecido_enfermedades',
                Enfermedades_padecidas                  ='$Enfermedades_padecidas',
                Quien_padecio                           ='$Quien_padecio',
                Fuma                                    ='$Fuma',
                Cuantos_cigarros_al_dia_fuma            ='$Cuantos_cigarros_al_dia_fuma',
                Consume_drogas                          ='$Consume_drogas',
                Drogas_consumiendo                      ='$Drogas_consumiendo',
                Consume_alcohol                         ='$Consume_alcohol'";

// Solo agregar la actualización de la foto si se subió una nueva foto
if ($Foto_paciente !== '') {
    $query .= ", Foto_paciente='$Foto_paciente'";
}

$query .= " WHERE idPaciente='$ID_Paciente'";

if (mysqli_query($conn, $query)) {
    echo json_encode(['status' => 'success', 'message' => 'Datos actualizados correctamente.']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Error al actualizar los datos: ' . mysqli_error($conn)]);
}
} else {
echo json_encode(['status' => 'error', 'message' => 'Método de solicitud no permitido.']);
}

mysqli_close($conn);
?>
