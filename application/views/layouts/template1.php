<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->layout->getTitle(); ?></title>

    <meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>">

    <meta name="keywords" content="<?php echo $this->layout->getKeywords(); ?>" />
    <script src="<?php base_url()?>public/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet">
    <?php echo $this->layout->css; ?> 

    <?php echo $this->layout->js; ?> 
  
  </head>
  <body>



   <?php echo $content_for_layout; ?>

   <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
        </button>

      <a class="navbar-brand" href="index">CodeIgniter & Bootstrap </a>
      </div>

      <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav pull-right">
              <li class="active"><a href="index">Inicio</a></li>
              <li><a href="#">Nosotros</a></li>
              <li><a href="formulario">Registro</a></li>
            </ul>
        </div><!--/.nav-collapse -->

    </div>
</nav>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php base_url()?>public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>public/js/funciones.js"></script>
    <script src="<?php base_url()?>public/js/funciones.js"></script>
  </body>
</html>