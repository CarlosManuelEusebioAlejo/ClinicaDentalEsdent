<?php
include '../../Configuraciones/conexion.php';

// Obtener los datos JSON del cuerpo de la solicitud
$data = json_decode(file_get_contents('php://input'), true);

// Verificar que los datos estén correctamente decodificados
if (!$data) {
    echo json_encode(["status" => "error", "message" => "Datos no válidos."]);
    exit;
}

// Extraer los datos del JSON
$id_pago = $data['id_pagos'];
$tratamiento = $data['Tratamiento'];
$costo = $data['Costo'];
$abono = $data['Abono'];
$id_doctor = $data['Doctor'];  // Obtener id_doctor
$tipo = $data['Tipo'];
$factura = $data['Factura'];
$fecha = $data['Fecha'];

// Paso 1: Obtener el Nombre_doctor con el id_doctor
$sql_doctor = "SELECT Nombre_doctor FROM doctores WHERE id_doctor = ?";
$stmt_doctor = $conn->prepare($sql_doctor);

if ($stmt_doctor === false) {
    echo json_encode(["status" => "error", "message" => "Error al preparar la consulta para obtener el nombre del doctor."]);
    exit;
}

// Vincular el parámetro para obtener el Nombre_doctor
$stmt_doctor->bind_param("i", $id_doctor);

// Ejecutar la consulta
$stmt_doctor->execute();
$stmt_doctor->store_result();

// Verificar si se encontró el doctor
if ($stmt_doctor->num_rows > 0) {
    // Obtener el nombre del doctor
    $stmt_doctor->bind_result($nombre_doctor);
    $stmt_doctor->fetch();
} else {
    echo json_encode(["status" => "error", "message" => "Doctor no encontrado."]);
    exit;
}

// Paso 2: Obtener el adeudo actual del pago (si ya existe)
$sql_adeudo = "SELECT Adeudo FROM pagos WHERE id_pagos = ?";
$stmt_adeudo = $conn->prepare($sql_adeudo);
$stmt_adeudo->bind_param("i", $id_pago);

if ($stmt_adeudo->execute()) {
    $result = $stmt_adeudo->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $adeudo_actual = $row['Adeudo'];
    } else {
        echo json_encode(["status" => "error", "message" => "No se encontró el adeudo del pago."]);
        exit;
    }
} else {
    echo json_encode(["status" => "error", "message" => "Error al obtener el adeudo del pago."]);
    exit;
}

// Calcular el nuevo adeudo después del abono
$nuevo_adeudo = $costo - $abono;

// Condición para evitar que el adeudo sea mayor que el costo
if ($nuevo_adeudo > $costo) {
    echo json_encode(["status" => "error", "message" => "El adeudo no puede ser mayor que el costo."]);
    exit;
}

// Paso 3: Actualizar el pago con el Nombre_doctor y el nuevo adeudo
$sql_update = "UPDATE pagos SET 
                Tratamiento = ?, 
                Costo = ?, 
                Abono = ?, 
                id_doctor = ?, 
                Nombre_doctor = ?, 
                Tipo_pago = ?, 
                Factura = ?, 
                fecha_Pago = ?, 
                Adeudo = ? 
              WHERE id_pagos = ?";

// Preparar la declaración para la actualización
$stmt_update = $conn->prepare($sql_update);

if ($stmt_update === false) {
    echo json_encode(["status" => "error", "message" => "Error al preparar la consulta para actualizar el pago."]);
    exit;
}

// Vincular los parámetros para la actualización
$stmt_update->bind_param("sdsissssdi", $tratamiento, $costo, $abono, $id_doctor, $nombre_doctor, $tipo, $factura, $fecha, $nuevo_adeudo, $id_pago);

// Ejecutar la consulta de actualización
if ($stmt_update->execute()) {
    echo json_encode(["status" => "success", "message" => "Pago actualizado correctamente."]);
} else {
    echo json_encode(["status" => "error", "message" => "Error al actualizar el pago."]);
}

// Cerrar las declaraciones y la conexión
$stmt_doctor->close();
$stmt_adeudo->close();
$stmt_update->close();
$conn->close();
?>
