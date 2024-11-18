<?php
include '../../Configuraciones/conexion.php';

// Consulta para obtener los datos de las citas, incluyendo el nombre y apellido del paciente y la unidad
$query = "SELECT Fecha_cita, Motivo_consulta, Nombre_paciente, Apellido_paciente, Unidad, Hora_inicio, Hora_fin FROM citas";  // Ajusta la consulta según tu estructura de base de datos
$result = $conn->query($query);

$citas = [];
while($row = $result->fetch_assoc()) {
    // Convertir las fechas de cita y las horas de inicio y fin en formato ISO
    $fechaInicio = $row['Fecha_cita'] . 'T' . $row['Hora_inicio'];
    $fechaFin = $row['Fecha_cita'] . 'T' . $row['Hora_fin'];

    // Crear el evento con la unidad y el nombre completo del paciente en el título
    $nombreCompleto = $row['Nombre_paciente'] . ' ' . $row['Apellido_paciente'];
    $citas[] = [
        'title' => $row['Unidad'] . ' | ' . $nombreCompleto . ' - ' . $row['Motivo_consulta'],  // Incluir la unidad y el nombre completo en el título
        'start' => $fechaInicio,
        'end' => $fechaFin
    ];
}

echo json_encode($citas);  // Retorna los datos como JSON
?>
