<?php
include '../../Configuraciones/conexion.php'; // Verifica que la ruta sea correcta

// Verifica si el ID del doctor fue pasado correctamente
if (isset($_POST['id_limpieza'])) {
    $id_limpieza = $_POST['id_limpieza'];

    // Verifica conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Prepara la consulta SQL para evitar inyecciones SQL
    $sql = "DELETE FROM limpieza_dental WHERE id_limpieza = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $id_limpieza);

        // Ejecuta la consulta y verifica si fue exitosa
        if ($stmt->execute() && $stmt->affected_rows > 0) {
            echo "Limpieza eliminada correctamente.";
        } else {
            echo "Error: No se encontró el ID o no se pudo eliminar.";
        }

        // Cierra la declaración
        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conn->error;
    }
} else {
    echo "ID de la limpieza no recibido.";
}

// Cierra la conexión
$conn->close();
?>
