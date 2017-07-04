<?php
  require("functions.php");
  get_header();

  get_aside();
?>
<link rel="stylesheet" href="css/hover-muro.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<section>
  <div class="container-fluid nomargin">
    <div class="col-md-6 col-md-offset-3 titulo-perfil">
      <p>
        RED DE COLABORACIÓN
      </p>
      <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
    </div>

    <div class="col-md-12 nomargin">
      <div>
        <div class="col-md-8 col-md-offset-2">
          <ul class="nav nav-tabs tabs-proveedor" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Solicitudes recibidas</a></li>
              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Solicitudes Enviadas</a></li>
          </ul>
        </div>
        <!--  -->
      
        <!-- Tab panes -->
        <div class="col-md-12 tab-content content-solicitud">
            <div role="tabpanel" class="tab-pane active" id="home">

              <div class="col-md-12 top-50">
                <?php for ($x=0; $x <3 ; $x++) { ?>    
               <div class="col-md-4 box box-widget widget-user">
                  <div class="col-md-12 border-solicitud">
                  <div class="widget-user-header bg-black" style="background: url('images/recursos/perfil-solicitud.jpg') center center no-repeat;background-size:cover">                    
                  </div>
                  <div class="widget-user-image">
                    <img class="img-circle" src="images/recursos/solicitud-1.png" alt="The Wedding Board">
                  </div>                  
                    <div class="col-xs-12 col-md-12 col-lg-12 centrado">
                        <h3 >Lorem Ipsum Dolor</h3>
                        <h5 >Fashion</h5>
                      </div>
                  </div>
                  <div class="box-footer">
                    <div class="col-xs-12 col-md-12 col-lg-12 E-aumento-div">                      
                      <div class="col-sm-6 col-md-6 col-lg-6 E-centrado">
                        <button type="button" class="btn btn-success btn-sm E-botn-c"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                          Confirmar
                        </button>
                      </div>
                      <div class="col-sm-6 col-md-6 col-lg-6 E-centrado">
                        <button type="button" class="btn btn-default btn-sm E-botn-c" data-widget="remove" data-toggle="tooltip" title="Remove">
                          Rechazar
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>


              <!--SEGUNDA GALERIA-->
              <div class="col-md-12 top-50">
                <?php for ($x=0; $x <3 ; $x++) { ?>    
               <div class="col-md-4 box box-widget widget-user">
                  <div class="col-md-12 border-solicitud">
                  <div class="widget-user-header bg-black" style="background: url('images/recursos/perfil-solicitud.jpg') center center no-repeat;background-size:cover">                    
                  </div>
                  <div class="widget-user-image">
                    <img class="img-circle" src="images/recursos/solicitud-1.png" alt="The Wedding Board">
                  </div>                  
                    <div class="col-xs-12 col-md-12 col-lg-12 centrado">
                        <h3 >Lorem Ipsum Dolor</h3>
                        <h5 >Fashion</h5>
                      </div>
                  </div>
                  <div class="box-footer">
                    <div class="col-xs-12 col-md-12 col-lg-12 E-aumento-div">                      
                      <div class="col-sm-6 col-md-6 col-lg-6 E-centrado">
                        <button type="button" class="btn btn-success btn-sm E-botn-c"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                          Confirmar
                        </button>
                      </div>
                      <div class="col-sm-6 col-md-6 col-lg-6 E-centrado">
                        <button type="button" class="btn btn-default btn-sm E-botn-c" data-widget="remove" data-toggle="tooltip" title="Remove">
                          Rechazar
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
                <!-- /.col -->
              </div>
              <!--TERCERA GALERIA-->
              <div class="col-md-12 top-50 ">
                <?php for ($x=0; $x <2 ; $x++) { ?>    
               <div class="col-md-4 box box-widget widget-user">
                  <div class="col-md-12 border-solicitud">
                  <div class="widget-user-header bg-black" style="background: url('images/recursos/perfil-solicitud.jpg') center center no-repeat;background-size:cover">                    
                  </div>
                  <div class="widget-user-image">
                    <img class="img-circle" src="images/recursos/solicitud-1.png" alt="The Wedding Board">
                  </div>                  
                    <div class="col-xs-12 col-md-12 col-lg-12 centrado">
                        <h3 >Lorem Ipsum Dolor</h3>
                        <h5 >Fashion</h5>
                      </div>
                  </div>
                  <div class="box-footer">
                    <div class="col-xs-12 col-md-12 col-lg-12 E-aumento-div">                      
                      <div class="col-sm-6 col-md-6 col-lg-6 E-centrado">
                        <button type="button" class="btn btn-success btn-sm E-botn-c"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                          Confirmar
                        </button>
                      </div>
                      <div class="col-sm-6 col-md-6 col-lg-6 E-centrado">
                        <button type="button" class="btn btn-default btn-sm E-botn-c" data-widget="remove" data-toggle="tooltip" title="Remove">
                          Rechazar
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>


              <div class="col-md-12 top-100 bottom-100">
                <div class="counter"></div>
                <button class="button-page paginate left"><i></i><i></i></button>
                <button class="button-page paginate right"><i></i><i></i></button>
              </div>
              <!--  -->


              <!--  -->
              <!-- /.row -->
            </div>

            <!--TABS2-->

            <div role="tabpanel" class="tab-pane active" id="profile">

              <div class="col-md-12 top-50">
                <!-- /.col -->
                 <?php for ($x=0; $x <3 ; $x++) { ?>    
               <div class="col-md-4 box box-widget widget-user">
                  <div class="col-md-12 border-solicitud">
                  <div class="widget-user-header bg-black" style="background: url('images/recursos/perfil-solicitud.jpg') center center no-repeat;background-size:cover">                    
                  </div>
                  <div class="widget-user-image">
                    <img class="img-circle" src="images/recursos/solicitud-1.png" alt="The Wedding Board">
                  </div>                  
                    <div class="col-xs-12 col-md-12 col-lg-12 centrado">
                        <h3 >Lorem Ipsum Dolor</h3>
                        <h5 >Fashion</h5>
                      </div>
                  </div>
                  <div class="box-footer">
                    <div class="col-xs-12 col-md-12 col-lg-12 E-aumento-div">                      
                      <div class="col-sm-6 col-md-6 col-lg-6 E-centrado">
                        <button type="button" class="btn btn-success btn-sm E-botn-c"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                          Confirmar
                        </button>
                      </div>
                      <div class="col-sm-6 col-md-6 col-lg-6 E-centrado">
                        <button type="button" class="btn btn-default btn-sm E-botn-c" data-widget="remove" data-toggle="tooltip" title="Remove">
                          Rechazar
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
                <!-- /.col -->
              </div>
              <!--SEGUNDA GALERIA-->
              <div class="col-md-12 top-50">
                 <?php for ($x=0; $x <3 ; $x++) { ?>    
               <div class="col-md-4 box box-widget widget-user">
                  <div class="col-md-12 border-solicitud">
                  <div class="widget-user-header bg-black" style="background: url('images/recursos/perfil-solicitud.jpg') center center no-repeat;background-size:cover">                    
                  </div>
                  <div class="widget-user-image">
                    <img class="img-circle" src="images/recursos/solicitud-1.png" alt="The Wedding Board">
                  </div>                  
                    <div class="col-xs-12 col-md-12 col-lg-12 centrado">
                        <h3 >Lorem Ipsum Dolor</h3>
                        <h5 >Fashion</h5>
                      </div>
                  </div>
                  <div class="box-footer">
                    <div class="col-xs-12 col-md-12 col-lg-12 E-aumento-div">                      
                      <div class="col-sm-6 col-md-6 col-lg-6 E-centrado">
                        <button type="button" class="btn btn-success btn-sm E-botn-c"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                          Confirmar
                        </button>
                      </div>
                      <div class="col-sm-6 col-md-6 col-lg-6 E-centrado">
                        <button type="button" class="btn btn-default btn-sm E-botn-c" data-widget="remove" data-toggle="tooltip" title="Remove">
                          Rechazar
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>

              <div class="col-md-12 top-100 bottom-100">
                <div class="counter"></div>
                <button class="button-page paginate left"><i></i><i></i></button>
                <button class="button-page paginate right"><i></i><i></i></button>
              </div>
            </div>
        </div>
      </div>
    </div>
</section>
</div>
<div class="control-sidebar-bg"></div>
</div>


<!--MODAL-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
        </button>
      </div>
      <div class="modal-body col-md-12">

        <p class="titulo-popoup">
            TÚ <span>SOLI</span>CITUD FUE ENVÍADA CON ÉXITO
          </p>

        <div class="col-md-12 box box-widget widget-user">
          <div class="col-md-12 border-solicitud">
          <div class="widget-user-header bg-black" style="background: url('images/recursos/perfil-solicitud.jpg') center center no-repeat;background-size:cover">                    
          </div>
          <div class="widget-user-image">
            <img class="img-circle" src="images/recursos/solicitud-1.png" alt="The Wedding Board">
          </div>                  
            <div class="col-xs-12 col-md-12 col-lg-12 centrado">
                <h3 >Lorem Ipsum Dolor</h3>
                <h5 >Fashion</h5>
              </div>
          </div>
          <div class="box-footer">
            <div class="row top-10 text-modal">
                <div class="col-xs-12 col-md-12 col-lg-12 parrafo-modal-solicitud">
                  <p>
                    Una vez que el administrador apruebe la colaboración, esta se verá
                    reflejada en tu perfil y tu administrador.
                  </p>
                </div>
                 <button type="button" class="btn btn-secondary boton-crear btn-modal-sol" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
        </div>



      </div>
      <div class="modal-footer centers">
       
      </div>
    </div>
  </div>
</div>
<!--MODAL-->

<!--MODAL2-->
<div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
        </button>
      </div>
      <div class="modal-body col-md-12">
        <div class="col-md-12">
          <p class="titulo-popoup">
            TÚ <span>SOLI</span>CITUD FUE ENVÍADA CON ÉXITO
          </p>
          <div class="box box-widget widget-user border-solicitud">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('images/recursos/perfil-solicitud.jpg') center center no-repeat;background-size:cover">
              <h3 class="widget-user-username sombra-texto">Lorem Ipsum Dolor</h3>
              <h5 class="widget-user-desc sombra-texto">Fashion</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="images/recursos/solicitud-4.png" alt="The Wedding Board">
            </div>
            <div class="box-footer">
              <div class="row top-10 text-modal">
                <div class="col-md-12">
                  <p>
                    EN ESPERA DE APROBACIÓN DEL PROVEEDOR
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer centers">
        <button type="button" class="btn btn-secondary boton-crear" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!--MODAL-->

<?php
  get_footer();
?>

<script>
// basic paging logic to demo the buttons
var pr = document.querySelector(".paginate.left");
var pl = document.querySelector(".paginate.right");
pr.onclick = slide.bind(this, -1);
pl.onclick = slide.bind(this, 1);
var index = 0, total = 6;
function slide(offset) {
index = Math.min(Math.max(index + offset, 0), total - 1);
document.querySelector(".counter").innerHTML = index + 1 + " / " + total;
pr.setAttribute("data-state", index === 0 ? "disabled" : "");
pl.setAttribute("data-state", index === total - 1 ? "disabled" : "");
}
slide(0);
</script>
