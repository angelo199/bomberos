<br><br><br><br><br><br><br><br><br><br><br>



<div class="container">
	<div class="row">

		<?php
			$atributos = array( 'id' => 'miformulario','name'=>'form');
			//echo form_open(null, $atributos);
			echo form_open(null, $atributos);
		?>

		<div class="col-sm-5">

			
				<center>
					<legend>Perfil</legend>
				</center>

	
				<label for="nombre">Nombre</label>

					<div class="form-group">

						<div class="col-sm-12">
							<input type="text" class="form-control" id="nombre"  name="nombres" value="<?php echo $datoss->nom_user ?>" required>
						</div>
						

						
					</div>

					<div class="form-group">
						
						<label for="cedula">Apellido</label>
						
						<div class="col-sm-12">
						
						<input type="text" class="form-control" id="apellidos" name="apellidos"  value="<?php echo $datoss->ape_user ?>" required>
			
						</div>
					</div>

					<div class="form-group">
						
						<label for="cedula">Cedula</label>
						
						<div class="col-sm-12">
						
						<input type="text" class="form-control" id="cedula" name="cedula"  value="<?php echo $datoss->cedula_user ?>" required>
			
						</div>
					</div>

					

				<label for="email">Email</label>

				<div class="form-group">
					
					<div class="col-sm-12">
						
						<input type="email" class="form-control" id="email" name="email" value="<?php echo $datoss->email_user ?>" required>
					</div>
					
				</div>
		
			<br><br>

				<center>
					
					<button type="submit" class="btn btn-primary" name="Guardar" value="Guardar" >Guardar</button>
					<button type="submit" class="btn btn-primary">Cancelar</button>
				
				</center>

			
		</div>
		<?php
			echo form_close();
		?>

		<br>
		<div class="col-sm-7 ">
		
			<div class="col-sm-5">
			
				<img class="img-responsive img-circle" src="<?php echo base_url()?>public/images/help-4.png" width="80%" alt="">
				<br><br><br><br><br>
				<img class="img-responsive img-circle" src="<?php echo base_url()?>public/images/help-2.png" width="90%" alt="">
				
			
			</div>
		
			<div class="col-sm-6">
			
				 <h5>Espacio de Ayuda</h5>  	
                 	<div>
                 		<p class="text-justify">
			
						<strong>Nombre de Usuario: </strong>
						Minimo 4 caracteres <br>

						<strong>Cedula: </strong>
							V.17.457.145. <br>

						<strong>Contraseña:</strong>
							Minimo 6 caracteres, distingue mayúsculas de minúsculas.
						</p>
			        </div>

			        <br><br><br><br><br>
				 	<h5>Información</h5>  	
	                 	<div>

			                <p class="text-justify">
						
							Para poder acceder a las demas opciones es necesario registrarse. <br><br>

							Es indispensable que coloques bien el email, debido a que mediante del
							podras recuperar tu contraseña en caso de olvidarla y tambien sera el medio
							para mantenerte informado.

				
							</p>
                  		</div>
			</div>
                

         			
			<div class="col-sm-3">
				<?php echo validation_errors(); ?>
			</div>
		</div> 
	</div>
</div>



<br><br><br><br><br><br>
