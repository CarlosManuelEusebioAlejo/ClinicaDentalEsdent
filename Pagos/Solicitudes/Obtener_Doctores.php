<?php
// Incluir la configuración de la base de datos
include '../../Configuraciones/conexion.php';

// Establecer encabezado para respuestas JSON
header('Content-Type: application/json; charset=utf-8');

$query = "SELECT id_doctor, Nombre_doctor FROM doctores";

if ($result = $conn->query($query)) {
    $doctores = [];
    while ($row = $result->fetch_assoc()) {
        $doctores[] = $row;
    }
    echo json_encode($doctores);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Error al obtener la lista de doctores.']);
}
?>
