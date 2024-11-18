<?php
include '../../Configuraciones/conexion.php';

if (!$conn) {
    die('Error en la conexión a la base de datos: ' . mysqli_connect_error());
}

header('Content-Type: application/json');

$nombre = mysqli_real_escape_string($conn, $_GET['Nombre_paciente'] ?? '');

$query = "SELECT idPaciente, CONCAT(Nombre_paciente, ' ', Apellido_paciente) AS nombre_completo 
          FROM pacientes 
          WHERE Nombre_paciente LIKE '%$nombre%' OR Apellido_paciente LIKE '%$nombre%'";

$result = mysqli_query($conn, $query);

if (!$result) {
    echo json_encode(['error' => 'Error en la consulta: ' . mysqli_error($conn)]);
    exit;
}

$pacientes = [];
while ($row = mysqli_fetch_assoc($result)) {
    $pacientes[] = $row;
}

echo json_encode($pacientes);
?>

