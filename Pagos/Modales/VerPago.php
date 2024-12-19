
<!-- Modal Ver Pago -->
<div id="ver-pago-modal" class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-black hidden">
  <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 800px; width: 600px;">
    <!-- Botón X para cerrar el modal -->
    <button class="close-modal absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
       
    

    <div class="rounded-full shadow-md items-center justify-center flex text-center m-4" style="background-color: #B4221B; height: 40px;">
      <h1 class="text-white text-2xl mr-4">Ver Datos del Pago</h1>
      <button class="edit-pago-btn w-8 h-8 pt-1 bg-white rounded  shadow-md" data-modal-id="editar-pago-modal">
        <i class='bx bx-edit' style='color:#3c3c3c; font-size: 1.5rem; margin-top: 1.2px;'></i>
      </button>
    </div>

    <!-- Contenido del modal -->
    <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
      <div class="grid grid-cols-2 gap-6">
        <!-- Input: Tratamiento -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
          <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-24" 
                    placeholder="Tratamiento" 
                    disabled>
          </textarea>
        </div>

        <!-- Input: Costo -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">COSTO</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"
                 placeholder="3000" 
                 disabled>
        </div>

        <!-- Input: Abono -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">ABONO</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                 placeholder="3000" 
                 disabled>
        </div>

        <!-- Input: Abono -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">DOCTOR</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                 placeholder="Carlos Manuel" 
                 disabled>
        </div>

        <!-- Input: TIPO PAGO -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">TIPO PAGO</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                placeholder="Efectivo" 
                disabled>
        </div>

        <!-- Input: FACTURA -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">FACTURA</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
                placeholder="No" 
                disabled>
        </div>

        <!-- Input: Fecha -->
        <div class="relative col-span-2">
          <label class="text-xs text-[#3B3636]">FECHA</label>
          <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-full w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]" 
          type="date" disabled>
        </div>
      </div>
    </div>

    <!-- Botones del modal -->
    <div class="flex justify-end mt-6">
      <button class="close-ver-modal text-white px-4 py-2 rounded-full mr-2 shadow-inner" style="background-color: #B4221B;">
        Cerrar
      </button>
      <button class="submit-ver-pago text-white px-4 py-2 rounded-full shadow-md" style="background-color: #B4221B;">
        Guardar
      </button>
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const modals = document.querySelectorAll("#ver-pago-modal");
    const openEditModalButton = document.querySelector(".edit-pago-btn");
    const closeModalButtons = document.querySelectorAll(".close-ver-modal, .close-modal");

    // Abrir modal de edición
    openEditModalButton.addEventListener("click", function () {
      const modalId = this.getAttribute("data-modal-id");
      const modal = document.getElementById(modalId);
      if (modal) modal.classList.remove("hidden");
    });

    // Cerrar modal actual
    closeModalButtons.forEach(button => {
      button.addEventListener("click", function () {
        const modal = this.closest(".fixed");
        modal.classList.add("hidden");
      });
    });

    // Cerrar modal al hacer clic fuera de su contenido
    modals.forEach(modal => {
      modal.addEventListener("click", function (event) {
        if (event.target === modal) {
          modal.classList.add("hidden");
        }
      });
    });
  });
</script>
