<?php
  require("functions.php");
  get_header();
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<section>
  <div class="container-fluid nomargin">
    <div class="col-md-12 bg-muro nomargin">
      <div class="col-md-12 border-dotted">
        <div class="btn btn-file añadir-foto">
          <i class="fa fa-file-image-o" aria-hidden="true"></i> Añadir Imagen
          <input type="file" name="attachment">
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="col-md-12 nomargin content-muro">
        <div class="foto-perfil">
          <img src="images/recursos/foto-perfil.png" alt="">
        </div>
        <div class="titulo-muro centers">
          <p>
            <strong><span>JL</span> Event Planner</strong>
          </p>
          <p>
            Decoration
          </p>
        </div>
        <div class="col-md-8 col-md-offset-2 top-30">
          <a href="#!">
            <p class="btn boton-registro hvr-back-pulse radius-5"><i class="fa fa-envelope-o" aria-hidden="true"></i> Solicitar cotización</p>
          </a>
        </div>
        <div class="col-md-8 col-md-offset-2 top-30">
          <a href="#!">
            <p class="btn boton-registro hvr-back-pulse radius-5"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Añadir a porveedores</p>
          </a>
        </div>
        <!-- <div class="col-md-12 sociales top-30">
          <span>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          </span>
          <span>
            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          </span>
          <span>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </span>
          <span>
            <a href="https://es.pinterest.com/" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
          </span>
        </div> -->
        <div class="col-md-6 col-md-offset-3 top-30">
          <a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
            <p class="boton-ceremonia">
              <i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>SELECCIONAR REDES</span>
            </p>
          </a>
        </div>
        <div class="col-md-12 top-dotted top-30">
          <p class="red-colaboracion top-30 centers">RED DE COLABORACIÓN</p>
        </div>
        <div class="col-md-12 top-30 dotted-border">
          <p class="nomargin">
            AÚN NO TIENES RED
          </p>
          <p class="nomargin">
            DE COLABORADORES
          </p>
          <a href="#!">
            <p class="boton-red">
              Encuentra Proveedores
            </p>
          </a>
          <div class="col-md-8 col-md-offset-2">
            <a href="#!">
              <p class="btn boton-registro hvr-back-pulse"> BUSCAR</p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-7 col-md-offset-1">
      <div class="col-md-12 top-30">
        <div class="form-group">
          <textarea class="form-control textarea-dotted" id="exampleTextarea" placeholder="Escribe tu descripción." rows="3"></textarea>
        </div>
      </div>
      <div class="col-md-12 top-30">
        <div class="col-md-4 col-md-offset-2">
          <a href="#!">
            <p class="boton-ceremonia">
              <i class="fa fa-comments-o" aria-hidden="true"></i> <span>Enviar mensaje</span>
            </p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#!">
            <p class="boton-ceremonia">
              <i class="fa fa-heart" aria-hidden="true"></i> <span>Añadir favoritos</span>
            </p>
          </a>
        </div>
      </div>
      <div class="col-md-12 top-50">
        <p class="red-colaboracion centers">NUESTRO TRABAJO</p>
      </div>
      <div class="col-md-12 dotted-border top-30">
        <p class="nomargin">
          AÚN NO TIENES GALERÍAS CREADAS
        </p>
        <div class="col-md-4 col-md-offset-4 top-30">
          <a href="crear-galeria.php">
            <p class="btn boton-registro hvr-back-pulse"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Crear nueva galería</p>
          </a>
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
        <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
        </button>
      </div>
      <div class="modal-body col-md-12">
        <div class="col-md-12">
          <p class="titulo-popoup">
            Elige tus <span>red</span>es sociales
          </p>
          <form>
            <div class="col-md-12 col-xs-12">
              <div class="col-md-2 nomargin top-10">
                <label class="custom-control custom-checkbox selecciona-sociales">
                  <input type="checkbox" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                </label>
              </div>
              <div class="col-md-10">
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe la URL de tu red social">
                </div>
              </div>
            </div>
            <div class="col-md-12 col-xs-12">
              <div class="col-md-2 nomargin top-10">
                <label class="custom-control custom-checkbox selecciona-sociales">
                  <input type="checkbox" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                </label>
              </div>
              <div class="col-md-10">
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe la URL de tu red social">
                </div>
              </div>
            </div>
            <div class="col-md-12 col-xs-12">
              <div class="col-md-2 nomargin top-10">
                <label class="custom-control custom-checkbox selecciona-sociales">
                  <input type="checkbox" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description"><i class="fa fa-instagram" aria-hidden="true"></i></span>
                </label>
              </div>
              <div class="col-md-10">
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe la URL de tu red social">
                </div>
              </div>
            </div>
            <div class="col-md-12 col-xs-12">
              <div class="col-md-2 nomargin top-10">
                <label class="custom-control custom-checkbox selecciona-sociales">
                  <input type="checkbox" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description"><i class="fa fa-youtube-play" aria-hidden="true"></i>
                </label>
              </div>
              <div class="col-md-10">
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe la URL de tu red social">
                </div>
              </div>
            </div>
            <div class="col-md-12 col-xs-12">
              <div class="col-md-2 nomargin top-10">
                <label class="custom-control custom-checkbox selecciona-sociales">
                  <input type="checkbox" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description"><i class="fa fa-pinterest" aria-hidden="true"></i></span>
                </label>
              </div>
              <div class="col-md-10">
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe la URL de tu red social">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer centers">
        <button type="button" class="btn btn-secondary boton-crear" data-dismiss="modal">Actualizar</button>
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
