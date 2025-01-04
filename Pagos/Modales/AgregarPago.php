
<!------------------------------------------------------------- Modal Agregar Presupuesto -------------------------------------------------------------------->
<div id="presupuesto-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">
    <!-- Botón X para cerrar el modal -->
    <button id="close-presupuesto-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
     
    <!-- Título principal -->
    <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">
      Agregar Pago
    </h1>

    <!-- Sección de Datos de Presupuesto -->
    <form action="Solicitudes/AgregarPago.php" method="POST" id="presupuestoForm" class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
      <div class="grid grid-cols-2 gap-6">
        <!-- Input: Búsqueda de Paciente -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">BUSCAR PACIENTE</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                type="text" 
                placeholder="Buscar paciente..."
                id="paciente-buscar"
                name="buscar_paciente">
          <input type="hidden" id="idPaciente" name="idPaciente">
          <input type="hidden" id="Nombre_paciente" name="Nombre_paciente">
          <input type="hidden" id="Apellido_paciente" name="Apellido_paciente">
          <ul id="resultado-busqueda" class="absolute bg-white shadow-md rounded-md mt-1 w-full z-10"></ul>
        </div>

        <!-- Input: Tratamiento -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
          <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" 
                    placeholder="Tratamiento"
                    name="Tratamiento"
                    id="Tratamiento"></textarea>
        </div>

        <!-- Input: Costo -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">COSTO</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                type="number" 
                placeholder="Costo"
                name="Costo"
                id="Costo">
        </div>

        <!-- Input: Abono -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">ABONO</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                type="number" 
                placeholder="Abono"
                name="Abono"
                id="Abono">
        </div>

        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">DOCTOR</label>
          <!-- Campo oculto para almacenar el id_doctor -->
          <input type="hidden" id="id_doctor" name="id_doctor" value="">
          <!-- Campo oculto adicional para almacenar el Nombre_doctor -->
          <input type="hidden" id="Nombre_doctor_hidden" name="Nombre_doctor" value="">
          <!-- Select para mostrar los nombres de los doctores -->
          <select class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" id="SeleccioneDoctor">
            <!-- Opciones cargadas dinámicamente -->
          </select>
        </div>

        <!-- Select: Tipo pago -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">TIPO</label>
          <select id="tipoSelectAdd" name="Tipo_pago" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
            <option disabled selected>Selecciona un tipo de pago</option>
            <option value="efectivo">Efectivo</option>
            <option value="transferencia">Transferencia</option>
            <option value="billpocket">Billpocket</option>
            <option value="tarjeta">Tarjeta</option>
          </select>
        </div>

        <!-- Select: Factura -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">FACTURA</label>
          <select id="facturaSelectAdd" name="Factura" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
            <option disabled selected>Desea factura</option>
            <option value="si">Sí</option>
            <option value="no">No</option>
          </select>
        </div>

        <!-- Input: Fecha de registro -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">FECHA</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                type="date"
                name="fecha_Pago"
                id="fecha_Pago">
        </div>
      </div>

      <div class="flex justify-end mt-6">
        <!-- Botón de cerrar -->
        <button type="button" id="close-presupuesto-modal-btn" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
          Cerrar
        </button>
        <button type="submit" id="submit-presupuesto" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
          Guardar
        </button>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
// Función para mostrar Sweet Alert
function mostrarMensajeExito() {
    Swal.fire({
        icon: 'success',
        title: '¡Pago Registrado!',
        text: 'El pago se ha registrado correctamente.',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#B4221B'  // Color del botón "Aceptar"
    }).then((result) => {
        if (result.isConfirmed) {
            // Recargar la página después de confirmar
            location.reload(); // Recargar la página
        }
    });
}

// Evento para manejar el formulario de registro de pago
document.getElementById('presupuestoForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Evitar el envío directo del formulario

    // Simulación de proceso de registro, reemplazar con la lógica real
    const formData = new FormData(this);
    fetch('Solicitudes/AgregarPago.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            mostrarMensajeExito(); // Mostrar el Sweet Alert de éxito
        } else {
            // Manejar errores, mostrar alertas de errores o mensajes adecuados
        }
    });
});


</script>

