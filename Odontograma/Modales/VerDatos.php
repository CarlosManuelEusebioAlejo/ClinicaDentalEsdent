
<!----------------------------------------------------------------- Modal Ver Datos del Odontograma --------------------------------------------------------------------------->
<div id="odontogramaModal" class="fixed inset-0 flex z-50 items-center justify-center bg-opacity-50 bg-black hidden">
    <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 710px; width: 600px;">
        <!-- Botón X para cerrar el modal -->
       <button id="close-odontograma-modal-x" class="absolute top-0 right-0 m-2 pb-px border-4 border-red-700 text-red-700 hover:bg-red-700 hover:text-white w-8 h-8 rounded-full flex items-center justify-center text-lg font-bold">&times;</button>
       
        <!-- Título principal -->
        <h1 class="text-white text-center rounded-full text-2xl" style="background-color: #B4221B; height: 40px;">
            Observaciones
        </h1>

        <!-- Sección de Datos del Odontograma -->
        <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">
            <div class="grid grid-cols-2 gap-6">
                        <!-- Input: Descripción -->
                        <div class="relative col-span-2">
                            <label class="text-xs text-[#3B3636]">DIAGNOSTICO</label>
                            <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-20" 
                                placeholder="Observaciones adicionales"
                                name="Observaciones">
                            </textarea>
                        </div>
                        <!-- Input: Descripción -->
                         <div class="relative col-span-2">
                            <label class="text-xs text-[#3B3636]">TRATAMIENTO</label>
                            <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-20" 
                                placeholder="Observaciones adicionales"
                                name="Observaciones">
                            </textarea>
                        </div>
                        <!-- Input: Descripción -->
                        <div class="relative col-span-2">
                            <label class="text-xs text-[#3B3636]">OBSERVACIONES</label>
                            <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-20" 
                                placeholder="Observaciones adicionales"
                                name="Observaciones">
                            </textarea>
                        </div>
                        
                        <!-- Input: Observación -->
                        <div class="relative col-span-2">
                            <label class="text-xs text-[#3B3636]">ARTICULACIÓN TEMPOROMANDIBULAR</label>
                            <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-20"
                                      name="ArticulacionTemporomandibular">
                            </textarea>
                        </div>
                        <!-- Input: Observación -->
                        <div class="relative col-span-2">
                            <label class="text-xs text-[#3B3636]">ENDODONCIAS</label>
                            <textarea class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636] h-20"></textarea>
                        </div>
                        <div class="relative col-span-2">
                            <label class="text-xs text-[#3B3636]">Presupuesto</label>
                            <input class="pl-8 py-2 text-xs bg-[#E6ECF8] rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-[#3B3636]"></input>
                        </div>
            </div>
        </div>

        <!-- Botones para cerrar -->
        <div class="flex justify-end ">
            <button class="text-white py-2 px-4 mr-2 rounded-full" onclick="closeOdontogramaModal()" style="background-color: #B4221B;">CERRAR</button>
        </div>
    </div>
</div>