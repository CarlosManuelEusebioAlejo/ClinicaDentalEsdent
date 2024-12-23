<?php
// Conexión a la base de datos
include '../../Configuraciones/conexion.php';

if (isset($_POST['id'])) {
    $idPaciente = $_POST['id'];

    $sql = "SELECT * FROM pacientes WHERE idPaciente = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idPaciente);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row); // Retorna los datos del paciente en formato JSON
    } else {
        echo json_encode(['error' => 'Paciente no encontrado']);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['error' => 'ID no recibido']);
}
?>
