<?php
include '../../Configuraciones/conexion.php';

// Verificar si se ha enviado el idPaciente
if (!isset($_POST['idPaciente']) || empty($_POST['idPaciente'])) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Falta el idPaciente'
    ]);
    exit;
}

// Obtener el idPaciente desde la solicitud
$idPaciente = $_POST['idPaciente'];


// Consultar los colores y posiciones desde la tabla odontograma
$query = "SELECT Color, OD, Posicion FROM odontograma WHERE idPaciente = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $idPaciente); // 'i' es para un entero (idPaciente)

// Ejecutar la consulta
$stmt->execute();
$result = $stmt->get_result();

// Verificar si se obtuvieron resultados
if ($result->num_rows > 0) {
    $colores = [];
    while ($row = $result->fetch_assoc()) {
        $colores[] = $row;
    }
    
    echo json_encode([
        'status' => 'success',
        'colors' => $colores
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'No se encontraron colores para el paciente.'
    ]);
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
