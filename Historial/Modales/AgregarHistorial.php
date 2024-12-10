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
                        $conn = new mysqli("localhost", "root", "", "clinicanew1");
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


  
  document.getElementById('addTreatmentForm').addEventListener('submit', function(event) {
    // Prevenir que el formulario se envíe de forma tradicional
    event.preventDefault(); // Esto previene que los valores se pongan en la URL

    // Validación manual en frontend
    const tratamiento = document.querySelector('[name="Tratamiento"]').value;
    const observaciones = document.querySelector('[name="Observaciones"]').value;
    const costo = document.querySelector('[name="Costo"]').value;
    const doctor = document.querySelector('[name="doctor"]').value;
    const fecha = document.querySelector('[name="Fecha"]').value;

    // Inicializar un array para los errores
    let errores = [];

    // Verificar qué campos están vacíos y agregar los mensajes de error correspondientes
    if (!tratamiento) {
        errores.push('Tratamiento');
    }
    if (!observaciones) {
        errores.push('Observaciones');
    }
    if (!costo) {
        errores.push('Costo');
    }
    if (!doctor) {
        errores.push('Doctor');
    }
    if (!fecha) {
        errores.push('Fecha');
    }

    // Si hay errores, mostrar un mensaje detallado
    if (errores.length > 0) {
        alert("Los siguientes campos son obligatorios: " + errores.join(', '));
        return;
    }

    // Si todos los campos están completos, continuar con el envío
    const formData = new FormData(this); // Crear FormData con los datos del formulario
    const submitBtn = document.getElementById('submitTreatmentBtn');

    submitBtn.innerText = "Cargando...";
    submitBtn.disabled = true;

    // Crear un objeto XMLHttpRequest para hacer la solicitud AJAX
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/ClinicaDentalEsdent/Historial/Solicitudes/AgregarHistorial.php', true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);

            // Verifica si el tratamiento se agregó correctamente
            if (response.success) {
                alert("¡Tratamiento agregado con éxito!");
                // Aquí se puede cerrar el modal
                closeModal();
                // Limpiar los campos del formulario
                document.getElementById('addTreatmentForm').reset();
            } else {
                alert(`Error: ${response.error}`);
            }
        } else {
            alert("Error en la solicitud.");
        }
        submitBtn.innerText = "AGREGAR";
        submitBtn.disabled = false;
    };

    xhr.onerror = function() {
        alert("No se pudo conectar al servidor.");
        submitBtn.innerText = "AGREGAR";
        submitBtn.disabled = false;
    };

    xhr.send(formData); // Enviar los datos
});
</script>
