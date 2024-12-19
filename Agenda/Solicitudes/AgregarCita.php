<?php
include '../../Configuraciones/conexion.php';
// Obtener datos del formulario
$Nombre_paciente = isset($_POST['Nombre_paciente']) ? $conn->real_escape_string($_POST['Nombre_paciente']) : null;
$Motivo_consulta = isset($_POST['Motivo_consulta']) ? $conn->real_escape_string($_POST['Motivo_consulta']) : null;
$Fecha_cita      = isset($_POST['Fecha_cita']) ? $conn->real_escape_string($_POST['Fecha_cita']) : null;
$Hora_inicio     = isset($_POST['Hora_inicio']) ? $conn->real_escape_string($_POST['Hora_inicio']) : null;
$Hora_fin        = isset($_POST['Hora_fin']) ? $conn->real_escape_string($_POST['Hora_fin']) : null;
$id_doctor       = isset($_POST['id_doctor']) ? $conn->real_escape_string($_POST['id_doctor']) : null;
$Nombre_doctor   = isset($_POST['Nombre_doctor']) ? $conn->real_escape_string($_POST['Nombre_doctor']) : null;
$Unidad          = isset($_POST['Unidad']) ? $conn->real_escape_string($_POST['Unidad']) : null;
$idPaciente      = isset($_POST['idPaciente']) && !empty($_POST['idPaciente']) ? $conn->real_escape_string($_POST['idPaciente']) : null;

// Validar que los campos obligatorios no estén vacíos
if (!$Nombre_paciente || !$Motivo_consulta || !$Fecha_cita || !$Hora_inicio || !$Hora_fin || !$id_doctor || !$Nombre_doctor || !$Unidad) {
    echo json_encode(['status' => 'error', 'message' => 'Todos los campos obligatorios deben estar completos.']);
    $conn->close();
    exit();
}

// Si se proporciona idPaciente, verificar que exista en la tabla pacientes
if ($idPaciente) {
    $checkPacienteQuery = "SELECT idPaciente FROM pacientes WHERE idPaciente = '$idPaciente'";
    $resultPaciente = $conn->query($checkPacienteQuery);

    if ($resultPaciente->num_rows === 0) {
        echo json_encode(['status' => 'error', 'message' => 'El paciente con el ID proporcionado no existe.']);
        $conn->close();
        exit();
    }
}

// Preparar la consulta de inserción
$query = $idPaciente 
    ? "INSERT INTO citas (Nombre_paciente, 
                          Motivo_consulta, 
                          Fecha_cita, 
                          Hora_inicio, 
                          Hora_fin, 
                          id_doctor, 
                          Nombre_doctor, 
                          Unidad, 
                          idPaciente) 
                 VALUES ('$Nombre_paciente', 
                         '$Motivo_consulta', 
                         '$Fecha_cita', 
                         '$Hora_inicio', 
                         '$Hora_fin', 
                         '$id_doctor', 
                         '$Nombre_doctor', 
                         '$Unidad', 
                         '$idPaciente')"
    : "INSERT INTO citas (Nombre_paciente, 
                          Motivo_consulta, 
                          Fecha_cita, 
                          Hora_inicio, 
                          Hora_fin, 
                          id_doctor, 
                          Nombre_doctor, 
                          Unidad) 
                 VALUES ('$Nombre_paciente', 
                         '$Motivo_consulta', 
                         '$Fecha_cita', 
                         '$Hora_inicio', 
                         '$Hora_fin', 
                         '$id_doctor', 
                         '$Nombre_doctor', 
                         '$Unidad')";

// Ejecutar la consulta
if ($conn->query($query) === TRUE) {
    echo json_encode(['status' => 'success', 'message' => '¡Cita registrada correctamente!', 'redirectUrl' => '../Agenda/']);
} else {
    error_log("Error al agregar la cita: " . $conn->error); // Agregar log para depuración
    echo json_encode(['status' => 'error', 'message' => 'Error al agregar la cita: ' . $conn->error]);
}

// Cerrar conexión
$conn->close();
?>
