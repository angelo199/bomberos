
<br><br><br><br><br><br><br><br><br><br><br>

<div class="container">
<?php 
if ( $this->session->flashdata('ControllerMessage') != '' ) 
    {
?>
<p style="color: red;"><?php echo $this->session->flashdata('ControllerMessage'); ?></p>
<?php 
} 
?>



	<div class="row">
		<div class= "col-sm-8">			
			<!-- <div class="jumbotron">-->
		      
		          <h2>Bomberos de Miranda</h2>
		           <img class="img-responsive img-circle" src="<?php echo base_url()?>public/imagenes/Cuerpo.jpg" 
	width="30%" height="220px" align="left" alt="">
		     <br>		        <p class="text-left"> <strong><ins>Misi&oacute;n</ins>:</strong> Proteger a los habitantes y propiedades del 
Estado, responder a las necesidades de los ciudadanos mediante un r&aacute;pido, profesional y 
humanitario servicio, cumpliendo con el compromiso a trav&eacute;s de la prevenci&oacute;n, 
combate y extinci&oacute;n de incendios, Servicios de Emergencias M&eacute;dicas Pre-Hospitalarias, 
Rescate, Educaci&oacute;n a la Ciudadan&iacute;a para la autoprotecci&oacute;n, Atenci&oacute;n de 
Desastres y Calamidades P&uacute;blicas, t&eacute;cnicas, sociales, naturales; utilizando suficientemente todos los recursos asignados al comando, para proporcionar el mejor servicio a la comunidad.<br>
<strong><ins>Objetivos</ins>:</strong><br>
<li class="punto"><p class="text-left">	Combatir incendios para proteger a la ciudadanía del alcance de las llamas.</p></li>
<li class="punto"><p class="text-left">	 Ejecutar labores de Rescate y Prevenci&oacute;n.</p></li>
<li class="punto"><p class="text-left">	Prestar Servicios de Medicina Pre-Hospitalaria.</p></li>
<li class="punto"><p class="text-left">	Brindar todo tipo de ayuda a la comunidad, en lo concerniente 
 a suministros de  agua, traslado de enfermos y/o heridos, inspecciones de seguridad,
 exterminaci&oacute;n&aacute; de insectos y tala de &aacute;rboles.</p></li>
<li class="punto"><p class="text-left">	Desarrollar planes de instrucci&oacute;n dirigidos principalmente a la 
 sociedad civil organizada,
 planteles educativos y empresas, cuyo objetivo es formar brigadas de protecci&oacute;n y 
 prevenci&oacute;n de siniestros</p></li>
		        </p>
		        <p><a class="btn btn-lg btn-primary" href="#" role="button">Leer m&aacute;s</a></p>
		 
		
		</div>		

		<div class= "col-sm-4">
			
		     <?php 

				$atributos = array('id' => 'miformulario', 'name' => 'form' );
				echo form_open(null, $atributos);
			?>

				 <div class="form-group">
				    <label for="exampleInputEmail1">Nombre de Usuario</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el email"
				    name="login"value= "<?php echo set_value("login") ?>" required>
				 </div>
			  
				 <div class="form-group">
				    <label for="exampleInputPassword1">Clave</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******"
				     name="pass" value= "<?php echo set_value("pass") ?>" required>
				 </div>
			  
			  <button type="submit" class="btn btn-primary">Iniciar</button>
			 

			  <br><br>
		<p class="navbar-text pull-right">
			<a href="registro" class="navbar-link">¿No dispones de un usuario ? Registrate </a>
		</p>
		<br>
		<p class="navbar-text pull-right">
			<a href="#" class="navbar-link">¿Se te olvido la contraseña ? </a>
		</p>



<div class="container">
	<div class= "col-sm-4">
<p>
<strong><ins>Vsi&oacute;n</ins>:</strong>"Crear un Departamento organizado de forma jerárquica descendente, 
ejercido por un personal técnico encaminado a la seguridad y defensa nacional en lo referente a:
 Prevención, protección y seguridad contra incendios y otros siniestros; 
 a la investigación de las causas y origen de los mismos; a la planificación y 
 ejecución de programas de preparación para casos de desastres o emergencias,
  tendientes a educar a la población en esta materia.  Así como todas las que conlleven 
  a salvaguardar la vida, bienes y propiedades de las personas, sin distingo de raza, credo, 
  religión, nacionalidad o condición social."</p>      
      </div>
</div>
			<?php
				echo form_close();
			?>
		</div>
	</div>
</div>