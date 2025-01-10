<?php
header('Content-Type: application/json');

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinicadentalesdent";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(['success' => false, 'error' => 'Error de conexión a la base de datos.']);
    exit();
}

// Validar y sanitizar las entradas
$idTratamiento = isset($_POST['EDITAR_id_tratamiento']) ? intval($_POST['EDITAR_id_tratamiento']) : null;
$tratamiento = isset($_POST['EDITAR_Tratamiento']) ? $conn->real_escape_string(trim($_POST['EDITAR_Tratamiento'])) : '';
$costo = isset($_POST['EDITAR_costo']) ? floatval($_POST['EDITAR_costo']) : 0;
$observacion = isset($_POST['EDITAR_Observaciones']) ? $conn->real_escape_string(trim($_POST['EDITAR_Observaciones'])) : '';
$fecha = isset($_POST['EDITAR_fecha_registro']) ? $conn->real_escape_string(trim($_POST['EDITAR_fecha_registro'])) : '';
$idDoctor = isset($_POST['EDITAR_doctor']) ? intval($_POST['EDITAR_doctor']) : null;

// Validar campos obligatorios
$errores = [];
if (!$idTratamiento) $errores[] = 'ID del tratamiento';
if (!$tratamiento) $errores[] = 'Tratamiento';
if (!$costo) $errores[] = 'Costo';
if (!$observacion) $errores[] = 'Observaciones';
if (!$fecha) $errores[] = 'Fecha';
if (!$idDoctor) $errores[] = 'Doctor';

// Si hay errores, devolverlos
if (!empty($errores)) {
    echo json_encode(['success' => false, 'error' => 'Campos faltantes: ' . implode(', ', $errores)]);
    exit();
}

// Obtener el Nombre_doctor basado en el idDoctor
$sqlDoctor = "SELECT Nombre_doctor FROM doctores WHERE id_doctor = ?";
$stmtDoctor = $conn->prepare($sqlDoctor);

if (!$stmtDoctor) {
    echo json_encode(['success' => false, 'error' => 'Error al preparar la consulta para obtener el doctor: ' . $conn->error]);
    exit();
}

$stmtDoctor->bind_param('i', $idDoctor);
$stmtDoctor->execute();
$resultDoctor = $stmtDoctor->get_result();
$nombreDoctor = $resultDoctor->fetch_assoc()['Nombre_doctor'] ?? null;
$stmtDoctor->close();

if (!$nombreDoctor) {
    echo json_encode(['success' => false, 'error' => 'Doctor no encontrado.']);
    exit();
}

// Actualizar el tratamiento en la base de datos
$sql = "UPDATE historial_tratamiento 
        SET Tratamiento = ?, 
            Costo = ?, 
            Observacion = ?, 
            Fecha = ?, 
            Nombre_doctor = ?,
            id_doctor = ?
        WHERE id_tratamiento = ?";

$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param('sdsssii', $tratamiento, $costo, $observacion, $fecha, $nombreDoctor, $idDoctor, $idTratamiento);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Tratamiento actualizado correctamente.']);
    } else {
        echo json_encode(['success' => false, 'error' => 'Error al ejecutar la consulta: ' . $stmt->error]);
    }
    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Error al preparar la consulta: ' . $conn->error]);
}

$conn->close();
?>
