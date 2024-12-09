<?php
// Incluir la conexión a la base de datos
include '../../Configuraciones/conexion.php';

// Consulta para obtener todos los doctores
$sql = "SELECT id_doctor, Nombre_doctor FROM doctores";
$result = $conn->query($sql);

// Verificar si hay doctores
if ($result->num_rows > 0) {
    $doctores = [];
    while ($row = $result->fetch_assoc()) {
        $doctores[] = $row;
    }
    echo json_encode($doctores);  // Devolver los doctores como un array JSON
} else {
    echo json_encode([]);  // Si no hay doctores, devolver un array vacío
}

$conn->close();
?>
