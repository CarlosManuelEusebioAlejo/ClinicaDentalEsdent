<?php
// Suponiendo que usas MySQLi para conectarte a la base de datos
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ClinicaDentalEsdent";

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID del doctor desde la URL
$doctorId = isset($_GET['id_doctor']) ? intval($_GET['id_doctor']) : 0;  // Convertir a entero para evitar inyecciones

// Verificar si el ID es válido
if ($doctorId > 0) {
    // Usar una consulta preparada para evitar SQL Injection
    
    $stmt = $conn->prepare("SELECT * FROM doctores WHERE id_doctor = 1");
    $stmt->bind_param("i", $doctorId);  // El 'i' indica que estamos esperando un parámetro entero
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Obtener los datos del doctor
        $doctor = $result->fetch_assoc();
        // Responder con los datos del doctor como JSON
        echo json_encode($doctor);
    } else {
        echo json_encode(['error' => 'Doctor no encontrado']);
    }

    // Cerrar la consulta preparada
    $stmt->close();
} else {
    echo json_encode(['error' => 'ID de doctor no válido']);
}

$conn->close();
?>
