<!------------------------------------------------------------- Modal Agregar Tratamiento -------------------------------------------------------------------->
<div id="treatment-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">
    <!-- Botón X para cerrar el modal -->
    <button id="close-treatment-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>

    <!-- Título principal -->
    <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">
        Agregar Tratamiento
    </h1>

    <!-- Sección de Datos del Tratamiento -->
    <form id="addTreatmentForm">
        <input type="hidden" name="idPaciente" value="<?= $_SESSION['idPaciente'] ?>">
        <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
            <div class="grid grid-cols-2 gap-6">
                <!-- Input: Tratamiento -->
                <div class="relative col-span-2">
                    <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
                    <textarea name="Tratamiento" required class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Descripción del Tratamiento"></textarea>
                </div>

                <!-- Input: Observaciones -->
                <div class="relative col-span-2">
                    <label class="text-xs text-[#3B3636]">OBSERVACIONES</label>
                    <textarea name="Observaciones" required class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Observaciones"></textarea>
                </div>

                <!-- Input: Costo -->
                <div class="relative col-span-2">
                    <label class="text-xs text-[#3B3636]">COSTO</label>
                    <input name="Costo" type="number" required min="0" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" placeholder="Costo en $">
                </div>

                <!-- Select: Doctor -->
                <div class="relative col-span-2">
                    <label class="text-xs text-[#3B3636]">DOCTOR</label>
                    <select name="doctor" required class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Selecciona un doctor</option>
                        <?php
                        $conn = new mysqli("localhost", "root", "", "clinicadentalesdent");
                        if ($conn->connect_error) die("Conexión fallida: " . $conn->connect_error);
                        $result = $conn->query("SELECT id_doctor, Nombre_doctor FROM doctores");
                        while ($row = $result->fetch_assoc()) {
                            $value = "{$row['id_doctor']},{$row['Nombre_doctor']}";
                            echo "<option value='{$value}'>{$row['Nombre_doctor']}</option>";
                        }
                        $conn->close();
                        ?>
                    </select>
                </div>

                <!-- Input: Fecha -->
                <div class="relative col-span-2">
                    <label class="text-xs text-[#3B3636]">FECHA</label>
                    <input name="Fecha" type="date" required class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                </div>
            </div>
        </div>

        <!-- Botones para cerrar y agregar -->
        <div class="flex justify-end mt-6">
            <button type="button" class="text-white py-2 px-4 mr-2 rounded-full" onclick="closeModal()" style="background-color: #B4221B;">CERRAR</button>
            <button type="submit" id="submitTreatmentBtn" class="text-white py-2 px-4 rounded-full" style="background-color: #B4221B;">AGREGAR</button>
        </div>
    </form>
  </div>
</div>

<script>
  const modal = document.getElementById('treatment-modal');
  const closeTreatmentModalX = document.getElementById('close-treatment-modal-x');

  function closeModal() {
    modal.classList.add('hidden'); 
  }

  function openModal() {
    modal.classList.remove('hidden');
  }

  // Botón para abrir el modal
  document.getElementById('add-treatment-btn')?.addEventListener('click', openModal);

  closeTreatmentModalX?.addEventListener('click', closeModal);

  // Manejar el envío del formulario
  document.getElementById('addTreatmentForm').addEventListener('submit', function(event) {
    // Prevenir que el formulario se envíe de forma tradicional
    event.preventDefault(); // Esto previene que los valores se pongan en la URL

    // Crear un objeto XMLHttpRequest para hacer la solicitud AJAX
    const xhr = new XMLHttpRequest();
    const formData = new FormData(this); // Recoger los datos del formulario

    xhr.open('POST', '/ClinicaDentalEsdent/Historial/Solicitudes/AgregarHistorial.php', true);

    xhr.onload = function() {
      if (xhr.status === 200) {
        const response = JSON.parse(xhr.responseText);

        // Verifica si el tratamiento se agregó correctamente
        if (response.success) {
          // Alerta de éxito con SweetAlert2, que se cierra automáticamente después de 2 segundos
          Swal.fire({
            title: '¡Éxito!',
            text: 'Tratamiento agregado correctamente.',
            icon: 'success',
            showConfirmButton: false,  // No muestra el botón de aceptar
            timer: 2000,  // Tiempo en milisegundos antes de que desaparezca la alerta
            timerProgressBar: true,  // Muestra el progreso del temporizador
          }).then(() => {
            // Recargar la página después de la alerta
            location.reload();
          });

          // Cerrar el modal y limpiar el formulario
          closeModal();
          document.getElementById('addTreatmentForm').reset();
        } else {
          // Alerta de error con SweetAlert2
          Swal.fire({
            title: 'Error',
            text: `Error: ${response.error}`,
            icon: 'error',
            confirmButtonColor: '#B4221B',
            confirmButtonText: 'Aceptar'
          });
        }
      } else {
        // Alerta en caso de error en la solicitud
        Swal.fire({
          title: 'Error',
          text: 'No se pudo conectar al servidor.',
          icon: 'error',
          confirmButtonColor: '#B4221B',
          confirmButtonText: 'Aceptar'
        });
      }
    };

    xhr.onerror = function() {
      // Alerta en caso de error de conexión
      Swal.fire({
        title: 'Error',
        text: 'No se pudo conectar al servidor debido a un problema de conexión a internet.',
        icon: 'error',
        confirmButtonColor: '#B4221B',
        confirmButtonText: 'Aceptar'
      });
    };

    xhr.send(formData); // Enviar los datos del formulario
  });
</script>


