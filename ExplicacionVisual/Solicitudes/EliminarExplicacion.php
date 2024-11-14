<?php
include '../../Configuraciones/conexion.php'; // Verifica que la ruta sea correcta

// Verifica si el ID del doctor fue pasado correctamente
if (isset($_POST['id_video'])) {
    $id_video = $_POST['id_video'];

    // Prepara la consulta SQL para evitar inyecciones SQL
    $sql = "DELETE FROM videoExplicativo WHERE id_video = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_video);

    // Ejecuta la consulta y verifica si fue exitosa
    if ($stmt->execute()) {
        echo "video eliminado correctamente.";
    } else {
        echo "Error al eliminar el video: " . $conn->error;
    }

    // Cierra la declaración
    $stmt->close();
} else {
    echo "ID de video no recibido.";
}

// Cierra la conexión
$conn->close();
?>