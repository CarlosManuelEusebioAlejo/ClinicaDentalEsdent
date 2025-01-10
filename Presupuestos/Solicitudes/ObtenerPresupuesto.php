<?php
include '../../Configuraciones/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    // Sanitizar el parámetro de entrada
    $id_presupuesto = intval($_GET['id']);

    // Preparar la consulta SQL
    $query = "SELECT id_presupuesto, idPaciente, Nombre_paciente, Apellido_paciente, Tratamiento, Costo, Observaciones, Fecha, Valido_hasta
              FROM presupuestos
              WHERE id_presupuesto = ?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        // Asociar parámetros y ejecutar la consulta
        $stmt->bind_param("i", $id_presupuesto);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Obtener los datos del presupuesto
            $presupuesto = $result->fetch_assoc();

            // Devolver los datos como JSON
            echo json_encode([
                'status' => 'success',
                'presupuesto' => $presupuesto
            ]);
        } else {
            // Presupuesto no encontrado
            echo json_encode([
                'status' => 'error',
                'message' => 'Presupuesto no encontrado.'
            ]);
        }
        $stmt->close();
    } else {
        // Error al preparar la consulta
        echo json_encode([
            'status' => 'error',
            'message' => 'Error al preparar la consulta.'
        ]);
    }
} else {
    // Solicitud inválida
    echo json_encode([
        'status' => 'error',
        'message' => 'Solicitud inválida.'
    ]);
}

// Cerrar la conexión
$conn->close();
?>
