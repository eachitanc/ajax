<?php include 'estilos.php'?>
<body>
    <div id="contenedor">
        <div class="container">
            <form id="formulario" action="proceso.php" method="post">
                <h4>Ingresar de datos</h4>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-xs-12 col-sm-1">
                                <i class="fas fa-plane-departure fa-lg blue-text pr-3" style="padding-top: 40px;"></i>
                            </div>
                            <div class="col">
                                <div class="md-form input-with-pre-icon" >
                                    <div id="borde" style="border: none;">
                                        <select class="browser-default custom-select" id="aerolinea" name="aerolinea">
                                            <option disabled default select>--Aerolínea--</option>
                                            <option value="Avianca Aerotaxi">Avianca</option>
                                            <option value="Copa Airlines Colombia">Airlines</option>
                                            <option value="EasyFly">EasyFly</option>
                                            <option value="LATAM (Colombia)">Latam</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col">
                        <div class="md-form input-with-pre-icon">
                            <i class="fas fa-street-view input-prefix indigo-text pr-3"></i>
                            <input required type="text" id="origen" name="origen" class="form-control">
                            <label for="origen">Origen </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form input-with-pre-icon">
                            <i class="fas fa-map-marker-alt input-prefix red-text pr-3"></i>
                            <input required type="text" id="destino" name="destino" class="form-control">
                            <label for="destino">Destino</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-xs-12 col-sm-1">
                                <i class="fas fa-clipboard-list fa-lg orange-text pr-3" style="padding-top: 40px;"></i>
                            </div>
                            <div class="col">
                                <div class="md-form input-with-pre-icon" >
                                    <div class="custom-control custom-radio custom-control-inline col-sm-3">
                                        <input checked type="radio" class="custom-control-input" id="defaultInline1" value="Cédula de Ciudadania" name="indentificacion">
                                        <label class="custom-control-label" for="defaultInline1">C.C.</label>
                                    </div>
                                    
                                    <!-- Default inline 2-->
                                    <div class="custom-control custom-radio custom-control-inline col-sm-3">
                                        <input type="radio" class="custom-control-input" id="defaultInline2" value="Cédula de Extranjeria" name="indentificacion">
                                        <label class="custom-control-label" for="defaultInline2">C.E</label>
                                    </div>
                                    
                                    <!-- Default inline 3-->
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="defaultInline3" value="Pasaporte" name="indentificacion">
                                        <label class="custom-control-label" for="defaultInline3">PA</label>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col">
                        <div class="md-form input-with-pre-icon">
                            <i class="fas fa-address-card input-prefix green-text pr-3"></i>
                            <input required type="number" id="numero" name="numero" class="form-control">
                            <label for="numero">Número de identificación</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form input-with-pre-icon">
                            <i class="fas fa-user input-prefix indigo-text pr-3"></i>
                            <input type="text" id="nombre" name="nombre" class="form-control">
                            <label for="nombre">Nombre Completo </label>
                        </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col">
                        <div class="md-form input-with-pre-icon">
                            <i class="fas fa-phone-alt input-prefix light-green-text pr-3"></i>
                            <input required type="number" id="tel" name="tel" class="form-control">
                            <label for="tel">Teléfono</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form input-with-pre-icon">
                            <i class="fas fa-home input-prefix cyan-text pr-3"></i>
                            <input type="text" id="dir" name="dir" class="form-control">
                            <label for="dir">Dirección </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="md-form input-with-pre-icon">
                            <i class="fas fa-calendar-alt input-prefix teal-text pr-3"></i>
                            <input required type="date" id="fecha" name="fecha" min = "<?php echo date("Y-m-d",strtotime(date("Y-m-d")."+ 15 days"));?>" class="form-control">
                            <label for="fecha">Fecha de reserva</label>
                        </div>
                    </div>
                </div>   
                <div class="col" align="center">
                    <input type="submit" id="btnEnviar" data-target="#modalPush" class="btn btn-success name="btnEnviar" value="Reservar">
                    <button type="reset" class="btn btn-primary">Nueva Reserva</button>
                </div>
        
                <!--Modal: modalPush-->
                <div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                    <div class="modal-dialog modal-notify modal-info" role="document">
                        <!--Content-->
                        <div class="modal-content text-center">
                        <!--Header-->
                        <div class="modal-header d-flex justify-content-center">
                            <p class="heading">Be always up to date</p>
                        </div>

                        <!--Body-->
                        <div id="respuesta" class="modal-body">
                        </div>

                        <!--Footer-->
                        <div class="modal-footer flex-center">
                            <a href="https://mdbootstrap.com/products/jquery-ui-kit/" class="btn btn-info">Yes</a>
                            <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No</a>
                        </div>
                        </div>
                        <!--/.Content-->
                    </div>
                </div>
                <!--Modal: modalPush-->
            </form>
        </div>
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small blue-gradient">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 blue-gradient py-4" >Edwin Albeiro Chitan Coral <br>
        <a href="https://www.udenar.edu.co/"> Universidad de Nariño</a><br>
        Ingenieria de Sistemas
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>