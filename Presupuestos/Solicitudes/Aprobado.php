<?php
// Incluir archivo de conexión
include '../../Configuraciones/conexion.php';

// Obtener los datos de la solicitud (se asume que se está enviando en formato JSON)
$data = json_decode(file_get_contents('php://input'), true);

// Verificar si se recibieron los datos correctamente
if (isset($data['id_presupuesto']) && isset($data['estado'])) {
    $id_presupuesto = $data['id_presupuesto'];
    $estado = $data['estado'];

    // Validar que el estado sea "aprobado"
    if ($estado === 'aprobado') {
        // Preparar la consulta para actualizar el estado
        $query = "UPDATE presupuestos SET estado = ? WHERE id_presupuesto = ?";
        $stmt = $conn->prepare($query);

        if ($stmt) {
            // Enlazar los parámetros
            $stmt->bind_param("si", $estado, $id_presupuesto);

            // Ejecutar la consulta
            if ($stmt->execute()) {
                // Respuesta exitosa
                echo json_encode(['status' => 'success']);
            } else {
                // Error al ejecutar la consulta
                echo json_encode(['status' => 'error', 'message' => 'Error al actualizar el estado']);
            }

            // Cerrar la declaración
            $stmt->close();
        } else {
            // Error al preparar la consulta
            echo json_encode(['status' => 'error', 'message' => 'Error al preparar la consulta']);
        }
    } else {
        // Estado no válido
        echo json_encode(['status' => 'error', 'message' => 'Estado no válido']);
    }
} else {
    // Datos faltantes
    echo json_encode(['status' => 'error', 'message' => 'Faltan parámetros']);
}

// Cerrar la conexión
$conn->close();
?>