<!--------------------------------- JAVASCRIPT PARA MOSTRAR LOS PACIENTES REGISTRADOS ----------------------------------------->
<script>
  document.addEventListener('DOMContentLoaded', function () {
      const searchInput = document.getElementById('paciente-buscar');
      const resultsList = document.getElementById('resultado-busqueda');
      const nombrePacienteInput = document.getElementById('Nombre_paciente');
      const apellidoPacienteInput = document.getElementById('Apellido_paciente');

      searchInput?.addEventListener('input', function () {
          const query = searchInput.value.trim();

          if (query.length > 0) {
              fetch('Solicitudes/BuscarPaciente.php?q=' + query)
                  .then(response => response.json())
                  .then(data => {
                      resultsList.innerHTML = '';
                      if (data.length > 0) {
                          data.forEach(paciente => {
                              const li = document.createElement('li');
                              li.textContent = `${paciente.Nombre_paciente} ${paciente.Apellido_paciente}`;
                              li.dataset.id = paciente.idPaciente;
                              li.dataset.nombre = paciente.Nombre_paciente;
                              li.dataset.apellido = paciente.Apellido_paciente;

                              li.addEventListener('click', function () {
                                  document.getElementById('idPaciente').value = this.dataset.id;
                                  nombrePacienteInput.value = this.dataset.nombre;
                                  apellidoPacienteInput.value = this.dataset.apellido;
                                  searchInput.value = `${this.dataset.nombre} ${this.dataset.apellido}`;
                                  resultsList.innerHTML = '';
                              });

                              resultsList.appendChild(li);
                          });
                      } else {
                          resultsList.innerHTML = '<li>No se encontro el paciente</li>';
                      }
                  });
          } else {
              resultsList.innerHTML = '';
          }
      });
  });
</script>

<!--------------------------------- JAVASCRIPT PARA MOSTRAR LOS DOCTORES REGISTRADOS ----------------------------------------->
<script>
  document.addEventListener('DOMContentLoaded', () => {
      const doctorSelect = document.getElementById('SeleccioneDoctor');
      const hiddenIdInput = document.getElementById('id_doctor');
      const hiddenNameInput = document.getElementById('Nombre_doctor_hidden');

      // Realiza una solicitud al PHP para obtener los doctores
      fetch('Solicitudes/BuscarDoctor.php')
          .then(response => {
              if (!response.ok) {
                  throw new Error('Error al cargar los doctores');
              }
              return response.json(); // Asegúrate de que el PHP devuelva JSON
          })
          .then(data => {
              // Llena el <select> con los nombres de los doctores
              doctorSelect.innerHTML = '<option value="" disabled selected>Seleccione un doctor</option>';
              data.forEach(doctor => {
                  const option = document.createElement('option');
                  option.textContent = doctor.nombre; // Muestra el nombre del doctor
                  option.value = doctor.id_doctor;    // Usa el id_doctor como valor
                  option.dataset.nombreDoctor = doctor.nombre; // Agrega el nombre como atributo personalizado
                  doctorSelect.appendChild(option);
              });

              // Asigna id_doctor y nombre al seleccionar un doctor
              doctorSelect.addEventListener('change', () => {
                  const selectedOption = doctorSelect.options[doctorSelect.selectedIndex];
                  hiddenIdInput.value = selectedOption.value; // Actualiza id_doctor
                  hiddenNameInput.value = selectedOption.dataset.nombreDoctor; // Actualiza Nombre_doctor
              });
          })
          .catch(error => {
              console.error('Hubo un problema al cargar los doctores:', error);
              doctorSelect.innerHTML = '<option value="" disabled>Error al cargar doctores</option>';
          });
  });
</script>

<!--------------------------------- JAVASCRIPT PARA MOSTRAR ABRIR O CERRAR LOS MODALES ----------------------------------------->
<script>
  const addPresupuestoBtn = document.getElementById('add-presupuesto-btn');
  const closePresupuestoModalBtn = document.getElementById('close-presupuesto-modal-btn');
  const presupuestoModal = document.getElementById('presupuesto-modal');
  const closePresupuestoModalX = document.getElementById('close-presupuesto-modal-x');

  // Mostrar el modal al hacer clic en "AGREGAR PRESUPUESTO"
  addPresupuestoBtn?.addEventListener('click', function() {
    presupuestoModal.classList.remove('hidden');
  });

  // Cerrar el modal al hacer clic en "Cerrar"
  closePresupuestoModalBtn.addEventListener('click', function() {
    presupuestoModal.classList.add('hidden');
  });

   // Cerrar el modal al hacer clic en la "X"
   closePresupuestoModalX.addEventListener('click', function() {
      presupuestoModal.classList.add('hidden');
   });
</script>

