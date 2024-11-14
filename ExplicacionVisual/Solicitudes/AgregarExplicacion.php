<?php
// Conexión a la base de datos
include '../../Configuraciones/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Descripcion = $_POST['Descripcion'];
    $Url = $_POST['Url'];

    // Consulta para insertar los datos en la tabla videoExplicativo
    $query = "INSERT INTO videoExplicativo (Url, Descripcion) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $Url, $Descripcion);

    if ($stmt->execute()) {
        // Respuesta de éxito en formato JSON
        echo json_encode([
            'status' => 'success',
            'message' => '¡El video descriptivo ha sido agregado exitosamente!'
        ]);
    } else {
        // Respuesta de error en formato JSON
        echo json_encode([
            'status' => 'error',
            'message' => 'Hubo un error al agregar el video. Inténtalo nuevamente.'
        ]);
    }

    $stmt->close();
    $conn->close();
}
?>

