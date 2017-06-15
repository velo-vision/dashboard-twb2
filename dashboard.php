<?php
  include("head-2.php");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section>
    <div class="container-fluid">
      <div class="col-md-6 col-md-offset-3 titulo-perfil">
        <p>
          MI CUENTA
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-4 col-md-offset-4">
        <div class="col-md-12 nomargin foto-perfil">
          <img src="images/recursos/foto-perfil.png" alt="">
        </div>
        <div class="col-md-10 col-md-offset-1 top-50">
          <form>
           <div class="form-group row">
             <div class="col-sm-12">
               <input type="email" class="form-control" id="inputEmail3" placeholder="Nombre de Usuario">
             </div>
           </div>
           <div class="form-group top-20">
            <select class="form-control" id="exampleSelect1">
              <option>Elegir Categoría</option>
              <option>Categoría 2</option>
              <option>Categoría 3</option>
              <option>Categoría 4</option>
              <option>Categoría 5</option>
            </select>
          </div>
           <div class="form-group row top-20">
             <div class="col-sm-12">
               <input type="email" class="form-control" id="inputEmail3" placeholder="Cambiar Contraseña">
             </div>
           </div>
           <!-- <div class="col-md-12 titulo-perfil top-20">
             <p>
               METODOS DE PAGO
             </p>
           </div>
           <div class="form-group row">
             <div class="col-md-12 top-30">
               <a href="#!"><p type="submit" class="btn boton-registro hvr-back-pulse">AÑADIR METODOS DE PAGO</p></a>
             </div>
           </div> -->
           <div class="form-group row">
             <div class="col-md-6 col-md-offset-3 top-50 bottom-100">
               <!-- <a href="index.html" target="_blank"><button type="submit" class="btn boton-registro hvr-rectangle-out">INGRESA</button></a> -->
               <a href="perfil.php"><p type="submit" class="btn boton-registro hvr-back-pulse">Guardar</p></a>
             </div>
           </div>
         </div>
         </form>
        </div>
      </div>
  </section>

</div>

<div class="control-sidebar-bg"></div>
</div>


<?php
	include("footer-2.php");
?>
