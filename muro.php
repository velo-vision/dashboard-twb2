<?php
  require("functions.php");
  get_header();
  get_aside();
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<section>
  <div class="container-fluid nomargin">
    <div class="col-md-12 bg-muro nomargin">
      <div class="col-md-12 border-dotted E-centro-7">
        <div class="btn btn-file añadir-foto E-add-img-7">
          <i class="fa fa-file-image-o" aria-hidden="true"></i> Añadir Imagen
          <input type="file" name="attachment">
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-12 E-margin-pie">
      <div class="col-md-4 col-lg-4">
        <div class="col-md-12 nomargin content-muro" >
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="position: relative;">
            <div class="foto-perfil E-marco-foto">
              <div class="btn btn-file añadir-foto E-titulo-img">
                <i class="fa fa-file-image-o" aria-hidden="true"></i> <span >Añadir fotografia</span>
                <input type="file" name="attachment">
              </div>
            </div>
              <!-- <img src="images/recursos/foto-perfil.png" alt=""> -->
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-3 titulo-muro E-titulo-F2">
            <p>
              <strong><span>JL</span> Event Planner</strong>
            </p>
            <p>
              Decoration
            </p>
          </div>
          <div class="col-md-10 col-md-offset-2 col-lg-8 col-lg-offset-2 top-30 E-padding-7 E-padding-7-1200">
             <a href="#" data-toggle="modal" data-target="#cotizacion" data-whatever="@mdo">
              <p class="btn boton-registro hvr-back-pulse radius-5"><i class="fa fa-envelope-o E-separacion-icons" aria-hidden="true"></i>   Solicitar cotización</p>
            </a>
          </div>
          <div class="col-md-10 col-md-offset-2 col-lg-8 col-lg-offset-2 top-30 E-padding-7 E-padding-7-1200">
           <a href="#" data-toggle="modal" data-target="#proveedor" data-whatever="@mdo">
              <p class="btn boton-registro hvr-back-pulse radius-5"><i class="fa fa-plus-square-o E-separacion-icons" aria-hidden="true"></i>    Añadir a porveedores</p>
            </a>
          </div>
          <div class="col-md-12 sociales top-30">
            <span>
              <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </span>
            <span>
              <a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </span>
            <span>
              <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </span>          
          </div>
          <div class="col-md-12 top-30">
            <a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
              <p class="boton-ceremonia">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>EDITAR REDES</span>
              </p>
            </a>
          </div>
          <div class="col-md-12 top-dotted top-30">
            <p class="red-colaboracion top-30 centers">RED DE COLABORACIÓN</p>
          </div>
          <div class="col-md-12 top-30 dotted-border E-red-colabortacion">
            <p class="nomargin">
              AÚN NO TIENES RED
            </p>
            <p class="nomargin">
              DE COLABORADORES
            </p>            
            <div class="col-md-10 col-md-offset-1">
            <form>
                <input type="text" name="proveedor" placeholder="Encuentra Proveedores" class="boton-red E-boton-colaboracion">
                <button type="submit" class="btn boton-registro hvr-back-pulse E-btn-buscar">BUSCAR</button>
            </form>
           
           
             
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-7 col-md-offset-1">
        <div class="col-md-12 top-30">
          <div class="form-group">
            <textarea class="form-control textarea-dotted E-form" id="exampleTextarea" placeholder="Escribe tu descripción." rows="3"></textarea>
          </div>
        </div>
        <div class="col-md-12 top-30">
          <div class="col-md-6 col-lg-4 col-lg-offset-2">
             <a href="#" data-toggle="modal" data-target="#Mensaje1" data-whatever="@mdo">
              <p class="boton-ceremonia">
                <i class="fa fa-comments-o" aria-hidden="true"></i> <span>Enviar mensaje</span>
              </p>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
           <a href="#" data-toggle="modal" data-target="#favorito" data-whatever="@mdo">
              <p class="boton-ceremonia">
                <i class="fa fa-heart" aria-hidden="true"></i> <span>Añadir favoritos</span>
              </p>
            </a>
          </div>
        </div>
        <div class="col-md-12 top-50">
          <p class="red-colaboracion centers">NUESTRO TRABAJO</p>
        </div>
        <div class="col-md-12 dotted-border top-30 E-galeria-200 E-color">
          <p class="nomargin">
            AÚN NO TIENES GALERÍAS CREADAS
          </p>
          <div class="col-md-6 col-md-offset-3  col-lg-6 col-lg-offset-3 top-30">
            <a href="crear-galeria.php">
              <p class="btn boton-registro hvr-back-pulse"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Crear nueva galería</p>
            </a>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- /.content -->
</div>
<!-- cotizaciones -->
<div class="modal fade" id="cotizacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
        </button>
      </div>
      <div class="modal-body col-xs-12 col-md-12 col-lg-12 E-centro-form">
        <p class="boton-ceremonia E-border-no">
          <span>Solicitud de cotización en Proceso</span>
        </p>
        
        <!--  <button type="submit" class="btn btn-secondary boton-crear" data-dismiss="modal">Enviar</button>       -->
      

      </div>
      <div class="modal-footer centers">
       <!--  <button type="button" class="btn btn-secondary boton-crear" data-dismiss="modal">Enviar</button> -->
      </div>
    </div>
  </div>
</div>

<!-- proveedor -->
<div class="modal fade" id="proveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
        </button>
      </div>
      <div class="modal-body col-xs-12 col-md-12 col-lg-12 E-centro-form">
        <p class="boton-ceremonia E-border-no">
          <span> Proveedor Ha sido Añadido satisfactoriamente</span>
        </p>
        
        <!--  <button type="submit" class="btn btn-secondary boton-crear" data-dismiss="modal">Enviar</button>       -->
      

      </div>
      <div class="modal-footer centers">
       <!--  <button type="button" class="btn btn-secondary boton-crear" data-dismiss="modal">Enviar</button> -->
      </div>
    </div>
  </div>
</div>

<!-- Favoritos -->
<div class="modal fade" id="favorito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
        </button>
      </div>
      <div class="modal-body col-xs-12 col-md-12 col-lg-12 E-centro-form">
        <p class="boton-ceremonia E-border-no">
          <i class="fa fa-heart" aria-hidden="true"></i> <span>Ha sido Añadido a favoritos satisfactoriamente</span>
        </p>
        
        <!--  <button type="submit" class="btn btn-secondary boton-crear" data-dismiss="modal">Enviar</button>       -->
      

      </div>
      <div class="modal-footer centers">
       <!--  <button type="button" class="btn btn-secondary boton-crear" data-dismiss="modal">Enviar</button> -->
      </div>
    </div>
  </div>
</div>
<!--  -->



<!-- modal mensaje -->
<!--MODAL-->
<div class="modal fade" id="Mensaje1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
        </button>
      </div>
      <div class="modal-body col-xs-12 col-md-12 col-lg-12 E-centro-form">
      <p>Escribe tu Mensaje</p>
      <form>
        <input type="text" name="nombre" placeholder="Correo electronico">        
         <textarea class="form-control textarea-dotted E-form" id="exampleTextarea" placeholder="Escribe tu Mensaje." rows="1"></textarea> 
         <button type="submit" class="btn btn-secondary boton-crear" data-dismiss="modal">Enviar</button>      
      </form>

      </div>
      <div class="modal-footer centers">
       <!--  <button type="button" class="btn btn-secondary boton-crear" data-dismiss="modal">Enviar</button> -->
      </div>
    </div>
  </div>
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
