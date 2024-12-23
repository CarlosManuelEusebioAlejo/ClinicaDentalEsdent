<?php
include '../../Configuraciones/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturar datos del POST y sanitizarlos
    $idPaciente         = intval($_POST['idPaciente']);
    $Nombre_paciente    = trim($_POST['Nombre_paciente']);
    $Apellido_paciente  = trim($_POST['Apellido_paciente']);
    $Tratamiento        = trim($_POST['Tratamiento']);
    $Costo              = floatval(str_replace(',', '', $_POST['Costo'])); // Eliminar comas antes de convertir
    $Observaciones      = trim($_POST['Observaciones']);
    $Fecha              = $_POST['Fecha'];
    $Valido_hasta       = $_POST['Valido_hasta'];

    // Verificar si 'Fecha' es mayor que 'Valido_hasta'
    if (strtotime($Fecha) > strtotime($Valido_hasta)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'La fecha no puede ser mayor que la fecha de validez.',
        ]);
        exit;
    }

    // Obtener la fecha actual
    $fecha_actual = date("Y-m-d");

    // Determinar el estado basado en la fecha 'Valido_hasta'
    if ($Valido_hasta >= $fecha_actual) {
        $estado = 'pendiente'; // Si la fecha 'Valido_hasta' es futura o igual a la fecha actual
    } else {
        $estado = 'expirado';  // Si la fecha 'Valido_hasta' es anterior a la fecha actual
    }

    // Preparar consulta SQL
    $query = "INSERT INTO presupuestos (idPaciente, Nombre_paciente, Apellido_paciente, Tratamiento, Costo, Observaciones, Fecha, Valido_hasta, estado) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        // Asociar parámetros, incluyendo el estado
        $stmt->bind_param("isssdssss", $idPaciente, $Nombre_paciente, $Apellido_paciente, $Tratamiento, $Costo, $Observaciones, $Fecha, $Valido_hasta, $estado);
        if ($stmt->execute()) {
            // Respuesta JSON exitosa
            echo json_encode([
                'status' => 'success',
                'message' => 'Presupuesto registrado correctamente.',
            ]);
        } else {
            // Error al ejecutar la consulta
            echo json_encode([
                'status' => 'error',
                'message' => 'Error al registrar el presupuesto.',
            ]);
        }
        $stmt->close();
    } else {
        // Error al preparar la consulta
        echo json_encode([
            'status' => 'error',
            'message' => 'Error al preparar la consulta.',
        ]);
    }
} else {
    // Solicitud inválida
    echo json_encode([
        'status' => 'error',
        'message' => 'Método de solicitud no permitido.',
    ]);
}

// Cerrar la conexión
$conn->close();
?>
