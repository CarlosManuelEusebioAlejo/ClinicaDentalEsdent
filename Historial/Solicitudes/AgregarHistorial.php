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
$idPaciente = isset($_POST['idPaciente']) ? intval($_POST['idPaciente']) : null;
$idDoctor = isset($_POST['doctor']) ? explode(',', $_POST['doctor'])[0] : null;
$nombreDoctor = isset($_POST['doctor']) ? explode(',', $_POST['doctor'])[1] : '';
$tratamiento = isset($_POST['Tratamiento']) ? $conn->real_escape_string(trim($_POST['Tratamiento'])) : '';
$observacion = isset($_POST['Observaciones']) ? $conn->real_escape_string(trim($_POST['Observaciones'])) : '';
$costo = isset($_POST['Costo']) ? intval($_POST['Costo']) : 0;
$fecha = isset($_POST['Fecha']) ? $conn->real_escape_string(trim($_POST['Fecha'])) : '';

// Validar campos obligatorios
$errores = [];

if (!$idPaciente) {
    $errores[] = 'ID del paciente';
}
if (!$idDoctor) {
    $errores[] = 'ID del doctor';
}
if (!$nombreDoctor) {
    $errores[] = 'Nombre del doctor';
}
if (!$tratamiento) {
    $errores[] = 'Tratamiento';
}
if (!$observacion) {
    $errores[] = 'Observación';
}
if (!$costo) {
    $errores[] = 'Costo';
}
if (!$fecha) {
    $errores[] = 'Fecha';
}

// Si hay errores, devolverlos como respuesta
if (count($errores) > 0) {
    echo json_encode(['success' => false, 'error' => 'Los siguientes campos son obligatorios: ' . implode(', ', $errores)]);
    exit();
}

// Insertar los datos en la tabla
$sql = "INSERT INTO historial_tratamiento (
            idPaciente, 
            id_doctor, 
            Nombre_doctor, 
            Fecha, 
            Tratamiento, 
            Observacion, 
            Costo 
            
        ) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param('iissssi', $idPaciente, $idDoctor, $nombreDoctor, $fecha, $tratamiento, $observacion, $costo);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Tratamiento agregado correctamente.']);
    } else {
        echo json_encode(['success' => false, 'error' => 'Error al guardar el tratamiento: ' . $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Error al preparar la consulta: ' . $conn->error]);
}

$conn->close();
?>
