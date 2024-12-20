<?php
header('Content-Type: application/json');

// Conexión a la base de datos
include '../Configuraciones/conexion.php';

// Validar el parámetro
if (!isset($_GET['id_odontograma'])) {
    echo json_encode(['error' => true, 'message' => 'ID no especificado']);
    exit;
}

$id_odontograma = intval($_GET['id_odontograma']);

// Consulta a la base de datos
$query = $conn->prepare("SELECT Diagnostico, Tratamiento, Observacion AS Observaciones, Presupuesto FROM odontograma WHERE id_odontograma = ?");
$query->bind_param('i', $id_odontograma);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    echo json_encode($data);
} else {
    echo json_encode(['error' => true, 'message' => 'Odontograma no encontrado']);
}
?>
