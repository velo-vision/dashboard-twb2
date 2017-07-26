<?php
  require("functions.php");
  get_header();
  get_aside();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- /.col -->
      <div class="col-md-6 col-md-offset-3 titulo-perfil1">
        <p>
          COTIZACIONES
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board" width="100%">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 top-20">
          <!-- /.box-header -->
          <div class="box-body">
            <section class="content padding-cero">
              <div class="col-md-12 col-xs-12 padding-cero">
                <div class="col-xs-3 col-sm-3 col-md-4 prev-next nomargin">
                  <img src="images/dashboard/anterior.png" alt="The Wedding Board">
                  <span>Anterior</span>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 centers nomargin ">
                  <a href="cotizaciones.php">
                    <p class="editar btn-default3">
                      <img src="images/dashboard/volver.png" alt="The Wedding Board"> Volver a cotizaciones
                    </p>
                  </a>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-4 prev-next nomargin" style="text-align:right;">
                  <span>Siguiente</span>
                  <img src="images/dashboard/siguiente.png" alt="The Wedding Board">
                </div>
              </div>
              <div class="row margin-tamano">
                <div class="col-md-12 col-xs-12">
                  <div class="box box-primary top-30">
                    <div class="box-header with-border">
                      <h3 class="box-title"><strong>Cotización: Matilde Obregón</strong></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="mailbox-read-info">
                        <h5><strong>Fecha del Evento:</strong> 28-Oct-2017 <!-- <span class="span-coti">Lugar del Evento: </span>Lorem ipsum dolor sit amet, consectetuer --></h5>
                        <h5><strong># Invitados: </strong>300</h5>
                      </div>

                      <div class="mailbox-read-message">
                        <strong>Detalles: </strong>
                        <p>Hello The Wedding</p>

                        <p>
                          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                          Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                          Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                          Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                          imperdiet a, venenatis vitae, justo.
                        </p>
                      </div>
                      <!-- /.mailbox-read-message -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                  </div>
                  <!-- /. box -->
                </div>
                
                <!-- /.col -->
              </div>
              </div>
              <!-- /.row -->
            </section>
          </div>
          <!-- /.box-body -->
          <!-- /.box-footer -->
        <!-- /. box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="control-sidebar-bg"></div>
</div>
<?php
	include("footer-3.php");
?>
