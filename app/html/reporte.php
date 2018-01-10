<div class="container">
            <div class="page-header">
                <h1>  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>   Panel Supervisor </h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Panel Reporte ordenes Envio -->
                    <div class="row">
                        <div class="panel panel-success">
                            <div class="panel-heading" align="center">Reporte Ordenes de Envio</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <select class="form-control" id="estado">
                                            <option value="0">Estado</option>
                                            <option value="1">Sin Rendir</option>
                                            <option value="2">Entregada con Éxito</option>
                                            <option value="3">Entregado con Observaciones</option>
                                            <option value="4">No Entregado</option>
                                            <option value="5">Rechazado</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <input id="inputFecha1" name="name" type="date" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <input id="inputFecha2" name="name" type="date" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control" id="camion">
                                            <option value="0">Camion</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control" id="zona">
                                            <option value="0">Zona</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-md" id="btnBuscar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar</button>
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="tablaReporte" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Número</th>
                                                <th>Cliente</th>
                                                <th>Camión</th>
                                                <th>Zona</th>
                                                <th>Estado</th>
                                                <th>Fecha de ingreso</th>
                                                <th>Fecha de entrega</th>
                                                <th>Horario</th>
                                                <th>Observaciones</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Panel Reporte ordenes Envio -->
                </div>
            </div>
        </div>
