<?php
include '../../Configuraciones/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir datos del formulario
    $idPaciente         = isset($_POST['idPaciente']) ? (int)$_POST['idPaciente'] : null;
    $Nombre_paciente    = isset($_POST['Nombre_paciente']) ? $_POST['Nombre_paciente'] : '';
    $Apellido_paciente  = isset($_POST['Apellido_paciente']) ? $_POST['Apellido_paciente'] : '';
    $Tratamiento        = isset($_POST['Tratamiento']) ? $_POST['Tratamiento'] : '';
    $Costo              = isset($_POST['Costo']) ? (float)$_POST['Costo'] : 0.0;
    $id_doctor          = isset($_POST['id_doctor']) ? (int)$_POST['id_doctor'] : null;
    $Nombre_doctor      = isset($_POST['Nombre_doctor']) ? $_POST['Nombre_doctor'] : '';
    $Abono              = isset($_POST['Abono']) ? (float)$_POST['Abono'] : 0.0;
    $Tipo_pago          = isset($_POST['Tipo_pago']) ? $_POST['Tipo_pago'] : '';
    $Factura            = isset($_POST['Factura']) ? $_POST['Factura'] : '';
    $fecha_Pago         = isset($_POST['fecha_Pago']) ? $_POST['fecha_Pago'] : '';

    // Validación: El abono no puede ser mayor que el costo
    if ($Abono > $Costo) {
        $Abono = $Costo;  // Si el abono es mayor que el costo, ajustarlo al costo
    }

    // Calcular el adeudo: es la diferencia entre el costo y el abono
    $Adeudo = $Costo - $Abono;

    // Insertar datos en la tabla `pagos`
    $query = "INSERT INTO pagos (idPaciente, Nombre_paciente, Apellido_paciente, Tratamiento, Costo, id_doctor, Nombre_doctor, Abono, Adeudo, Tipo_pago, Factura, fecha_Pago)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

    $stmt = $conn->prepare($query);
    if (!$stmt) {
        die('Error en la preparación: ' . $conn->error);
    }

    $stmt->bind_param(
        "isssdissdsss",
        $idPaciente,
        $Nombre_paciente,
        $Apellido_paciente,
        $Tratamiento,
        $Costo,
        $id_doctor,
        $Nombre_doctor,
        $Abono,
        $Adeudo,
        $Tipo_pago,
        $Factura,
        $fecha_Pago
    );

    if ($stmt->execute()) {
        // Retorna una respuesta exitosa y redirige o recarga la página
        echo json_encode(['success' => true, 'message' => 'Pago registrado correctamente.']);
    } else {
        echo json_encode(['success' => false, 'error' => 'Error al registrar el pago: ' . $stmt->error]);
    }

    $stmt->close();
}

$conn->close();
?>
