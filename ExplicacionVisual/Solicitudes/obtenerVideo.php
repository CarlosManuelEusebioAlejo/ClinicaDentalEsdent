<?php
include '../../Configuraciones/conexion.php';

if (isset($_GET['id_video'])) {
    $id_video = $_GET['id_video'];
    $query = "SELECT id_video, Url, Descripcion FROM videoexplicativo WHERE id_video = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id_video);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo json_encode(['error' => 'Video no encontrado']);
    }
    $stmt->close();
    $conn->close();
}
?>
