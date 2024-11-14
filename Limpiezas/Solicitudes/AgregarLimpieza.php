<?php
include '../../Configuraciones/conexion.php';

// Obtener y validar datos del formulario
$idPaciente = (int) trim($_POST['idPaciente']);
if ($idPaciente <= 0) {
    header('Location: ../index.php?error=ID de paciente inválido.');
    exit;
}

$Nombre_paciente = trim($_POST['Nombre_paciente']);
$Apellido_paciente = trim($_POST['Apellido_paciente']);
$Telefono = trim($_POST['telefono']);
$Ultima_visita = trim($_POST['Ultima_visita']);
$Siguiente_visita = trim($_POST['Siguiente_visita']);

if (!preg_match('/^\d{4}-\d{2}$/', $Siguiente_visita)) {
    header('Location: ../index.php?error=El formato de la siguiente visita debe ser YYYY-MM.');
    exit;
}

if (empty($idPaciente) || empty($Nombre_paciente) || empty($Apellido_paciente) || empty($Telefono) || empty($Ultima_visita) || empty($Siguiente_visita)) {
    header('Location: ../index.php?error=Todos los campos son requeridos.');
    exit;
}

// Escapar datos
$Nombre_paciente = $conn->real_escape_string($Nombre_paciente);
$Apellido_paciente = $conn->real_escape_string($Apellido_paciente);
$Telefono = $conn->real_escape_string($Telefono);
$Ultima_visita = $conn->real_escape_string($Ultima_visita);
$Siguiente_visita = $conn->real_escape_string($Siguiente_visita);

// Verificar existencia del paciente
$checkPaciente = "SELECT 1 FROM pacientes WHERE idPaciente = ?";
$stmtCheck = $conn->prepare($checkPaciente);
$stmtCheck->bind_param("i", $idPaciente);
$stmtCheck->execute();
$stmtCheck->store_result();

if ($stmtCheck->num_rows === 0) {
    header('Location: ../index.php?error=El paciente no existe en el sistema.');
    $stmtCheck->close();
    exit;
}
$stmtCheck->close();

// Insertar limpieza
$sql = "INSERT INTO limpieza_dental (idPaciente, Nombre_paciente, Apellido_paciente, telefono, Ultima_visita, Siguiente_visita) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    header('Location: ../index.php?error=Error en la preparación de la consulta: ' . $conn->error);
    exit;
}

$stmt->bind_param('isssss', $idPaciente, $Nombre_paciente, $Apellido_paciente, $Telefono, $Ultima_visita, $Siguiente_visita);

if ($stmt->execute()) {
    header('Location: ../index.php?success=Limpieza añadida exitosamente.');
} else {
    header('Location: ../index.php?error=Error al agregar limpieza: ' . $stmt->error);
}

$stmt->close();
$conn->close();
?>

