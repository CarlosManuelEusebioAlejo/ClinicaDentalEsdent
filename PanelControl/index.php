<?php
    // session_start(); // Inicia la sesión

    // // Verifica si el usuario está conectado
    // if (!isset($_SESSION['id_doctor'])) {
    //     // Redirige al formulario de inicio de sesión
    //     header("Location: ../index.php");
    //     exit(); // Asegúrate de que el script se detenga después de redirigir
    // }

    include '../Configuraciones/conexion.php';

    // Seleccionar tablas de doctores y pacientes
    $sql = "SELECT COUNT(*) as total_doctores FROM doctores";
    $resultado_doctores = $conn->query($sql);

    $sql = "SELECT COUNT(*) as total_pacientes FROM pacientes";
    $resultado_pacientes = $conn->query($sql);

    $sql = "SELECT COUNT(*) as Videos_Explicacion FROM videoExplicativo";
    $resultado_ExplicacionVisual = $conn->query($sql);

    // $sql = "SELECT COUNT(*) as total_citas FROM citas WHERE estado = 'Pendiente'";
    // $resultado_citas = $conn->query($sql);

    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>ClinicaDentalEsdent</title>
    <link rel="icon" href="/../ClinicaDentalEsdent/Configuraciones/img/logo.png" type="image/x-icon">
