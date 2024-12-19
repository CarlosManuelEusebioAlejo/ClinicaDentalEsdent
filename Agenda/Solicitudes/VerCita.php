<?php
include '../../Configuraciones/conexion.php';

// Consulta para obtener los datos de las citas, incluyendo el id_cita, nombre y apellido del paciente, y la unidad
$query = "SELECT id_cita, Fecha_cita, Motivo_consulta, Nombre_paciente, Nombre_doctor, Unidad, Hora_inicio, Hora_fin FROM citas";  // Asegúrate de incluir id_cita en la consulta
$result = $conn->query($query);

$citas = [];
while($row = $result->fetch_assoc()) {
    // Convertir las fechas de cita y las horas de inicio y fin en formato ISO
    $fechaInicio = $row['Fecha_cita'] . 'T' . $row['Hora_inicio'];
    $fechaFin = $row['Fecha_cita'] . 'T' . $row['Hora_fin'];

    $citas[] = [
        'id_cita' => $row['id_cita'],  // Incluye el id_cita
        'title' => $row['Unidad'] . ' | ' . $row['Nombre_paciente'],  // El título incluirá la unidad y el paciente
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
