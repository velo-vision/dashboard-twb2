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
      <div class="col-xs-12 col-sm-12 col-md-12 top-50 border-top">
        <p class="red-actualizar centers">ACTUALIZAR METODO DE PAGO</p>
      </div>
        <div class="col-md-12 top-30 padding-pago">
          <div class="col-md-10 col-md-offset-1 padding-pago">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs color-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#credito" aria-controls="credito" role="tab" data-toggle="tab">TARJETA DE CRÉDITO</a>
              </li>
              <li role="presentation">
                <a href="#tiendas" aria-controls="tiendas" role="tab" data-toggle="tab">TIENDAS DE CONVENIENCIA</a>
              </li>
              <li role="presentation">
                <a href="#bancaria" aria-controls="bancaria" role="tab" data-toggle="tab">TRANSFERENCIA BANCARIA</a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content nomargin">
              <!-- tabs 1 -->
              <div role="tabpanel" class="tab-pane active" id="credito">
                <div class="col-md-12 metodo">
                  <p>METODO ACTUAL</p>
                </div>
                <div class="col-md-8 col-md-offset-2 xxxx">
                  <p><img src="images/recursos/visa.png" class="visa" alt="The Wedding Board"> xxx-xxxx-xxxx-8920</p>
                </div>
                <div class="col-md-12 border-top">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 forma-pago">
                      <p>NUEVA FORMA DE PAGO</p>
                    </div>
                    <div class="form-group row">
                      <div class="col-xs-12 col-sm-12 col-md-12 padding-pago">
                        <div class="col-xs-3 col-sm-3 centers padding-pago">
                          <label class="custom-control custom-radio">
                            <input id="radio1" name="radio" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                          </label>
                          <div class="">
                            <img src="images/recursos/visa.png" alt="The Wedding Board">
                          </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 centers padding-pago">
                          <label class="custom-control custom-radio">
                            <input id="radio1" name="radio" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                          </label>
                          <div class="">
                            <img src="images/recursos/mastercard.png" alt="The Wedding Board">
                          </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 centers padding-pago">
                          <label class="custom-control custom-radio">
                            <input id="radio1" name="radio" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                          </label>
                          <div class="">
                            <img src="images/recursos/american.png" alt="The Wedding Board">
                          </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 centers padding-pago">
                          <label class="custom-control custom-radio">
                            <input id="radio1" name="radio" type="radio" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                          </label>
                          <div class="">
                            <img src="images/recursos/garnet.png" alt="The Wedding Board">
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 padding-pago">
                        <div class="form-group row nomargin titulo-pago">
                          <div class="col-sm-10 col-sm-offset-1 top-pago">
                            <p class="pago-titular">
                              TITULAR
                            </p>
                            <input type="text" class="form-control" id="inputEmail3" placeholder="">
                          </div>
                        </div>
                        <div class="form-group row nomargin titulo-pago">
                          <div class="col-sm-10 col-sm-offset-1 top-pago">
                            <p class="pago-titular">
                              NÚMERO DE TARJETA
                            </p>
                            <input type="tel" class="form-control" id="inputEmail3" placeholder="">
                          </div>
                        </div>
                        <div class="form-group row nomargin titulo-pago">
                          <div class="col-sm-10 col-sm-offset-1 top-pago">
                            <div class="col-sm-12 nomargin">
                              <p class="pago-titular1">
                                CODIGO DE SEGURIDAD
                              </p>
                            </div>
                            <div class="col-sm-6 nomargin">
                              <input type="password" class="form-control" id="inputEmail3">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 padding-pago">
                        <div class="form-group  row nomargin titulo-pago">
                          <div class="col-sm-10 col-sm-offset-1 top-pago">
                            <p>
                              VENCIMIENTO
                            </p>
                            <div class="col-md-12 nomargin">
                              <div class="col-xs-6 col-sm-6 col-md-6 nomargin Esconder">
                                <select class="form-control select3">
                                  <option selected="selected">MES</option>
                                  <option>Febrero</option>
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
                              <div class="col-xs-6 col-sm-6 col-md-6 Esconder">
                                <select class="form-control select4">
                                  <option selected="selected">AÑO</option>
                                  <option>2017</option>
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
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-4 col-md-offset-4 top-cambiar bottom-100 centers">
                    <a href="muro.php"><p type="submit" class="btn boton-cambiar hvr-back-pulse top-fijo">Cambiar forma de pago</p></a>
                  </div>
                </div>
              </div>
              <!-- tabs 2 -->
              <div role="tabpanel" class="tab-pane" id="tiendas">
                <div class="col-md-12 metodo">
                  <p>METODO ACTUAL</p>
                </div>
                <div class="col-md-8 col-md-offset-2 xxxx">
                  <p><img src="images/recursos/visa.png" class="visa" alt="The Wedding Board"> xxx-xxxx-xxxx-8920</p>
                </div>
                <div class="col-md-12 border-top">
                  <div class="col-md-10 col-md-offset-1 padding-pago">
                    <div class="col-md-12 forma-pago2">
                      <p>NUEVA FORMA DE PAGO</p>
                    </div>
                    <div class="form-group row radio-pagar">
                      <div class="col-sm-12 centers">
                        <p><label class="custom-control custom-radio">
                          <input id="radio1" name="radio" type="radio" class="custom-control-input">
                          <span class="custom-control-indicator"></span>
                        </label> Pagar en establecimiento</p>
                      </div>
                    </div>
                    <div class="col-md-10 col-md-offset-1 centers color-pagar padding-pago">
                      <p>
                        Paga en un establaciemiento fijo, actualiza tu forma de pago
                        y cada més se generara un recibo que se envíara a tu email
                        para poder realizar tu pago.
                      </p>
                    </div>
                    <div class="col-xs-12 col-md-12 centers padding-pago">
                      <img src="images/recursos/marcas.png" alt="" class="bancos-img">
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-8 col-md-offset-2 top-cambiar bottom-100 centers">
                    <a href="muro.php"><p type="submit" class="btn boton-cambiar hvr-back-pulse top-fijo">Cambiar forma de pago</p></a>
                  </div>
                </div>
              </div>
              <!-- tabs 3 -->
              <div role="tabpanel" class="tab-pane" id="bancaria">
                <div class="col-md-12 metodo">
                  <p>METODO ACTUAL</p>
                </div>
                <div class="col-md-8 col-md-offset-2 xxxx">
                  <p><img src="images/recursos/visa.png" class="visa" alt="The Wedding Board"> xxx-xxxx-xxxx-8920</p>
                </div>
                <div class="col-md-12 border-top">
                  <div class="col-md-10 col-md-offset-1 padding-pago">
                    <div class="col-md-12 forma-pago2">
                      <p>NUEVA FORMA DE PAGO</p>
                    </div>
                    <div class="form-group row radio-pagar">
                      <div class="col-sm-12 centers">
                        <p><label class="custom-control custom-radio">
                          <input id="radio1" name="radio" type="radio" class="custom-control-input">
                          <span class="custom-control-indicator"></span>
                        </label> Pagar en establecimiento</p>
                      </div>
                    </div>
                    <div class="col-md-10 col-md-offset-1 centers color-pagar padding-pago">
                      <p>
                        Se generara un número de referencia que te envíaremos
                        a tu correo electrónico cada mes, para que puedas
                        pagar en <strong>cualquier banco con servicio SPEI</strong>
                      </p>
                    </div>
                    <div class="col-xs-12 col-md-12 centers margin-bancos padding-pago">
                      <img src="images/recursos/bancos.png" alt="" class="bancos-img">
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-md-12">
                  <div class="col-md-8 col-md-offset-2 top-cambiar bottom-100 centers">
                    <a href="muro.php"><p type="submit" class="btn boton-cambiar hvr-back-pulse">Cambiar forma de pago</p></a>
                  </div>
                </div>
              </div>
              <!-- Fin -->
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
