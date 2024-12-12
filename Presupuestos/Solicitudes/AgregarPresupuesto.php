<?php
include '../../Configuraciones/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idPaciente         = intval($_POST['idPaciente']);
    $Nombre_paciente    = trim($_POST['Nombre_paciente']);
    $Apellido_paciente  = trim($_POST['Apellido_paciente']);
    $Tratamiento        = trim($_POST['Tratamiento']);
    $Costo              = floatval($_POST['Costo']);
    $Observaciones      = trim($_POST['Observaciones']);
    $Fecha              = $_POST['Fecha'];
    $Valido_hasta       = $_POST['Valido_hasta'];

    $query = "INSERT INTO presupuestos (idPaciente, Nombre_paciente, Apellido_paciente, Tratamiento, Costo, Observaciones, Fecha, Valido_hasta) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $stmt->bind_param("isssdsss", $idPaciente, $Nombre_paciente, $Apellido_paciente, $Tratamiento, $Costo, $Observaciones, $Fecha, $Valido_hasta);
        if ($stmt->execute()) {
            header('Location: ../index.php?success=Presupuesto registrado correctamente.');
        } else {
            header('Location: ../index.php?error=Error al registrar el presupuesto.');
        }
        $stmt->close();
    } else {
        header('Location: ../index.php?error=Error al preparar la consulta.');
    }
}
$conn->close();
?>
