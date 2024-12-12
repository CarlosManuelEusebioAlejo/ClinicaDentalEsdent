<!------------------------------------------------------------- Modal Agregar Cita -------------------------------------------------------------------->
<div id="presupuesto-modal" class="fixed inset-0 flex z-50 items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">
    <!-- Botón X para cerrar el modal -->
    <button id="close-presupuesto-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
      
    <!-- Título principal -->
    <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">
      Agregar Cita
    </h1>

    <form id="Agenda" action="Solicitudes/AgregarCita.php" method="POST">
      <!-- Sección de Datos de Presupuesto -->
      <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
        <div class="grid grid-cols-2 gap-6">
          <!-- Input: Nombre del paciente -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">NOMBRE</label>
            <input type="hidden" id="idPaciente" name="idPaciente" value="">
            <input
              id="Nombre_paciente"
              class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
              type="text"
              placeholder="Ingrese el nombre del paciente"
              oninput="buscarPaciente()"
              name="Nombre_paciente"
            />
            <div
              id="listaPacientes"
              class="absolute bg-white shadow-lg rounded-md mt-1 w-full max-h-48 overflow-y-auto z-10 hidden"
            ></div>
          </div>
          <!-- Input: Observaciones -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">MOTIVO DE LA CITA</label>
            <textarea
              class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24"
              placeholder="Observaciones adicionales"
              name="Motivo_consulta"
            ></textarea>
          </div>      

          <!-- Input: Fecha -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">FECHA DE LA CITA</label>
            <input
              class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
              type="date"
              placeholder="Fecha de la cita"
              name="Fecha_cita"
            />
          </div>      

          <!-- Input: Hora de inicio -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">HORA DE INICIO</label>
            <input
              class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
              type="time"
              placeholder="Hora de la cita"
              name="Hora_inicio"
            />
          </div>      

          <!-- Input: Hora de finalización -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">HORA DE FINALIZACIÓN</label>
            <input
              class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
              type="time"
              placeholder="Hora de la cita"
              name="Hora_fin"
            />
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
          
          <!-- Select: Unidad -->
          <div class="relative col-span-2">
            <label class="text-xs text-[#3B3636]">UNIDAD</label>
            <select class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                    id="Unidad"
                    name="Unidad">
              <option disabled selected>Selecciona una unidad</option>
              <option value="1">Unidad 1</option>
              <option value="2">Unidad 2</option>
              <option value="3">Unidad 3</option>
            </select>
          </div>
        </div>
      </div>      

      <div class="flex justify-end mt-6">
        <!-- Botón de cerrar -->
        <button
          id="close-presupuesto-modal-btn"
          type="button"
          class="text-white px-4 py-2 rounded-full mr-2 shadow-inner"
          style="background-color: #B4221B;"
        >
          Cerrar
        </button>
        <!-- Botón de guardar -->
        <button
          id="submit-presupuesto"
          type="submit"
          class="text-white px-4 py-2 rounded-full shadow-md"
          style="background-color: #B4221B;"
        >
          Guardar
        </button>
      </div>
    </form>

  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('Agenda');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita el envío del formulario

        // Crear un objeto FormData para enviar los datos al servidor
        const formData = new FormData(form);

        // Enviar los datos a través de fetch
        fetch(form.action, {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'error') {
                // Mostrar alerta de error con el mensaje recibido
                Swal.fire({
                    title: "Error",
                    text: data.message,
                    icon: "error",
                    timer: 3000,
                    showConfirmButton: false
                });
            } else {
                // Mostrar alerta de éxito y redirigir
                Swal.fire({
                    title: "¡Buen trabajo!",
                    text: data.message,
                    icon: "success",
                    timer: 2000,
                    showConfirmButton: false
                }).then(() => {
                    // Redirigir a la página que se pasó desde PHP
                    window.location.href = data.redirectUrl;
                });
            }
        })
        .catch(error => {
            Swal.fire({
                title: "Error",
                text: "Ocurrió un error al procesar la solicitud.",
                icon: "error",
                timer: 3000,
                showConfirmButton: false
            });
            console.error('Error:', error);
        });
    });
});

</script>

<!--------------------------------- JAVASCRIPT PARA MOSTRAR LOS PACIENTES REGISTRADOS ----------------------------------------->
  <script>
function buscarPaciente() {
    const nombre = document.getElementById('Nombre_paciente').value.trim();
    const listaPacientes = document.getElementById('listaPacientes');

    if (nombre.length > 0) {
        fetch(`Solicitudes/BuscarPaciente.php?Nombre_paciente=${encodeURIComponent(nombre)}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`Error al realizar la solicitud: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                listaPacientes.innerHTML = ''; // Limpia la lista
                listaPacientes.classList.remove('hidden'); // Muestra la lista

                if (data.length === 0) {
                    // Si no hay resultados
                    const noResults = document.createElement('div');
                    noResults.className = 'list-group-item list-group-item-action text-gray-500';
                    noResults.textContent = 'No se encontraron pacientes';
                    listaPacientes.appendChild(noResults);
                } else {
                    // Si hay resultados
                    data.forEach(paciente => {
                        const item = document.createElement('div');
                        item.className = 'list-group-item list-group-item-action px-4 py-2 cursor-pointer hover:bg-blue-100';
                        item.textContent = paciente.nombre_completo; // Usa la clave correcta
                        item.onclick = () => seleccionarPaciente(paciente);
                        listaPacientes.appendChild(item);
                    });
                }
            })
            .catch(error => {
                console.error('Error al buscar pacientes:', error);
                listaPacientes.innerHTML = '<div class="text-red-500">Error al cargar los pacientes</div>';
                listaPacientes.classList.remove('hidden');
            });
    } else {
        // Si el campo está vacío, limpia y oculta la lista
        listaPacientes.innerHTML = '';
        listaPacientes.classList.add('hidden');
    }
}

function seleccionarPaciente(paciente) {
    // Completa el campo de texto con el nombre completo del paciente
    document.getElementById('Nombre_paciente').value = paciente.nombre_completo; // Usa la clave correcta
    document.getElementById('idPaciente').value = paciente.idPaciente; // Usa la clave correcta

    // Limpia y oculta la lista de sugerencias
    const listaPacientes = document.getElementById('listaPacientes');
    listaPacientes.innerHTML = '';
    listaPacientes.classList.add('hidden');
}

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


<!--------------------------------- JAVASCRIPT PARA ABRIR Y CERRAR EL MODAL ----------------------------------------->
  <script>
    const addPresupuestoBtn = document.getElementById('add-presupuesto-btn');
    const closePresupuestoModalBtn = document.getElementById('close-presupuesto-modal-btn');
    const presupuestoModal = document.getElementById('presupuesto-modal');
    const closePresupuestoModalX = document.getElementById('close-presupuesto-modal-x');
  
    // Mostrar el modal al hacer clic en "AGREGAR PRESUPUESTO"
    addPresupuestoBtn.addEventListener('click', function() {
      presupuestoModal.classList.remove('hidden');
    });
  
    // Cerrar el modal al hacer clic en "Cerrar"
    closePresupuestoModalX.addEventListener('click', function() {
      presupuestoModal.classList.add('hidden');
    });

     // Cerrar el modal al hacer clic en la "X"
     closePresupuestoModalX.addEventListener('click', function() {
          modal.classList.add('hidden');
        });
  </script>