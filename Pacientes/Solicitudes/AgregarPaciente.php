<?php
// Incluir el archivo de conexión a la base de datos
include('../../Configuraciones/conexion.php');

// Iniciar la sesión para las alertas
session_start();

// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recibir y limpiar los datos del formulario
    $Nombre                                 = mysqli_real_escape_string($conn, $_POST['AGREGAR_Nombre_paciente'] ?? '');
    $Apellido                               = mysqli_real_escape_string($conn, $_POST['AGREGAR_Apellido_paciente'] ?? '');
    $Fecha_nacimiento                       = mysqli_real_escape_string($conn, $_POST['AGREGAR_Fecha_nacimiento'] ?? '');
    $Edad                                   = mysqli_real_escape_string($conn, $_POST['AGREGAR_Edad'] ?? '');
    $Direccion                              = mysqli_real_escape_string($conn, $_POST['AGREGAR_Direccion'] ?? '');
    $Correo                                 = mysqli_real_escape_string($conn, $_POST['AGREGAR_Correo'] ?? '');
    $Estado_civil                           = mysqli_real_escape_string($conn, $_POST['AGREGAR_Estado_civil'] ?? '');
    $Telefono                               = mysqli_real_escape_string($conn, $_POST['AGREGAR_Telefono'] ?? '');
    $Ocupacion                              = mysqli_real_escape_string($conn, $_POST['AGREGAR_Ocupacion'] ?? '');
    $Recomendacion                          = mysqli_real_escape_string($conn, $_POST['AGREGAR_Recomendacion'] ?? '');
    $genero                                 = mysqli_real_escape_string($conn, $_POST['AGREGAR_genero'] ?? '');
    $Esta_embarazada                        = mysqli_real_escape_string($conn, $_POST['AGREGAR_Esta_embarazada'] ?? '');
    $Meses_de_gestacion                     = mysqli_real_escape_string($conn, $_POST['AGREGAR_Meses_de_gestacion'] ?? '');
  
    $Motivo_consulta                        = mysqli_real_escape_string($conn, $_POST['AGREGAR_Motivo_consulta'] ?? '');
    $Ultima_visita_odontologo               = mysqli_real_escape_string($conn, $_POST['AGREGAR_Ultima_visita_odontologo'] ?? '');
    $Cepillo_dientes_al_dia                 = mysqli_real_escape_string($conn, $_POST['AGREGAR_Cepillo_dientes_al_dia'] ?? '');
    $Sangrado_encias                        = mysqli_real_escape_string($conn, $_POST['AGREGAR_Sangrado_encias'] ?? '');
    $Aprieta_dientes                        = mysqli_real_escape_string($conn, $_POST['AGREGAR_Aprieta_dientes'] ?? '');
    $Durante_dia_o_noche                    = mysqli_real_escape_string($conn, $_POST['AGREGAR_Durante_dia_o_noche'] ?? '');
    $Ha_realizado_cirugia_bucal             = mysqli_real_escape_string($conn, $_POST['AGREGAR_Ha_realizado_cirugia_bucal'] ?? '');
    $Que_operacion_bucal                    = mysqli_real_escape_string($conn, $_POST['AGREGAR_Que_operacion_bucal'] ?? '');
    $Dificultad_abrir_boca                  = mysqli_real_escape_string($conn, $_POST['AGREGAR_Dificultad_abrir_boca'] ?? '');
    $Tiene_brackets                         = mysqli_real_escape_string($conn, $_POST['AGREGAR_Tiene_brackets'] ?? '');

    $Toma_medicamentos                      = mysqli_real_escape_string($conn, $_POST['AGREGAR_Toma_medicamentos'] ?? '');
    $Que_medicamento                        = mysqli_real_escape_string($conn, $_POST['AGREGAR_Que_medicamento'] ?? '');
    $Alergico_a_medicamento                 = mysqli_real_escape_string($conn, $_POST['AGREGAR_Alergico_a_medicamento'] ?? '');
    $Medicamento_que_es_alergico            = mysqli_real_escape_string($conn, $_POST['AGREGAR_Medicamento_que_es_alergico'] ?? '');
    $Mala_experiencia_con_anestesicos       = mysqli_real_escape_string($conn, $_POST['AGREGAR_Mala_experiencia_con_anestesicos'] ?? '');
    $Cual_anestesico                        = mysqli_real_escape_string($conn, $_POST['AGREGAR_Cual_anestesico'] ?? '');
    $Lo_han_operado                         = mysqli_real_escape_string($conn, $_POST['AGREGAR_Lo_han_operado'] ?? '');
    $Que_operacion_le_han_hecho             = mysqli_real_escape_string($conn, $_POST['AGREGAR_Que_operacion_le_han_hecho'] ?? '');
    $Lo_han_operado_corazon                 = mysqli_real_escape_string($conn, $_POST['AGREGAR_Lo_han_operado_corazon'] ?? '');
    $Tiene_marcapasos_corazon               = mysqli_real_escape_string($conn, $_POST['AGREGAR_Tiene_marcapasos_corazon'] ?? '');
    $Toma_anticoagulante                    = mysqli_real_escape_string($conn, $_POST['AGREGAR_Toma_anticoagulante'] ?? '');
    $Cual_anticoagulante_toma               = mysqli_real_escape_string($conn, $_POST['AGREGAR_Cual_anticoagulante_toma'] ?? '');
    $Tiene_tratamiento_antidepresivo        = mysqli_real_escape_string($conn, $_POST['AGREGAR_Tiene_tratamiento_antidepresivo'] ?? '');
    $Que_Tratamiento_Antidepresivo          = mysqli_real_escape_string($conn, $_POST['AGREGAR_Tiene_tratamiento_antidepresivo'] ?? '');
    $Artritis_reumatoide                    = mysqli_real_escape_string($conn, $_POST['AGREGAR_Artritis_reumatoide'] ?? '');
    $Padece_osteoporosis                    = mysqli_real_escape_string($conn, $_POST['AGREGAR_Padece_osteoporosis'] ?? '');
    $Tiene_diabetes                         = mysqli_real_escape_string($conn, $_POST['AGREGAR_Tiene_diabetes'] ?? '');
    $Que_valores_diabetes_maneja            = mysqli_real_escape_string($conn, $_POST['AGREGAR_Que_valores_diabetes_maneja'] ?? '');
    $Es_hipertenso                          = mysqli_real_escape_string($conn, $_POST['AGREGAR_Es_hipertenso'] ?? '');
    $Valores_hipertenso_maneja              = mysqli_real_escape_string($conn, $_POST['AGREGAR_Valores_hipertenso_maneja'] ?? '');
    $Le_han_realizado_transfusion_sanguinea = mysqli_real_escape_string($conn, $_POST['AGREGAR_Le_han_realizado_transfusion_sanguinea'] ?? '');
    $Sangra_al_cortarse                     = mysqli_real_escape_string($conn, $_POST['AGREGAR_Sangra_al_cortarse'] ?? '');
    $Ha_tenido_infarto_corazon              = mysqli_real_escape_string($conn, $_POST['AGREGAR_Ha_tenido_infarto_corazon'] ?? '');
    $Tiene_protesis_corazon                 = mysqli_real_escape_string($conn, $_POST['AGREGAR_Tiene_protesis_corazon'] ?? '');
    $Toma_acido_zoledronico                 = mysqli_real_escape_string($conn, $_POST['AGREGAR_Toma_acido_zoledronico'] ?? '');
    $Toma_fosamax_alendronato               = mysqli_real_escape_string($conn, $_POST['AGREGAR_Toma_fosamax_alendronato'] ?? '');
    $Toma_ibandronato_boniva                = mysqli_real_escape_string($conn, $_POST['AGREGAR_Toma_ibandronato_boniva'] ?? '');
    $Toma_actonel_risedronato               = mysqli_real_escape_string($conn, $_POST['AGREGAR_Toma_actonel_risedronato'] ?? '');

    $Enfermedades_corazon                   = mysqli_real_escape_string($conn, $_POST['AGREGAR_Enfermedades_corazon'] ?? '');
    $Enfermedades_pulmonares                = mysqli_real_escape_string($conn, $_POST['AGREGAR_Enfermedades_pulmonares'] ?? '');
    $Insuficiencia_renal                    = mysqli_real_escape_string($conn, $_POST['AGREGAR_Insuficiencia_renal'] ?? '');
    $Gastritis                              = mysqli_real_escape_string($conn, $_POST['AGREGAR_Gastritis'] ?? '');
    $Epilepsia                              = mysqli_real_escape_string($conn, $_POST['AGREGAR_Epilepsia'] ?? '');
    $Diabetes                               = mysqli_real_escape_string($conn, $_POST['AGREGAR_Diabetes'] ?? '');
    $Paralisis                              = mysqli_real_escape_string($conn, $_POST['AGREGAR_Paralisis'] ?? '');
    $vih_sida                               = mysqli_real_escape_string($conn, $_POST['AGREGAR_vih_sida'] ?? '');
    $Tuberculosis                           = mysqli_real_escape_string($conn, $_POST['AGREGAR_Tuberculosis'] ?? '');
    $Hemofilia                              = mysqli_real_escape_string($conn, $_POST['AGREGAR_Hemofilia'] ?? '');
    $Hepatitis                              = mysqli_real_escape_string($conn, $_POST['AGREGAR_Hepatitis'] ?? '');
    $Anemia                                 = mysqli_real_escape_string($conn, $_POST['AGREGAR_Anemia'] ?? '');
    $Presion_alta                           = mysqli_real_escape_string($conn, $_POST['AGREGAR_Presion_alta'] ?? '');
    $Presion_baja                           = mysqli_real_escape_string($conn, $_POST['AGREGAR_Presion_baja'] ?? '');
    $Asma                                   = mysqli_real_escape_string($conn, $_POST['AGREGAR_Asma'] ?? '');
    $Artritis                               = mysqli_real_escape_string($conn, $_POST['AGREGAR_Artritis'] ?? '');
    $Tiroides                               = mysqli_real_escape_string($conn, $_POST['AGREGAR_Tiroides'] ?? '');
    $Cancer                                 = mysqli_real_escape_string($conn, $_POST['AGREGAR_Cancer'] ?? '');

    $Familiar_padecido_enfermedades         = mysqli_real_escape_string($conn, $_POST['AGREGAR_Familiar_padecido_enfermedades'] ?? '');
    $Enfermedades_padecidas                 = mysqli_real_escape_string($conn, $_POST['AGREGAR_Enfermedades_padecidas'              ] ?? '');
    $Quien_padecio                          = mysqli_real_escape_string($conn, $_POST['AGREGAR_Quien_padecio'] ?? '');
    
    $Fuma                                   = mysqli_real_escape_string($conn, $_POST['AGREGAR_Fuma'] ?? '');
    $Cuantos_cigarros_al_dia_fuma           = mysqli_real_escape_string($conn, $_POST['AGREGAR_Cuantos_cigarros_al_dia_fuma'] ?? ''); 
    $Consume_drogas                         = mysqli_real_escape_string($conn, $_POST['AGREGAR_Consume_drogas'                      ] ?? '');
    $Drogas_consumiendo                     = mysqli_real_escape_string($conn, $_POST['AGREGAR_Drogas_consumiendo'] ?? '');
    $Consume_alcohol                        = mysqli_real_escape_string($conn, $_POST['AGREGAR_Consume_alcohol'] ?? '');


    // Recibir y limpiar la firma
    $Firma = null; // Inicializamos la variable
    $Foto_paciente = null; // Inicializamos la variable
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
                               Medicamento_que_es_alergico,
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
                '$Medicamento_que_es_alergico',
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
