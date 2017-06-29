<?php
  require("functions.php");
  get_header();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- /.col -->
      <div class="col-md-6 col-md-offset-3 titulo-perfil1">
        <p>
          Calificaciones
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
        <div class="mailbox-controls">
          <div class="dropdown boton-categoria">
              <button class="btn btn-secondary dropdown-toggle btn btn-default btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-tag" aria-hidden="true"></i> Ordenar <i class="fa fa-caret-down" aria-hidden="true"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Calificaciones</a>
                <a class="dropdown-item" href="#"><i class="fa fa-circle" aria-hidden="true"></i> Fecha</a>
              </div>
            </div>
          <!-- /.btn-group -->
          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-exchange rota-90" aria-hidden="true"></i></button>
          <div class="pull-right">
            1-50/200
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
            </div>
            <!-- /.btn-group -->
          </div>
          <!-- /.pull-right -->
        </div>
      </div>

      <!-- /.col -->
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 linea-config"></div>
        <div class="form-group row top-50">
          <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
              <!-- /.pull-right -->
            <div class="col-xs-12 col-sm-12 col-md-12 border-abajo border-arriba calificaciones-usu">
              <div class="col-md-1">
                <div class="image centers img-20">
                  <img class="img-circle border-azul" src="images/recursos/calificacion-1.png" alt="The Wedding Board">
                </div>
              </div>
              <div class="col-md-3 nomargin detalle-center">
                <p><strong>Proveedor:</strong> Mei Utroque</p>
                <p><strong>Categoria:</strong> Fashion</p>
                  <strong>Calificación:</strong>
                  <div class="star-rating enlinea" style="margin-left:10px;">
                    <fieldset>
                      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding">5 stars</label>
                      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good">4 stars</label>
                      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good">3 stars</label>
                      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor">2 stars</label>
                      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor">1 star</label>
                    </fieldset>
                  </div>
                <p class="nomargin margin-fech"><strong>Fecha:</strong>  13 Marzo 2017</p>
              </div>
              <div class="col-md-8 nomargin">
                <div class="col-md-2 nomargin coment-right">
                  <p><strong>Comentarios:</strong></p>
                </div>
                <div class="col-md-10 no-coment">
                  <p>
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                  </p>
                </div>
              </div>
            </div>
            <!-- comentario2 -->
            <div class="col-xs-12 col-sm-12 col-md-12 border-abajo calificaciones-usu">
              <div class="col-md-1">
                <div class="image centers img-20">
                  <img class="img-circle border-azul" src="images/recursos/calificacion-2.png" alt="The Wedding Board">
                </div>
              </div>
              <div class="col-md-3 nomargin detalle-center">
                <p><strong>Proveedor:</strong> Mei Utroque</p>
                <p><strong>Categoria:</strong> Fashion</p>
                  <strong>Calificación:</strong>
                  <div class="star-rating enlinea" style="margin-left:10px;">
                    <fieldset>
                      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding">5 stars</label>
                      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good">4 stars</label>
                      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good">3 stars</label>
                      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor">2 stars</label>
                      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor">1 star</label>
                    </fieldset>
                  </div>
                <p class="nomargin margin-fech"><strong>Fecha:</strong>  13 Marzo 2017</p>
              </div>
              <div class="col-md-8 nomargin">
                <div class="col-md-2 nomargin coment-right">
                  <p><strong>Comentarios:</strong></p>
                </div>
                <div class="col-md-10 no-coment">
                  <p>
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                  </p>
                </div>
              </div>
            </div>
            <!-- comentario 3 -->
            <div class="col-xs-12 col-sm-12 col-md-12 border-abajo calificaciones-usu">
              <div class="col-md-1">
                <div class="image centers img-20">
                  <img class="img-circle border-azul" src="images/recursos/calificacion-3.png" alt="The Wedding Board">
                </div>
              </div>
              <div class="col-md-3 nomargin detalle-center">
                <p><strong>Proveedor:</strong> Mei Utroque</p>
                <p><strong>Categoria:</strong> Fashion</p>
                  <strong>Calificación:</strong>
                  <div class="star-rating enlinea" style="margin-left:10px;">
                    <fieldset>
                      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding">5 stars</label>
                      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good">4 stars</label>
                      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good">3 stars</label>
                      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor">2 stars</label>
                      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor">1 star</label>
                    </fieldset>
                  </div>
                <p class="nomargin margin-fech"><strong>Fecha:</strong>  13 Marzo 2017</p>
              </div>
              <div class="col-md-8 nomargin">
                <div class="col-md-2 nomargin coment-right">
                  <p><strong>Comentarios:</strong></p>
                </div>
                <div class="col-md-10 no-coment">
                  <p>
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="control-sidebar-bg"></div>
</div>
<?php
  get_footer();
?>
