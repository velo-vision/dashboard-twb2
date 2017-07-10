<?php
  require("functions.php");
  get_header();
  get_aside();
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section>
    <div class="container-fluid">
      <div class="col-md-6 col-md-offset-3 titulo-perfil">
        <p>
          licitaciones
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board"  width="100%">
      </div>
      <div class="col-md-12">
          <div class="box-header with-border">
            <span class="box-title"></span>
            <div class="box-tools pull-right">
              <div class="has-feedback">
                <input type="text" class="form-control input-sm" placeholder="Buscar licitación">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <!--<button type="button" class="btn btn-default btn-sm checkbox-toggle">
                Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
              </button>
              <div class="dropdown boton-categoria">
                  <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm btn-default2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-tag" aria-hidden="true"></i>Mostrar<i class="fa fa-caret-down" aria-hidden="true"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> <button id="menor">Todos</button></a>
                    <a class="dropdown-item" href="#" id="mayor"><i class="fa fa-circle" aria-hidden="true"></i> Mayor a menor</a>
                    <a class="dropdown-item" href="#" id="menor"><i class="fa fa-circle" aria-hidden="true"></i> Menor a Mayor</a>
                  </div>
                </div> -->
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm">
                  Borrar <i class="fa fa-trash-o"></i>
                </button>
              </div>
              <!-- /.btn-group -->
              <!-- <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button> -->
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
              <div class="pull-right pag-center">
                1-50/200
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-default2 btn-sm"><i class="fa fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-default2 btn-sm"><i class="fa fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.pull-right -->
            </div>
            <div class="table-responsive mailbox-messages">
            <table cellspacing="1" class="sortable table table-hover table-striped">
               <thead>
                <tr>
                  <th></th>
                  <th>Nombre</th>
                  <th>Fecha de Evento</th>
                  <th>Presupuesto</th>
                  <th>Entregado</th>                
                </tr>
              </thead>
             <!-- <tfoot>
                <tr>
                  <th></th>
                  <th>Nombre</th>
                  <th>Fecha de Evento</th>
                  <th>Presupuesto</th>
                  <th>Entregado</th>                
                </tr>
              </tfoot> -->
              <tbody>

                <?php for ($i=0; $i <3 ; $i++) { ?>
                  <tr id="cincuenta" class="texto-mail-active">
                  <td ><input type="checkbox"></td>
                  <td class=""><a href="licitaciones-3.php"><strong>Lorena Martínez</strong></a></td>
                  <td class=""><a href="licitaciones-3.php" class="a2">
                    <strong>Fecha de Evento:</strong> 28-Oct-2017</a>
                  </td>
                  <td class=""><a href="licitaciones-3.php" class="a2"><strong>Presupuesto:</strong> $50.000.00</a></td>
                  <td class=""><a href="licitaciones-3.php" class="a2"><strong>hace 5 min.</strong></a></td>
                </tr>
                <?php } ?>
                <?php for ($i=0; $i <7 ; $i++) { ?>
                 <tr id="veinte" class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="licitaciones-3.php"><strong>Mónica Galván</strong></a></td>
                  <td class=""><a href="licitaciones-3.php" class="color-a">
                    <strong>Fecha de Evento:</strong> 28-Oct-2017</a>
                  </td>
                  <td class=""><a href="licitaciones-3.php" class="color-a"><strong>Presupuesto:</strong> $20.000.00</a></td>
                  <td class=""><a href="licitaciones-3.php" class="color-a"><strong>hace 1 Hora</strong></a></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>


            
              <!-- <table class="table table-hover table-striped">
                <tbody >
                <?php /*for ($i=0; $i <3 ; $i++) { ?>
                  <tr id="cincuenta" class="texto-mail-active">
                  <td ><input type="checkbox"></td>
                  <td class=""><a href="licitaciones-3.php"><strong>Lorena Martínez</strong></a></td>
                  <td class=""><a href="licitaciones-3.php" class="a2">
                    <strong>Fecha de Evento:</strong> 28-Oct-2017</a>
                  </td>
                  <td class=""><a href="licitaciones-3.php" class="a2"><strong>Presupuesto:</strong> $50.000.00</a></td>
                  <td class=""><a href="licitaciones-3.php" class="a2"><strong>hace 5 min.</strong></a></td>
                </tr>
                <?php } ?>
                <?php for ($i=0; $i <7 ; $i++) { ?>
                 <tr id="veinte" class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="licitaciones-3.php"><strong>Mónica Galván</strong></a></td>
                  <td class=""><a href="licitaciones-3.php" class="color-a">
                    <strong>Fecha de Evento:</strong> 28-Oct-2017</a>
                  </td>
                  <td class=""><a href="licitaciones-3.php" class="color-a"><strong>Presupuesto:</strong> $20.000.00</a></td>
                  <td class=""><a href="licitaciones-3.php" class="color-a"><strong>hace 1 Hora</strong></a></td>
                </tr>
                <?php } */?> -->
                <!-- <tr class="texto-mail-active">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Ernestina Alfonso</strong></a></td>
                  <td class="">
                    <strong>Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong>Presupuesto:</strong> $50.000.00</td>
                  <td class=""><strong>hace 1 día</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>María Concepción</strong></a></td>
                  <td class="">
                    <strong>Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong>Presupuesto:</strong> $50.000.00</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Georgina Gómez</strong></a></td>
                  <td class="">
                    <strong>Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong>Presupuesto:</strong> $50.000.00</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Valería Ortiz</strong></a></td>
                  <td class="">
                    <strong>Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong>Presupuesto:</strong> $50.000.00</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Natalia Esparza</strong></a></td>
                  <td class="">
                    <strong>Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong>Presupuesto:</strong> $50.000.00</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Esmeralda Peralta</strong></a></td>
                  <td class="">
                    <strong>Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong>Presupuesto:</strong> $50.000.00</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Bibiana Gaytan</strong></a></td>
                  <td class="">
                    <strong>Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong>Presupuesto:</strong> $50.000.00</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>María Luisa Contreras</strong></a></td>
                  <td class="">
                    <strong>Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong>Presupuesto:</strong> $50.000.00</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Lucero Del Pilar Vivanco</strong></a></td>
                  <td class="">
                    <strong>Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong>Presupuesto:</strong> $50.000.00</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr> -->
                </tbody>
              </table>
              <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer no-padding">
            <div class="mailbox-controls">
              <div class="pull-right pag-center">
                1-50/200
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-default2 btn-sm"><i class="fa fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-default2 btn-sm"><i class="fa fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.pull-right -->
            </div>
          </div>

        <!-- /. box -->
      </div>
    </div>
  </section>
  <!-- /.content -->

<?php
  get_footer();
?>
