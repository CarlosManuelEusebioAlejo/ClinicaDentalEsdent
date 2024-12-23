<?php
// Incluir la conexión a la base de datos
include '../../Configuraciones/conexion.php';

// Verificar si se ha recibido el ID del paciente
if (isset($_POST['idPaciente'])) {
    $idPaciente = $_POST['idPaciente'];
    
    // Obtener los datos del formulario
    $Nombre_paciente = isset($_POST['Nombre_paciente']) ? $_POST['Nombre_paciente'] : '';
    $Apellido_paciente = isset($_POST['Apellido_paciente']) ? $_POST['Apellido_paciente'] : '';
    $FechaNacimiento = isset($_POST['FechaNacimiento']) ? $_POST['FechaNacimiento'] : '';

    // Verificar que los datos no estén vacíos
    if (empty($Nombre_paciente) || empty($Apellido_paciente) || empty($FechaNacimiento)) {
        echo json_encode(['success' => false, 'message' => 'Todos los campos son obligatorios.']);
        exit();
    }

    // Conexión a la base de datos
    $conn = dbConnect(); // Asegúrate de que esta función esté correctamente definida en 'db_connection.php'

    // Consulta para actualizar los datos del paciente
    $sql = "UPDATE pacientes 
            SET Nombre_paciente = ?, Apellido_paciente = ?, FechaNacimiento = ? 
            WHERE idPaciente = ?";

    // Preparar la consulta
    if ($stmt = $conn->prepare($sql)) {
        // Vincular los parámetros
        $stmt->bind_param("sssi", $Nombre_paciente, $Apellido_paciente, $FechaNacimiento, $idPaciente);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Datos actualizados correctamente.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Hubo un error al actualizar los datos.']);
        }

        // Cerrar la consulta
        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Error en la preparación de la consulta.']);
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo json_encode(['success' => false, 'message' => 'ID de paciente no recibido.']);
}
?>