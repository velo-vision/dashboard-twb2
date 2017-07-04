<?php
  require("functions.php");
  get_header();
  get_aside();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section>
      <div class="container-fluid">
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
        <div class="col-md-10 col-md-offset-1 top-30 margin-muro pad-perfil">
          <div class="col-xs-12 col-md-12 titulo-muro1 nomargin pad-perfil">
            <p class="border-top centers">
              CUENTA
            </p>
          </div>
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor pad-perfil">
            <div class="col-md-11">
              <p>
                <strong>Nombre Proveedor:</strong> JL Event Planner
              </p>
            </div>
            <div class="col-md-1"></div>
          </div>
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor pad-perfil">
            <div class="col-md-11">
              <p>
                <strong>Categoría:</strong> Decoration
              </p>
            </div>
            <div class="col-md-1"></div>
          </div>
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor pad-perfil">
            <div class="col-md-11">
              <p>
                <strong>Mail:</strong> jl.event.planner@mailtest.mx
              </p>
            </div>
            <div class="col-md-1"></div>
          </div>
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor pad-perfil ">
            <div class="col-md-6">
              <p>
                <strong>Teléfono:</strong> 55 20 86 54 74
              </p>
            </div>
            <div class="col-md-6 centers">
              <a href="configuracion1.php">
                <p>
                  <span>Cambiar Teléfono</span>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor pad-perfil">
            <div class="col-md-6">
              <p>
                <strong>Contraseña:</strong> ************
              </p>
            </div>
            <div class="col-md-6 centers">
              <a href="configuracion2.php">
                <p>
                  <span>Cambiar Contraseña</span>
                </p>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-10 col-md-offset-1 top-30 margin-muro border-top pad-perfil">
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor pad-perfil">
            <div class="col-md-6">
              <p>
                <strong>Membresía:</strong> Tipo C
              </p>
            </div>
            <div class="col-md-6 centers">
              <a href="configuracion3.php">
                <p>
                  <span>Actualizar membresía</span>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor pad-perfil">
            <div class="col-md-6">
              <p>
                <strong>Metodo de pago:</strong> xxx-xxxx-xxx-8920
              </p>
            </div>
            <div class="col-md-6 centers pad-perfil">
              <a href="metodo-de-pago.php">
                <p>
                  <span>Activar metodo de pago</span>
                </p>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-10 col-md-offset-1 top-30 margin-muro border-top pad-perfil">
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor pad-perfil">
            <div class="col-md-6">
              <p>
                <strong>Desactivar Notificaciones</strong>
              </p>
            </div>
            <div class="col-md-6 centers pad-perfil">
              <span style="margin-right:10px;">no</span>
              <label class="switch nomargin">
                <input type="checkbox">
                <div class="slider round"></div>
              </label>
              <span style="margin-left:10px;">si</span>
            </div>
          </div>
          <div class="col-md-12 border-top top-30">
            <div class="col-md-4 col-md-offset-4 top-20 bottom-100 centers">
              <a href="muro.php"><p type="submit" class="btn boton-guardar hvr-back-pulse">Guardar</p></a>
            </div>
          </div>
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
