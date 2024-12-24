<?php
// Incluir la configuración de la base de datos
include '../../Configuraciones/conexion.php';

// Establecer encabezado para respuestas JSON
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_pagos']) && is_numeric($_POST['id_pagos'])) {
    $id_pagos = intval($_POST['id_pagos']);
    
    // Preparar la consulta SQL
    $query = "SELECT id_pagos, Tratamiento, Costo, Abono, id_doctor, Nombre_doctor, Tipo_pago, Factura, fecha_Pago, Adeudo 
              FROM pagos
              WHERE id_pagos = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param('i', $id_pagos); // Aseguramos el tipo de dato de la variable
        $stmt->execute();
        $result = $stmt->get_result();
        
        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            $pagos = $result->fetch_assoc();
            echo json_encode(['status' => 'success', 'pagos' => $pagos]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No se encontró el pago.']);
        }

        $stmt->close();
    } else {
        error_log('Error al preparar la consulta: ' . $conn->error);
        echo json_encode(['status' => 'error', 'message' => 'Error al preparar la consulta.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Solicitud inválida o ID de pagos no proporcionado.']);
}
?>
