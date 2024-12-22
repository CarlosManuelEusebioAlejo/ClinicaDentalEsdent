<?php
// Incluir la configuración de la base de datos
include '../../Configuraciones/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_odontograma'])) {
    $id_odontograma = intval($_POST['id_odontograma']);
    
    // Preparar la consulta SQL para eliminar el odontograma
    $query = "DELETE FROM odontograma WHERE id_odontograma = ?";
    
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param('i', $id_odontograma); // Aseguramos el tipo de dato de la variable
        $stmt->execute();
        
        if ($stmt->affected_rows > 0) {
            echo json_encode(['status' => 'success', 'message' => 'Odontograma eliminado correctamente.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No se pudo eliminar el odontograma o no existe.']);
        }

        $stmt->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al preparar la consulta.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Solicitud inválida.']);
}
?>
