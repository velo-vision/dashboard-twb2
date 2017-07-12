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
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">

  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!--STYLE VELOSOFT-->
  <link rel="stylesheet" type="text/css" href="css/galery.css">
<link rel="stylesheet" href="css/hover-muro.css">
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
                <img src="images/dashboard/perfil-muro.png" class="user-image" alt="The Wedding Board">
                <span class="hidden-xs">Mi cuenta</span>
              </a>
              <ul class="dropdown-menu drop-perfil" style="box-shadow:none;">
                <li>
                  <div>
                    <a href="perfil.php">Perfil</a>
                  </div>
                </li>
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
  
  <script>
  function CambiarEstilo() {
      var elemento = document.getElementById("capa-variable");
      if (elemento.className == "tipo1") {
        elemento.className = "tipo2";
      }else {
        elemento.className = "tipo1";
      }
  }
  </script>
