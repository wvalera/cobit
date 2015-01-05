<!DOCTYPE html>
<html content="text/html; charset=UTF-8">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cobit :System</title>

    <link href="<?php echo URL; ?>public/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/default.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/font-awesome-ie7.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/bootstrap-datetimepicker.css" rel="stylesheet">

    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script type="text/javascript">
        URL = "<?php echo URL ?>"
    </script>


    
    <script src="<?php echo URL; ?>public/js/jquery.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-transition.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-alert.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-modal.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-tab.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-popover.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-button.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-collapse.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-carousel.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-typeahead.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-tab.js"></script>
    <script src="<?php echo URL; ?>public/js/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo URL; ?>public/js/jPages.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/facebox.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.select_skin.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.filestyle.mini.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.date_input.pack.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.img.preload.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.jCombo.js"></script>
    <script src="<?php echo URL; ?>public/js/custom.js"></script>
    
                <!--<style type="text/css" media="all">
                    @import url("<?php echo URL; ?>public/css/style.css");
                    @import url("<?php echo URL; ?>public/css/jquery.wysiwyg.css");
                    @import url("<?php echo URL; ?>public/css/facebox.css");
                    @import url("<?php echo URL; ?>public/css/visualize.css");
                    @import url("<?php echo URL; ?>public/css/date_input.css");
                    @import url("<?php echo URL; ?>public/jquery-ui/css/smoothness/jquery-ui-1.8.20.custom.css");
                </style>-->
                <!--<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
                <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.img.preload.js"></script>
                <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.filestyle.mini.js"></script>
                
                <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.date_input.pack.js"></script>
                <script type="text/javascript" src="<?php echo URL; ?>public/js/facebox.js"></script>
                <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.select_skin.js"></script>
                <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.tablesorter.min.js"></script>
                <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.tablesorter.filer.js"></script>
                <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.tablesorter.pager.js"></script>
                <script type="text/javascript" src="<?php echo URL; ?>public/js/ajaxupload.js"></script>
                <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.pngfix.js"></script>
                
                <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.validate.js"></script>
                <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
                <script type="text/javascript" src="<?php echo URL; ?>public/jquery-ui/js/jquery-ui-1.8.20.custom.min.js"></script>-->
               
 <?php $this->mostrarJs(); ?>
</head>
<body>
</head>

<body>
  <div class="navbar navbar-fixed-top" >
    <div class="navbar-inner">
      <div class="container">
        <div class="btn-group pull-right">
          <div class="btn btn-success disabled"><i class="icon-user icon-white"></i> <span class="hidden-phone"><?php echo $this->usuario; ?></span></div>
          <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="<?php echo URL; ?>usuario"><i class="icon-pencil"></i> Editar Perfil</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo URL; ?>dashboard/logout"><i class="icon-off"></i> Salir</a></li>
          </ul>
        </div>
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="<?php echo URL; ?>">Cobit System</a>
        <div class="nav-collapse collapse">
          <nav>
            <ul class="nav">
              <li class="dropdown">
                <a href="<?php echo URL; ?>" ><i class="icon-home "></i> Inicio </a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-hdd "></i> Datos <b class="caret"></b></a>
                <?php if (Session::get('rol') == 'administrador') { ?>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo URL; ?>area"><i class="icon-ok "></i> Areas</a></li>
                    <li><a href="<?php echo URL; ?>usuario"><i class="icon-ok "></i> Usuarios</a></li>
                    <li><a href="<?php echo URL; ?>cliente"><i class="icon-ok "></i> Clientes</a></li>
                </ul>
              </li>
              <?php } ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs "></i> Configuracion <b class="caret"></b></a>
                <!--<ul class="dropdown-menu">
                    <li><a href="<?php echo URL; ?>categoria"><i class="icon-ok "></i> Definir Categorias</a></li>
                    <li><a href="<?php echo URL; ?>marca"><i class="icon-ok "></i> Definir Marcas</a></li>
                    <li><a href="<?php echo URL; ?>muestra"><i class="icon-ok "></i> Definir Cilindrada</a></li>
                </ul>
              </li>
            </ul>-->
          </nav>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div id="contentDATA" class="container">