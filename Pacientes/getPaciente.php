<?php

include_once '../Configuraciones/conexion.php'; // Ajusta la ruta según sea necesario


// Verifica si se ha proporcionado el id del paciente
if (isset($_GET['id'])) {
    $idPaciente = $_GET['id'];

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta para obtener los datos específicos del paciente
    $query = "SELECT idPaciente, Nombre_paciente, Apellido_paciente, Fecha_nacimiento AS 
    FechaNacimiento,
     Edad,
      Direccion,
        Telefono,
         Correo,
          Estado_Civil,
            Ocupacion,
             Recomendacion,
              Genero,
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
                     Tiene_protesis_corazon,
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
                     Foto_paciente FROM pacientes WHERE idPaciente = ?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        // Asignar el parámetro a la consulta
        $stmt->bind_param("i", $idPaciente);
        $stmt->execute();
        $result = $stmt->get_result();
        $paciente = $result->fetch_assoc();

        // Devolver solo los datos específicos en formato JSON
        header('Content-Type: application/json');
        echo json_encode($paciente);
    } else {
        // Si ocurre un error con la consulta
        echo json_encode(['error' => 'Error en la consulta']);
    }

    // Cierra la conexión
    $stmt->close();
    $conn->close();
} else {
    // Si no se ha proporcionado el id del paciente
    echo json_encode(['error' => 'No se proporcionó el id del paciente']);
}
?>