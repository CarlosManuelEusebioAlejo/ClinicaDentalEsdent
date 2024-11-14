<!------------------------------------------------------------- Modal Agregar tratamiento -------------------------------------------------------------------->
<div id="treatment-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">
      <!-- Botón X para cerrar el modal -->
    <button id="close-treatment-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>

    <!-- Título principal -->
    <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">
      Agregar Tratamiento
    </h1>

    <!-- Formulario para agregar tratamiento -->
    <form action="Solicitudes/AgregarHistorial.php" method="POST">
        <!-- Sección de Datos Personales -->
        <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
            <div class="grid grid-cols-2 gap-6">

            <input type="hidden" name="idPaciente" value="<?php echo isset($_GET['idPaciente']) ? $_GET['idPaciente'] : ''; ?>">

              <!-- Input: Tratamiento -->
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
                  <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" 
                    placeholder="Tratamiento"
                    id="Tratamiento"
                    name="Tratamiento">
                  </textarea>
              </div>

              <!-- Input: Observaciones -->
              <div class="relative col-span-2">
                <label class="text-xs text-[#3B3636]">OBSERVACIONES</label>
                <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" 
                          placeholder="Observaciones"
                          name="Observacion">
                </textarea>
              </div>

              <!-- Input: Costo -->
              <div class="relative col-span-2">
                <label class="text-xs text-[#3B3636]">COSTO</label>
                <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                       type="number" 
                       placeholder="Costo"
                       id="Costo"
                       name="Costo">
              </div>

              <!-- Select: Doctor -->
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">DOCTOR</label>
                  <select id="doctorSelect" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                          name="id_doctor">
                          <option value="" disabled selected>Selecciona un doctor</option>
                            <?php
                            // Obtener la lista de doctores desde la base de datos
                            $conn = new mysqli("localhost", "root", "", "ClinicaDentalEsdent");
                            $query = "SELECT id_doctor, Nombre_doctor FROM doctores";
                            $result = $conn->query($query);
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='{$row['id_doctor']}'>{$row['Nombre_doctor']}</option>";
                            }
                            $conn->close();
                            ?>
                  </select>
              </div>
              <input type="hidden" id="NombreDoctor" name="nombre_doctor">

              <!-- Input: Fecha de la próxima cita -->
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">FECHA</label>
                  <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                         type="date" 
                         placeholder="Fecha de la próxima cita"
                         name="Fecha">
              </div>
              <!-- Input: Rango de fechas
              <div class="relative col-span-2">
                  <label class="text-xs text-[#3B3636]">FECHA PARA JUSTIFICANTE</label>
                  <div class="flex flex-col gap-2">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                             type="date" 
                             id="startDate" 
                             name="FechaInicio"
                             placeholder="Desde (dd/mm/aaaa)">
                      <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                             type="date" 
                             id="endDate" 
                             name="FechaFin"
                             placeholder="Hasta (dd/mm/aaaa)">
                  </div>
              </div> -->
          </div>
        </div>

        <div class="flex justify-end mt-6">
            <!-- Botón de cerrar -->
            <button type="button" id="close-modal-btn" class="text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
              Cerrar
            </button>
            <!-- Botón para enviar el formulario -->
            <button type="submit" id="submit-treatment" class="text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
              Agregar Tratamiento
            </button>
        </div>
    </form>
  </div>
</div>

  <script>
      const addTreatmentBtn = document.getElementById('add-treatment-btn');
      const closeModalBtn = document.getElementById('close-modal-btn');
      const modal = document.getElementById('treatment-modal');
      
      // Mostrar el modal al hacer clic en "AGREGAR PACIENTE"
      addTreatmentBtn.addEventListener('click', function() {
        modal.classList.remove('hidden');
      });
      
      // Cerrar el modal al hacer clic en "Cerrar"
      closeModalBtn.addEventListener('click', function() {
        modal.classList.add('hidden');
      });
      
      // Cerrar el modal al hacer clic en la "X"
      const closeTreatmentModalX = document.getElementById('close-treatment-modal-x');
      closeTreatmentModalX.addEventListener('click', function() {
        modal.classList.add('hidden');
      });
      

    // Script para manejar el calendario de selección de rango de fechas
    const startDateInput = document.getElementById('startDate');
          const endDateInput = document.getElementById('endDate');
      
          startDateInput.addEventListener('focus', function () {
              this.type = 'date';
          });
      
          endDateInput.addEventListener('focus', function () {
              this.type = 'date';
          });
      
          startDateInput.addEventListener('blur', function () {
              if (!this.value) {
                  this.type = 'text';
              }
          });
      
          endDateInput.addEventListener('blur', function () {
              if (!this.value) {
                  this.type = 'text';
              }
          });

  </script>
