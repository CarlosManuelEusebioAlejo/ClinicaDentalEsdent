
<?php
include '../../Configuraciones/conexion.php'; // Verifica que la ruta sea correcta

// Verifica si el ID del doctor fue pasado correctamente
if (isset($_POST['id_doctor'])) {
    $id_doctor = $_POST['id_doctor'];

    // Prepara la consulta SQL para evitar inyecciones SQL
    $sql = "DELETE FROM doctores WHERE id_doctor = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_doctor);

    // Ejecuta la consulta y verifica si fue exitosa
    if ($stmt->execute()) {
        echo "Doctor eliminado correctamente.";
    } else {
        echo "Error al eliminar el doctor: " . $conn->error;
    }

    // Cierra la declaración
    $stmt->close();
} else {
    echo "ID de doctor no recibido.";
}

// Cierra la conexión
$conn->close();
?>
