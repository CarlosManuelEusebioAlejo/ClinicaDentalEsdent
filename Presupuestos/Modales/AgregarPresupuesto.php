<!------------------------------------------------------------- Modal Agregar Presupuesto -------------------------------------------------------------------->
<div id="presupuesto-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">
    <!-- Botón X para cerrar el modal -->
    <button id="close-presupuesto-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>

    <!-- Título principal -->
    <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">
        Agregar Presupuesto
    </h1>

    <form id="presupuesto-form" action="Solicitudes/AgregarPresupuesto.php" method="POST">
      <!-- Sección de Datos de Presupuesto -->
      <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
          <div class="grid grid-cols-2 gap-6">
              <!-- Input: Búsqueda de Paciente -->
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">BUSCAR PACIENTE</label>
                  <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                        type="text" 
                        placeholder="Buscar paciente..."
                        id="paciente-buscar">
                  <input type="hidden" id="idPaciente" name="idPaciente">
                  <input type="hidden" id="Nombre_paciente" name="Nombre_paciente">
                  <input type="hidden" id="Apellido_paciente" name="Apellido_paciente">
                  <ul id="resultado-busqueda" class="absolute bg-white shadow-md rounded-md mt-1 w-full z-10"></ul>
              </div>

              <!-- Input: Tratamiento -->
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
                  <textarea name="Tratamiento" 
                            class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" 
                            placeholder="Tratamiento"></textarea>
              </div>

              <!-- Input: Observaciones -->
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">OBSERVACIONES</label>
                  <textarea name="Observaciones" 
                            class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" 
                            placeholder="Observaciones"></textarea>
              </div>

              <!-- Input: Costo -->
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">COSTO</label>
                  <input name="Costo" 
                         id="inputCosto" 
                         class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                         type="text" 
                         placeholder="$ Costo">
              </div>

              <!-- Input: Fecha -->
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">FECHA</label>
                  <input name="Fecha" 
                        id="startDateAdd" 
                        class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                        type="date" 
                        placeholder="Fecha de la próxima cita">
              </div>

              <!-- Input: Válido hasta -->
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">VÁLIDO HASTA</label>
                  <input name="Valido_hasta" 
                         id="endDateAdd" 
                         class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                         type="date" 
                         placeholder="Válido hasta">
              </div>
          </div>
      </div>

      <div class="flex justify-end mt-6">
          <button id="close-presupuesto-modal-btn" type="button" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
              Cerrar
          </button>
          <button id="submit-presupuesto" type="submit" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
              Guardar
          </button>
      </div>
    </form>
  </div>
</div>

<!-- Agrega SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('presupuesto-form').addEventListener('submit', function (event) {
    event.preventDefault(); // Detener el envío inmediato del formulario

    // Mostrar alerta de SweetAlert
    Swal.fire({
        title: 'Registrando Presupuesto',
        text: 'Por favor, espera...',
        icon: 'info',
        showConfirmButton: false,
        timer: 2500 // Duración de la alerta en milisegundos
    });

    // Permitir que el formulario se envíe después de mostrar la alerta
    setTimeout(() => {
        event.target.submit();
    }, 3000); // Coincidir con la duración de la alerta
});
</script>

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
                        resultsList.innerHTML = '<li>No se encontraron resultados</li>';
                    }
                });
        } else {
            resultsList.innerHTML = '';
        }
    });
});
</script>

  
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addPresupuestoBtn = document.getElementById('add-presupuesto-btn');
        const closePresupuestoModalBtn = document.getElementById('close-presupuesto-modal-btn');
        const closePresupuestoModalX = document.getElementById('close-presupuesto-modal-x');
        const presupuestoModal = document.getElementById('presupuesto-modal');

        // Mostrar el modal al hacer clic en "AGREGAR PRESUPUESTO"
        addPresupuestoBtn?.addEventListener('click', function () {
            presupuestoModal.classList.remove('hidden');
        });

        // Cerrar el modal al hacer clic en "Cerrar"
        closePresupuestoModalBtn?.addEventListener('click', function () {
            presupuestoModal.classList.add('hidden');
        });

        // Cerrar el modal al hacer clic en la "X"
        closePresupuestoModalX?.addEventListener('click', function () {
            presupuestoModal.classList.add('hidden');
        });
    });
</script>
