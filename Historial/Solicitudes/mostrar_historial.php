<?php
// Incluir detalles de la conexión a la base de datos
include '../Configuraciones/conexion.php';

// Obtener el idPaciente desde el POST
$idPaciente = isset($_POST['idPaciente']) ? intval($_POST['idPaciente']) : 0;

try {
    // Verificar conexión
    if ($conn->connect_error) {
        throw new Exception("Conexión fallida: " . $conn->connect_error);
    }

    // Verificar que el idPaciente sea válido
    if ($idPaciente <= 0) {
        throw new Exception("ID de paciente inválido.");
    }

    // Consulta SQL para obtener historial por idPaciente
    $sql = "SELECT * FROM historial WHERE idPaciente = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idPaciente);
    $stmt->execute();
    $result = $stmt->get_result();

    // Variable para almacenar el historial
    $historial = [];

    if ($result && $result->num_rows > 0) {
        // Obtener cada fila de resultados como un arreglo asociativo
        while ($row = $result->fetch_assoc()) {
            $historial[] = $row;
        }
    } else {
        throw new Exception("No se encontraron registros en el historial para este paciente.");
    }

    // Liberar resultados
    $stmt->close();
} catch (Exception $e) {
    // Manejar errores y almacenar mensaje
    $error = $e->getMessage();
} finally {
    // Cerrar conexión
    $conn->close();
}
?>