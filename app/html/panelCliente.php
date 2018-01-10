 <div class="container">
            <div class="page-header">
                <h1>  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    Bienvenido
                </h1>
            </div>

            <!-- Modal Quienes Somos -->
            <div class="modal fade" tabindex="-1" role="dialog" id="modalQuienes">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Quienes Somos</h4>
                        </div>
                        <div class="row">
                            <div class="container-fluid text-center">
                                <p>Introduccion de vende tutti</p>
                            </div>
                        </div>  
                    </div>   
                </div>                        
            </div>
            <!-- Modal Quienes Somos -->

            <!-- Modal Contacto -->
            <div class="modal fade" tabindex="-1" role="dialog" id="modalContacto">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Contacto</h4>
                        </div>
                        <div class="row">
                            <div class="container">
                                <h3><u> Datos de contacto:</u></h3>
                                <h5>Email: </h5><a href="">vendetutti@ventas.com</a>
                                <h5>Telefono:  3638-9240 </h5>
                                <h5>Direccion:  Alfonsina Storni 41, Ezeiza, Buenos Aires, Argentina </h5>
                            </div>
                        </div>  
                    </div>   
                </div>                        
            </div>
            <!-- FIN Modal Contacto -->

            <!--COMIENZO MODAL MODIFICAR -->
            <div class="modal fade" tabindex="-1" role="dialog" id="confirmarAceptarPCl">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Enviar solicitud</h4>
                        </div>  
                        <div class="row">
                            <div class="col-md-12">
                                <div class="well well-sm">
                                    <form class="form-horizontal" method="post">
                                        <fieldset>                                               
                                            <div class="form-group">                            
                                                <div class="col-md-8">
                                                    <input type="hidden" id="idClienteCl" class="form-control">
                                                    <input type="hidden" id="idOrdenCl" class="form-control">
                                                    <input type="hidden" id="idCmionCl" class="form-control">
                                                    <input type="hidden" id="idZonaCl" class="form-control">
                                                    <label for="inpFecha" >Nueva fecha de entrega: </label>
                                                    <input id="inpFecha" name="name" type="date" class="form-control" required="required">
                                                </div>
                                                <div id="campo1"></div>
                                            </div>
                                            <div class="form-group">
                                                <!-- <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span> -->
                                                <div class="col-md-8">
                                                    <label for="inpHorario" >Nuevo horario de entrega: </label>
                                                    <input id="inpHorario" name="name" type="number" placeholder="Horario de entrega" class="form-control" required="required" pattern="/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/">
                                                </div>
                                                <div id="campo2"></div>
                                            </div>
                                            <div class="form-group">                            
                                                <div class="col-md-8">
                                                    <label for="inpDir">Nueva direccion de entrega: </label>
                                                    <input id="inpDir" name="text" type="text" placeholder="Direccion de entrega" class="form-control" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/">
                                                </div>
                                                <div id="campo3"></div>
                                            </div>          
                                            <div class="form-group">                            
                                                <div class="col-md-8">
                                                    <label for="inpLoc">Nueva localidad de entrega: </label>
                                                    <input id="inpLoc" name="text" type="text" placeholder="Direccion de entrega" class="form-control" required="required" pattern="/^[0-9]{2}-[0-9]{8}-[0-9]$/">
                                                </div>
                                                <div id="campo4"></div>
                                            </div>     
                                            <div class="form-group">
                                                <div class="modal-footer">
                                                    <button type="button" id="btnCancelar" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnEnviarModif">Enviar solicitud</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/FIN MODAL MODIFICAR -->

            <!--/ Comienzo Modal Datos Cliente-->
            <div class="modal fade" tabindex="-1" role="dialog" id="modalDatos">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <div class="container">
                            <h4 class="modal-title">Datos Personales</h4>
                        </div>  
                    
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Datos Personales</h3>
                            </div>  
                            <div class="col-md-6">
                                <fieldset disabled>
                                    <div class="form-group">
                                        <input type="hidden" id="idCliente" class="form-control">
                                        <label for="inpRazon">Razón social:</label>    
                                        <input type="text" id="inpRazon" class="form-control" 
                                               placeholder="PepeS.A">
                                    </div>
                                    <div class="form-group">
                                        <label for="impEmail">Email:</label>               
                                        <input type="email" id="impEmail" class="form-control" 
                                               placeholder="Pepe@sociedadanonima.com">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="impIva">Tipo IVA: </label>              
                                        <input type="text" id="impIva" class="form-control" 
                                               placeholder="Responsable inscripto">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="impCuit">C.U.I.T.: </label>              
                                        <input type="number" id="impCuit" class="form-control" 
                                               placeholder="0-99999999-00">
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset disabled>
                                    <div class="form-group"> 
                                        <label for="impNombre">Nombre: </label>              
                                        <input type="text" id="impNombre" class="form-control" 
                                               placeholder="Jorge">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="inpDir">Dirección: </label>             
                                        <input type="text" id="impDir" class="form-control" 
                                               placeholder="Alfonsina Storni 41">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="impCod">Código Postal: </label>         
                                        <input type="text" id="impCod" class="form-control" 
                                               placeholder="1803">
                                    </div>
                                    <div class="form-group"> 
                                        <label for="impLoc">Localidad: </label>             
                                        <input type="text" id="impLoc" class="form-control" 
                                               placeholder="Ezeiza">
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group"> 
                                    <h3>Contraseña</h3>
                                    <label> Contraseña nueva: </label> 
                                    <input type="password" name="contraseña" id="inpContraseña" placeholder="Contraseña" required="required" pattern="/ ^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,15}$/" />
                                </div>
                            </div>
                            <br/>
                            <div class="col-md-12">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!--/Final Modal Datos Cliente -->


<!--/ Comienzo Modal Modal mostrar mas-->
<!--<div class="modal fade" tabindex="-1" role="dialog" id="modalMas">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Mis envios</h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Datos Personales</h3>
                </div>  
                <div class="col-md-6">
                    <fieldset>
                        <div class="form-group">
                            <label for="inpRazon">Fecha Entrega Prevista:</label>    
                            <input type="text" id="inpRazon" class="form-control" 
                                   placeholder="PepeS.A">
                        </div>
                        <div class="form-group">
                            <label for="impEmail">Horario Previsto:</label>               
                            <input type="email" id="impEmail" class="form-control" 
                                   placeholder="Pepe@sociedadanonima.com">
                        </div>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset>
                        <div class="form-group"> 
                            <label for="impIva">Zona: </label>              
                            <input type="text" id="impIva" class="form-control" 
                                   placeholder="Responsable inscripto">
                        </div>
                        <div class="form-group"> 
                            <label for="impCuit">Camion: </label>              
                            <input type="number" id="impCuit" class="form-control" 
                                   placeholder="0-99999999-00">
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label> Articulos : </label> 
                    <input type="text" name="Articulos" id="inpArticulos" placeholder="Ingrese aqui los articulos" required="required"/>
                </div>
            </div>
            <br/>
            <div class="col-md-12">
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">enviar</button>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!--/Final Modal Mostrar mas -->

            <!--/ Datos Ordenes Envio -->
            <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading" align="center">Mis envios</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table  class="table table-hover" id="tablaPanelCliente" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Número</th>
                                        <th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Fecha de ingreso</th>                                       
                                        <th>fecha de Entrega</th>
                                        <th>Horario</th>
                                        <th>Camion</th>
                                        <th>Zona</th>
                                        <th>Articulos</th>
                                        <th>Modificar</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

