<?php
// Detalles de la conexión a la base de datos
include '../../Configuraciones/conexion.php';

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$id = $_GET['id']; // ID del paciente

// Consulta para obtener los datos del paciente por idPaciente
$sql = "SELECT * FROM pacientes WHERE idPaciente = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Si se encuentra el paciente, lo almacenamos en la variable $paciente
    $paciente = $result->fetch_assoc();

    // Crear la variable $Vpaciente con el valor de 'idPaciente'
    $Vpaciente = $paciente['idPaciente']; // Guardar el valor del idPaciente en la variable $Vpaciente

    // Imprimir los valores del paciente para verificar que se obtuvieron correctamente
    echo json_encode($paciente); // Retorna los datos en formato JSON
} else {
    // Si no se encuentra al paciente, enviar error
    echo json_encode(['error' => 'Paciente no encontrado.']);
}

$stmt->close();
$conn->close();
?>
