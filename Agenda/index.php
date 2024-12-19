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
        z-index: 10; /* Un valor alto para asegurarte de que esté al frente */
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
  <!-- Título y encabezado -->
  <div class="flex justify-between items-center mt-4 mx-8">
    <div>
      <h1 class="text-4xl font-semibold">AGENDA</h1>
      <p id="citas-total" class="text-lg text-gray-500 mt-1">Cargando...</p>
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

<!-- Modales -->
<?php
  include 'Modales/AgregarCita.php';
  include 'Modales/VerCita.php';
  include 'Modales/EditarCita.php';
?>

<script type="module">
  import { Calendar } from '@fullcalendar/core';
  import dayGridPlugin from '@fullcalendar/daygrid';
  import timeGridPlugin from '@fullcalendar/timegrid';
  import esLocale from '@fullcalendar/core/locales/es';

  document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');
    const citasTotalEl = document.getElementById('citas-total');
    const modalEl = document.getElementById('cita-modal');
    const detallesEl = document.getElementById('cita-detalles');
    const cerrarModalBtn = document.getElementById('cerrar-modal');
    const editarModalBtn = document.getElementById('editar-modal-btn');



    // Configuración del calendario
    const calendar = new Calendar(calendarEl, {
      plugins: [dayGridPlugin, timeGridPlugin],
      locale: esLocale,
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek',
      },
      initialView: 'timeGridWeek',
      slotMinTime: '08:00:00',
      slotMaxTime: '21:00:00',

      // Cargar eventos dinámicamente
      events: async function (fetchInfo, successCallback, failureCallback) {
        try {
          const response = await fetch('Solicitudes/VerCita.php');
          if (!response.ok) throw new Error('Error al cargar las citas');
          const citas = await response.json();
          citasTotalEl.textContent = `${citas.length} Citas`;
          successCallback(citas);
        } catch (error) {
          console.error('Error al cargar citas:', error);
          citasTotalEl.textContent = 'Error al cargar citas';
          failureCallback(error);
        }
      },

      // Manejo de clic en eventos
      eventClick: function (info) {
        info.jsEvent.preventDefault();
        mostrarDetallesCita(info.event);
      },
    });

    // Renderizar calendario
    calendar.render();

 // Función para mostrar los detalles de una cita en el modal
function mostrarDetallesCita(event) {
  const { start, end, extendedProps } = event;
  const idCita = extendedProps.id_cita;  // Obtener el id_cita desde extendedProps

  // Rellenar el modal con los datos del evento
  detallesEl.innerHTML = `
    <div class="modal-content p-8 bg-white rounded-lg shadow-2xl max-w-3xl mx-auto">


      <!-- Detalles de la Cita -->
      <div class="space-y-6">
        ${crearCampoModal('Paciente', extendedProps.Paciente || 'No especificado', 'bx bx-user')}
        ${crearCampoModal('Unidad', extendedProps.Unidad || 'No especificada', 'bx bx-building')}
        ${crearCampoModalTextarea('Motivo de la cita', extendedProps.Motivo || 'No especificado', 'bx bx-message')}
        ${crearCampoModal('Doctor', extendedProps.Doctor || 'No especificado', 'bx bx-user-md')}
        ${crearCampoModal('Hora de inicio', start.toLocaleString(), 'bx bx-time')}
        ${crearCampoModal('Hora de finalización', end ? end.toLocaleString() : 'No especificado', 'bx bx-time')}
      </div>

      <!-- Campo oculto para ID de cita -->
      <input type="hidden" id="id_cita" value="${idCita}">


    </div>
  `;

  // Mostrar el modal
  editarModalBtn.setAttribute('data-id_cita', idCita);
  modalEl.classList.remove('hidden');
}

// Función para crear el HTML para los campos del modal
function crearCampoModal(nombre, valor, icono) {
  return `
    <div class="relative mb-6">
      <label class="block text-sm font-medium text-gray-700 flex items-center">
        <i class="${icono} text-xl text-primary mr-3"></i> ${nombre}
      </label>
      <p class="text-sm text-gray-900">${valor}</p>
    </div>
  `;
}

// Función para crear un campo de texto largo (textarea) para el modal
function crearCampoModalTextarea(nombre, valor, icono) {
  return `
    <div class="relative mb-6">
      <label class="block text-sm font-medium text-gray-700 flex items-center">
        <i class="${icono} text-xl text-primary mr-3"></i> ${nombre}
      </label>
      <textarea class="w-full bg-[#E6ECF8] text-sm p-4 rounded-md border border-gray-300 shadow-lg" rows="4" disabled>${valor}</textarea>
    </div>
  `;
}

    // Manejo del botón de cerrar modal de detalles
    cerrarModalBtn.addEventListener('click', () => {
      modalEl.classList.add('hidden');
    });

    editarModalBtn.addEventListener('click', async () => {
  const idCita = editarModalBtn.getAttribute('data-id_cita');  // Obtener id_cita
  if (idCita) {
    try {
      const response = await fetch(`Solicitudes/ObtenerCita.php?id_cita=${idCita}`);
      if (!response.ok) throw new Error('Error al obtener los datos de la cita');
      const cita = await response.json();

      // Precargar los datos en el formulario de editar
      document.getElementById('editar-id-cita').value = cita.id_cita; // Añadir id_cita al campo oculto
      document.getElementById('editar-paciente').value = cita.Paciente;
      document.getElementById('editar-unidad').value = cita.Unidad;
      document.getElementById('editar-motivo').value = cita.Motivo;
      document.getElementById('editar-inicio').value = cita.FechaCita;
      document.getElementById('editar-inicio-time').value = cita.HoraInicio;
      document.getElementById('editar-fin').value = cita.HoraFin;

      // Cargar los doctores y preseleccionar el doctor correspondiente
      await cargarDoctores(cita.id_doctor); // Cambiado a cita.id_doctor

      // Mostrar el modal de editar
      document.getElementById('editar-modal').classList.remove('hidden');
      document.getElementById('cita-modal').classList.add('hidden'); // Cerrar el modal de detalles

    } catch (error) {
      console.error('Error al cargar los detalles de la cita:', error);
    }
  }
});

// Función para cargar los doctores y preseleccionar el doctor correcto
async function cargarDoctores(idDoctorSeleccionado) {
  try {
    const response = await fetch('Solicitudes/obtener_doctor.php');
    const doctores = await response.json();
    const selectDoctor = document.getElementById('editar-doctor');

    // Limpiar el select antes de agregar opciones
    selectDoctor.innerHTML = '';

    // Agregar una opción predeterminada
    const optionDefault = document.createElement('option');
    optionDefault.textContent = 'Selecciona un doctor';
    selectDoctor.appendChild(optionDefault);

    // Agregar los doctores al select
    doctores.forEach(doctor => {
      const option = document.createElement('option');
      option.value = doctor.id_doctor;
      option.textContent = doctor.Nombre_doctor;
      
      // Si el id_doctor coincide con el seleccionado, marcarlo como seleccionado
      if (doctor.id_doctor == idDoctorSeleccionado) {
        option.selected = true;
      }
      selectDoctor.appendChild(option);
    });
  } catch (error) {
    console.error('Error cargando doctores:', error);
  }
}


    // Manejo de cerrar modal de edición
    document.getElementById('cancelar-editar').addEventListener('click', () => {
      document.getElementById('editar-modal').classList.add('hidden');
      document.getElementById('cita-modal').classList.remove('hidden');  // Volver a mostrar el modal de detalles
    });




  });




</script>
