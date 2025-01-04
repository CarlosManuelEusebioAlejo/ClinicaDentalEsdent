<?php
// Configuración de conexión a la base de datos
include '../../Configuraciones/conexion.php'; // Cambia la ruta si es necesario

// Obtener la fecha de la solicitud
$fecha = isset($_GET['fecha']) ? $_GET['fecha'] : null;

// Validar la fecha
if (!$fecha) {
    echo json_encode([]);
    exit;
}

// Consulta para obtener pagos en la fecha específica
$query = "
    SELECT 
        CONCAT(pacientes.nombre, ' ', pacientes.apellido) AS Nombre_paciente,
        tratamientos.nombre AS Tratamiento,
        pagos.costo AS Costo,
        pagos.abono AS Abono,
        (pagos.costo - pagos.abono) AS Adeudo,
        doctores.nombre AS Nombre_doctor,
        pagos.tipo_pago AS Tipo_pago
    FROM pagos
    INNER JOIN pacientes ON pagos.id_paciente = pacientes.id_paciente
    INNER JOIN doctores ON pagos.id_doctor = doctores.id_doctor
    INNER JOIN tratamientos ON pagos.id_tratamiento = tratamientos.id_tratamiento
    WHERE pagos.fecha_pago = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $fecha);
$stmt->execute();
$result = $stmt->get_result();

// Almacenar los resultados en un array
$pagos = [];
while ($row = $result->fetch_assoc()) {
    $pagos[] = $row;
}

// Devolver los resultados como JSON
header('Content-Type: application/json');
echo json_encode($pagos);

// Cerrar la conexión
$stmt->close();
$conn->close();
