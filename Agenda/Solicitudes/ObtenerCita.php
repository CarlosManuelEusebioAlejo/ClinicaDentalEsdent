<?php
header('Content-Type: application/json');

// Conectar a la base de datos
$servername = "localhost"; // Cambia esto según tu configuración
$username = "root"; // Cambia esto según tu configuración
$password = ""; // Cambia esto según tu configuración
$dbname = "clinicadentalesdent"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die(json_encode(['error' => 'Conexión fallida: ' . $conn->connect_error]));
}

// Verificar que se ha pasado un id_cita válido
if (!isset($_GET['id_cita']) || !is_numeric($_GET['id_cita'])) {
    echo json_encode(['error' => 'El id_cita no es válido']);
    exit();
}

$id_cita = (int)$_GET['id_cita']; // Convertir el id_cita a un entero

// Preparar la consulta para obtener los detalles de la cita
$sql = "SELECT c.id_cita, c.idPaciente, c.Nombre_paciente, c.Apellido_paciente, c.Motivo_consulta, c.Fecha_cita, 
                c.Hora_inicio, c.Hora_fin, c.Unidad, c.id_doctor, d.Nombre_doctor
        FROM citas c
        JOIN doctores d ON c.id_doctor = d.id_doctor
        WHERE c.id_cita = ?";

// Preparar la sentencia
$stmt = $conn->prepare($sql);

// Enlazar el parámetro
$stmt->bind_param("i", $id_cita);

// Ejecutar la consulta
$stmt->execute();

// Obtener el resultado
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Si se encuentran datos, devolverlos como JSON
    $cita = $result->fetch_assoc();
    echo json_encode([
        'id_cita' => $cita['id_cita'], 
        'Paciente' => $cita['Nombre_paciente'] . ' ' . $cita['Apellido_paciente'],
        'Unidad' => $cita['Unidad'],
        'Motivo' => $cita['Motivo_consulta'],
        'Doctor' => $cita['Nombre_doctor'],
        'id_doctor' => $cita['id_doctor'],  // Añadir el id_doctor
        'FechaCita' => $cita['Fecha_cita'],
        'HoraInicio' => $cita['Hora_inicio'],
        'HoraFin' => $cita['Hora_fin']
    ], JSON_UNESCAPED_UNICODE); // Asegura que los caracteres especiales se manejen correctamente
} else {
    // Si no se encuentra la cita
    echo json_encode(['error' => 'Cita no encontrada']);
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
