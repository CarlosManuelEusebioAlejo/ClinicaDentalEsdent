<?php
// Incluir la configuración de la base de datos
include '../../Configuraciones/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_odontograma'])) {
    $id_odontograma = intval($_POST['id_odontograma']);
    
    // Preparar la consulta SQL
    $query = "SELECT Observacion, Diagnostico, Tratamiento, Presupuesto 
              FROM odontograma
              WHERE id_odontograma = ?";
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param('i', $id_odontograma); // Aseguramos el tipo de dato de la variable
        $stmt->execute();
        $result = $stmt->get_result();
        
        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            $odontograma = $result->fetch_assoc();
            echo json_encode(['status' => 'success', 'odontograma' => $odontograma]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No se encontró el odontograma.']);
        }

        $stmt->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al preparar la consulta.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Solicitud inválida.']);
}
?>
