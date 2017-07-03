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
        <p class="red-colaboracion centers">ACTUALIZAR METODO DE PAGO</p>
      </div>
        <div class="col-md-12 top-30">

          <div class="col-md-10 col-md-offset-1">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs color-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a>
              </li>
              <li role="presentation">
                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a>
              </li>
              <li role="presentation">
                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home"><p>prueba 1</p></div>
              <div role="tabpanel" class="tab-pane" id="profile"><p>prueba 2</p></div>
              <div role="tabpanel" class="tab-pane" id="messages"><p>prueba 3</p></div>
            </div>

          </div>
        </div>
    </div>
</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
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
