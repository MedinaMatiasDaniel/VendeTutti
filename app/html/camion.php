<div class="container">
            <div class="page-header">
                <h1>  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>   Panel Supervisor </h1>
            </div>

            <!-- modal eliminar -->
            <div class="modal fade" tabindex="-1" role="dialog" id="confirmarEliminarCam">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Confirmar Eliminar</h4>
                        </div>
                        <div class="modal-body">
                            <p>Confirma que desea eliminar el camion?</p>
                            <input type="hidden" id="impIdElCam" class="form-control"   >
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnEliminarCam">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--/fin modal eliminar -->

            <!-- modal nuevo camion -->
            <div class="modal fade" tabindex="-1" role="dialog" id="modalCamion">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Camion</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3>Datos Camion</h3>
                                </div>
                                <div class="col-md-6">
                                    <fieldset >
                                        <input type="hidden" id="impIdCam" class="form-control"   >
                                        <div class="form-group">
                                            <label for="inpModelo">Modelo:</label>               
                                            <input type="text" id="inpModelo" class="form-control" 
                                                   placeholder="2000" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/">
                                        </div>
                                        <div id="campo1"></div>
                                        <div class="form-group"> 
                                            <label for="inpMarca">Marca: </label>              
                                            <input type="text" id="inpMarca" class="form-control" 
                                                   placeholder="Mercedes benz" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/">
                                        </div>
                                        <div id="campo2"></div>                        
                                    </fieldset>                          
                                </div>
                                <div class="col-md-6">
                                    <fieldset >
                                        <div class="form-group"> 
                                            <label for="inpPatente">Patente: </label>              
                                            <input type="text" id="inpPatente" class="form-control" 
                                                   placeholder="ABC555" required="required" pattern="/^[A-Z]{3}\d{3}$/">
                                        </div>
                                        <div id="campo3"></div>
                                        <div class="form-group"> 
                                            <label for="inpChofer">Chofer: </label>             
                                            <input type="text" id="inpChofer" class="form-control" 
                                                   placeholder="Juan Cruz" required="required" pattern="/^[a-zA-Z\s]+$/">
                                        </div> 
                                        <div id="campo4"></div>                                
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnGuardarCam" >Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ fin modal nuevo camion -->

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="panel panel-success">
                            <div class="panel-heading" align="center">Administrar Camiones</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="tablaCamion" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Número</th>
                                                <th>Modelo</th>
                                                <th>Marca</th>
                                                <th>Patente</th>
                                                <th>Chofer</th>
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
