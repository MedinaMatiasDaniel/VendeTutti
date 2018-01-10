<div class="container">
    <div class="page-header">
        <h1>  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            Panel Empleado Administrativo
        </h1>
    </div>

    <!-- modal eliminar -->
    <div class="modal fade" tabindex="-1" role="dialog" id="confirmarEliminarOrd">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Confirmar Eliminar</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="impIdElOrd" class="form-control">
                    <p>Confirma que quiere eliminar la Orden de Envio seleccionada?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnEliminarOrd">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <!--/fin modal eliminar -->

    <!-- Modal orden de envio-->
    <div class="modal fade" id="modalOrdenEnvio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Orden de Envio</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h3>Datos de la Orden de Envio</h3>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <input type="hidden" id="impIdOrd" class="form-control">
                                <div class="form-group">
                                    <label for="inpCliente">Cliente:</label>    
                                    <input type="text" id="inpCliente" class="form-control" 
                                           placeholder="PepeS.A" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/" />
                                </div>
                                <div id="campo1"></div>

                                <div class="form-group">
                                    <label for="selEstado">Estado:</label>               
                                    <select id="selEstado" class="form-control">
                                        <option value="0">Elija un Estado</option>
                                        <option value="1">Sin rendir</option>
                                        <option value="2">Entregado exitosamente</option>
                                        <option value="3">Entregado con observaciones</option>
                                        <option value="4">No entregado</option>
                                        <option value="5">Rechazado</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="impFechaIngreso">Fecha Ingreso:</label>               
                                    <input type="date" id="impFechaIngreso" class="form-control" required="required" />
                                </div>
                                <div id="campo2"></div>
                                <div class="form-group"> 
                                    <label for="impFechaEntrega">Fecha Entrega: </label>              
                                    <input type="date" id="impFechaEntrega" class="form-control" required="required" />
                                </div>
                                <div id="campo3"></div>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <div class="form-group"> 
                                    <label for="inpZona">Zona: </label>              
                                    <select id="inpZona" class="form-control"> 
                                    </select>
                                </div>
                                <div id="campo6"></div>
                                <div class="form-group"> 
                                    <label for="impCamion">Camión: </label>         
                                    <select id="impCamion" class="form-control"> 
                                    </select>
                                </div>
                                <div id="campo7"></div>
                                <div class="form-group"> 
                                    <label for="impHorario">Horario Entrega: </label>              
                                    <input type="text" id="impHorario" class="form-control" 
                                           placeholder="18:00" required="required" pattern="/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/" />
                                </div>
                                <div id="campo4"></div>
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset>
                                <div class="form-group"> 
                                    <label for="impObser">Observaciones: </label>              
                                    <input type="text" id="impObser" class="form-control" 
                                           placeholder="Sin Observaciones" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/"/>
                                </div>
                                <div id="campo9"></div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnGuardarOrd">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin Modal orden de envio-->

    <div class="row">
        <div class="col-md-12">	
            <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading" align="center">Administrar Ordenes de Envio</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-hover" align="center" id="tablaOrden" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Número</th>
                                            <th>Cliente</th>
                                            <th>Camion</th>
                                            <th>Zona</th>
                                            <th>Estado</th>
                                            <th>Fecha Ingreso</th>
                                            <th>Fecha Entrega</th>
                                            <th>Horario</th>
                                            <th>Direccion</th>
                                            <th>Localidad</th>
                                            <th>Observaciones</th>
                                            <th>Edición</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>