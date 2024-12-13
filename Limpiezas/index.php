<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                    <i class='bx bx-play-circle text-2xl'></i>
                    <span class="text-sm font-semibold mt-2">LIMPIEZAS</span>
                </div>
            </div>
          
            <!-- Menú -->
           <nav class="space-y-4">
                    <a href="/../ClinicaDentalEsdent/PanelControl/" class="flex items-center p-2 rounded-lg hover:bg-[#E9EDFF]">
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
                    <a href="" class="flex items-center p-2 rounded-full bg-white shadow-inner" style="box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
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
    <div class="flex-1 flex flex-col mx-4">
        <!-- Título y párrafo alineados a la izquierda -->
        <div class="ml-8 mt-8">
            <h1 class="text-4xl font-semibold">LIMPIEZAS PENDIENTES</h1>
            <p class="text-lg text-gray-500 mt-1 mb-12">2 Limpiezas pendientes</p>
        </div>
  
       <!-- Div centrado -->
        <div class="flex flex-1 justify-center items-start">
            <div class="bg-white shadow-lg rounded-lg p-4 w-full max-w-5xl" style="background-color: #f8f8ff;">
                <!-- Contenido original del div -->
                <div class="flex justify-between items-center mt-6 mb-4 w-full">
                    <button id="add-limpieza-btn" class="text-white px-4 py-2 rounded-full shadow-lg" style="background-color: #B4221B;">
                        + AGREGAR LIMPIEZA
                    </button>        
                    
                    <div>
                        <input type="text" placeholder="Buscar Paciente" class="px-4 py-2 rounded-full shadow-lg">
                    </div>
                </div>

                <table class="table-auto w-full border-separate" style="border-spacing: 0px 12px;">
                    <!-- Encabezado con borde redondeado -->
                    <thead class="bg-white rounded-full"  style=" box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
                        <tr>
                            <th class="px-4 py-2 text-left rounded-l-full">ÚLTIMA VISITA</th>
                            <th class="px-4 py-2 text-left">NOMBRE</th>
                            <th class="px-4 py-2 text-left">TELEFONO</th>
                            <th class="px-4 py-2 text-left">SIGUIENTE VISITA</th>
                            <th class="px-4 py-2 text-center rounded-r-full">OPCIONES</th>
                        </tr>
                    </thead>
                
                    <!-- Cuerpo de la tabla -->
                    <tbody class="bg-gray-100">
                        <!-- Fila 1 -->
                        <?php
                        include '../Configuraciones/conexion.php';
                        // Consulta para obtener todos los doctores
                        $query = "SELECT * FROM limpieza_dental ORDER BY fecha_registro DESC";
                        $result = mysqli_query($conn, $query);

                        // Verifica si hay resultados
                        if (mysqli_num_rows($result) > 0) {
                            while ($limpieza = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="mb-2">
                            <tr class="bg-sky-100 overflow-hidden " style="border-radius: 50px; box-shadow:0px 5px 6px rgba(3, 64, 179, 0.229); background-color: #e8ecff;">
                                <td class="px-4 py-3 text-left" style="border-top-left-radius: 50px; border-bottom-left-radius: 50px;"><?php echo ($limpieza['Ultima_visita']); ?></td>
                                <td class="px-4 py-3 text-left"><?php echo ($limpieza['Nombre_paciente']) . ' ' . ($limpieza['Apellido_paciente']); ?></td>
                                <td class="px-4 py-3 text-left telefono"><?php echo ($limpieza['telefono']); ?></td>
                                <td class="px-4 py-3 text-left"><?php echo ($limpieza['Siguiente_visita']); ?></td>
                                <td class="px-4 py-3 text-center" style="border-top-right-radius: 50px; border-bottom-right-radius: 50px;">
                                        <!-- Botón que abre el modal -->
                                    <!-- <button id="edit-limpieza-btn" class="bg-transparent border-0 cursor-pointer">
                                        <i class='bx bx-edit text-lg mx-2'></i>
                                    </button> -->
                                    <!-- Botón para justificante -->
                                    <button class="bg-transparent border-0 cursor-pointer"onclick="eliminarLimpieza(<?php echo ($limpieza['id_limpieza']); ?>)">
                                    <i class='bx bx-trash  text-lg mx-2' style='color:#3c3c3c'></i>
                                    </button>
                                </td>
                            </tr>
                        </div>
                        <?php
                            }
                        } else {
                        ?>
                          <tr>
                              <td colspan="4" class="text-center">No hay limpiezas registradas.</td>
                          </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    include 'Modales/AgregarLimpieza.php';
    include 'Modales/EditarLimpieza.php';
    ?>        
</body>
</html>
<script>
    function eliminarLimpieza(id_limpieza) {
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
                // Llamada AJAX para eliminar el doctor
                $.ajax({
                    url: 'Solicitudes/EliminarLimpieza.php', // URL corregida
                    method: 'POST',
                    data: { id_limpieza: id_limpieza },
                    success: function(response) {
                        Swal.fire(
                            "Eliminado",
                            response,
                            "success"
                        ).then(() => {
                            location.reload();
                        });
                    },
                    error: function(xhr, status, error) {
                        Swal.fire(
                            "Error",
                            "Hubo un problema al eliminar la limpieza.",
                            "error"
                        );
                        console.error(error);
                    }
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire(
                    "Cancelado",
                    "La limpieza está seguro.",
                    "error"
                );
            }
        });
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Seleccionar todas las celdas que contienen fechas (ajusta la clase o selector según tu tabla)
    const fechaElements = document.querySelectorAll('td:first-child');

    // Función para formatear una fecha
    function formatDate(fecha) {
        const opciones = { day: '2-digit', month: 'long', year: 'numeric' }; // Opciones de formato
        const nuevaFecha = new Date(fecha); // Convertir texto en objeto Date
        return nuevaFecha.toLocaleDateString('es-ES', opciones); // Formatear en español
    }

    // Iterar sobre los elementos y transformar el texto
    fechaElements.forEach((element) => {
        const fechaOriginal = element.textContent.trim(); // Obtener el texto de la celda
        if (fechaOriginal) {
            const fechaFormateada = formatDate(fechaOriginal); // Formatear la fecha
            element.textContent = fechaFormateada; // Actualizar el contenido de la celda
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Mapeo de meses en español
    const mesesEspanol = [
        "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
        "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
    ];

    // Selecciona los elementos que contienen fechas (ajusta el selector según tu HTML)
    const fechaElements = document.querySelectorAll('td');

    // Función para convertir la fecha
    function convertirMes(fecha) {
        const nuevaFecha = new Date(fecha); // Convertir texto en objeto Date
        const mes = nuevaFecha.getMonth(); // Obtener mes (0-11)
        const anio = nuevaFecha.getFullYear(); // Obtener año

        // Devolver el formato deseado
        return `${mesesEspanol[mes]} del ${anio}`;
    }

    // Iterar sobre los elementos y transformar el texto si es una fecha válida
    fechaElements.forEach((element) => {
        const fechaOriginal = element.textContent.trim(); // Obtener el texto de la celda
        if (!isNaN(Date.parse(fechaOriginal))) { // Verificar si el texto es una fecha válida
            const fechaFormateada = convertirMes(fechaOriginal); // Formatear la fecha
            element.textContent = fechaFormateada; // Actualizar el contenido de la celda
        }
    });
});

// Función para formatear números
function formatearTelefono(numero) {
    // Elimina cualquier carácter no numérico
    const limpio = numero.replace(/\D/g, '');
    // Aplica el formato 000-000-00-00
    return limpio.replace(/(\d{3})(\d{3})(\d{2})(\d{2})/, '$1-$2-$3-$4');
}

// Selecciona todas las celdas con clase 'telefono'
const telefonos = document.querySelectorAll('.telefono');

// Itera sobre cada celda y formatea el contenido
telefonos.forEach(celda => {
    const numeroOriginal = celda.textContent.trim();
    celda.textContent = formatearTelefono(numeroOriginal);
});


</script>