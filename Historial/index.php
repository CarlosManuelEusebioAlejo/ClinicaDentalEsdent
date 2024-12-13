<?php
// Incluir detalles de la conexión a la base de datos
include '../Configuraciones/conexion.php';

// Iniciar sesión para manejar variables de sesión
session_start();

// Obtener el idPaciente desde el POST, si está disponible
$idPaciente = isset($_POST['idPaciente']) ? intval($_POST['idPaciente']) : 0;

// Si no se recibe el idPaciente por POST, intentar obtenerlo desde la sesión
if ($idPaciente <= 0 && isset($_SESSION['idPaciente'])) {
    $idPaciente = $_SESSION['idPaciente'];
}

// Verificar si el idPaciente es válido
if ($idPaciente <= 0) {
    die("ID de paciente no proporcionado o inválido.");
}

// Almacenar el idPaciente en la sesión para usarlo en futuras peticiones
$_SESSION['idPaciente'] = $idPaciente;

try {
    // Verificar conexión
    if ($conn->connect_error) {
        throw new Exception("Conexión fallida: " . $conn->connect_error);
    }

    // Variable para almacenar el nombre del paciente
    $Nombre_paciente = '';

    // Consulta SQL para obtener el nombre del paciente
    $sqlNombre = "SELECT Nombre_paciente, Apellido_paciente FROM pacientes WHERE idPaciente = ?";
    $stmtNombre = $conn->prepare($sqlNombre);
    $stmtNombre->bind_param("i", $idPaciente);
    $stmtNombre->execute();
    $resultNombre = $stmtNombre->get_result();

    if ($resultNombre && $resultNombre->num_rows > 0) {
        $row = $resultNombre->fetch_assoc();
        $Nombre_paciente = $row['Nombre_paciente'] . ' ' . $row['Apellido_paciente'];
    } else {
        throw new Exception("No se encontró al paciente con el ID proporcionado.");
    }

    // Liberar resultados
    $stmtNombre->close();

    // Consulta SQL para obtener historial por idPaciente
    $sqlHistorial = "SELECT * FROM historial_tratamiento WHERE idPaciente = ?";
    $stmtHistorial = $conn->prepare($sqlHistorial);
    $stmtHistorial->bind_param("i", $idPaciente);
    $stmtHistorial->execute();
    $resultHistorial = $stmtHistorial->get_result();

    // Variable para almacenar el historial
    $historial = [];

    if ($resultHistorial && $resultHistorial->num_rows > 0) {
        while ($row = $resultHistorial->fetch_assoc()) {
            $historial[] = $row;
        }
    }

    // Liberar resultados
    $stmtHistorial->close();

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    // Cerrar conexión
    $conn->close();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- Enlace de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>ClinicaDentalEsdent</title>
    <link rel="icon" href="/../ClinicaDentalEsdent/Configuraciones/img/logo.png" type="image/x-icon">
</head>
<body class="bg-#EFF1F9 " style="background-color: #e8ecff;color: #3C3C3C">
    
    <!-- Contenedor principal -->
    <div class="flex h-screen">
      <!-- Barra lateral -->
      <div class="h-screen w-64 p-6 flex flex-col justify-between shadow-lg text-gray-800  rounded-r-3xl sidebar"  style="background-color: #f2f2ff;">
        <!-- Top Section (Logo y Menú) -->
        <div>
          <!-- Logo -->
          <div class="flex flex-col items-center mb-9">
            <span class="text-sm font-semibold">CLINICA DENTAL</span>
            <img src="/../ClinicaDentalEsdent/Configuraciones/img/logo.png" alt="" class="w-24 h-24 mb-2" />
          </div>

          <div class="flex justify-center mb-6">
            <div class="bg-[#E9EDFF] w-24 h-24 flex flex-col items-center justify-center rounded-lg shadow-lg">
                <i class='bx bx-id-card text-3xl'></i>
                <span class="text-sm font-semibold mt-2">HISTORIAL</span>
            </div>
          </div>
          
           <!-- Menú -->
           <nav class="space-y-4">
                    <a href="/../ClinicaDentalEsdent/PanelControl/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                        <i class='bx bxs-dashboard text-2xl'></i>
                        <span class="font-semibold mx-4">PANEL</span>
                    </a>
                    <a href="/../ClinicaDentalEsdent/Pacientes/" class="flex items-center p-2 rounded-full bg-[#E9EDFF]" style="box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
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
                        <i class='bx bx-play-circle text-2xl'></i>
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

        <style>
            /* Media query para dispositivos con ancho menor a 768px (típicamente tablets) */
            @media (max-width: 1208px) {
              nav a span {
                display: none; /* Oculta el texto en tablets */
              }
              /* Centrar los íconos en tabletas y reducir el tamaño del div principal */
              .sidebar {
                width: 130px; /* Hacer la barra más delgada */
              }
              nav a i {
                justify-content: center; /* Asegura que los íconos estén centrados */
                margin: 0 auto;
              }
            }
          </style>
          
    </div>
  
    <!-- Sección inferior (Logout) -->
    <div class="flex justify-center items-center">
        <a href="#" class="mt-2 p-3 rounded-lg shadow-lg" style="background-color: #f3f3fd;">
          <i class='bx bx-log-out mt-1 text-2xl'></i>
        </a>
    </div>           
  </div>

      <!-- Contenido principal -->
  <div class="flex-1 flex flex-col mt-12 mx-4">
    <!-- Contenedor de los botones -->
    <div class="flex justify-between items-center mx-8 ">
    <div class="flex justify-between items-center mx-8">
            <!-- Botón rojo para index.html -->
            
            <a href="/..//ClinicaDentalEsdent/Pacientes/" class="flex items-center text-white px-4 py-2 rounded-full font-semibold hover:bg-red-600" style="background-color: #07b52d;">
                <img src="/..//ClinicaDentalEsdent/Configuraciones/img/regresar.png" alt="Regresar" class="h-5 mr-2"> Regresar
            </a>
        </div>
      <!-- Botones de odontograma y radiografía -->
      <div class="flex space-x-4">
    <!-- Enviar el idPaciente a la URL del Odontograma -->
    <!-- Formulario para Odontograma con idPaciente -->
    
    <form id="redirectFormOdontograma<?= $idPaciente['idPaciente'] ?>" method="POST" action="/../ClinicaDentalEsdent/Odontograma/" style="display: inline;">
        <input type="hidden" name="idPaciente" value="<?= $idPaciente['idPaciente'] ?>">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full font-semibold hover:bg-blue-600"  style="background-color: #B4221B;">ODONTOGRAMA</button>
    </form>

    <!-- Formulario para Radiografías con idPaciente -->
    <form id="redirectFormRadiografia<?= $idPaciente['idPaciente'] ?>" method="POST" action="/../ClinicaDentalEsdent/Radiografias/" style="display: inline;">
        <input type="hidden" name="idPaciente" value="<?= $idPaciente['idPaciente'] ?>">
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-full font-semibold hover:bg-green-600"  style="background-color: #B4221B;">RADIOGRAFÍAS</button>
    </form>
    
      </div>
    </div>
      
      <!-- Contenido principal -->
      <div class="flex-1 flex flex-col mx-4">
        <!-- Título y párrafo alineados a la izquierda -->
        <div class="ml-8 mt-8">
          <h1 class="text-4xl font-semibold">HISTORIAL DEL PACIENTE</h1>
          
          <p class="text-lg text-gray-500 mt-1 mb-12">Paciente: <?= $Nombre_paciente; ?></p>
          
        </div>



        
       <!-- Div centrado -->
<div class="flex flex-1 justify-center items-start">
  <div class="bg-white shadow-lg rounded-lg p-4 w-full max-w-5xl" style="background-color: #f8f8ff;">
      <!-- Contenido original del div -->
      <div class="flex justify-between items-center mt-6 mb-4 w-full">
          <button id="add-treatment-btn" class="text-white px-4 py-2 rounded-full shadow-lg" style="background-color: #B4221B;">
              + AGREGAR CITA
          </button>
      </div>

      <!-- Tabla de pacientes -->
      <table class="table-auto w-full border-separate" style="border-spacing: 0px 12px;">
        <!-- Encabezado con borde redondeado -->
        <thead class="bg-white rounded-full"  style=" box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
            <tr>
                <th class="px-4 py-2 text-left rounded-l-full">FECHA</th>
                <th class="px-4 py-2 text-left">TRATAMIENTO</th>
                <th class="px-4 py-2 text-left">OBSERVACIONES</th>
                <th class="px-4 py-2 text-center rounded-r-full">OPCIONES</th>
            </tr>
        </thead>

        <tbody class="bg-gray-100">
        <?php foreach ($historial as $registro): ?>
        
        <div class="mb-2">
            <tr class="bg-sky-100 overflow-hidden" style="border-radius: 50px; box-shadow:0px 5px 6px rgba(3, 64, 179, 0.229); background-color: #e8ecff;">
                <td class="px-4 py-3 text-left" style="border-top-left-radius: 50px; border-bottom-left-radius: 50px;"><?= $registro['Fecha']; ?></td>
                <td class="px-4 py-3 text-left"><?= $registro['Tratamiento']; ?></td>
                <td class="px-4 py-3 text-left"><?= $registro['Observacion']; ?></td>
                <td class="px-4 py-3 text-center" style="border-top-right-radius: 50px; border-bottom-right-radius: 50px;">
                    <!-- Botón que abre el modal -->
                    <!-- Botón que abre el modal -->
<button class="bg-transparent border-0 cursor-pointer" onclick="openInfoModal(<?= $registro['id_tratamiento']; ?>)">
    <i class='bx bx-id-card text-lg mx-2'></i>
</button>
                    <!-- Botón para justificante -->
                    <button onclick="openJustificanteModal()" class="bg-transparent border-0 cursor-pointer">
                        <i class='bx bx-detail text-lg mx-2' style='color:#3c3c3c'></i>
                    </button>
                </td>
            </tr>
        </div>


      </tbody>
      <?php endforeach; ?>
    </table> 
    <?php
      include 'Modales/VerHistorial.php';
      include 'Modales/EditarHistorial.php';
      include 'Modales/VerJustificante.php';
      include 'Modales/AgregarHistorial.php';
    ?>
</body>
</html> 
          
