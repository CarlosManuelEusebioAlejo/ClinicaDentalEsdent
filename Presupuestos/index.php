<?php
include '../sesion/session.php';
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>ClinicaDentalEsdent</title>
    <link rel="icon" href="/../clinicadentalesdent/Configuraciones/img/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <img src="/../clinicadentalesdent/Configuraciones/img/logo.png" alt="" class="w-24 h-24 mb-2" />
          </div>

          <div class="flex justify-center mb-6">
            <div class="bg-[#E9EDFF] w-24 h-24 flex flex-col items-center justify-center rounded-lg shadow-lg">
                <i class='bx bx-money-withdraw text-2xl'></i>
                <span class="text-xs font-semibold mt-2">PRESUPUESTO</span>
            </div>
          </div>
          
           <!-- Menú -->
          <nav class="space-y-4">
            <a href="/../clinicadentalesdent/PanelControl/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
              <i class='bx bxs-dashboard text-2xl'></i>
              <span class="font-semibold mx-4">PANEL</span>
            </a>
            <a href="/../clinicadentalesdent/Pacientes/" class="flex items-center p-2 rounded-lg bg-[#E9EDFF]">
              <i class='bx bx-id-card text-2xl'></i>
              <span class="font-semibold mx-4">PACIENTES</span>
            </a>
            <a href="/../clinicadentalesdent/Agenda/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
              <i class='bx bxs-book-bookmark text-2xl'></i>
              <span class="font-semibold mx-4">AGENDA</span>
            </a>
            <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'Administrador'): ?>
            <a href="/../clinicadentalesdent/Pagos/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
              <i class='bx bx-money text-2xl'></i>
              <span class="font-semibold mx-4">PAGOS</span>
            </a>
            <?php endif; ?> 
            <a href="" class="flex items-center p-2 rounded-full bg-white shadow-inner transition duration-300 ease-in-out" style="box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
              <i class='bx bx-money-withdraw text-2xl'></i>
              <span class="font-semibold mx-4">PRESUPUESTOS</span>
            </a>
            <a href="/../clinicadentalesdent/Limpiezas/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
              <img src="/..//clinicadentalesdent/Configuraciones/img/Dientelimpieza.png" class="h-6"> 
              <span class="font-semibold mx-4">LIMPIEZAS</span>
            </a>
            <a href="/../clinicadentalesdent/ExplicacionVisual/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
              <i class='bx bx-play-circle text-2xl'></i>
              <span class="font-semibold mx-4">VISUAL</span>
            </a>
            <a href="/../clinicadentalesdent/Recetario/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
                <img src="/..//clinicadentalesdent/Configuraciones/img/Dientelimpieza.png" class="h-6"> 
                <span class="font-semibold mx-4">RECETARIO</span>
            </a>
            <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'Administrador'): ?>
            <a href="/../clinicadentalesdent/Doctores/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
              <i class='bx bx-group text-2xl'></i>
              <span class="font-semibold mx-4">DOCTORES</span>
            </a>
            <?php endif; ?> 
            <!-- <a href="/../clinicadentalesdent/InteligenciaArtificial/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
              <i class='bx bx-brain text-2xl'></i>
              <span class="font-semibold mx-4">ESDENT IA</span>
            </a> -->
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
              <a href="../sesion/logout.php" class="mt-2 p-3 rounded-lg shadow-lg" style="background-color: #f3f3fd;">
                <i class='bx bx-log-out mt-1 text-2xl'></i>
              </a>
          </div>           
      </div>
      
      <!-- Contenido principal -->
      <div class="flex-1 flex flex-col mx-4">
        <!-- Título y párrafo alineados a la izquierda -->
        <div class="ml-8 mt-8">
          <!-- Botón para regresar a historial -->
          <div class="flex justify-start mb-4">
              <a href="../Historial/" 
                class="text-white px-4 py-2 rounded-full items-center font-semibold hover:bg-red-600" 
                style="background-color: #07b52d; display: flex; align-items: center; width: max-content;">
                  <img src="/..//clinicadentalesdent/Configuraciones/img/regresar.png" 
                      alt="Regresar" 
                      class="h-5 mr-2"> 
                  <span>Regresar</span>
              </a>
          </div>
          <h1 class="text-4xl font-semibold">PRESUPUESTO</h1>
          <p class="text-lg text-gray-500 mt-1 mb-12">Paciente : Carlos Manuel Eusebio Alejo</p>
        </div>
