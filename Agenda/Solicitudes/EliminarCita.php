<?php
// Incluir archivo de configuración para la conexión a la base de datos
include '../../Configuraciones/conexion.php';

// Verificar si el ID de la cita fue enviado a través del método POST
if(isset($_POST['id_cita'])) {
    $id_cita = $_POST['id_cita'];

    // Preparar la consulta SQL para eliminar la cita
    $query = "DELETE FROM citas WHERE id_cita = ?";

    // Preparar la sentencia
    if($stmt = $conn->prepare($query)) {
        // Vincular el parámetro
        $stmt->bind_param("i", $id_cita);

        // Ejecutar la consulta
        if($stmt->execute()) {
            echo "Cita eliminada con éxito";
        } else {
            echo "Error al eliminar la cita: " . $conn->error;
        }

        // Cerrar la sentencia
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }

} else {
    echo "No se ha recibido el ID de la cita.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
