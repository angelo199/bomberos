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
					<legend>Registro de Nuevo Usuario</legend>
				</center>

			

				<label for="nombre">Nombre</label>

					<div class="form-group">
					
						<div class="col-sm-6">
							<input type="text" class="form-control" id="nombre"  name="nombres" placeholder="" required>
						</div>

						<div class="col-sm-6">
							<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required>
						</div>
				
					</div>

					<div class="form-group">
						
						<label for="cedula">Cedula</label>
						
						<div class="col-sm-12">
						
						<input type="text" class="form-control" id="cedula" name="cedula" placeholder="V.17.457.145" required>
			
						</div>
					</div>

					<label for="usuario">Nombre de Usuario</label>

					<div class="form-group">
						
						<div class="col-sm-12">
							<input type="text" class="form-control" id="usuario" name="usuario" placeholder="juan1123" required>
						</div>
						
					</div>

					<label for="clave">Contraseña</label>

					<div class="form-group">
						
						<div class="col-sm-12">
							
							<input type="password" class="form-control" id="clave" name="clave" placeholder="*****" required>
							
						</div>
					</div>

					<label for="conf">Confirmar contraseña</label>

					<div class="form-group">
						
						<div class="col-sm-12">
							
							<input type="password" class="form-control" id="conf" placeholder="****" required>
						</div>
					</div>

				<label for="email">Email</label>

				<div class="form-group">
					
					<div class="col-sm-12">
						
						<input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@gmail.com" required>
					</div>
					
				</div>
		
			<br><br>

				<center>
					
					<button type="submit" class="btn btn-primary" name="registrarCliente" value="registrarCliente" >Registrarse</button>
				
				
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



<br><br><br><br><br><br><br><br><br><br>