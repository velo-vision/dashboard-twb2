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
          Calificaciones
        </p>
        <img src="images/recursos/linea-greca.png" alt="The Wedding Board">
      </div>
      <div class="col-md-12">
          <div class="box-header with-border">
            <span class="box-title"></span>
            <div class="box-tools pull-right">
              <div class="has-feedback">
                <input type="text" class="form-control input-sm" placeholder="Search Mail">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <div class="mailbox-controls border-inferior">
              <!-- Check all button -->
              <!-- <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                Categorias <i class="fa fa-caret-down" aria-hidden="true"></i>
              </button> -->
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
            <div class="col-md-12 border-inferior calificaciones">
              <div class="col-md-2">
                <div class="image centers top-20">
                  <img class="img-circle border-blue" src="images/recursos/calificacion-1.png" alt="The Wedding Board">
                </div>
              </div>
              <div class="col-md-3">
                <p><strong>Usuario:</strong> Lorena Blancarte</p>
                <p class="enlinea nomargin">
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
                </p>
                <p class="nomargin"><strong>Fecha:</strong>  14 Marzo 2017</p>
              </div>
              <div class="col-md-7">
                <div class="col-md-2">
                  <p><strong>Comentarios:</strong></p>
                </div>
                <div class="col-md-10">
                  <p>
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                  </p>
                </div>
              </div>
            </div>
            <!---->
            <div class="col-md-12 border-inferior calificaciones">
              <div class="col-md-2">
                <div class="image centers top-20">
                  <img class="img-circle border-blue" src="images/recursos/calificacion-5.png" alt="The Wedding Board">
                </div>
              </div>
              <div class="col-md-3">
                <p><strong>Usuario:</strong> Lorena Blancarte</p>
                <p class="enlinea nomargin">
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
                </p>
                <p class="nomargin"><strong>Fecha:</strong>  14 Marzo 2017</p>
              </div>
              <div class="col-md-7">
                <div class="col-md-2">
                  <p><strong>Comentarios:</strong></p>
                </div>
                <div class="col-md-10">
                  <p>
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                  </p>
                </div>
              </div>
            </div>
            <!---->
            <div class="col-md-12 border-inferior calificaciones">
              <div class="col-md-2">
                <div class="image centers top-20">
                  <img class="img-circle border-blue" src="images/recursos/calificacion-2.png" alt="The Wedding Board">
                </div>
              </div>
              <div class="col-md-3">
                <p><strong>Usuario:</strong> Lorena Blancarte</p>
                <p class="enlinea nomargin">
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
                </p>
                <p class="nomargin"><strong>Fecha:</strong>  14 Marzo 2017</p>
              </div>
              <div class="col-md-7">
                <div class="col-md-2">
                  <p><strong>Comentarios:</strong></p>
                </div>
                <div class="col-md-10">
                  <p>
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                  </p>
                </div>
              </div>
            </div>
            <!---->
            <div class="col-md-12 border-inferior calificaciones">
              <div class="col-md-2">
                <div class="image centers top-20">
                  <img class="img-circle border-blue" src="images/recursos/calificacion-3.png" alt="The Wedding Board">
                </div>
              </div>
              <div class="col-md-3">
                <p><strong>Usuario:</strong> Lorena Blancarte</p>
                <p class="enlinea nomargin">
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
                </p>
                <p class="nomargin"><strong>Fecha:</strong>  14 Marzo 2017</p>
              </div>
              <div class="col-md-7">
                <div class="col-md-2">
                  <p><strong>Comentarios:</strong></p>
                </div>
                <div class="col-md-10">
                  <p>
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                  </p>
                </div>
              </div>
            </div>
            <!---->
            <div class="col-md-12 border-inferior calificaciones">
              <div class="col-md-2">
                <div class="image centers">
                  <img class="img-circle border-blue" src="images/recursos/calificacion-4.png" alt="The Wedding Board">
                </div>
              </div>
              <div class="col-md-3">
                <p><strong>Usuario:</strong> Lorena Blancarte</p>
                <p class="enlinea nomargin">
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
                </p>
                <p class="nomargin"><strong>Fecha:</strong>  14 Marzo 2017</p>
              </div>
              <div class="col-md-7">
                <div class="col-md-2">
                  <p><strong>Comentarios:</strong></p>
                </div>
                <div class="col-md-10">
                  <p>
                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.
                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.
                  </p>
                </div>
              </div>
            </div>

            <div class="table-responsive mailbox-messages">
              <table class="table table-hover table-striped">
                <tbody >
                <tr class="texto-mail-active">
                  <td ><input type="checkbox"></td>
                  <td class=""><a href="cotizaciones-2.php"><strong>Lorena Martínez</strong></a></td>
                  <td class="">
                    <strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> #Invitados:</strong> 300</td>
                  <td class=""><strong>hace 5 min.</strong></td>
                </tr>
                <tr class="texto-mail-active">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Mónica Galván</strong></a></td>
                  <td class="">
                    <strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> #Invitados:</strong> 300</td>
                  <td class=""><strong>hace 1 Hora</strong></td>
                </tr>
                <tr class="texto-mail-active">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Ernestina Alfonso</strong></a></td>
                  <td class="">
                    <strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> #Invitados:</strong> 300</td>
                  <td class=""><strong>hace 1 día</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>María Concepción</strong></a></td>
                  <td class="">
                    <strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> #Invitados:</strong> 300</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Georgina Gómez</strong></a></td>
                  <td class="">
                    <strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> #Invitados:</strong> 300</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Valería Ortiz</strong></a></td>
                  <td class="">
                    <strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> #Invitados:</strong> 300</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Natalia Esparza</strong></a></td>
                  <td class="">
                    <strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> #Invitados:</strong> 300</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Esmeralda Peralta</strong></a></td>
                  <td class="">
                    <strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> #Invitados:</strong> 300</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Bibiana Gaytan</strong></a></td>
                  <td class="">
                    <strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> #Invitados:</strong> 300</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>María Luisa Contreras</strong></a></td>
                  <td class="">
                    <strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> #Invitados:</strong> 300</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                <tr class="texto-mail-desactive">
                  <td><input type="checkbox"></td>
                  <td class=""><a href="#!"><strong>Lucero Del Pilar Vivanco</strong></a></td>
                  <td class="">
                    <strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> Fecha de Evento:</strong> 28-Oct-2017
                  </td>
                  <td class=""><strong><span style="font-style:normal;font-weight:400;visibility:hidden">(1)</span> #Invitados:</strong> 300</td>
                  <td class=""><strong>13 marzo 2017</strong></td>
                </tr>
                </tbody>
              </table>
              <!-- /.table -->
            </div>
            <!-- /.mail-box-messages -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer no-padding">
            <div class="mailbox-controls">
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

        <!-- /. box -->
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
