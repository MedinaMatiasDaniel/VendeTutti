<div class="container">
    <div class="page-header">
        <h1>  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            Panel Empleado Administrativo </h1>
    </div>

    <!-- modal eliminar -->
    <div class="modal fade" tabindex="-1" role="dialog" id="confirmarEliminarCl">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Confirmar Eliminar</h4>
                </div>
                <div class="modal-body">
                    <p>Confirma que eliminar quiere eliminar al usuario seleccionado?</p>
                    <input type="hidden" id="impElIdCl" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="btnEliminarCl">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <!--/ modal eliminar -->

    <!-- Modal cliente-->
    <div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Datos del Cliente</h4>
                </div>
                <div class="row">
                    <div class="modal-body">
                        <div class="col-md-6">
                            <form id="formCl">
                            <fieldset>
                                <input type="hidden" id="impIdCl" class="form-control">
                                <div class="form-group">
                                    <label for="inpRazon">Razon social:</label>    
                                    <input type="text" id="inpRazon" class="form-control" 
                                           placeholder="Pepe S.A">
                                </div>
                                <div id="campo1"></div>
                                <div class="form-group">
                                    <label for="impEmail">Email:</label>               
                                    <input type="email" id="inpEmail" class="form-control" 
                                           placeholder="Pepe@sociedadanonima.com" required="required">
                                </div>
                                <div id="campo2"></div>
                                <div class="form-group"> 
                                    <label>Tipo IVA: </label>              
                                    <select form="formCl" class="form-control" name="iva" id="impIva">
                                        <option value="0">Elija un tipo de IVA</option>
                                        <option value="Monotributista">Monotributista</option>
                                        <option value="Responsable Inscripto">Responsable Inscripto</option>
                                        <option value="Excento">Excento</option>
                                        <option value="Consumidor Final">Consumidor Final</option>
                                    </select>
                                </div>
                                <div id="campo3"></div>
                                <div class="form-group"> 
                                    <label for="impCuit">C.U.I.T.: </label>              
                                    <input type="number" id="inpCuit" class="form-control" 
                                           placeholder="0-99999999-00" required="required">
                                </div>
                                <div id="campo4"></div>
                            </fieldset>
                                </form>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <div class="form-group"> 
                                    <label for="impNombre">Nombre: </label>              
                                    <input type="text" id="inpNombre" class="form-control" 
                                           placeholder="Jorge" required="required" pattern="/^[a-zA-Z\s]+$/" >
                                </div>
                                <div id="campo5"></div>
                                <div class="form-group"> 
                                    <label for="inpDir">Direccion: </label>             
                                    <input type="text" id="inpDir" class="form-control" 
                                           placeholder="Alfonsina Storni 41" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/">
                                </div>
                                <div id="campo6"></div>
                                <div class="form-group"> 
                                    <label for="impCod">Codigo Postal: </label>         
                                    <input type="text" id="inpCod" class="form-control" 
                                           placeholder="1803" required="required" pattern="/[0-9]{4}/">
                                </div>
                                <div id="campo7"></div>
                                <div class="form-group"> 
                                    <label for="impLoc">Localidad: </label>             
                                    <input type="text" id="inpLoc" class="form-control" 
                                           placeholder="Ezeiza" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/">
                                </div>
                                <div id="campo8"></div>
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnAgregarCl">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal cliente-->

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading" align="center">Administrar Clientes</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-hover" id="tablaCliente" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Numero</th>
                                            <th>Razon Social</th>
                                            <th>E-mail</th>
                                            <th>IVA</th>
                                            <th>C.U.I.T.</th>
                                            <th>Nombre</th>
                                            <th>Direccion</th>
                                            <th>Codigo Postal</th>
                                            <th>Localidad</th>
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