</head>
<body class="h-screen">
    <!-- Contenedor principal -->
    <div class="flex h-screen w-full">
      <!-- Barra lateral -->
      <div class="h-screen w-64 p-6 flex flex-col justify-between shadow-lg text-gray-800 rounded-r-3xl sidebar" style="background-color: #f2f2ff;">
        <!-- Top Section (Logo y Menú) -->
        <div>
          <!-- Logo -->
          <div class="flex flex-col items-center">
            <span class="text-sm font-semibold justify-center">CLINICA DENTAL</span>
            <img src="/../ClinicaDentalEsdent/Configuraciones/img/logo.png" alt="" class="w-24 h-24" />
          </div>
          <div class="flex justify-center mb-6">
            <div class="bg-[#E9EDFF] w-24 h-24 flex flex-col items-center justify-center rounded-lg shadow-lg">
              <i class='bx bxs-dashboard text-2xl'></i>
              <span class="text-sm font-semibold mt-2">PANEL</span>
            </div>
          </div>
          <!-- Menú -->
          <nav class="space-y-4">
            <a href="" class="flex items-center p-2 rounded-full bg-white shadow-inner" style="box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
              <i class='bx bxs-dashboard text-2xl'></i>
              <span class="font-semibold mx-4">PANEL</span>
            </a>
            <a href="/../ClinicaDentalEsdent/Pacientes/" class="flex items-center p-2 rounded-lg bg-[#E9EDFF]">
              <i class='bx bx-id-card text-2xl'></i>
              <span class="font-semibold mx-4">PACIENTES</span>
            </a>
            <a href="/../ClinicaDentalEsdent/Agenda/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
              <i class='bx bxs-book-bookmark text-2xl'></i>
              <span class="font-semibold mx-4">AGENDA</span>
            </a>
            <a href="/../ClinicaDentalEsdent/Pagos/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
              <i class='bx bx-money text-2xl'></i>
              <span class="font-semibold mx-4">PAGOS</span>
            </a>
            <a href="/../ClinicaDentalEsdent/Presupuestos/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
              <i class='bx bx-money-withdraw text-2xl'></i>
              <span class="font-semibold mx-4">PRESUPUESTOS</span>
            </a>
            <a href="/../ClinicaDentalEsdent/Limpiezas/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
              <img src="/..//ClinicaDentalEsdent/Configuraciones/img/Dientelimpieza.png" class="h-6"> 
              <span class="font-semibold mx-4">LIMPIEZAS</span>
            </a>
            <a href="/../ClinicaDentalEsdent/ExplicacionVisual/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
              <i class='bx bx-play-circle text-2xl'></i>
              <span class="font-semibold mx-4">VISUAL</span>
            </a>
            <a href="/../ClinicaDentalEsdent/Doctores/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
              <i class='bx bx-group text-2xl'></i>
              <span class="font-semibold mx-4">DOCTORES</span>
            </a>
            <a href="/../ClinicaDentalEsdent/InteligenciaArtificial/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
              <i class='bx bx-brain text-2xl'></i>
              <span class="font-semibold mx-4">ESDENT IA</span>
            </a>
          </nav>
        </div>
        <!-- Sección inferior (Logout) -->
        <div class="flex justify-center items-center">
            <a href="#" class="mt-2 p-3 rounded-lg shadow-lg" style="background-color: #f3f3fd;">
                <i class='bx bx-log-out mt-1 text-2xl'></i>
            </a>
        </div>           
      </div>

      <!-- Contenedor derecho -->
      <div class="flex-grow flex justify-center items-center min-h-screen">
        <!-- Columna izquierda (Panel y estadísticas) -->
        <div class="flex flex-col w-full max-w-screen-lg p-10 space-y-8 items-center">
          <!-- Sección roja grande en la parte superior -->
          <div class="w-full h-36 rounded-lg flex items-center px-8" style="background-color: #B4221B;">
            <h1 class="text-white font-semibold text-4xl">Buen día, Cinthia Patricia Rangel Garibay!</h1>
            <img src="/../ClinicaDentalEsdent/Configuraciones/img/diente.png" alt="" class="w-20 h-24" />
          </div>
          <div class="grid grid-cols-2 gap-6 w-full">
          <!-- Pacientes Registrados -->
          <div class="shadow-lg rounded-lg p-6 flex flex-col items-center justify-center space-y-4 w-full h-32 cursor-pointer" style="background-color: #f8f8ff;">
              <div class="flex items-center space-x-2">
                  <i class='bx bxs-user text-3xl text-gray-800'></i>
                  <h3 class="text-sm font-semibold">PACIENTES REGISTRADOS</h3>
              </div>
              <span onclick="window.location.href='/../ClinicaDentalEsdent/Pacientes/'" 
                    class="block shadow-sm text-sm text-white py-2 px-6 rounded-full" 
                    style="background-color: #B4221B; box-shadow: inset 0 4px 6px rgba(43, 8, 8, 0.488); width: 125px;">
                    <?php echo $resultado_pacientes->fetch_assoc()["total_pacientes"]?> Pacientes
              </span>
          </div>
          <!-- Doctores Registrados -->
          <div class="shadow-lg rounded-lg p-6 flex flex-col items-center justify-center space-y-4 w-full h-32 cursor-pointer" style="background-color: #f8f8ff;">
              <div class="flex items-center space-x-2">
                  <i class='bx bx-group text-3xl text-gray-800'></i>
                  <h3 class="text-sm font-semibold">DOCTORES REGISTRADOS</h3>
              </div>
              <span onclick="window.location.href='/../ClinicaDentalEsdent/Doctores/'" 
                    class="block shadow-sm text-sm text-white py-2 px-6 rounded-full" 
                    style="background-color: #B4221B; box-shadow: inset 0 4px 6px rgba(43, 8, 8, 0.488);">
                    <?php echo $resultado_doctores->fetch_assoc()['total_doctores']; ?> Doctores
              </span>
          </div>
          <!-- Pagos Pendientes -->
          <div class="shadow-lg rounded-lg p-6 flex flex-col items-center justify-center space-y-4 w-full h-32 cursor-pointer" style="background-color: #f8f8ff;">
            <div class="flex items-center space-x-2">
              <i class='bx bx-money text-3xl text-gray-800'></i>
              <h3 class="text-sm font-semibold">PAGOS PENDIENTES</h3>
            </div>
            <span onclick="window.location.href='/../ClinicaDentalEsdent/Pagos/'" 
                  class="block shadow-sm text-sm text-white py-2 px-6 rounded-full" 
                  style="background-color: #B4221B; box-shadow: inset 0 4px 6px rgba(43, 8, 8, 0.488);">
                  0 Pagos
            </span>
          </div>
          <!-- Explicaciones Visuales -->
          <div class="shadow-lg rounded-lg p-6 flex flex-col items-center justify-center space-y-4 w-full h-32 cursor-pointer" style="background-color: #f8f8ff;">
            <div class="flex items-center space-x-2">
              <i class='bx bx-play-circle text-3xl text-gray-800'></i>
              <h3 class="text-sm font-semibold">EXPLICACIONES VISUALES</h3>
            </div>
            <span onclick="window.location.href='/../ClinicaDentalEsdent/ExplicacionVisual/'" 
                  class="block shadow-sm text-sm text-white py-2 px-6 rounded-full" 
                  style="background-color: #B4221B; box-shadow: inset 0 4px 6px rgba(43, 8, 8, 0.488);">
                  <?php echo $resultado_ExplicacionVisual->fetch_assoc()['Videos_Explicacion']; ?> Videos
            </span>
          </div>
          <!-- Citas Pendientes -->
          <div class="shadow-lg rounded-lg p-6 w-full cursor-pointer" style="background-color: #f8f8ff;">
            <div class="flex justify-between items-center">
              <i class='bx bxs-book-bookmark text-4xl text-gray-800'></i>
              <h3 class="text-xl font-semibold">CITAS PENDIENTES</h3>
              <span onclick="window.location.href='/../ClinicaDentalEsdent/Agenda/'" 
                    class="block text-sm text-white py-2 px-4 rounded-full" 
                    style="background-color: #B4221B; box-shadow: inset 0 4px 6px rgba(43, 8, 8, 0.488);">
                    Citas
              </span>
            </div>
            <div class="overflow-y-auto h-48 mt-4"> <!-- Ajusta la altura como sea necesario -->
              <div class="space-y-4">
                <!-- Ejemplo de cita -->
                <?php
                include '../Configuraciones/conexion.php';

                // Obtener la fecha actual
                date_default_timezone_set('America/Mexico_City');
                $fechaActual = date('Y-m-d');

                // Consulta para obtener las citas del día de hoy
                $query = "SELECT * FROM citas WHERE Fecha_cita = '$fechaActual' ORDER BY Hora_inicio ASC";

                $result = mysqli_query($conn, $query);

                // Verifica si hay resultados
                if (mysqli_num_rows($result) > 0) {
                    while ($citas = mysqli_fetch_assoc($result)) {
                      
                        ?>
                        <div class="flex justify-between items-center rounded-lg p-4" style="background-color: #e8ecff; box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.1);">
                            <div class="flex items-center justify-center bg-white rounded-lg w-20 h-10 shadow-md">
                                <span class="text-md font-semibold text-gray-700"><?php echo ($citas['Hora_inicio']); ?></span>
                            </div>
                            <div class="text-sm font-semibold text-gray-800">
                                <?php echo ($citas['Nombre_paciente']); ?>
                            </div>
                            <div class="flex items-center justify-center bg-white rounded-lg w-20 h-10 shadow-md">
                                <span class="text-md font-semibold text-gray-700">UNIDAD <?php echo ($citas['Unidad']); ?></span>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="text-center text-gray-600 font-semibold">
                        No hay citas registradas para hoy.
                    </div>
                    <?php
                }

                
                ?>

              </div>
            </div>
          </div>

          <!-- fin citas pendientes -->

          <!-- Limpiezas Pendientes -->
          <div class="shadow-lg rounded-lg p-6 w-full cursor-pointer" style="background-color: #f8f8ff;">
            <div class="flex justify-between items-center">
              <i class='bx bx-play-circle text-4xl text-gray-800'></i>
              <h3 class="text-xl font-semibold">LIMPIEZAS PENDIENTES</h3>
              <span onclick="window.location.href='/../ClinicaDentalEsdent/Limpiezas/'" 
                    class="block text-sm text-white py-2 px-4 rounded-full" 
                    style="background-color: #B4221B; box-shadow: inset 0 4px 6px rgba(43, 8, 8, 0.488);">
                    Limpiezas
              </span>
            </div>
            <div class="overflow-y-auto h-48 mt-4"> <!-- Ajusta la altura como sea necesario -->
              <div class="space-y-4">
                <div class="space-y-4">
                  <?php
                  include '../Configuraciones/conexion.php';
                  // Consulta para obtener las limpiezas registradas
                  $query = "SELECT * FROM limpieza_dental"; // Ajusta el nombre de la tabla y columnas
                  $result = mysqli_query($conn, $query);

                  // Verifica si hay resultados
                  if (mysqli_num_rows($result) > 0) {
                      while ($limpieza = mysqli_fetch_assoc($result)) {
                          ?>
                          <div class="flex justify-between items-center rounded-lg p-4" style="background-color: #e8ecff; box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.1);">
                             
                              <!-- Fecha de la Limpieza -->
                              <div class="flex items-center justify-center bg-white rounded-lg w-40 h-10 shadow-md">
                                  <span class="text-md font-semibold text-gray-700">
                                    <?php
                                    // Establece la localización en español
                                    setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'spanish');
                                    // Fecha de ejemplo (cambia esto por tu variable con la fecha)
                                    $fecha = $limpieza['Siguiente_visita']; // Por ejemplo: '2025-01-15'
                                    // Convierte la fecha al formato deseado
                                    echo strftime('%B del %Y', strtotime($fecha));
                                    ?>

                                  </span>
                              </div>                              <!-- Nombre del Paciente -->
                              <div class="text-sm font-semibold text-gray-800">
                                  <?php echo htmlspecialchars($limpieza['Nombre_paciente']); ?>
                              </div>
                              <!-- Fecha de la Limpieza -->
                              <div class="flex items-center justify-center bg-white rounded-lg w-35 h-10 shadow-md">
                                  <span class="text-md font-semibold text-gray-700">
                                      <?php
                                        // Número de teléfono original (cambia esto por tu variable con el teléfono)
                                        $telefono = $limpieza['telefono']; // Ejemplo: "3142174550"

                                        // Verifica si el teléfono tiene exactamente 10 dígitos
                                        if (strlen($telefono) === 10 && ctype_digit($telefono)) {
                                            // Formatea el número
                                            $telefono_formateado = substr($telefono, 0, 3) . '-' . substr($telefono, 3, 3) . '-' . substr($telefono, 6, 2) . '-' . substr($telefono, 8, 2);
                                            echo htmlspecialchars($telefono_formateado);
                                        } else {
                                            // Muestra un mensaje de error si el número no tiene 10 dígitos
                                            echo "Formato de teléfono inválido";
                                        }
                                      ?>

                                  </span>
                              </div>
                          </div>
                          <?php
                      }
                  } else {
                      ?>
                      <div class="text-center text-gray-600 font-semibold">
                          No hay limpiezas registradas.
                      </div>
                      <?php
                  }
                  ?>
                </div>
                
              </div>
            </div>
          </div>
          <!-- fin limpiezas pendientes -->
        </div>
      </div>
    </div>
</body>
</html>       