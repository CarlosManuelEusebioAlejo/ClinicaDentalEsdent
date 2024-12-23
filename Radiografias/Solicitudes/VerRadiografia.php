<?php
// Incluir el archivo de conexión a la base de datos
include('../../Configuraciones/conexion.php');

// Suponiendo que la conexión a la base de datos ya está hecha
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para obtener la radiografía por ID
    $query = "SELECT * FROM radiografias WHERE id_radiografias = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $radiografia = $result->fetch_assoc();
        $response = [
            'imagen_url' => $radiografia['Foto_paciente'],  // Asegúrate de que 'imagen_url' es el nombre de la columna correcta
            'descripcion' => $radiografia['Descripcion'] // Asegúrate de que 'descripcion' es el nombre de la columna correcta
        ];
        echo json_encode($response);
    } else {
        echo json_encode(['error' => 'Radiografía no encontrada']);
    }
}
?>
