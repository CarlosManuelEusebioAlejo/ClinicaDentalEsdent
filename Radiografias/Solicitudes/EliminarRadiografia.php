<?php
include '../../Configuraciones/conexion.php';

// Verificar si se ha recibido el ID de la radiografía
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idRadiografia'])) {
    $idRadiografia = $_POST['idRadiografia'];

    // Consulta para eliminar la radiografía
    $sql = "DELETE FROM radiografias WHERE id_radiografias = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idRadiografia);

    if ($stmt->execute()) {
        // Si la eliminación fue exitosa
        echo json_encode(['success' => true]);
    } else {
        // Si hubo un error en la eliminación
        echo json_encode(['success' => false, 'error' => 'Error al eliminar la radiografía']);
    }

    $stmt->close();
    $conn->close();
}
?>
