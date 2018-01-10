<div class="container">
    <div class="page-header">
        <h1>  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 
            Panel Supervisor </h1>
    </div>

    <!-- modal agregar zona -->
    <div id="nuevaZona" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Zona</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="impNumero" class="form-control">
                    <label>Area Total</label>
                    <input type="number" id="impArea" class="form-control"  placeholder="00 Km" required="required">
                    <div id="campo2" ></div>
                </div>
                <div class="modal-footer">
                    <button  id="btnCancelar" type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button  id="btnAgregar" type="button" class="btn btn-primary" data-dismiss="modal">Agregar</button><br>
                </div>
            </div>
        </div>
    </div>
    <!-- fin modal agregar zona -->

    <!-- modal eliminar -->
    <div class="modal fade" tabindex="-1" role="dialog" id="confirmarEliminar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Confirmar Eliminar</h4>
                </div>
                <div class="modal-body">
                    <p>Confirma que quiere eliminar la zona seleccionada?</p>
                    <input type="hidden" id="impId" class="form-control">
                    <input type="hidden" id="inpActivo" class="form-control"   >
                </div>
                <div class="modal-footer">
                    <button  id="btnCancelar2" type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button  id="btnEliminar" type="button" class="btn btn-danger" data-dismiss="modal">Eliminar</button><br>
                </div>
            </div>
        </div>
    </div>
    <!--/ fin modal eliminar -->


    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading" align="center">Administrar Zonas</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-hover" id="tablaZona" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Numero</th>
                                            <th>Area Total</th>
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