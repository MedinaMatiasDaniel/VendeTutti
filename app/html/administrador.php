<div class="container">
            <div class="page-header">
                <h1>  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    Panel Administrador
                </h1>
            </div>

            <!-- modal eliminar -->
            <div class="modal fade" tabindex="-1" role="dialog" id="confirmarEliminarAdmin">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Confirmar Eliminar</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3>Confirma que quiere eliminar al siguiente usuario?</h3>
                                </div>
                                <div class="col-md-12">
                                    <fieldset disabled>
                                        <input type="hidden" id="impIdElAdm" class="form-control">
                                        <div class="form-group">
                                            <label for="inpNombreEl">Nombre:</label>    
                                            <input type="text" id="inpNombreEl" class="form-control" 
                                                   placeholder="Jorge">
                                        </div>
                                        <div class="form-group">
                                            <label for="inpEmailEl">Email:</label>               
                                            <input type="email" id="inpEmailEl" class="form-control" 
                                                   placeholder="Pepe@sociedadanonima.com">
                                        </div>
                                        <div class="form-group"> 
                                            <label for="inpTipoEl">Tipo Usuario: </label>              
                                            <input type="text" id="inpTipoEl" class="form-control" 
                                                   placeholder="Administrador">
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnEliminarAdmin">Aceptar</button>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ modal eliminar -->

            <!-- Modal usuario-->
            <div class="modal fade" id="modalAgregarUsuarioAdmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Usuario</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3>Datos de Usuario</h3>
                                </div>
                                <div class="col-md-6">
                                    <fieldset >
                                        <input type="hidden" id="impIdAdm" class="form-control">
                                        <div class="form-group"> 
                                            <label for="impNombre">Nombre: </label>              
                                            <input type="text" id="impNombre" class="form-control" 
                                                   placeholder="Jorge" required="required" pattern="/^[a-zA-Z\s]+$/">
                                        </div>
                                        <div id="campo5"></div>
                                        <div class="form-group"> 
                                            <label for="impDir">Dirección: </label>             
                                            <input type="text" id="impDir" class="form-control" 
                                                   placeholder="Alfonsina Storni 41" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/">
                                        </div>
                                        <div id="campo6"></div>
                                        <div class="form-group"> 
                                            <label for="impCod">Código Postal: </label>         
                                            <input type="text" id="impCod" class="form-control" 
                                                   placeholder="1803" required="required" pattern="/[0-9]{4}/">
                                        </div>
                                        <div id="campo7"></div>
                                        <div class="form-group"> 
                                            <label for="impLoc">Localidad: </label>             
                                            <input type="text" id="impLoc" class="form-control" 
                                                   placeholder="Ezeiza" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/">
                                        </div>
                                        <div id="campo8"></div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        
                                        <div class="form-group">
                                            <label for="impEmail">Email:</label>               
                                            <input type="email" id="impEmail" class="form-control" 
                                                   placeholder="Pepe@sociedadanonima.com" required="required">
                                        </div>
                                        <div id="campo2"></div>
                                        <div class="form-group">
                                            <label for="selTipo">Tipo de Usuario: </label>
                                            <select class="form-control" id="selTipo">
                                                <option value="0">Elija un tipo de usuario</option>
                                                <option value="cliente">Cliente</option>
                                                <option value="empleadoadm">Empleado Administrativo</option>
                                                <option value="supervisor">Supervisor</option>
                                                <option value="administrador">Administrador</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnAceptarAdm" >Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--FIN Modal usuario-->

             <!-- Modal mas info-->
           <!-- <div class="modal fade" id="modalMasInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Usuario</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3>Datos adicionales del Usuario</h3>
                                </div>
                                <div class="col-md-9">
                                    <fieldset >
                                        <div id="campo5"></div>
                                        <div class="form-group"> 
                                            <label for="impDir">Dirección: </label>             
                                            <input type="text" id="impDir" class="form-control" 
                                                   placeholder="Alfonsina Storni 41" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/">
                                        </div>
                                        <div id="campo6"></div>
                                        <div class="form-group"> 
                                            <label for="impCod">Código Postal: </label>         
                                            <input type="text" id="impCod" class="form-control" 
                                                   placeholder="1803" required="required" pattern="/[0-9]{4}/">
                                        </div>
                                        <div id="campo7"></div>
                                        <div class="form-group"> 
                                            <label for="impLoc">Localidad: </label>             
                                            <input type="text" id="impLoc" class="form-control" 
                                                   placeholder="Ezeiza" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/">
                                        </div>
                                        <div id="campo8"></div>
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--FIN Modal mas info-->

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="panel panel-success">
                            <div class="panel-heading" align="center">Administrar usuarios</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-offset-10 col-xs-offset-8">
<!-- '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalAgregarUsuario"> <span class="glyphicon glyphicon-file" ></span> Nuevo</button>' -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="tablaUsuarios" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Número</th>
                                                <th>Nombre</th>
                                                <th>Dirección</th>
                                                <th>Localidad</th>
                                                <th>Codigo Postal</th>
                                                <th>Correo electronico</th>
                                                <th>Tipo</th>
                                                <th>Edicion</th>
                                            </tr>
                                            </thead>
<!-- '<button type="button" class="btn btn-danger" data-keyboard="true" data-toggle="modal" data-target="#confirmarEliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>'
'<button type="button" class="btn btn-warning" data-keyboard="true" data-toggle="modal" data-target="#modalAgregarUsuario"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>' -->
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>