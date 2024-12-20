<!-- Modal -->
<div id="seleccionarDienteModal" class="fixed inset-0 z-50 flex items-center justify-center bg-opacity-50 bg-black hidden">
        <div class="p-8 rounded-lg overflow-auto relative" style="background-color: #FBFDFF; height: 820px; width: 600px;">
            <!-- Título principal -->
            <h1 class="text-white text-center rounded-full mb-10 text-2xl" style="background-color: #B4221B; height: 40px;">Procedimiento</h1>
            <!-- Contenido del modal -->
            <form action="" method="post">
                <div class="p-6 rounded-sm shadow-md mb-10" style="background-color: #f5f7ff;">

                    <div class="grid grid-cols-2 gap-6">
                        <!-- Input: Selección de Color -->
                        <div class="relative col-span-2">
                            <label class="text-xs text-[#3B3636]">Selecciona un color</label>
                            <input id="colorPicker" type="color" class="w-full h-10 cursor-pointer">
                        </div>
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
            </form>
            <!-- Botones de acción -->
            <div class="flex justify-end mt-6">
                <button class="text-white py-2 px-4 mr-2 rounded-full" onclick="closeSeleccionarDienteModal()" style="background-color: #B4221B;">CERRAR</button>
                <button class="text-white py-2 px-4 rounded-full" onclick="guardarColor()" style="background-color: #B4221B;">GUARDAR</button>
            </div>
        </div>
    </div>
