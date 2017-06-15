<?php
  require("functions.php");
  get_header();
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
        <div class="col-md-10 col-md-offset-1 top-30 margin-muro">
          <div class="col-md-12 titulo-muro">
            <p class="border-top centers" style="text-transform:none;">
              <span>CUE</span>NTA
            </p>
          </div>
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor">
            <div class="col-md-11">
              <p>
                <strong>Nombre Proveedor:</strong> JL Event Planner
              </p>
            </div>
            <div class="col-md-1"></div>
          </div>
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor">
            <div class="col-md-11">
              <p>
                <strong>Categoría:</strong> Decoration
              </p>
            </div>
            <div class="col-md-1"></div>
          </div>
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor">
            <div class="col-md-11">
              <p>
                <strong>Mail:</strong> jl.event.planner@mailtest.mx
              </p>
            </div>
            <div class="col-md-1"></div>
          </div>
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor">
            <div class="col-md-6">
              <p>
                <strong>Teléfono:</strong> 55 20 86 54 74
              </p>
            </div>
            <div class="col-md-6 centers">
              <a href="#" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">
                <p>
                  <span>Cambiar Teléfono</span>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor">
            <div class="col-md-6">
              <p>
                <strong>Contraseña:</strong> ************
              </p>
            </div>
            <div class="col-md-6 centers">
              <a href="#" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">
                <p>
                  <span>Cambiar Contraseña</span>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor">
            <div class="col-md-6">
              <p>
                <strong>Membresía:</strong> Tipo C
              </p>
            </div>
            <div class="col-md-6 centers">
              <a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                <p>
                  <span>Actualizar membresía</span>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor">
            <div class="col-md-6">
              <p>
                <strong>Metodo de pago:</strong>
              </p>
            </div>
            <div class="col-md-6 centers">
              <a href="#" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">
                <p>
                  <span>Activar metodo de pago</span>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-10 col-md-offset-1 cuenta-proveedor">
            <div class="col-md-6">
              <p>
                <strong>Desactivar Notificaciones</strong>
              </p>
            </div>
            <div class="col-md-6 centers">
              <span style="margin-right:10px;">no</span>
              <label class="switch nomargin">
                <input type="checkbox">
                <div class="slider round"></div>
              </label>
              <span style="margin-left:10px;">si</span>
            </div>
          </div>
          <div class="col-md-12 border-top top-30">
            <div class="col-md-4 col-md-offset-4 top-20 bottom-100">
              <a href="muro.php"><p type="submit" class="btn boton-registro hvr-back-pulse">Guardar</p></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

  <!--MODAL TELÉFONO-->
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
          </button>
        </div>
        <div class="modal-body col-md-12">
          <div class="col-md-4 col-md-offset-4 centers">
            <img width="50%;" src="images/recursos/logo.png" title="Logo" alt="The Wedding Board">
          </div>
          <div class="col-md-12">
            <p class="titulo-popoup bottom-20">
              CAMBIAR <span>TELÉ</span>FONO
            </p>
            <p class="titulo-popoup nomargin" style="text-transform:none;">
              Nuevo número
            </p>
            <div class="form-group row">
              <div class="col-sm-8 col-sm-offset-2">
                <input type="tel" class="form-control" id="inputEmail3" placeholder="">
              </div>
            </div>
            <p class="titulo-popoup nomargin" style="text-transform:none;">
              Introducir contraseña
            </p>
            <div class="form-group row">
              <div class="col-sm-8 col-sm-offset-2">
                <input type="tel" class="form-control" id="inputEmail3" placeholder="">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer centers">
          <a href="#!"><button type="button" data-target="index.php" data-dismiss="modal"  class="btn btn-secondary boton-crear" >Confirmar</button></a>
        </div>
      </div>
    </div>
  </div>
  <!--MODAL-->

  <!--MODAL CONTRASEÑAS-->
  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
          </button>
        </div>
        <div class="modal-body col-md-12">
          <div class="col-md-4 col-md-offset-4 centers">
            <img width="50%;" src="images/recursos/logo.png" title="Logo" alt="The Wedding Board">
          </div>
          <div class="col-md-12">
            <p class="titulo-popoup bottom-20">
              CAMBIAR <span>CONT</span>RASEÑA
            </p>
            <p class="titulo-popoup nomargin" style="text-transform:none;">
              Contraseña anterior
            </p>
            <div class="form-group row">
              <div class="col-sm-8 col-sm-offset-2">
                <input type="text" class="form-control" id="inputEmail3" placeholder="">
              </div>
            </div>
            <p class="titulo-popoup nomargin" style="text-transform:none;">
              Nueva contraseña
            </p>
            <div class="form-group row">
              <div class="col-sm-8 col-sm-offset-2">
                <input type="password" class="form-control" id="inputEmail3" placeholder="">
              </div>
            </div>
            <p class="titulo-popoup nomargin" style="text-transform:none;">
              Repetir contraseñas
            </p>
            <div class="form-group row">
              <div class="col-sm-8 col-sm-offset-2">
                <input type="password" class="form-control" id="inputEmail3" placeholder="">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer centers">
          <a href="#!"><button type="button" data-target="index.php" data-dismiss="modal"  class="btn btn-secondary boton-crear" >Confirmar</button></a>
        </div>
      </div>
    </div>
  </div>
  <!--MODAL-->

  <!--MODAL-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog2" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
          </button>
        </div>
        <div class="modal-body col-md-12">
          <div class="col-md-12">
            <p class="registrate centers top-30">
              SOLICITUD DE ACTUALIZACIÓN DE Mem<span>bre</span>sías
            </p>
            <div class="col-md-12 ">
              <div class="col-md-4 membresias">
                <div class="col-md-12 border-membresias">
                  <div class="col-md-4 col-md-offset-4 centers logo-membresias">
                    <img width="100%" src="images/recursos/logo.png" alt="The Wedding Board">
                  </div>
                  <div class="col-md-12">
                    <p class="top-20 centers">
                      <strong>Mem<span>bre</span>sía C</strong>
                    </p>
                    <p>
                      <i class="fa fa-square" aria-hidden="true"></i> Lorem Ipsum
                    </p>
                    <p>
                      <i class="fa fa-square" aria-hidden="true"></i> Lorem Ipsum
                    </p>
                    <p>
                      <i class="fa fa-square" aria-hidden="true"></i> Lorem Ipsum
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 membresias">
                <div class="col-md-12 border-membresias">
                  <div class="col-md-4 col-md-offset-4 centers logo-membresias">
                    <img width="100%" src="images/recursos/logo.png" alt="The Wedding Board">
                  </div>
                  <div class="col-md-12">
                    <p class="top-20 centers">
                      <strong>Mem<span>bre</span>sía B</strong>
                    </p>
                    <p>
                      <i class="fa fa-square" aria-hidden="true"></i> Lorem Ipsum
                    </p>
                    <p>
                      <i class="fa fa-square" aria-hidden="true"></i> Lorem Ipsum
                    </p>
                    <p>
                      <i class="fa fa-square" aria-hidden="true"></i> Lorem Ipsum
                    </p>
                    <p>
                      <i class="fa fa-square" aria-hidden="true"></i> Lorem Ipsum
                    </p>
                    <p>
                      <i class="fa fa-square" aria-hidden="true"></i> Lorem Ipsum
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 membresias">
                <div class="col-md-12 border-membresias">
                  <div class="col-md-4 col-md-offset-4 centers logo-membresias">
                    <img width="100%" src="images/recursos/logo.png" alt="The Wedding Board">
                  </div>
                  <div class="col-md-12">
                    <p class="top-20 centers">
                      <strong>Mem<span>bre</span>sía A</strong>
                    </p>
                    <p>
                      <i class="fa fa-square" aria-hidden="true"></i> Lorem Ipsum
                    </p>
                    <p>
                      <i class="fa fa-square" aria-hidden="true"></i> Lorem Ipsum
                    </p>
                    <p>
                      <i class="fa fa-square" aria-hidden="true"></i> Lorem Ipsum
                    </p>
                    <p>
                      <i class="fa fa-square" aria-hidden="true"></i> Lorem Ipsum
                    </p>
                    <p>
                      <i class="fa fa-square" aria-hidden="true"></i> Lorem Ipsum
                    </p>
                    <p>
                      <i class="fa fa-square" aria-hidden="true"></i> Lorem Ipsum
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <p class="titulo-popoup" style="text-transform:none;">
              Un ejecutivo de <span>TWB</span> se comunicará contigo para que puedas realizar tu actualización
            </p>
          </div>
        </div>
        <div class="modal-footer centers">
          <a href="#!"><button type="button" data-target="index.php"  class="btn btn-secondary boton-crear" data-dismiss="modal">Regresar a mi cuenta</button></a>
        </div>
      </div>
    </div>
  </div>
  <!--MODAL-->
  <!--MODAL PAGO-->
  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="images/recursos/close-popoup.png" alt="The Wedding Board"> cerrar</span>
          </button>
        </div>
        <div class="modal-body col-md-12">
          <div class="col-md-4 col-md-offset-4 centers">
            <img width="50%;" src="images/recursos/logo.png" title="Logo" alt="The Wedding Board">
          </div>
          <div class="col-md-12">
            <p class="titulo-popoup bottom-20">
              FORMA DE<span> PA</span>GO
            </p>

            <div class="form-group row">
              <div class="col-sm-3 centers">
                <label class="custom-control custom-radio">
                  <input id="radio1" name="radio" type="radio" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                </label>
                <div class="">
                  <img src="images/recursos/visa.png" alt="The Wedding Board">
                </div>
              </div>
              <div class="col-sm-3 centers">
                <label class="custom-control custom-radio">
                  <input id="radio1" name="radio" type="radio" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                </label>
                <div class="">
                  <img src="images/recursos/mastercard.png" alt="The Wedding Board">
                </div>
              </div>
              <div class="col-sm-3 centers">
                <label class="custom-control custom-radio">
                  <input id="radio1" name="radio" type="radio" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                </label>
                <div class="">
                  <img src="images/recursos/american.png" alt="The Wedding Board">
                </div>
              </div>
              <div class="col-sm-3 centers">
                <label class="custom-control custom-radio">
                  <input id="radio1" name="radio" type="radio" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                </label>
                <div class="">
                  <img src="images/recursos/garnet.png" alt="The Wedding Board">
                </div>
              </div>
            </div>
            <div class="form-group row nomargin  titulo-pago">
              <div class="col-sm-8 col-sm-offset-2 top-20">
                <p class="nomargin" style="text-transform:none;text-align:justify">
                  TITULAR
                </p>
                <input type="text" class="form-control" id="inputEmail3" placeholder="">
              </div>
            </div>
            <div class="form-group row nomargin titulo-pago">
              <div class="col-sm-8 col-sm-offset-2 top-20">
                <p class="nomargin" style="text-transform:none;text-align:justify">
                  NÚMERO DE TARJETA
                </p>
                <input type="tel" class="form-control" id="inputEmail3" placeholder="">
              </div>
            </div>
            <div class="form-group row nomargin titulo-pago">
              <div class="col-sm-8 col-sm-offset-2 top-20">
                <div class="col-sm-12 nomargin">
                  <p class="nomargin" style="text-transform:none;text-align:justify">
                    CODIGO DE SEGURIDAD
                  </p>
                </div>
                <div class="col-sm-6 nomargin">
                  <input type="password" class="form-control" id="inputEmail3" placeholder="">
                </div>
              </div>
            </div>
            <div class="form-group  row nomargin titulo-pago">
              <div class="col-sm-8 col-sm-offset-2 top-20">
                <p>
                  VENCIMIENTO
                </p>
                <div class="col-sm-6 nomargin">
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Enero</option>
                    <option>Febrero</option>
                    <option>Marzo</option>
                    <option>Abril</option>
                    <option>Mayo</option>
                    <option>Junio</option>
                    <option>Julio</option>
                    <option>Agosto</option>
                    <option>Septiembre</option>
                    <option>Octubre</option>
                    <option>Noviembre</option>
                    <option>Diciembre</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">2017</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer centers">
          <a href="#!"><button type="button" data-target="index.php" data-dismiss="modal"  class="btn btn-secondary boton-crear" >Confirmar</button></a>
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
