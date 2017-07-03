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
          <div class="col-xs-12 col-md-12 col-lg-12 top-20">
           <div class="col-sm-12 nombre-usuario">
             <p class="titulo-popoup" style="text-transform:none;">
               JL Eve<span>nt Pl</span>anner <br>Decoration
             </p>                       
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 E-perfil-10"> 
          <p class="titulo-popoup nomargin" style="text-transform:none;">
           CAMBIAR TELÉFONO
         </p>
         <form>           
           <div class="col-xs-12 col-md-12 col-lg-12">
              <p>Nuevo número</p>
              <input type="text" name="numero">
           
              <p>Introducir contraseña</p>
              <input type="text" name="password">
           </div>
           <button type="submit">Guardar</button>           
          </form>
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
