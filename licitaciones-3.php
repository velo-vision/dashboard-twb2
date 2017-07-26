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
           LICITACIONES
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board" width="100%">
      </div>
      <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 top-20 botton-volver paddingno">
          <div class="col-xs-3 col-sm-3 col-md-4 prev-next nomargin">
            <img src="images/dashboard/anterior.png" alt="The Wedding Board">
            <span class="atras">Anterior</span>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-4 centers nomargin">
            <a href="licitaciones.php">
              <p class="editar" style="margin: 0 auto;">
                <img src="images/dashboard/volver.png" alt="The Wedding Board"> Volver a licitaciones
              </p>
            </a>
          </div>
          <div class="col-xs-3 col-sm-3 col-md-4 prev-next nomargin" style="text-align:right;">
            <span class="siguiente">Siguiente</span>
            <img src="images/dashboard/siguiente.png" alt="The Wedding Board">
          </div>
        </div>
        
      <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 top-20">
        <div class="box box-primary">
           <!-- /.box-header -->          
          <div class="col-md-12 col-xs-12">
              <div class="box box-primary top-30">
                <div class="col-xs-12 col-md-12 lici-margin">
                  <div class="col-xs-12 col-md-6 no-padding izquierda">
                    <p class="asunto-licitacion"><strong>Licitación:</strong> Lorem ipsum </p>
                  </div>
                  <div class="col-xs-12 col-md-6 derecha-lici  no-padding izquierda">
                     <p class="asunto-licitacion" style="margin-top:5px;"><strong>Usuario:</strong> Mónica Galindo</p>
                  </div>
                </div>
                <div class="col-xs-12 col-md-12  izquierda left-lici">
                 <div class="col-xs-12 col-md-4 no-padding">
                   <p class="nomargin asunto-licitacion1"><strong>Presupuesto:</strong>$50,000</p>
                   <p class="nomargin asunto-licitacion1"><strong>Categoría:</strong> Lorem ipsum </p>
                 </div>
                 <div class="col-xs-12 col-md-8 no-padding">
                    <p class="nomargin asunto-licitacion1"><strong>Lugar:</strong> Lorem ipsum dolor sit amet</p>
                    <p class="nomargin asunto-licitacion1"><strong>Fecha del evento:</strong> 28 Octubre 2017 <span class="mailbox-read-time pull-right margin-13">13 Mar. 2017 11:03 PM</span></p>

                 </div>
               </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box-footer no-padding separacion-lici mar-top">
                <div class="col-xs-12 col-sm-12 col-md-11 mailbox-read-message justificado">
                  <p>
                    Lorem ipsum dolor sit amet, omnesque tacimates hendrerit an sit. Ne has integre vivendum. Eos iisque tractatos id. Per prompta moderatius philosophia ea.<br><br>
                    Eu duis posse referrentur vis. Duo id erant adipisci inimicus, ei falli patrioque complectitur ius, ex mandamus senserit per. Vide nostro veritus ut ius, est at scaevola
                    invenire suscipiantur. Cu per velit novum sententiae. Ius quodsi definitiones id.
                  </p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-cero-li">
                <div class="box-footer padding-cero-li" style="border-top:none;">
                  <ul class="mailbox-attachments clearfix padding-cero-li">
                    <li>
                      <span class="mailbox-attachment-icon has-img">
                        <img src="images/recursos/galery5.jpg" alt="The Wedding Board">
                      </span>
                      <div class="mailbox-attachment-info">
                        <a href="#" class="mailbox-attachment-name">
                          <i class="fa fa-camera"></i> photo1.png
                        </a>
                        <span class="mailbox-attachment-size">
                          2.67 MB
                          <a href="images/recursos/galery5.jpg" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                      </div>
                    </li>
                    <li>
                      <span class="mailbox-attachment-icon has-img">
                        <img src="images/recursos/galery12.jpg" alt="The Wedding Board">
                      </span>
                      <div class="mailbox-attachment-info">
                        <a href="#" class="mailbox-attachment-name"><i class="fa fa-camera"></i> photo2.png</a>
                        <span class="mailbox-attachment-size">
                          1.9 MB
                          <a href="images/recursos/galery12.jpg" target="_blank" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>




                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <!-- /.mailbox-read-message -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
              </div>
              <!-- /. box -->
            </div>    
          </div>         
          <!-- /.box-body -->          
        </div>
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
