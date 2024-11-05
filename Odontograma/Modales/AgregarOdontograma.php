<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel">Procedimiento</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <input type="hidden" id="procedimentosRemovidos" th:field="*{procedimentosRemovidos}">
                                <div id="procedimentosDiv"></div>
                                <div class="form-group col-md-12">
                                   <!---- <label for="nomeProcedimento">Nombre del diagnostico</label>
                                    <i data-type="info" class="fas fa-info-circle fa-1x text-info" onclick="toast_message('.','info')" style="margin-left: 5px; cursor: pointer;"></i>
                                    <select class="form-control" id="nomeProcedimento">
                                        <option selected value="">Seleccione una opción</option>
                                        <!-- <option th:value="${null}" th:text="${'NÃO INFORMADO'}"></option> -->
                                        <!-- <option th:each="model : ${modelEnums}" th:value="${model}" th:text="${model.denominacao}"></option> --
                                    </select> -->
                                    
                                </div>
                                <div class="form-group col-12" id="colOutroProcedimento">
                                    <label for="outroProcedimento">Otro</label>
                                    <i style="margin-left:5px;cursor: pointer;" class="alerta fas fa-info-circle fa-1x text-info" data-type="info" onclick="mensagens('.','info')"></i>
                                    <input id="outroProcedimento" class="form-control" type="text">
                                </div>

                                <!-- Input: Nombre(s) -->
                                <div class="relative">
                                    <input class="pl-8 py-2 text-xs bg-white rounded-md w-full shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" placeholder="NOMBRE(S)">
                                </div>
                                <div class="form-group col-12">
                                    <label for="exampleColorInput" class="form-label">Color</label>
                                    <i style="margin-left:5px;cursor: pointer;" class="alerta fas fa-info-circle fa-1x text-info" data-type="info" onclick="mensagens('.','info')"></i>
                                    <input type="color" id="cor" disabled class="form-control form-control-color" value="#563d7c" title="Choose your color">
                                </div>
                                <div class="form-group col-12">
                                    <label for="informacoesAdicionais">OBSERVACIONES</label>
                                    <i style="margin-left:5px;cursor: pointer;" class="alerta fas fa-info-circle fa-1x text-info" data-type="info" onclick="mensagens('.','info')"></i>
                                    <textarea rows="5" id="informacoesAdicionais" maxlength="5000" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label for="informacoesAdicionais">ARTICULACIÓN TEMPOROMANDIBULAR</label>
                                    <i style="margin-left:5px;cursor: pointer;" class="alerta fas fa-info-circle fa-1x text-info" data-type="info" onclick="mensagens('.','info')"></i>
                                    <textarea rows="5" id="informacoesAdicionais" maxlength="5000" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <label for="informacoesAdicionais">ENDODONCIAS</label>
                                    <i style="margin-left:5px;cursor: pointer;" class="alerta fas fa-info-circle fa-1x text-info" data-type="info" onclick="mensagens('.','info')"></i>
                                    <textarea rows="5" id="informacoesAdicionais" maxlength="5000" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-md-1 d-inline mt-2" style="text-align: center; margin: auto;">
                                    <a id="botaoAdicionar" class="form-control btn-sigsaude btnCorNovo">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>