<?php
include '../../Configuraciones/conexion.php';

// Obtener los datos enviados en el cuerpo de la solicitud
$data = json_decode(file_get_contents('php://input'), true);

// Validar que se recibieron los datos necesarios
if (isset($data['id_presupuesto'], $data['tratamiento'], $data['observaciones'], $data['costo'], $data['fecha'], $data['valido_hasta'])) {
    $id_presupuesto = $data['id_presupuesto'];
    $tratamiento = $data['tratamiento'];
    $observaciones = $data['observaciones'];
    $costo = $data['costo'];
    $fecha = $data['fecha'];
    $valido_hasta = $data['valido_hasta'];

    // Validar si la fecha es mayor que la fecha de validación
    if ($fecha > $valido_hasta) {
        // Mostrar error si la fecha es mayor que la fecha de validación
        echo json_encode(['status' => 'error', 'message' => 'La fecha no puede ser mayor que la fecha de validación.']);
        exit;
    }

    // Obtener la fecha actual
    $fecha_actual = date("Y-m-d");

    // Determinar el estado basado en la fecha 'Valido_hasta'
    if ($valido_hasta >= $fecha_actual) {
        $estado = 'pendiente'; // Si la fecha 'Valido_hasta' es futura o igual a la fecha actual
    } else {
        $estado = 'expirado';  // Si la fecha 'Valido_hasta' es anterior a la fecha actual
    }

    // Consulta SQL para actualizar el presupuesto, incluyendo el estado
    $query = "UPDATE presupuestos SET Tratamiento = ?, Observaciones = ?, Costo = ?, Fecha = ?, Valido_hasta = ?, estado = ? WHERE id_presupuesto = ?";

    if ($stmt = $conn->prepare($query)) {
        // Vincular los parámetros y ejecutar la actualización
        $stmt->bind_param('ssssssi', $tratamiento, $observaciones, $costo, $fecha, $valido_hasta, $estado, $id_presupuesto);

        if ($stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'Presupuesto actualizado correctamente.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Error al actualizar el presupuesto.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error en la consulta.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Faltan datos para actualizar.']);
}

$conn->close();
?>
