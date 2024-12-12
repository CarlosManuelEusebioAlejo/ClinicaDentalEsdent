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
    <style>
      #cita-modal {
        z-index: 9999; /* Un valor alto para asegurarte de que esté al frente */
      }

      #calendar {
        z-index: 1; /* Asegúrate de que el calendario tenga un índice menor */
      }

    </style>
    <script type='importmap'>
        {
          "imports": {
            "@fullcalendar/core": "https://cdn.skypack.dev/@fullcalendar/core@6.1.15",
            "@fullcalendar/daygrid": "https://cdn.skypack.dev/@fullcalendar/daygrid@6.1.15",
            "@fullcalendar/timegrid": "https://cdn.skypack.dev/@fullcalendar/timegrid@6.1.15",
            "@fullcalendar/core/locales/es": "https://cdn.skypack.dev/@fullcalendar/core/locales/es"
          }
        }
    </script>
  </head>
  <body class="bg-#EFF1F9" style="background-color: #e8ecff;color: #3C3C3C">
    
    <!-- Contenedor principal -->
    <div class="flex h-screen">
      <!-- Barra lateral -->
      <div class="h-screen w-64 p-6 flex flex-col justify-between shadow-lg text-gray-800 rounded-r-3xl sidebar" style="background-color: #f2f2ff;">
        <!-- Top Section (Logo y Menú) -->
        <div>
          <!-- Logo -->
          <div class="flex flex-col items-center mb-9">
            <span class="text-sm font-semibold">CLINICA DENTAL</span>
            <img src="/../ClinicaDentalEsdent/Configuraciones/img/logo.png" alt="" class="w-24 h-24 mb-2" />
          </div>

          <div class="flex justify-center mb-6">
            <div class="bg-[#E9EDFF] w-24 h-24 flex flex-col items-center justify-center rounded-lg shadow-lg">
              <i class='bx bxs-book-bookmark text-2xl'></i>
              <span class="text-sm font-semibold mt-2">AGENDA</span>
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
            <a href="" class="flex items-center p-2 rounded-full bg-white shadow-inner" style="box-shadow: inset 0px 3px 6px rgba(88, 132, 209, 0.391); background-color: #e8ecff24;">
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
        <div class="flex justify-between items-center mt-4 mx-8">
          <div>
            <h1 class="text-4xl font-semibold">AGENDA</h1>
            <p class="text-lg text-gray-500 mt-1">3 Citas</p>
          </div>
          <button id="add-presupuesto-btn" class="text-white px-6 py-2 rounded-full shadow-lg" style="background-color: #B4221B;">
            + AGREGAR CITA
          </button>
        </div>

        <!-- Calendario -->
        <div class="flex flex-1 justify-center mt-4 items-start">
          <div class="bg-white shadow-lg rounded-lg p-4 w-full max-w-5xl" style="background-color: #f8f8ff; height: 670px;">
            <div id="calendar" class="h-full"></div>
          </div>
        </div>
      </div>
      <!-- Modal para agregar cita -->
      <?php
        include 'Modales/AgregarCita.php';
      ?>
<script type="module">
  import { Calendar } from '@fullcalendar/core';
  import dayGridPlugin from '@fullcalendar/daygrid';
  import timeGridPlugin from '@fullcalendar/timegrid';
  import esLocale from '@fullcalendar/core/locales/es';

  document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    const modalEl = document.getElementById('cita-modal');
    const detallesEl = document.getElementById('cita-detalles');
    const cerrarModalBtn = document.getElementById('cerrar-modal');
  
    const calendar = new Calendar(calendarEl, {
      plugins: [dayGridPlugin, timeGridPlugin],
      locale: esLocale,
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      initialView: 'timeGridWeek',
      slotMinTime: '08:00:00',
      slotMaxTime: '21:00:00',
      events: async function(fetchInfo, successCallback, failureCallback) {
        try {
          const response = await fetch('Solicitudes/VerCita.php');
          const citas = await response.json();
          successCallback(citas);
        } catch (error) {
          console.error('Error al cargar citas:', error);
          failureCallback(error);
        }
      },
      eventRender: function(info) {
        // Añadir información adicional en el título de los eventos
        const event = info.event;
        const extendedProps = event.extendedProps;

        // Mostrar la unidad y la fecha en el tooltip
        const unidad = extendedProps.Unidad;
        const fechaInicio = event.start.toLocaleString();
        const fechaFin = event.end ? event.end.toLocaleString() : 'No especificada';

        // Esto es opcional: establecer un título más completo para el evento
        event.setProp('title', `${unidad} (${fechaInicio} - ${fechaFin})`);
        
        // También puedes agregar un "tooltip" o una descripción al evento
        info.el.setAttribute('title', `Unidad: ${unidad}\nFecha de inicio: ${fechaInicio}\nFecha de fin: ${fechaFin}`);
      },
      eventClick: function(info) {
        // Evitar que el navegador siga el enlace por defecto
        info.jsEvent.preventDefault();
      
        // Mostrar el modal
        modalEl.classList.remove('hidden');
      
        // Cargar los detalles de la cita en el modal
        const { start, end, extendedProps } = info.event;

        // Mostrar los detalles de la cita en el modal
        detallesEl.innerHTML = `
          <div class="p-6 rounded-sm shadow-lg mb-10" style="background-color: #f5f7ff;">
            <div class="relative mb-4">
              <span class="text-gray-700 font-semibold" id="placeholder-text">PACIENTE</span>
              <input 
                class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black font-medium" 
                placeholder="${extendedProps.Paciente || 'No especificado'}">
            </div>
            <div class="relative mb-4">
              <span class="text-gray-700 font-semibold" id="placeholder-text">UNIDAD</span>
              <input 
                class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black font-medium" 
                placeholder="${extendedProps.Unidad || 'No especificada'}">
            </div>
            <div class="relative mb-4">
              <span class="text-gray-700 font-semibold" id="placeholder-text">MOTIVO DE LA CITA</span>
              <textarea 
                class="pl-8 py-2 text-sm bg-[#E6ECF8] w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black font-medium" 
                placeholder="Motivo de la Cita" style="resize: none;"
              >
                ${extendedProps.Motivo || 'No especificado'}
              </textarea>
            </div>

            <div class="relative mb-4">
              <span class="text-gray-700 font-semibold" id="placeholder-text">DOCTOR</span>
              <input 
                class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black font-medium" 
                placeholder="${extendedProps.Doctor || 'No especificado'}">
            </div>
            <div class="relative mb-4">
              <span class="text-gray-700 font-semibold" id="placeholder-text">HORA INICIO</span>
              <input 
                class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black font-medium" 
                placeholder="${start.toLocaleString()}">
            </div>
            <div class="relative mb-4">
              <span class="text-gray-700 font-semibold" id="placeholder-text">HORA FINALIZACIÓN</span>
              <input 
                class="pl-8 py-2 text-sm bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-black font-medium" 
                placeholder="${end ? end.toLocaleString() : 'No especificado'}">
            </div>
          </div>
        `;
      }
    });
  
    // Renderizar el calendario
    calendar.render();
  
    // Cerrar el modal
    cerrarModalBtn.addEventListener('click', () => {
      modalEl.classList.add('hidden');
    });
  });
</script>

<?php
  include 'Modales/VerCita.php';
  include 'Modales/EditarCita.php';
?>
  </body>
</html>

          
        
       
