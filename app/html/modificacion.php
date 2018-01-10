<div class="container">
            <div class="page-header">
                <h1>  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 
                    Panel Supervisor </h1>
            </div>
            <!-- modal Modificar orden de envio -->
            <div class="modal fade" tabindex="-1" role="dialog" id="confirmarAceptarPCl">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Confirmar Aceptar</h4>
                        </div>
                        <div class="modal-body">
                            <p>Confirma que quiere aceptar la modificacion?</p>
                            <input type="hidden" id="aceptarModif" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnAceptar">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin modal Modificar orden de envio -->

            <!-- modal eliminar -->
            <div class="modal fade" tabindex="-1" role="dialog" id="confirmarEliminarMod">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Confirmar Eliminar</h4>
                            <input type="hidden" id="impIdModif" class="form-control">
                        </div>
                        <div class="modal-body">
                            <p>Confirma que quiere eliminar la modificacion?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ modal eliminar -->

            <!-- Modal mas info-->
            <div class="modal fade" id="modalMasInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Info Modificacion Orden Envio</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3>Datos de la Modificacion de la Orden de Envio</h3>
                                </div>
                                <div class="col-md-6">
                                    <fieldset >
                                        <div class="form-group"> 
                                            <input type="hidden" id="aceptarModif" class="form-control">
                                            <label for="inpIdMod">Nueva Dirección: </label>             
                                            <input type="text" id="impDir" class="form-control" 
                                                   placeholder="Alfonsina Storni 41" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/">
                                        </div>
                                        <div id="campo"></div>
                                        <div class="form-group"> 
                                            <label for="impLoc">Nueva Localidad: </label>             
                                            <input type="text" id="impLocNuev" class="form-control" 
                                                   placeholder="Ezeiza" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/">
                                        </div>
                                        <div id="campo"></div>
                                        <div class="form-group"> 
                                            <label for="impCod">Código Postal Previsto: </label>         
                                            <input type="text" id="impCodPrev" class="form-control" 
                                                   placeholder="1803" required="required" pattern="/[0-9]{4}/">
                                        </div>
                                        <div id="campo"></div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <div class="form-group"> 
                                            <label for="impCod">Hora Prevista: </label>         
                                            <input type="text" id="impHoraPrev" class="form-control" 
                                                   placeholder="13:00" required="required" pattern="/[0-9]{4}/">
                                        </div>
                                        <div id="campo"></div>
                                        <div class="form-group"> 
                                            <label for="impCod">Nueva Hora: </label>         
                                            <input type="text" id="impHoraNuev" class="form-control" 
                                                   placeholder="13:00" required="required" >
                                        </div>
                                        <div id="campo"></div>
                                        <div class="form-group"> 
                                            <label for="impCod">Nuevo Código Postal: </label>         
                                            <input type="text" id="impCodNuev" class="form-control" 
                                                   placeholder="1803" required="required" >
                                        </div>
                                        <div id="campo"></div>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <div>
                                            <label for="inpArticulos">Articulos: </label>
                                            <input type="text" name="inpArticulos" required="required" placeholder="Ingrese aqui los articulos">
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnMasInfo">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--FIN Modal mas info-->

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="panel panel-success">
                            <div class="panel-heading" align="center">Administrar Modificaciones Ordenes de Envio</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-offset-10 col-xs-offset-8">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="tablaModificacion" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Número</th>
                                                <th>Cliente</th>
                                                <th>Estado</th>
                                                <th>Fecha Prevista</th>
                                                <th>Nueva Fecha
                                                <!-- <th>Hora Prevista</th>
                                                <th>Nueva Hora</th> -->
                                                <th>Direccion Prevista</th>
                                                <!-- <th>Nueva Direccion</th> -->
                                                <th>Localidad Prevista</th>
                                                <!-- <th>Nueva Localidad</th>
                                                <th>C.P Previsto</th>
                                                <th>Nuevo C.P</th>
                                                <th>Articulos</th> -->
                                                <th>Mas</th>
                                                <th>Confirmar</th>
                                            </tr>
                                            </thead>
<!-- '<button type="button" class="btn btn-danger" data-keyboard="true" data-toggle="modal" data-target="#confirmarEliminar"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>'
'<button type="button" class="btn btn-warning" data-keyboard="true" data-toggle="modal" data-target="#confirmarAceptar"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>' -->
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
