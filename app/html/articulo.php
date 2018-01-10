<div class="container">
            <div class="page-header">
                <h1>  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    Panel Empleado Administrativo </h1>
            </div>

            <!-- modal eliminar -->
            <div class="modal fade" tabindex="-1" role="dialog" id="confirmarEliminarArt">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-hea
                             der">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Confirmar Eliminar</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="impIdElArt" class="form-control">
                            <p>Confirma que quiere eliminar el articulo seleccionado?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnEliminarArt">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ fin modal eliminar -->

            <!-- Modal usuario-->
            <div class="modal fade" id="modalArticulo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Articulo</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3>Datos Articulo</h3>
                                </div>
                                <div class="col-md-9">
                                    <fieldset>
                                        <input type="hidden" id="impIdArt" class="form-control">
                                        <div class="form-group">
                                            <label for="inpNomb">Nombre:</label>    
                                            <input type="text" id="inpNomb" class="form-control" 
                                                   placeholder="Teclado" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/" />
                                        </div>
                                        <div id="campo1"></div>
                                        <div class="form-group">
                                            <label for="impMarca">Marca:</label>               
                                            <input type="text" id="impMarca" class="form-control" placeholder="Nisuta" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/" />
                                        </div>
                                        <div id="campo2"></div>

                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <div class="form-group"> 
                                            <label for="impDesc">Descripción: </label>              
                                            <input type="text" id="impDesc" class="form-control" placeholder="Ingrese una descripcion del artículo" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/" />
                                        </div>
                                        <div id="campo3"></div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnEnviarArt">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin  Modal Articulo-->

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="panel panel-success">
                            <div class="panel-heading" align="center">Administrar Articulos</div>
                            <div class="panel-body">
                                
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="tablaArticulo" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Número</th>
                                                <th>Nombre</th>
                                                <th>Marca</th>
                                                <th>Descripción</th>
                                                <th>Edicion</th>
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
</div>