<!-- Div centrado -->
<div class="flex flex-1 justify-center items-start">
  <div class="bg-white shadow-lg rounded-lg p-4 w-full max-w-5xl" style="background-color: #f8f8ff;">
      <!-- Contenido original del div -->
      <div class="flex justify-between items-center mt-6 mb-4 w-full">
        <button id="add-presupuesto-btn" class="text-white px-4 py-2 rounded-full shadow-lg" style="background-color: #B4221B;">
            + AGREGAR PRESUPUESTO
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
                <th class="px-4 py-2 text-left">COSTO</th>
                <th class="px-4 py-2 text-left">VALIDO HASTA</th>
                <th class="px-4 py-2 text-left">ESTADO</th> <!-- Nueva columna de estado -->
                <th class="px-4 py-2 text-center rounded-r-full">OPCIONES</th>
            </tr>
        </thead>
    
        <!-- Cuerpo de la tabla -->
        <tbody id="presupuestos-table-body" class="bg-gray-100">
        <?php
        include '../Configuraciones/conexion.php';
        // Consulta para obtener todos los presupuestos
        $query = "SELECT * FROM presupuestos ORDER BY fecha_registro DESC";
        $result = mysqli_query($conn, $query);

        // Verifica si hay resultados
        if (mysqli_num_rows($result) > 0) {
            while ($presupuesto = mysqli_fetch_assoc($result)) {
                // Obtener la fecha de "Valido_hasta"
                $fecha_valido_hasta = strtotime($presupuesto['Valido_hasta']);
                $fecha_actual = strtotime(date("Y-m-d"));

                // Determinar el estado basado en la fecha
                if ($presupuesto['estado'] == 'aprobado') {
                    $estado_texto = 'Aprobado';
                    $estado_color = 'bg-green-500'; // Verde
                } elseif ($presupuesto['estado'] == 'expirado') {
                    $estado_texto = 'Expirado';
                    $estado_color = 'bg-red-500'; // Rojo
                } else {
                    $estado_texto = 'Pendiente';
                    $estado_color = 'bg-yellow-500'; // Naranja
                }
        ?>
          <div class="mb-2">
            <tr class="bg-sky-100 overflow-hidden" style="border-radius: 50px; box-shadow:0px 5px 6px rgba(3, 64, 179, 0.229); background-color: #e8ecff;">
              <td class="px-4 py-3 text-left">
                <?php
                  // Convierte la fecha a formato timestamp
                  $fecha = strtotime($presupuesto['Fecha']);
                  // Array de meses en español
                  $meses = [
                      "enero", "febrero", "marzo", "abril", "mayo", "junio",
                      "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"
                  ];

                  // Obtener el día, mes y año
                  $dia = date("d", $fecha);
                  $mes = $meses[date("n", $fecha) - 1]; // Restamos 1 porque el mes en date() es 1-indexado
                  $anio = date("Y", $fecha);

                  // Mostrar la fecha en formato "día mes año"
                  echo $dia . " " . $mes . " " . $anio;
                ?>
              </td>
              <td class="px-4 py-3 text-left"><?php echo ($presupuesto['Tratamiento']); ?></td>
              <td class="px-4 py-3 text-left"><?php echo ($presupuesto['Observaciones']); ?></td>
              <td class="px-4 py-3 text-left"><?php echo ($presupuesto['Costo']); ?></td>  
              <td class="px-4 py-3 text-left">
               <?php
                  // Mostrar la fecha "Valido hasta"
                  $fecha = strtotime($presupuesto['Valido_hasta']);
                  $dia = date("d", $fecha);
                  $mes = $meses[date("n", $fecha) - 1]; 
                  $anio = date("Y", $fecha);
                  echo $dia . " " . $mes . " " . $anio;
                ?>
              </td>
              <td class="px-4 py-3 text-center">
                <!-- Mostrar estado con color -->
                <span class="px-4 py-2 rounded-full <?php echo $estado_color; ?> text-white"><?php echo $estado_texto; ?></span>
              </td>
              <td class="px-4 py-3 text-center" style="border-top-right-radius: 50px; border-bottom-right-radius: 50px;">
                  <!-- Botón que abre el modal -->
                  <button id='edit-presupuesto-btn' onclick="EditarPresupuesto(<?php echo ($presupuesto['id_presupuesto']); ?>)" class="bg-transparent border-0 cursor-pointer">
                      <i class='bx bx-edit text-lg mx-2'></i>
                   </button>
                   <!-- Botón para justificante -->
                  <button class="bg-transparent border-0 cursor-pointer" onclick="eliminarPresupuesto(<?php echo ($presupuesto['id_presupuesto']); ?>)">
                    <i class='bx bx-trash text-lg mx-2' style='color:#3c3c3c'></i>
                  </button>
                  <!-- Botón para actualizar estado a aprobado -->
                  <?php if ($presupuesto['estado'] == 'pendiente') { ?>
                      <button class="bg-transparent border-0 cursor-pointer" onclick="actualizarEstadoAprobado(<?php echo ($presupuesto['id_presupuesto']); ?>)">
                          <i class='bx bx-check text-lg mx-2' style='color:#28a745'></i>
                      </button>
                  <?php } ?>
              </td>
            </tr>
          </div>
          <?php
              }
          } else {
          ?>
            <tr>
                <td colspan="4" class="text-center">No hay presupuestos registrados.</td>
            </tr>
          <?php
          }
          ?>
        </tbody>
    </table>
  </div>
