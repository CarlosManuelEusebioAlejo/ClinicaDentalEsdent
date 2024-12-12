<?php
include '../../Configuraciones/conexion.php';

// Establece el encabezado para indicar que se devuelve JSON
header('Content-Type: application/json');

// Consulta para obtener todos los doctores
$query = "SELECT id_doctor, Nombre_doctor FROM doctores";
$result = mysqli_query($conn, $query);

if (!$result) {
    // Si ocurre un error en la consulta
    http_response_code(500); // Error interno del servidor
    echo json_encode(['error' => 'Error al ejecutar la consulta.']);
    exit();
}

// Crea un array para almacenar los resultados
$doctores = [];
while ($row = mysqli_fetch_assoc($result)) {
    $doctores[] = [
        'id_doctor' => $row['id_doctor'],
        'nombre' => $row['Nombre_doctor'],
    ];
}

// Devuelve los resultados como JSON
echo json_encode($doctores);
?>
