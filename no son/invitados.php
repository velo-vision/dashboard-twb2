<?php
  require("functions.php");
  get_header();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section>
    <div class="container-fluid nomargin">
      <div class="col-md-6 col-md-offset-3 titulo-perfil">
        <p>
          LISTA DE INVITADOS
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-4 col-md-offset-4" style="">
        <p class="lista">aún no tienes lista de invitados creadas</p>
        <div class="col-md-12">
          <button type="button" class="btn btn-primary hvr-back-pulse boton-invitados3" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
            <img src="images/recursos/open.png" alt="The Wedding Board"> Crear nueva lista de invitados
          </button>
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
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre de la Lista">
                  </div>
                </form>
              </div>
              <div class="modal-footer centers">
                <button type="button" class="btn btn-secondary boton-crear" data-dismiss="modal">Crear</button>
              </div>
            </div>
          </div>
        </div>
        <!--MODAL-->
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
<!-- ./wrapper -->
<?php
  get_footer();
?>
