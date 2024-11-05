 <!----------------------------------------------------------------- Modal Editar Radiografía ------------------------------------------------------------------------->
 <div id="editRadiografiaModal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
    <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 820px; width: 600px;">
       <!-- Botón X para cerrar el modal -->
       <button id="close-edit-radiografia-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
       
        <!-- Título principal -->
        <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">
            Editar datos de la radiografía
        </h1>
  
        <!-- Sección de Datos de Radiografía -->
        <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
            <div class="grid grid-cols-2 gap-6">
                <!-- Input: Fecha -->
                <div class="relative col-span-2">
                    <label class="text-xs text-[#3B3636]">FECHA</label>
                    <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" type="text" placeholder="2 De Octubre Del 2024">
                </div>
                
                <div class="relative col-span-2 mb-4">
                    <label class="text-xs text-[#3B3636]">TIPO DE RADIOGRAFÍA</label>
                    <select id="editRadiografiaTypeSelect" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]">
                        <option disabled selected>Tipo de Radiografía</option>
                        <option value="tipo1">Panorámica</option>
                        <option value="tipo2">Periapical</option>
                        <option value="tipo3">Bitewing</option>
                        <option value="tipo4">Cefalométrica</option>
                    </select>
                </div>
  
                <!-- Input: Descripción -->
                <div class="relative col-span-2">
                    <label class="text-xs text-[#3B3636]">DESCRIPCIÓN</label>
                    <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Descripción"></textarea>
                </div>
  
                <!-- Input: Observación -->
                <div class="relative col-span-2">
                    <label class="text-xs text-[#3B3636]">OBSERVACIÓN</label>
                    <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" placeholder="Observación"></textarea>
                </div>
  
                <!-- Input: Seleccionar Archivo -->
                <div class="relative col-span-2">
                    <label class="text-xs text-[#3B3636]">SELECCIONAR ARCHIVO</label>
                    <input type="file" class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"/>
                </div>
            </div>
        </div>
  
        <!-- Botón de cerrar -->
        <div class="flex justify-end mt-6">
            <button class="text-white py-2 px-4 mr-2 rounded-full" onclick="closeEditRadiografiaModal()" style="background-color: #B4221B;">CERRAR</button>
            <button class="text-white py-2 px-4 rounded-full" onclick="EditarRadiografia()" style="background-color: #B4221B;">GUARDAR</button>
        </div>
    </div>
  </div>
  
  <script>
    // Funciones para abrir y cerrar el modal de "Editar Radiografía"
    function openEditRadiografiaModal() {
        document.getElementById('editRadiografiaModal').classList.remove('hidden');
    }
  
    function closeEditRadiografiaModal() {
        document.getElementById('editRadiografiaModal').classList.add('hidden');
    }
    // Seleccionar el botón de cerrar "X" y el modal
    const closeEditRadiografiaModalX = document.getElementById('close-edit-radiografia-modal-x');
    const editRadiografiaModal = document.getElementById('editRadiografiaModal');

    // Cerrar el modal al hacer clic en la "X"
    closeEditRadiografiaModalX.addEventListener('click', function() {
        editRadiografiaModal.classList.add('hidden');
    });
  </script>