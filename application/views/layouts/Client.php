<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->layout->getTitle(); ?></title>

    <meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>">

    <meta name="keywords" content="<?php echo $this->layout->getKeywords(); ?>" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url()?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/stylesheets/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>public/stylesheets/responsive.css">
  
    <link rel="stylesheet" href="<?php echo base_url()?>public/css/color.css">
    <script src="<?php echo base_url()?>public/js/ie-emulation-modes-warning.js"></script>
    <?php echo $this->layout->css; ?> 

    <?php echo $this->layout->js; ?> 
  
  </head>
  <body>



   <?php echo $content_for_layout; ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
      <img  src="<?php echo base_url()?>public/imagenes/logo.jpg"
 width="100%" height="140px">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
        </button>

      <a class="navbar-brand" href="index">Bomberos </a>
      </div>

      <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Solicitar Inspección <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                              <li><a href="<?php echo base_url()?>cliente/solicitud">Nueva</a></li>
                             
                              <li class="divider"></li>
                            
                              
                          </ul>
                  </li>
          
              
            </ul>


                <ul class="nav navbar-nav navbar-right">
                     <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuario <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                                  <li class="user-header bg-light-blue"><center>  <img src="<?php echo base_url()?>public/images/user3.png" class="img-circle" alt="User Image"></center>
                              <p>  <center> <br> Cliente </p> <center>
                                  </li>
                                   <li class="divider"></li>
                                   <!-- Menu Body -->
                                  <li class="user-body">
                                   
                                   
                                  </li>


                                 <!-- Menu Footer-->
                                  <li class="user-footer">
                                    <div class="pull-left"> <a href="<?php echo base_url()?>cliente/perfil" class="btn btn-default btn-flat">Perfil</a> </div>
                                    <div class="pull-right"> <a href="<?php echo base_url()?>cliente/logout" class="btn btn-default btn-flat">Salir</a> </div>
                                  </li>
                          </ul>
                    </li>
                </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


    
     <!-- FOOOTER 
================================================== -->
<center> <div id="footer">
  <footer class="row" >
  <p class="back-top floatright">
    <a href="#top"><span></span></a>
  </p>
  <div class="four columns">
    <h1>Sobre Nosotros</h1>
     Nuestro objetivo es mantener a los clientes satisfechos!
  </div>
  <div class="four columns">
    <h1>Contactos</h1>
      2p++@gmail.com
  </div>
  <div class="four columns">
    <h1>Suscribete</h1>
  
        <input type="text"  placeholder="Escribe tu email...">
    </div>
  </div>
  </footer>
</div></center>
<div class="copyright">
  <div class="row">
    <div class="six columns">
       &copy;<span class="small"> Copyright 2014 P2 </span>
    </div>
    <div class="six columns">
      <span class="small floatright"> Sape "Professional Two" - P2.net</span>
    </div>
  </div>
</div>
<!-- JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->

   
     <script src="<?php echo base_url()?>public/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>public/js/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()?>public/js/funciones.js"></script>
    <script src="<?php echo base_url()?>public/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>