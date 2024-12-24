<?php
include '../../Configuraciones/conexion.php';

// Recibir el id del pago desde la solicitud POST
$id_pago = isset($_POST['id_pago']) ? (int)$_POST['id_pago'] : null;

if ($id_pago) {
    // Eliminar el pago
    $query = "DELETE FROM pagos WHERE id_pagos = ?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("i", $id_pago);
        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error al eliminar el pago']);
        }
        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Error en la consulta']);
    }
}

$conn->close();
?>
