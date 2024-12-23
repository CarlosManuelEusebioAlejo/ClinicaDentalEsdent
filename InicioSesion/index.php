<?php
include '../Configuraciones/conexion.php'; // Incluye el archivo de conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Correo = trim($_POST['Correo']);
    $password = trim($_POST['password']);

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
            header("Location: ../PanelControl");
            exit(); // Asegúrate de que el script se detenga después de redirigir
        } else {
            $_SESSION['error_message'] = "Contraseña incorrecta.";
        }
    } else {
        $_SESSION['error_message'] = "Correo electrónico no encontrado.";
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="/../ClinicaDentalEsdent/Configuraciones/img/logo.png" type="image/x-icon">
    <style>
    body {
        background-image: url('Img/iniciosesion.jpg'); /* Ruta de tu imagen */
        background-size: cover; /* Asegura que la imagen cubra toda la pantalla */
        background-repeat: no-repeat; /* Evita que la imagen se repita */
        background-position: center; /* Centra la imagen en la pantalla */
    }

    /* Media query para pantallas pequeñas */
    @media (max-width: 768px) {
        body {
            background-image: none; /* Elimina la imagen de fondo */
            background-color: #f0f0f0; /* Define un color de fondo alternativo */
        }
    }
</style>
</head>
<body>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2 rounded-full" src="Img/ENDENT.jpg" alt="logo">
                Clínica Dental Esdent
            </a>

            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-red-600 text-center md:text-2xl dark:text-red-500">
                        Inicio de sesión
                    </h1>

                    <?php if (isset($_SESSION['error_message'])): ?>
                        <div class="text-red-600 text-center text-sm font-medium">
                            <?php echo $_SESSION['error_message']; unset($_SESSION['error_message']); ?>
                        </div>
                    <?php endif; ?>

                    <form class="space-y-4 md:space-y-6" action="" method="POST">
                        <div>
                            <label for="Correo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo</label>
                            <input type="email" name="Correo" id="Correo" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="flex items-center justify-between">
                            <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">¿Olvidaste la contraseña?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="JavaScript.js" defer></script>
</body>
</html>
