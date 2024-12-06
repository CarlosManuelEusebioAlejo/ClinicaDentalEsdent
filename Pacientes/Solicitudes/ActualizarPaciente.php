<?php
// Configuración de conexión
include '../config/database.php';

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['idPaciente'])) {
    $idPaciente = $data['idPaciente'];
    $nombre = $data['Nombre_paciente'];
    $apellido = $data['Apellido_paciente'];
    $fechaNacimiento = $data['FechaNacimiento'];
    $edad = $data['Edad'];
    $direccion = $data['Direccion'];

    // Prepara la consulta SQL
    $query = "UPDATE pacientes SET 
        Nombre_paciente = ?, 
        Apellido_paciente = ?, 
        FechaNacimiento = ?, 
        Edad = ?, 
        Direccion = ?
        WHERE idPaciente = ?";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssisi", $nombre, $apellido, $fechaNacimiento, $edad, $direccion, $idPaciente);

    if ($stmt->execute()) {
        echo json_encode(["message" => "Paciente actualizado correctamente."]);
    } else {
        echo json_encode(["error" => "Error al actualizar el paciente."]);
    }
} else {
    echo json_encode(["error" => "Datos incompletos."]);
}
?>
