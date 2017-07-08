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
    <div class="col-md-12 nomargin">
      <figure class="snip1205">
        <img src="images/dashboard/muro-2.jpg" alt="The Wedding Board"/>
        <p>Cambiar imagen</p>
        <i class="fa fa-file-image-o" aria-hidden="true"></i>
        <a href="#!"></a>
      </figure>
    </div>
    <div class="col-md-4">
      <div class="col-md-12 nomargin content-muro1">
        <ul class="gallery nomargin">
          <li>
            <a href="#">
              <img src="images/dashboard/perfil-muro.png" alt="The Wedding Board" />
              <span class="name"><i class="fa fa-file-image-o" aria-hidden="true"></i><span class="title">Cambiar imagen</span></span>
            </a>
          </li>
        </ul>
        <div class="titulo-muro centers">
          <p>
            <strong><span>JL</span> Event Planner</strong>
          </p>
          <p>
            Decoration
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-10 col-md-offset-1">
      <div class="col-md-12 top-50">
        <p class="red-colaboracion centers">NUESTRO TRABAJO</p>
      </div>
      <div class="col-md-10 col-md-offset-1 top-30">
        <div class="col-md-4">
          <a href="#!">
            <p class="boton-ceremonia1">
              <i class="fa fa-trash-o" aria-hidden="true"></i> <span>ELIMINAR GALERÍA</span>
            </p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="#!">
            <p class="boton-ceremonia1">
              <i class="fa fa-plus-square-o" aria-hidden="true"></i> <span>AÑADIR FOTOS</span>
            </p>
          </a>
        </div>
        <div class="col-md-4">
          <a href="crear-galeria.php">
            <p class="boton-ceremonia1">
              <i class="fa fa-folder-open-o" aria-hidden="true"></i> <span>CREAR GALERÍA</span>
            </p>
          </a>
        </div>
      </div>
        <div class="col-md-12 top-30">
          <div class="gallery-container">
            <div class="sort-section top-10">
              <div class="sort-section-container">
                <div class="sort-handle">Filters</div>
                <div class="col-md-4 col-md-offset-4">
                  <div class="form-group">
                   <select class="form-control1" id="exampleSelect1">
                     <option>NUEVA GALERÍA</option>
                     <option>Categoría 2</option>
                     <option>Categoría 3</option>
                     <option>Categoría 4</option>
                     <option>Categoría 5</option>
                   </select>
                 </div>
                </div>
              </div>
            </div>
            <ul class="image-main-box clearfix">
              <li class="item col-xs-6 col-md-3 lobby">
                <figure>
                  <img src="images/recursos/galery.jpg" alt="11"/>
                  <a href="images/recursos/galery.jpg" class="more-details" data-title="Great View">Enlarge</a>
                  <figcaption>
                    <h4>
                      <h4><span>Lorem</span> Ipsum</h4>
                    </h4>
                  </figcaption>
                </figure>
                <p>Lorem Ipsum</p>
              </li>
              <li class="item col-xs-6 col-md-6 pool">
                <figure>
                  <img src="images/recursos/galery2.jpg" alt="11"/>
                  <a href="images/recursos/galery2.jpg" class="more-details" data-title="Outdoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 bars">
                <figure>
                  <img src="images/recursos/galery3.jpg" alt="11"/>
                  <a href="images/recursos/galery3.jpg" class="more-details" data-title="Delicious Foods">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 restaurant">
                <figure>
                  <img src="images/recursos/galery4.jpg" alt="11"/>
                  <a href="images/recursos/galery4.jpg" class="more-details" data-title="International Foods">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery5.jpg" alt="11"/>
                  <a href="images/recursos/galery5.jpg" class="more-details" data-title="Cozy Spaces">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 rooms">
                <figure>
                  <img src="images/recursos/galery6.jpg" alt="11"/>
                  <a href="images/recursos/galery6.jpg" class="more-details" data-title="Comfortable Rooms">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery7.jpg" alt="11"/>
                  <a href="images/recursos/galery7.jpg" class="more-details" data-title="Relaxation Spaces">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery8.jpg" alt="11"/>
                  <a href="images/recursos/galery8.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery9.jpg" alt="11"/>
                  <a href="images/recursos/galery9.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-6 pool">
                <figure>
                  <img src="images/recursos/galery10.jpg" alt="11"/>
                  <a href="images/recursos/galery10.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery11.jpg" alt="11"/>
                  <a href="images/recursos/galery11.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery12.jpg" alt="11"/>
                  <a href="images/recursos/galery12.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery13.jpg" alt="11"/>
                  <a href="images/recursos/galery13.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery14.jpg" alt="11"/>
                  <a href="images/recursos/galery14.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-9 pool">
                <figure>
                  <img src="images/recursos/galery18.jpg" alt="11"/>
                  <a href="images/recursos/galery18.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery16.jpg" alt="11"/>
                  <a href="images/recursos/galery16.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery15.jpg" alt="11"/>
                  <a href="images/recursos/galery15.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery17.jpg" alt="11"/>
                  <a href="images/recursos/galery17.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery19.jpg" alt="11"/>
                  <a href="images/recursos/galery19.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery20.jpg" alt="11"/>
                  <a href="images/recursos/galery20.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery22.jpg" alt="11"/>
                  <a href="images/recursos/galery22.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery21.jpg" alt="11"/>
                  <a href="images/recursos/galery21.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-6 pool">
                <figure>
                  <img src="images/recursos/galery24.jpg" alt="11"/>
                  <a href="images/recursos/galery24.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery23.jpg" alt="11"/>
                  <a href="images/recursos/galery23.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery26.jpg" alt="11"/>
                  <a href="images/recursos/galery26.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
              <li class="item col-xs-6 col-md-3 pool">
                <figure>
                  <img src="images/recursos/galery25.jpg" alt="11"/>
                  <a href="images/recursos/galery25.jpg" class="more-details" data-title="Indoor Pool">Enlarge</a>
                  <figcaption>
                    <h4><span>Lorem</span> Ipsum</h4>
                  </figcaption>
                </figure>
              </li>
            </ul>
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
