<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>The Wedding Board</title>
  <!--SEO PACK-->
  <meta name="description"  content="The Wedding Board es un espacio de inspiración para las novias y para todos los interesados en el mundo de las bodas; donde podrán resolver y conocer tendencias" />
  <link rel="canonical" href="http://twblog.com.mx/" />
  <meta property="og:title" content="The wedding Board" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://twblog.com.mx/" />
  <meta property="og:image" content="http://twblog.com.mx/wp-content/uploads/2017/03/rs_wedding.jpg" />
  <meta property="og:site_name" content="TWB" />
  <meta property="og:description" content="Es un espacio de inspiración para las novias y para todos los interesados en el mundo de las bodas; donde podrán resolver y conocer tendencias." />
  <!--FAVICON-->
  <link rel="icon" href="images/wedding_ico.png" sizes="32x32" />
  <link rel="icon" href="images/wedding_ico.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="images/wedding_ico.png" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!--STYLE VELOSOFT-->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <!--FONTS-->
  <link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="dashboard.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img width="30px;" src="images/recursos/twb.png" alt="The Wedding Board"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="images/recursos/logo-dash.jpg" alt="The Wedding Board"></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" onclick="javascript:CambiarEstilo();" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <ul class="dropdown-menu">
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu"></ul>
                </li>
              </ul>
            </li>

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="dist/img/avatar.png" class="user-image" alt="The Wedding Board">
                <span class="hidden-xs">Mi cuenta</span>
              </a>
              <ul class="dropdown-menu drop-perfil" style="box-shadow:none;">
                <!-- <li>
                  <div>
                    <a href="perfil.html">Perfil</a>
                  </div>
                </li> -->
                <li>
                  <div >
                    <a href="index.php">Salir</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel" style="height:130px;">
        <div class="image centers">
          <img src="dist/img/avatar.png" class="user-image" alt="The Wedding Board">
        </div>
        <div class="pull-left info nomargin">
          <p>
            <strong>Nombre de usuario</strong> </br>
            <small>example@gmail.com</small>
          </p>
        </div>
        <div id="capa-variable" class="top-50 centers">
          <div class="star-rating">
            <fieldset>
              <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Outstanding">5 stars</label>
              <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good">4 stars</label>
              <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good">3 stars</label>
              <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Poor">2 stars</label>
              <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Very Poor">1 star</label>
            </fieldset>
          </div>
        </div>
      </div>
      <!--BOTONES PERFIL-->
      <div class="user-panel">
        <div class="cols">
          <a href="#!">
            <p class="boton-perfil">
              Perfil
            </p>
          </a>
        </div>
        <div class="cols">
          <a href="#!">
            <p class="boton-perfil">
              Salir
            </p>
          </a>
        </div>
      </div>
      <div class="user-panel nomargin margin-vistas">
        <div class="cols bg-vistas">
          <a href="#!">
            <p class="boton-vistas nomargin">
              <strong>0</strong>
            </p>
            <p class="boton-vistas nomargin">
              Visitas de perfil
            </p>
          </a>
        </div>
        <div class="cols bg-vistas2">
          <a href="#!">
            <p class="boton-vistas nomargin">
              <strong>0</strong>
            </p>
            <p class="boton-vistas nomargin">
              Tiempo de respuesta
            </p>
          </a>
        </div>
      </div>
      <!--BOTONES PERFIL-->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#!">
            <i class="fa fa-star" aria-hidden="true"></i> <span>Calificaciones</span>
          </a>
        </li>
        <li>
          <a href="#!">
            <i class="fa fa-inbox" aria-hidden="true"></i> <span>Cotizaciones</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#!">
            <i class="fa fa-files-o"></i>
            <span>Licitaciones</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#!">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            <span>Mensajes</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#!">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            <span>Red de Colaboración</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#!">
            <i class="fa fa-file-text-o" aria-hidden="true"></i> <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="">
              <a href="#!"><i class="fa fa-caret-right" aria-hidden="true"></i> Mis proveedores</a>
              <ul class="treeview-menu">
                <li class="active"><a href="proveedores-2.php">Galería</a></li>
                <li class="active"><a href="#!">Lorem Ipsum</a></li>
              </ul>
            </li>
            <li class=""><a href="#!">Mis proveedores</a></li>
          </ul>
          </a>
        </li>
        <li class="treeview">
          <a href="http://twblog.com.mx/" target="_blank">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> <span>twb.com.mx</span>
          </a>
        </li>
        <li class="sociales treeview">
          <div>
          <span>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          </span>
          <span>
            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          </span>
          <span>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </span>
          <span>
            <a href="https://es.pinterest.com/" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
          </span>
          </div>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
