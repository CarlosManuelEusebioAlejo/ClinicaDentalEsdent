<?php
include '../../Configuraciones/conexion.php';

$query = $_GET['q'];
$sql = "SELECT idPaciente, Nombre_paciente, Apellido_paciente FROM pacientes WHERE CONCAT(Nombre_paciente, ' ', Apellido_paciente) LIKE ?";
$stmt = $conn->prepare($sql);
$searchTerm = "%{$query}%";
$stmt->bind_param('s', $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

$pacientes = [];
while ($row = $result->fetch_assoc()) {
    $pacientes[] = $row;
}

echo json_encode($pacientes);
$conn->close();
?>