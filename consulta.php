<?php include 'estilos.php'?>
<body>
    
    <div id="contenedor">
        <button class="btn btn-primary" data-toggle="modal" data-target="#centralModalSuccess">Todas las reservas</button>
         
        <!-- Central Modal Medium Success -->
        <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-notify modal-success" role="document" >
                <!--Content-->
                <div class="modal-content" modal-lg>
                    <!--Header-->
                    <div class="modal-header"  >
                        <p class="heading lead">Lista de Reservas</p>
            
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>
         
                    <!--Body-->
                    <div class="modal-body" >
                        <div class="text-center">
                            <table class="table">
                                <caption>Lista de reservas</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">Identificación</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Ruta</th>
                                        <th scope="col">Fecha de Reserva</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php
                                            $lines = file('lista.txt');
                                            foreach ($lines as $line_num => $line) { //Recorro el arreglo asigno variables al nuevo arreglo creado x cada fila
                                            list ($ident,$linea,$orig,$dest,$tipo,$nomb,$telef,$dir,$fechaR)= explode(";", $line); //crear un nuevo arreglo x fila
                                            //Listamos cada fila
                                            ?>
                                            <tr>
                                                <td><?php echo $ident ?></td>
                                                <td><?php echo $nomb ?></td>
                                                <td><?php echo $orig." - ".$dest ?></td>
                                                <td><?php echo $fechaR ?></td>
                                            </tr>
                                            <?php }
                                            ?>
                                        </td>
                                    </tr> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Cerrar</a>
                    </div>
              </div>
              <!--/.Content-->
            </div>
        </div>
        <!-- Central Modal Medium Success-->
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