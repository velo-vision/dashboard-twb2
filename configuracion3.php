<?php
  require("functions.php");
  get_header();
  get_aside();
?>
<link rel="stylesheet" type="text/css" href="css/galery.css">
<link rel="stylesheet" href="css/hover-muro.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<section>
  <div class="container-fluid nomargin">
    <div class="col-xs-12 col-md-6 col-md-offset-3 titulo-perfil1">
      <p>
        MI CUENTA
      </p>
      <img src="images/recursos/linea-greca.png" alt="The Wedding Board" width="100%">
    </div>
    <div class="col-md-4 col-md-offset-4 margin-perfil">
      <div class="col-md-12 centers foto-perfil1">
        <img src="images/recursos/planer-2.png" alt="">
      </div>
      <div class="col-md-12 top-20">
       <div class="col-sm-12 nombre-usuario">
         <p class="titulo-popoup" style="text-transform:none;">
           JL Eve<span>nt Pl</span>anner
         </p>
         <p class="titulo-popoup nomargin" style="text-transform:none;">
           Decoration
         </p>
       </div>
      </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <div class="col-md-12 top-50 border-top">
        <p class="red-colaboracion centers">ACTUALIZAR MEMBRESÍA</p>
      </div>
        <div class="col-md-12 top-30">

          <div class="col-md-10 col-md-offset-1">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs color-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#A" aria-controls="A" role="tab" data-toggle="tab">MEMBRESÍA A</a>
              </li>
              <li role="presentation">
                <a href="#B" aria-controls="B" role="tab" data-toggle="tab">MEMBRESÍA B</a>
              </li>
              <li role="presentation">
                <a href="#C" aria-controls="C" role="tab" data-toggle="tab">MEMBRESÍA C</a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="A">
              <div class="col-xs-12 col-md-12 col-lg-8 col-lg-offset-2 E-perfil-12">
                 <p class="titulo">
                 BE<span>NE</span>FICIOS
                </p>
                <p>
                  <span><img src="images/recursos/dot.png"></span> 
                  Lorem ipsum dolor sit amet Lorem ipsum dolor sit
                </p>
                <p>
                  <span><img src="images/recursos/dot.png"></span> 
                  Lorem ipsum dolor sit amet Lorem ipsum
                </p>
                <p>
                  <span><img src="images/recursos/dot.png"></span> 
                  Lorem ipsum dolor sit amet Lorem 
                </p>
                 <p>
                  <span><img src="images/recursos/dot.png"></span> 
                  Lorem ipsum dolor sit amet Lorem 
                </p>
                <p>
                  <span><img src="images/recursos/dot.png"></span> 
                  Lorem ipsum dolor sit amet
                </p>
                <button type="button" 
                  class="btn btn-success btn-sm"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                  Añadir estos beneficios
                </button>                
                </div>                
              </div>
              <div role="tabpanel" class="tab-pane" id="B">
                <div class="col-xs-12 col-md-12 col-lg-8 col-lg-offset-2 E-perfil-12">
                 <p class="titulo">
                 BE<span>NE</span>FICIOS
                </p>
                <p>
                  <span><img src="images/recursos/dot.png"></span> 
                  Lorem ipsum dolor sit amet Lorem ipsum dolor sit
                </p>
                <p>
                  <span><img src="images/recursos/dot.png"></span> 
                  Lorem ipsum dolor sit amet Lorem ipsum
                </p>
                <p>
                  <span><img src="images/recursos/dot.png"></span> 
                  Lorem ipsum dolor sit amet Lorem 
                </p>
                <p>
                  <span><img src="images/recursos/dot.png"></span> 
                  Lorem ipsum dolor sit amet
                </p>
                <button type="button" 
                  class="btn btn-success btn-sm"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                  Añadir estos beneficios
                </button>                
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="C">
                <div class="col-xs-12 col-md-12 col-lg-8 col-lg-offset-2 E-perfil-12">
                 <p class="titulo">
                 TUS BE<span>NE</span>FICIOS
                </p>
                <p>
                  <span><img src="images/recursos/dot.png"></span> 
                  Lorem ipsum dolor sit amet Lorem ipsum dolor sit
                </p>
                <p>
                  <span><img src="images/recursos/dot.png"></span> 
                  Lorem ipsum dolor sit amet Lorem ipsum
                </p>
                <p>
                  <span><img src="images/recursos/dot.png"></span> 
                  Lorem ipsum dolor sit amet Lorem 
                </p>
                <p>
                  <span><img src="images/recursos/dot.png"></span> 
                  Lorem ipsum dolor sit amet
                </p>
                <p class="e-mensaje">Ya cuentas con estos beneficios</p>
                <p class="e-vigencia">Vigencia 18 / 10 / 17</p>
                </div>
              </div>
            </div>

          </div>
        </div>
    </div>
</section>
<!-- /.content -->
</div>

<!--MODAL-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> <strong>cerrar</strong></span>
        </button>
      </div>
      <div class="modal-body col-xs-12 col-md-12 col-lg-12 e-modal">
        <p class="titulo-popoup">
           MEMBRESÍ<span>A A</span>CTUALIZADA
        </p>
        <p>Se realizará un ajuste en el cobro de tu membresía que<br> se verá reflejado en el estado de cuenta de tu<br> método de pago</p>


      </div>
      <div class="modal-footer centers">
        <button type="button" class="btn btn-secondary boton-crear" data-dismiss="modal">Regresar a mi cuenta</button>
      </div>
    </div>
  </div>
</div>
<!--MODAL-->

<div class="control-sidebar-bg"></div>
</div>

<?php
  get_footer();
?>

<script type="text/javascript" src="js/galery/jq.js"></script>
<script type="text/javascript" src="js/galery/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/galery/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="js/galery/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/galery/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/galery/helper.js"></script>
<script type="text/javascript" src="js/galery/template.js"></script>
