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
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-12">
          <div class="box-header with-border">
            <span class="box-title"></span>
            <div class="box-tools pull-right">
              <div class="has-feedback">
                <input type="text" class="form-control input-sm" placeholder="Search Mail">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="mailbox-controls">
              <!-- Check all button -->
              <!-- <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
              </button> -->
              <div class="dropdown boton-categoria">
                  <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-tag" aria-hidden="true"></i> Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Todos</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Flores</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Vestidos</a>
                  </div>
                </div>
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm">
                  Borrar <i class="fa fa-trash-o"></i>
                </button>
              </div>
              <!-- /.btn-group -->
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
              <div class="pull-right pag-center">
                1-50/200
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                </div>
                <!-- /.btn-group -->
              </div>
              <!-- /.pull-right -->
            </div>
            <div class="table-responsive mailbox-messages">
              <table class="table table-hover table-striped">
                <tbody >
                <tr class="texto-mail-active">
                  <td ><input type="checkbox"></td>
                  <td class=""><a href="licitaciones-3.php"><strong>Lorena Martínez</strong></a></td>
                  <td class="">
                    <strong>Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong>Presupuesto:</strong> $50.000.00</td>
                  <td class=""><strong>hace 5 min.</strong></td>
                </tr>
                <tr class="texto-mail-active">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Mónica Galván</strong></a></td>
                  <td class="">
                    <strong>Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong>Presupuesto:</strong> $50.000.00</td>
                  <td class=""><strong>hace 1 Hora</strong></td>
                </tr>
                <tr class="texto-mail-active">
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
                </tr>
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
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
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
</div>
<div class="control-sidebar-bg"></div>
</div>
<?php
  get_footer();
?>
