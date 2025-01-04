<?php
include '../../Configuraciones/conexion.php';

// Recibir los datos desde la solicitud POST (como JSON)
$data = json_decode(file_get_contents('php://input'), true);

// Validación de datos
$id_pago = $data['id_pago'] ?? null;
$nuevo_adeudo = $data['nuevo_adeudo'] ?? null;

if (!$id_pago || !isset($nuevo_adeudo)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Faltan datos para actualizar el pago'
    ]);
    exit();
}

// Obtener el costo actual del tratamiento para calcular el abono
$query_costo = "SELECT Costo FROM pagos WHERE id_pagos = ?";
$stmt_costo = $conn->prepare($query_costo);
$stmt_costo->bind_param("i", $id_pago);  // 'i' para integer

if ($stmt_costo->execute()) {
    $result = $stmt_costo->get_result();
    $row = $result->fetch_assoc();
    $costo = $row['Costo'];
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Error al obtener el costo del tratamiento'
    ]);
    exit();
}

// Si el nuevo adeudo es 0, el abono es igual al costo
$abono = ($nuevo_adeudo <= 0) ? $costo : ($costo - $nuevo_adeudo);

// Actualizar el pago en la base de datos
$query = "UPDATE pagos SET Abono = ?, Adeudo = ? WHERE id_pagos = ?";
$stmt = $conn->prepare($query);

if ($stmt === false) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Error en la preparación de la consulta: ' . $conn->error
    ]);
    exit();
}

// Vincular los parámetros con los valores recibidos
$stmt->bind_param("dsi", $abono, $nuevo_adeudo, $id_pago);

if ($stmt->execute()) {
    // Cambiar el estado a "pagado" si el abono es igual al costo
    if ($abono == $costo) {
        $query_estado = "UPDATE pagos SET estado = 'pagado' WHERE id_pagos = ?";
        $stmt_estado = $conn->prepare($query_estado);
        $stmt_estado->bind_param("i", $id_pago);

        if ($stmt_estado->execute()) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Pago actualizado y marcado como pagado correctamente'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Error al actualizar el estado del pago: ' . $conn->error
            ]);
        }
        $stmt_estado->close();
    } else {
        echo json_encode([
            'status' => 'success',
            'message' => 'Pago actualizado correctamente'
        ]);
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Hubo un error al actualizar el pago'
    ]);
}

// Cerrar las declaraciones y la conexión
$stmt->close();
$conn->close();
?>
