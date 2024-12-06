<?php
// Incluir el archivo de conexión a la base de datos
include('../../Configuraciones/conexion.php');

// Iniciar la sesión para las alertas
session_start();

// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recibir y limpiar los datos del formulario
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
    $genero                                 = mysqli_real_escape_string($conn, $_POST['genero']);
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

    // Recibir y limpiar la firma
// Verificar si se cargó un archivo de firma
if (isset($_FILES['Firma']) && $_FILES['Firma']['error'] === UPLOAD_ERR_OK) {
    $firmaTmpPath = $_FILES['Firma']['tmp_name']; // Ruta temporal del archivo
    $firmaFileName = uniqid() . '_' . $_FILES['Firma']['name']; // Nombre único
    $firmaFilePath = '../../firmas_pacientes/' . $firmaFileName; // Ruta destino

    // Mover el archivo a la ruta final
    if (move_uploaded_file($firmaTmpPath, $firmaFilePath)) {
        $Firma = $firmaFilePath; // Guardar la ruta en la variable
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'No se pudo guardar la firma en el servidor.'
        );
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
}

// Verificar si se cargó una foto del paciente
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
}


// Verificar si el correo ya existe en la base de datos
$check_email_query = "SELECT * FROM pacientes WHERE Correo = '$Correo'";
$result = mysqli_query($conn, $check_email_query);

if (mysqli_num_rows($result) > 0) {
    $response = array(
        'status' => 'error',
        'message' => 'El correo electrónico ya está registrado.'
    );
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}



    // Insertar los datos en la base de datos
// Insertar los datos en la base de datos
$sql = "INSERT INTO pacientes (Nombre_paciente, 
                               Apellido_paciente, 
                               Fecha_nacimiento, 
                               Edad, 
                               Direccion, 
                               Correo,
                               Estado_civil, 
                               Telefono, 
                               Ocupacion,                                                           
                               Recomendacion, 
                               genero, 
                               Esta_embarazada,
                               Meses_de_gestacion,
                               Motivo_consulta, 
                               Ultima_visita_odontologo, 
                               Cepillo_dientes_al_dia, 
                               Sangrado_encias, 
                               Aprieta_dientes, 
                               Durante_dia_o_noche, 
                               Ha_realizado_cirugia_bucal, 
                               Que_operacion_bucal,
                               Dificultad_abrir_boca,
                               Tiene_brackets, 
                               Toma_medicamentos, 
                               Que_medicamento,
                               Alergico_a_medicamento,
                               Mala_experiencia_con_anestesicos,
                               Cual_anestesico,
                               Lo_han_operado, 
                               Que_operacion_le_han_hecho,
                               Lo_han_operado_corazon,
                               Tiene_marcapasos_corazon,
                               Toma_anticoagulante,
                               Cual_anticoagulante_toma,
                               Tiene_tratamiento_antidepresivo,
                               Que_Tratamiento_Antidepresivo,
                               Artritis_reumatoide,
                               Padece_osteoporosis,
                               Tiene_diabetes,
                               Que_valores_diabetes_maneja,
                               Es_hipertenso,
                               Valores_hipertenso_maneja,
                               Le_han_realizado_transfusion_sanguinea,
                               Sangra_al_cortarse,
                               Ha_tenido_infarto_corazon,
                               Toma_acido_zoledronico,
                               Toma_fosamax_alendronato,
                               Toma_ibandronato_boniva,
                               Toma_actonel_risedronato,
                               Enfermedades_corazon, 
                               Enfermedades_pulmonares,
                               Insuficiencia_renal,
                               Gastritis, 
                               Epilepsia, 
                               Diabetes, 
                               Paralisis,
                               vih_sida,
                               Tuberculosis,
                               Hemofilia,
                               Hepatitis,
                               Anemia,
                               Presion_alta, 
                               Presion_baja, 
                               Asma, 
                               Artritis,
                               Tiroides,
                               Cancer, 
                               Familiar_padecido_enfermedades, 
                               Enfermedades_padecidas,
                               Quien_padecio,
                               Fuma, 
                               Cuantos_cigarros_al_dia_fuma,
                               Consume_drogas,
                               Drogas_consumiendo,
                               Consume_alcohol,
                               Firma,
                               Foto_paciente)
        VALUES ('$Nombre', 
                '$Apellido', 
                '$Fecha_nacimiento',
                '$Edad', 
                '$Direccion', 
                '$Correo', 
                '$Estado_civil', 
                '$Telefono', 
                '$Ocupacion', 
                '$Recomendacion', 
                '$genero',
                '$Esta_embarazada',
                '$Meses_de_gestacion',
                '$Motivo_consulta',
                '$Ultima_visita_odontologo',
                '$Cepillo_dientes_al_dia',
                '$Sangrado_encias',
                '$Aprieta_dientes', 
                '$Durante_dia_o_noche',
                '$Ha_realizado_cirugia_bucal',
                '$Que_operacion_bucal',
                '$Dificultad_abrir_boca',
                '$Tiene_brackets',
                '$Toma_medicamentos',
                '$Que_medicamento',
                '$Alergico_a_medicamento',
                '$Mala_experiencia_con_anestesicos',
                '$Cual_anestesico',
                '$Lo_han_operado',
                '$Que_operacion_le_han_hecho', 
                '$Lo_han_operado_corazon', 
                '$Tiene_marcapasos_corazon',
                '$Toma_anticoagulante', 
                '$Cual_anticoagulante_toma', 
                '$Tiene_tratamiento_antidepresivo', 
                '$Que_Tratamiento_Antidepresivo',
                '$Artritis_reumatoide',
                '$Padece_osteoporosis',
                '$Tiene_diabetes', 
                '$Que_valores_diabetes_maneja',
                '$Es_hipertenso', 
                '$Valores_hipertenso_maneja',
                '$Le_han_realizado_transfusion_sanguinea',
                '$Sangra_al_cortarse', 
                '$Ha_tenido_infarto_corazon', 
                '$Toma_acido_zoledronico',
                '$Toma_fosamax_alendronato', 
                '$Toma_ibandronato_boniva',
                '$Toma_actonel_risedronato',
                '$Enfermedades_corazon', 
                '$Enfermedades_pulmonares', 
                '$Insuficiencia_renal', 
                '$Gastritis', 
                '$Epilepsia', 
                '$Diabetes', 
                '$Paralisis',
                '$vih_sida',
                '$Tuberculosis',
                '$Hemofilia',
                '$Hepatitis',
                '$Anemia',
                '$Presion_alta', 
                '$Presion_baja', 
                '$Asma',
                '$Artritis', 
                '$Tiroides',
                '$Cancer', 
                '$Familiar_padecido_enfermedades',                                                           
                '$Enfermedades_padecidas', 
                '$Quien_padecio',
                '$Fuma', 
                '$Cuantos_cigarros_al_dia_fuma',
                '$Consume_drogas', 
                '$Drogas_consumiendo', 
                '$Consume_alcohol', 
                '$Firma',
                '$Foto_paciente')";

if (mysqli_query($conn, $sql)) {
    $response = array(
        'status' => 'success',
        'message' => 'Paciente agregado exitosamente.'
    );
} else {
    $response = array(
        'status' => 'error',
        'message' => 'Error al agregar el paciente: ' . mysqli_error($conn)
    );
}


    // Enviar la respuesta como JSON
    header('Content-Type: application/json');
    echo json_encode($response);
}
    // Cerrar la conexión a la base de datos
    mysqli_close($conn);
?>