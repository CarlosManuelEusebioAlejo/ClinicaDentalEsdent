<?php
// Verifica si se recibieron datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '../../Configuraciones/conexion.php';

    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Define las variables y limpia los datos del formulario
    $Nombre_doctor          = mysqli_real_escape_string($conn, $_POST['Nombre_doctor']);
    $Correo                 = mysqli_real_escape_string($conn, $_POST['Correo']);
    $Especialidad           = mysqli_real_escape_string($conn, $_POST['Especialidad']);
    $Numero_telefono        = mysqli_real_escape_string($conn, $_POST['Numero_telefono']);
    $Anos_experiencia       = mysqli_real_escape_string($conn, $_POST['Anos_experiencia']);
    $Conocimientos_tecnicos = mysqli_real_escape_string($conn, $_POST['Conocimientos_tecnicos']);
    $Rol                    = mysqli_real_escape_string($conn, $_POST['Rol']);
    $Contrasena             = mysqli_real_escape_string($conn, password_hash($_POST['Contrasena'], PASSWORD_DEFAULT));

    // Verifica si el correo ya existe en la base de datos
    $checkEmailQuery = "SELECT Correo FROM doctores WHERE Correo = '$Correo'";
    $checkEmailResult = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($checkEmailResult) > 0) {
        // Redirige con el parámetro de error si el correo ya existe
        header("Location: ../?error=duplicate_email");
        exit;
    }
    if (mysqli_num_rows($checkEmailResult) > 0) {
        // Redirige con el parámetro de error si el correo ya existe
        $_SESSION['error'] = 'duplicate_email'; // Guarda el error en la sesión
        header("Location: ../"); // Redirige a la página principal
        exit;
    }

    // Verifica y guarda el certificado si se subió
    $certificadoRuta = "";
    if (isset($_FILES['Certificado']) && $_FILES['Certificado']['error'] == UPLOAD_ERR_OK) {
        $certificadoNombre = $_FILES['Certificado']['name'];
        $certificadoTmp = $_FILES['Certificado']['tmp_name'];
        $certificadoRuta = "../uploads/" . basename($certificadoNombre);

        // Mueve el archivo a la carpeta de destino
        if (!move_uploaded_file($certificadoTmp, $certificadoRuta)) {
            echo "Error al subir el certificado.";
            exit;
        }
    }

    // Prepara la consulta SQL para insertar el doctor
    $query = "INSERT INTO doctores (Nombre_doctor, Correo, Contrasena, Especialidad, Numero_telefono, experiencia_anios, Conocimientos_tecnicos, Rol, Certificado) 
              VALUES ('$Nombre_doctor', '$Correo', '$Contrasena', '$Especialidad', '$Numero_telefono', '$Anos_experiencia', '$Conocimientos_tecnicos', '$Rol', '$certificadoRuta')";

    if (mysqli_query($conn, $query)) {
        header('Location: ../');
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
