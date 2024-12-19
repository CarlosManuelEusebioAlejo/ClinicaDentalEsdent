<?php
// Iniciar la sesión y obtener las variables necesarias
session_start();

// Verificar que los datos se envíen correctamente
$datos = json_decode(file_get_contents('php://input'), true);

if (isset($datos['id_cita'], $datos['paciente'], $datos['unidad'], $datos['motivo'], $datos['doctor'], $datos['nombre_doctor'], $datos['fecha_inicio'], $datos['hora_inicio'], $datos['hora_fin'])) {
    // Conectar a la base de datos (ajusta los parámetros de conexión según sea necesario)
    include '../../Configuraciones/conexion.php';
    
    // Obtener los datos recibidos
    $id_cita = $conn->real_escape_string($datos['id_cita']);
    $paciente = $conn->real_escape_string($datos['paciente']);
    $unidad = $conn->real_escape_string($datos['unidad']);
    $motivo = $conn->real_escape_string($datos['motivo']);
    $doctor = $conn->real_escape_string($datos['doctor']); // id_doctor
    $nombre_doctor = $conn->real_escape_string($datos['nombre_doctor']); // nombre_doctor
    $fecha_inicio = $conn->real_escape_string($datos['fecha_inicio']);
    $hora_inicio = $conn->real_escape_string($datos['hora_inicio']);
    $hora_fin = $conn->real_escape_string($datos['hora_fin']);

    // SQL para actualizar la cita, incluyendo id_doctor y nombre_doctor
    $sql = "UPDATE citas 
            SET Nombre_paciente = '$paciente', Unidad = '$unidad', Motivo_consulta = '$motivo', Nombre_doctor = '$nombre_doctor', id_doctor = '$doctor', Fecha_cita = '$fecha_inicio', Hora_inicio = '$hora_inicio', Hora_fin = '$hora_fin' 
            WHERE id_cita = '$id_cita'";

    if ($conn->query($sql) === TRUE) {
        // Enviar respuesta de éxito
        echo json_encode(['success' => true, 'message' => 'Cita actualizada correctamente']);
    } else {
        // Enviar respuesta de error
        echo json_encode(['success' => false, 'message' => 'Error al actualizar la cita: ' . $conn->error]);
    }

    // Cerrar la conexión
    $conn->close();
} else {
    // Si faltan datos, devolver un error
    echo json_encode(['success' => false, 'message' => 'Faltan datos para actualizar la cita']);
}
?>
