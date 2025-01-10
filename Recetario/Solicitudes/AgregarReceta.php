<?php
header('Content-Type: application/json');
include '../../Configuraciones/conexion.php';

// Validar y sanitizar las entradas
$idPaciente = isset($_POST['idPaciente']) ? intval($_POST['idPaciente']) : null;
$Receta     = isset($_POST['Receta']) ? trim($_POST['Receta']) : '';

// Validar campos obligatorios
$errores = [];

if (!$idPaciente) {
    $errores[] = 'ID del paciente';
}
if (!$Receta) {
    $errores[] = 'Receta';
}

// Si hay errores, devolverlos como respuesta
if (count($errores) > 0) {
    echo json_encode(['success' => false, 'error' => 'Los siguientes campos son obligatorios: ' . implode(', ', $errores)]);
    exit();
}

// Insertar los datos en la tabla
$sql = "INSERT INTO recetas (idPaciente, Receta) VALUES (?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    // Enlazar los parámetros
    $stmt->bind_param('is', $idPaciente, $Receta);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Receta agregada correctamente.']);
    } else {
        echo json_encode(['success' => false, 'error' => 'Error al guardar la receta: ' . $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Error al preparar la consulta: ' . $conn->error]);
}

$conn->close();
?>

