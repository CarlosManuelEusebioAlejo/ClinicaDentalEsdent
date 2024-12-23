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

    // Consulta SQL para actualizar el presupuesto
    $query = "UPDATE presupuestos SET Tratamiento = ?, Observaciones = ?, Costo = ?, Fecha = ?, Valido_hasta = ? WHERE id_presupuesto = ?";

    if ($stmt = $conn->prepare($query)) {
        // Vincular los parámetros y ejecutar la actualización
        $stmt->bind_param('sssssi', $tratamiento, $observaciones, $costo, $fecha, $valido_hasta, $id_presupuesto);

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