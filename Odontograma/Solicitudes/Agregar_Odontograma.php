<?php
// Iniciar sesión (si es necesario)
session_start();

// Asegúrate de que el archivo de conexión a la base de datos esté incluido
include '../../Configuraciones/conexion.php';

// Verificar si los datos fueron enviados a través de POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores enviados desde el formulario
    $idPaciente = $_POST['idPaciente'];
    $colorDiente = $_POST['colorDiente'];
    $posicion = $_POST['posicion'];
    $numeroFila = $_POST['numeroFila'];
    $diagnostico = $_POST['Diagnostico'];
    $tratamiento = $_POST['Tratamiento'];
    $observaciones = $_POST['Observaciones'];
    $presupuesto = $_POST['Presupuesto'];

    // Validar que los campos obligatorios no estén vacíos
    if (empty($diagnostico) || empty($tratamiento) || empty($presupuesto)) {
        // Si faltan datos, devolver un error
        echo json_encode([
            'status' => 'error',
            'message' => 'Por favor, complete todos los campos requeridos.'
        ]);
        exit;
    }

    // Insertar los datos en la base de datos
    try {
        $sql = "INSERT INTO odontograma (idPaciente, Color, Posicion, OD, Diagnostico, Tratamiento, Observacion, Presupuesto) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        // Preparar la consulta
        $stmt = $conn->prepare($sql);

        // Vincular los parámetros y ejecutar la consulta
        $stmt->bind_param("ssssssss", $idPaciente, $colorDiente, $posicion, $numeroFila, $diagnostico, $tratamiento, $observaciones, $presupuesto);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Si todo fue exitoso, devolver respuesta exitosa
            echo json_encode([
                'status' => 'success',
                'message' => 'Datos guardados correctamente.'
            ]);
        } else {
            // Si hubo algún error en la ejecución
            echo json_encode([
                'status' => 'error',
                'message' => 'Hubo un error al guardar los datos.'
            ]);
        }

        // Cerrar la declaración
        $stmt->close();

    } catch (Exception $e) {
        // Si hubo algún error en la base de datos
        echo json_encode([
            'status' => 'error',
            'message' => 'Error al procesar la solicitud: ' . $e->getMessage()
        ]);
    }

    // Cerrar la conexión
    $conn->close();
} else {
    // Si no se reciben datos a través de POST
    echo json_encode([
        'status' => 'error',
        'message' => 'Método no permitido.'
    ]);
}
?>
