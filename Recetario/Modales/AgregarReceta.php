<!------------------------------------------------------------- Modal Agregar Presupuesto -------------------------------------------------------------------->
<div id="presupuesto-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
    <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 400px; width: 600px;">
      <!-- Botón X para cerrar el modal -->
      <button id="close-presupuesto-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
       
      <!-- Título principal -->
      <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">
        Agregar Receta
      </h1>
  
      <form id="presupuesto-form"  method="POST">
      <!-- Sección de Datos de Presupuesto -->
      <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
          <div class="grid grid-cols-2 gap-6">

                <!-- Input: Tratamiento -->
                <div class="relative col-span-2">
                    <label class="text-xs text-[#3B3636]">Receta</label>
                    <textarea name="Tratamiento" 
                                class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" 
                                placeholder="Receta">
                    </textarea>
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