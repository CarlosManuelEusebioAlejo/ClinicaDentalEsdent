<?php
if (isset($_GET['id_tratamiento'])) {
    $idTratamiento = intval($_GET['id_tratamiento']); // Usar id_tratamiento

    // Conexión a la base de datos
    $conexion = new mysqli('localhost', 'root', '', 'clinicanew1');

    if ($conexion->connect_error) {
        http_response_code(500);
        echo json_encode(['error' => 'Error al conectar con la base de datos']);
        exit();
    }

    // Consulta para obtener la información del tratamiento
    $stmt = $conexion->prepare("SELECT 
        idPaciente, Costo, Observacion, id_doctor, Nombre_doctor, Fecha, Tratamiento 
        FROM historial_tratamiento 
        WHERE id_tratamiento = ? 
        ORDER BY Fecha DESC LIMIT 1");
    $stmt->bind_param('i', $idTratamiento); // Cambiado a id_tratamiento
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        echo json_encode($data); // Devuelve los datos
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'No se encontraron datos para este tratamiento']);
    }

    $stmt->close();
    $conexion->close();
} else {
    http_response_code(400);
    echo json_encode(['error' => 'ID de tratamiento no proporcionado']);
}
?>
