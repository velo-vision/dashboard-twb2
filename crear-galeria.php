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
    <div class="col-md-12 nomargin">
      <figure class="snip1205">
        <img src="images/dashboard/muro-2.jpg" alt="The Wedding Board"/>
        <p>Cambiar imagen</p>
        <i class="fa fa-file-image-o" aria-hidden="true"></i>
        <a href="#!"></a>
      </figure>
    </div>
    <div class="col-md-4">
      <div class="col-md-12 nomargin content-muro1">
        <ul class="gallery nomargin">
          <li>
            <a href="#">
              <img src="images/dashboard/perfil-muro.png" alt="The Wedding Board" />
              <span class="name"><i class="fa fa-file-image-o" aria-hidden="true"></i><span class="title">Cambiar imagen</span></span>
            </a>
          </li>
        </ul>
        <div class="titulo-muro centers">
          <p>
            <strong><span>JL</span> Event Planner</strong>
          </p>
          <p>
            Decoration
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <div class="col-md-12 top-50">
        <p class="red-editar centers">EDITAR GALERÍAS</p>
      </div>
      <div class="col-md-10 col-md-offset-1 top-30">
        <div class="col-md-4">
          <a href="#!">
            <p class="boton-ceremonia1">
              <i class="fa fa-trash-o" aria-hidden="true"></i> <span>ELIMINAR GALERÍA</span>
            </p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#!">
            <p class="boton-ceremonia1">
              <i class="fa fa-plus-square-o" aria-hidden="true"></i> <span>AÑADIR FOTOS</span>
            </p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#!">
            <p class="boton-ceremonia2">
              <i class="fa fa-folder-open-o" aria-hidden="true"></i> <span>CREAR GALERÍA</span>
            </p>
          </a>
        </div>
      </div>
      <div class="col-md-12 top-30 collapsed-box">
        <div class="col-md-4 col-md-offset-4">
          <div class="form-group">
           <select class="form-control1" id="exampleSelect1">
             <option>NUEVA GALERÍA</option>
             <option>Categoría 2</option>
             <option>Categoría 3</option>
             <option>Categoría 4</option>
             <option>Categoría 5</option>
           </select>
         </div>
        </div>
        <div class="col-md-4 col-md-offset-4 centers top-30">
          <a href=""><div class="btn btn-primary width-cargar btn-file top-10">
            <i class="fa fa-files-o" aria-hidden="true"></i> CARGAR FOTOS
            <input type="file" name="attachment">
          </div></a>
          <p class="top-20 bottom-100">
            MÁXIMO 25 FOTOS POR GALERÍA
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->


<!-- /.content-wrapper -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>

<?php
  get_footer();
?>
