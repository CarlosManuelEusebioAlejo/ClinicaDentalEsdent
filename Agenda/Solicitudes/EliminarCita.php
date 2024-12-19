<?php
include '../../Configuraciones/conexion.php';

// Verificar si el ID de la cita está presente
if (isset($_GET['id_cita'])) {
    $idCita = $_GET['id_cita'];

    // Preparar la consulta para eliminar la cita
    $sql = "DELETE FROM citas WHERE id_cita = ?";

    // Usar una sentencia preparada para evitar inyecciones SQL
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $idCita);  // 'i' indica que el parámetro es un entero
        $stmt->execute();

        // Verificar si la eliminación fue exitosa
        if ($stmt->affected_rows > 0) {
            // La cita fue eliminada exitosamente
            echo json_encode(['success' => true]);
        } else {
            // No se encontró la cita
            echo json_encode(['success' => false, 'message' => 'Cita no encontrada']);
        }

        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Error en la consulta SQL']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'ID de cita no proporcionado']);
}

// Cerrar la conexión
$conn->close();
?>
