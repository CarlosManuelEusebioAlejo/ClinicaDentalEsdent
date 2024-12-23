<?php
session_start(); // Inicia la sesión

// Verifica si el usuario ya está conectado
if (isset($_SESSION['id_doctor'])) {
    // Redirige al panel del doctor si ya hay una sesión activa
    header("Location: /../PanelControl/");
    exit(); // Asegúrate de que el script se detenga después de redirigir
}

include 'conexion.php'; // Incluye el archivo de conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Correo = $_POST['Correo'];
    $password = $_POST['password'];

    // Preparar y enlazar
    $stmt = $conn->prepare("SELECT id_doctor, Contrasena FROM doctores WHERE Correo = ?");
    $stmt->bind_param("s", $Correo);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id_doctor, $hashed_password);
        $stmt->fetch();

        // Verificar contraseña
        if (password_verify($password, $hashed_password)) {
            // Guardar id_doctor en la sesión
            $_SESSION['id_doctor'] = $id_doctor;
            $_SESSION['Correo'] = $Correo;
            
            // Redirigir al panel del doctor
            header("Location: /../PanelControl/");
            exit(); // Asegúrate de que el script se detenga después de redirigir
        } else {
            $_SESSION['error_message'] = "Contraseña Incorrecta";
        }
    } else {
        $_SESSION['error_message'] = "Correo electrónico Incorrecto";
    }

    $stmt->close();
    $conn->close();
}
?>