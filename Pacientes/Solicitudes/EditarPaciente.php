<?php
include('../../Configuraciones/conexion.php'); // Incluye el archivo de conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recupera y sanitiza los datos enviados desde el formulario
    $Nombre                                 = mysqli_real_escape_string($conn, $_POST['Nombre_paciente']);
    $Apellido                               = mysqli_real_escape_string($conn, $_POST['Apellido_paciente']);
    $Fecha_nacimiento                       = mysqli_real_escape_string($conn, $_POST['Fecha_nacimiento']);
    $Edad                                   = mysqli_real_escape_string($conn, $_POST['Edad']);
    $Direccion                              = mysqli_real_escape_string($conn, $_POST['Direccion']);
    $Correo                                 = mysqli_real_escape_string($conn, $_POST['Correo']);
    $Estado_civil                           = mysqli_real_escape_string($conn, $_POST['Estado_civil']);
    $Telefono                               = mysqli_real_escape_string($conn, $_POST['Telefono']);
    $Ocupacion                              = mysqli_real_escape_string($conn, $_POST['Ocupacion']);
    $Recomendacion                          = mysqli_real_escape_string($conn, $_POST['Recomendacion']);
    $Genero                                 = mysqli_real_escape_string($conn, $_POST['Genero']);
    $Esta_embarazada                        = mysqli_real_escape_string($conn, $_POST['Esta_embarazada']);
    $Meses_de_gestacion                     = mysqli_real_escape_string($conn, $_POST['Meses_de_gestacion']);
  
    $Motivo_consulta                        = mysqli_real_escape_string($conn, $_POST['Motivo_consulta']);
    $Ultima_visita_odontologo               = mysqli_real_escape_string($conn, $_POST['Ultima_visita_odontologo']);
    $Cepillo_dientes_al_dia                 = mysqli_real_escape_string($conn, $_POST['Cepillo_dientes_al_dia']);
    $Sangrado_encias                        = mysqli_real_escape_string($conn, $_POST['Sangrado_encias']);
    $Aprieta_dientes                        = mysqli_real_escape_string($conn, $_POST['Aprieta_dientes']);
    $Durante_dia_o_noche                    = mysqli_real_escape_string($conn, $_POST['Durante_dia_o_noche']);
    $Ha_realizado_cirugia_bucal             = mysqli_real_escape_string($conn, $_POST['Ha_realizado_cirugia_bucal']);
    $Que_operacion_bucal                    = mysqli_real_escape_string($conn, $_POST['Que_operacion_bucal']);
    $Dificultad_abrir_boca                  = mysqli_real_escape_string($conn, $_POST['Dificultad_abrir_boca']);
    $Tiene_brackets                         = mysqli_real_escape_string($conn, $_POST['Tiene_brackets']);

    $Toma_medicamentos                      = mysqli_real_escape_string($conn, $_POST['Toma_medicamentos'] ?? '');
    $Que_medicamento                        = mysqli_real_escape_string($conn, $_POST['Que_medicamento'] ?? '');
    $Alergico_a_medicamento                 = mysqli_real_escape_string($conn, $_POST['Que_medicamento'] ?? '');
    $Medicamento_que_es_alergico            = mysqli_real_escape_string($conn, $_POST['Que_medicamento'] ?? '');
    $Mala_experiencia_con_anestesicos       = mysqli_real_escape_string($conn, $_POST['Mala_experiencia_con_anestesicos'] ?? '');
    $Cual_anestesico                        = mysqli_real_escape_string($conn, $_POST['Cual_anestesico'] ?? '');
    $Lo_han_operado                         = mysqli_real_escape_string($conn, $_POST['Lo_han_operado'] ?? '');
    $Que_operacion_le_han_hecho             = mysqli_real_escape_string($conn, $_POST['Que_operacion_le_han_hecho'] ?? '');
    $Lo_han_operado_corazon                 = mysqli_real_escape_string($conn, $_POST['Lo_han_operado_corazon'] ?? '');
    $Tiene_marcapasos_corazon               = mysqli_real_escape_string($conn, $_POST['Tiene_marcapasos_corazon'] ?? '');
    $Toma_anticoagulante                    = mysqli_real_escape_string($conn, $_POST['Toma_anticoagulante'] ?? '');
    $Cual_anticoagulante_toma               = mysqli_real_escape_string($conn, $_POST['Cual_anticoagulante_toma'] ?? '');
    $Tiene_tratamiento_antidepresivo        = mysqli_real_escape_string($conn, $_POST['Tiene_tratamiento_antidepresivo'] ?? '');
    $Que_Tratamiento_Antidepresivo          = mysqli_real_escape_string($conn, $_POST['Tiene_tratamiento_antidepresivo'] ?? '');
    $Artritis_reumatoide                    = mysqli_real_escape_string($conn, $_POST['Artritis_reumatoide'] ?? '');
    $Padece_osteoporosis                    = mysqli_real_escape_string($conn, $_POST['Padece_osteoporosis'] ?? '');
    $Tiene_diabetes                         = mysqli_real_escape_string($conn, $_POST['Tiene_diabetes'] ?? '');
    $Que_valores_diabetes_maneja            = mysqli_real_escape_string($conn, $_POST['Que_valores_diabetes_maneja'] ?? '');
    $Es_hipertenso                          = mysqli_real_escape_string($conn, $_POST['Es_hipertenso'] ?? '');
    $Valores_hipertenso_maneja              = mysqli_real_escape_string($conn, $_POST['Valores_hipertenso_maneja'] ?? '');
    $Le_han_realizado_transfusion_sanguinea = mysqli_real_escape_string($conn, $_POST['Le_han_realizado_transfusion_sanguinea'] ?? '');
    $Sangra_al_cortarse                     = mysqli_real_escape_string($conn, $_POST['Sangra_al_cortarse'] ?? '');
    $Ha_tenido_infarto_corazon              = mysqli_real_escape_string($conn, $_POST['Ha_tenido_infarto_corazon'] ?? '');
    $Tiene_protesis_corazon                 = mysqli_real_escape_string($conn, $_POST['Tiene_protesis_corazon'] ?? '');
    $Toma_acido_zoledronico                 = mysqli_real_escape_string($conn, $_POST['Toma_acido_zoledronico'] ?? '');
    $Toma_fosamax_alendronato               = mysqli_real_escape_string($conn, $_POST['Toma_fosamax_alendronato'] ?? '');
    $Toma_ibandronato_boniva                = mysqli_real_escape_string($conn, $_POST['Toma_ibandronato_boniva'] ?? '');
    $Toma_actonel_risedronato               = mysqli_real_escape_string($conn, $_POST['toma_acido_zoledronico'] ?? '');

    $Enfermedades_corazon                   = mysqli_real_escape_string($conn, $_POST['Enfermedades_corazon'] ?? '');
    $Enfermedades_pulmonares                = mysqli_real_escape_string($conn, $_POST['Enfermedades_pulmonares'] ?? '');
    $Insuficiencia_renal                    = mysqli_real_escape_string($conn, $_POST['Insuficiencia_renal'] ?? '');
    $Gastritis                              = mysqli_real_escape_string($conn, $_POST['Gastritis'] ?? '');
    $Epilepsia                              = mysqli_real_escape_string($conn, $_POST['Epilepsia'] ?? '');
    $Diabetes                               = mysqli_real_escape_string($conn, $_POST['Diabetes'] ?? '');
    $Paralisis                              = mysqli_real_escape_string($conn, $_POST['Paralisis'] ?? '');
    $vih_sida                               = mysqli_real_escape_string($conn, $_POST['vih_sida'] ?? '');
    $Tuberculosis                           = mysqli_real_escape_string($conn, $_POST['Tuberculosis'] ?? '');
    $Hemofilia                              = mysqli_real_escape_string($conn, $_POST['Hemofilia'] ?? '');
    $Hepatitis                              = mysqli_real_escape_string($conn, $_POST['hepatitis'] ?? '');
    $Anemia                                 = mysqli_real_escape_string($conn, $_POST['Anemia'] ?? '');
    $Presion_alta                           = mysqli_real_escape_string($conn, $_POST['Presion_alta'] ?? '');
    $Presion_baja                           = mysqli_real_escape_string($conn, $_POST['Presion_baja'] ?? '');
    $Asma                                   = mysqli_real_escape_string($conn, $_POST['Asma'] ?? '');
    $Artritis                               = mysqli_real_escape_string($conn, $_POST['Artritis'] ?? '');
    $Tiroides                               = mysqli_real_escape_string($conn, $_POST['Tiroides'] ?? '');
    $Cancer                                 = mysqli_real_escape_string($conn, $_POST['Cancer'] ?? '');

    $Familiar_padecido_enfermedades         = mysqli_real_escape_string($conn, $_POST['Familiar_padecido_enfermedades'] ?? '');
    $Enfermedades_padecidas                 = mysqli_real_escape_string($conn, $_POST['Enfermedades_padecidas'              ] ?? '');
    $Quien_padecio                          = mysqli_real_escape_string($conn, $_POST['Quien_padecio'] ?? '');
    
    $Fuma                                   = mysqli_real_escape_string($conn, $_POST['Fuma'] ?? '');
    $Cuantos_cigarros_al_dia_fuma           = mysqli_real_escape_string($conn, $_POST['Cuantos_cigarros_al_dia_fuma'] ?? ''); 
    $Consume_drogas                         = mysqli_real_escape_string($conn, $_POST['Consume_drogas'                      ] ?? '');
    $Drogas_consumiendo = mysqli_real_escape_string($conn, $_POST['consume_drogas'] ?? '');
    $Consume_alcohol = mysqli_real_escape_string($conn, $_POST['drogas_tomando'] ?? '');

    // Actualiza la información del paciente en la base de datos
    $query = "UPDATE pacientes SET 
                Nombre                                  ='$Nombre',
                Apellido                                ='$Apellido',
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
                Consume_drogas                          ='$Consume_drogas'
                Drogas_consumiendo                      ='$Drogas_consumiendo'
                Consume_alcohol                         ='$Consume_alcohol'
                Foto_paciente                           ='$Foto_paciente'
              WHERE idPaciente='$id'";

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