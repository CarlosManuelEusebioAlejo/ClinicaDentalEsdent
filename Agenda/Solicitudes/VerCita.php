<?php
include '../../Configuraciones/conexion.php';

// Consulta para obtener los datos de las citas, incluyendo el nombre y apellido del paciente y la unidad
$query = "SELECT Fecha_cita, Motivo_consulta, Nombre_paciente, Nombre_doctor, Unidad, Hora_inicio, Hora_fin FROM citas";  // Ajusta la consulta según tu estructura de base de datos
$result = $conn->query($query);

$citas = [];
while($row = $result->fetch_assoc()) {
    // Convertir las fechas de cita y las horas de inicio y fin en formato ISO
    $fechaInicio = $row['Fecha_cita'] . 'T' . $row['Hora_inicio'];
    $fechaFin = $row['Fecha_cita'] . 'T' . $row['Hora_fin'];

    $citas[] = [
        'title' => $row['Unidad'] . ' | ' . $row['Nombre_paciente'],  // El título ahora incluirá la unidad y el paciente
        'start' => $fechaInicio,
        'end' => $fechaFin,
        'extendedProps' => [
            'Motivo' => $row['Motivo_consulta'],
            'Doctor' => $row['Nombre_doctor'],
            'Unidad' => $row['Unidad'],
            'Paciente' => $row['Nombre_paciente'],
        ]
    ];
}

echo json_encode($citas);  // Retorna los datos como JSON
?>