</div>

<script>
  // Filtrar presupuestos por estado
  function filtrarEstado() {
    const estado = document.getElementById('estado-filter').value;
    const rows = document.querySelectorAll('tbody tr');

    rows.forEach(row => {
      const estadoCell = row.querySelector('td:nth-child(7)'); // Columna de estado
      const estadoTexto = estadoCell.textContent.trim().toLowerCase();
      if (estado && estadoTexto !== estado) {
        row.style.display = 'none';
      } else {
        row.style.display = '';
      }
    });
  }

// Función para actualizar estado de pendiente a aprobado
function actualizarEstadoAprobado(id_presupuesto) {
  const data = {
    id_presupuesto: id_presupuesto,
    estado: 'aprobado'
  };

  fetch('Solicitudes/Aprobado.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'success') {
      // Mostrar un mensaje de éxito usando SweetAlert
      Swal.fire({
        icon: 'success',
        title: 'Estado actualizado',
        text: 'El presupuesto ha sido actualizado a aprobado.',
        confirmButtonText: 'Aceptar'
      }).then(() => {
        location.reload();  // Recargar la página para ver los cambios
      });
    } else {
      // Mostrar un mensaje de error usando SweetAlert
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Hubo un error al actualizar el estado del presupuesto.',
        confirmButtonText: 'Aceptar'
      });
    }
  })
  .catch(error => {
    // En caso de un error de red o otro problema
    Swal.fire({
      icon: 'error',
      title: 'Error de red',
      text: 'No se pudo completar la solicitud. Inténtalo de nuevo más tarde.',
      confirmButtonText: 'Aceptar'
    });
  });
}

</script>


  <?php
    include 'Modales/AgregarPresupuesto.php';
  ?>
  
  <?php
    include 'Modales/EditarPresupuesto.php';
  ?>

</div>
</div>

<script>
  function eliminarPresupuesto(id_presupuesto) {
      console.log("ID recibido en eliminarPresupuesto:", id_presupuesto); // Verificar el ID
      Swal.fire({
          title: "¿Estás seguro?",
          text: "¡No podrás revertir esto!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonText: "Sí, eliminarlo",
          cancelButtonText: "No, cancelar",
          reverseButtons: true
      }).then((result) => {
          if (result.isConfirmed) {
              // Llamada AJAX para eliminar el presupuesto
              $.ajax({
                  url: 'Solicitudes/EliminarPresupuesto.php', // URL corregida
                  method: 'POST',
                  data: { id_presupuesto: id_presupuesto }, // Enviar id_presupuesto correctamente
                  success: function(response) {
                      console.log("Respuesta del servidor:", response); // Verificar la respuesta
                      Swal.fire(
                          "Eliminado",
                          response,
                          "success"
                      ).then(() => {
                          location.reload(); // Recargar la página después de eliminar
                      });
                  },
                  error: function(xhr, status, error) {
                      console.error("Error en la solicitud AJAX:", error); // Registrar errores
                      Swal.fire(
                          "Error",
                          "Hubo un problema al eliminar el presupuesto.",
                          "error"
                      );
                  }
              });
          } else if (result.dismiss === Swal.DismissReason.cancel) {
              Swal.fire(
                  "Cancelado",
                  "El presupuesto está seguro.",
                  "error"
              );
          }
      });
  }
</script>
</body>

  