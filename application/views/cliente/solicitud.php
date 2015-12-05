<br><br><br><br><br><br><br><br><br><br><br><br>



	<div class="container">
		<div class="row">
			<center>
			<div class="col-sm-12 ">

				<?php
					$atributos = array( 'id' => 'miformulario','name'=>'form');
					//echo form_open(null, $atributos);
					echo form_open(null, $atributos);
				?>
				
				<center>
					<legend>Datos de la Solicitud</legend>
				</center>
				<br><br>
     <img class="img-responsive " align="left" width= "25%"  src="<?php echo base_url()?>public/imagenes/solicitud.jpg" alt="">
                
					<div class="form-group">
					
						<label  class="control-label col-xs-3" for="rif">Nº Solicitud</label>
						
						<div class="col-xs-6">
							
							<input type="text" class="form-control" id="nSolicitud"  name="nSolicitud" placeholder="" disabled
							value="<?php echo $nSol ?>">

						</div><br><br>
				
					</div>

					<div class="form-group">
			
					     <label  class="control-label col-xs-3" for="nExpediente">Nº Expediente</label>
						
						<div class="col-xs-6">

							<input type="text" class="form-control" id="nExpediente" name="nExpediente" placeholder="" disabled
							value="<?php echo $num ?>">

						</div><br><br>
					
					</div>

					<div class="form-group">
				
						<label  class="control-label col-xs-3" for="nOperativo">Nº Operativo</label>
						
						<div class="col-xs-6">

							<input type="text" class="form-control" id="nOperativo" name="nOperativo" placeholder="" disabled
							value="<?php echo $nO ?>">

						</div><br><br>
				
					</div>

					<div class="form-group">
				
						<label  class="control-label col-xs-3" for="fechaSolicitud">Fecha de Solicitud</label>
						
						<div class="col-xs-4">

							<input type="date" class="form-control" id="fechaSolicitud" name='fechaSolicitud'placeholder="" 
							value="<?php echo date("y/m/d"); ?>" >
							
						</div>
						<br>
				
					</div>
						<br><br><br>
				
						<center><legend> Datos del Deposito </legend></center>

						<br><br><br>
		<img class="img-responsive " align="left" width= "20%"  src="<?php echo base_url()?>public/imagenes/Cuerpo.jpg" alt="">
          
					<div class="form-group">
				
				
						<label class="control-label col-xs-3"  for="tributarias">Unidades Tributarias</label>
						
						<div class="col-xs-6">

							<input type="text" class="form-control" id="tributarias" name="tributarias" placeholder="" required>

						</div><br><br>

					</div>

					<div class="form-group">

						<label  class="control-label col-xs-3" for="nDeposito"> N° de deposito</label>
					
						<div class="col-xs-6">

							<input type="text" class="form-control" id="nDepositoo" name="nDeposito"placeholder="" required>
						
						</div><br><br>
					
					</div>

					<div class="fo<br>rm-group">
				
						<label  class="control-label col-xs-3" for="fechaDeposito">Fecha de deposito</label>
						<div class="col-xs-4">

							<input type="date" class="form-control" id="fechaDeposito" name="fechaDeposito" placeholder="" required>
						<br><br>
						</div>
						<br><br>
					</div>
		
						<br><br>
						<center><legend> Razon Social </legend></center>
						<br>
<img class="img-responsive " align="left" width= "25%" height="auto" src="<?php echo base_url()?>public/images/images.jpg" alt="">
          

					<div class="form-group">
				
						<label for="inmueble" class="control-label col-xs-3">Nombre del Inmueble</label>
					
						<div class="col-xs-6">

							<input type="text" class="form-control" id="inmueble" name="inmueble"placeholder="" required>
						
						</div><br><br>
				
					</div>

					<div class="form-group">
						
						<label for="direcccion" class="control-label col-xs-3"> Direccion </label>
						
						<div class="col-xs-6">
					
							<input type="text" class="form-control" id="direccion" name="direccion"placeholder="" required>
						
						</div><br><br>
				
					</div>

					<div class="form-group">

						<label for="municipio" class="control-label col-xs-3">Municipio</label>
						
						<div class="col-xs-6">
							
							<select  class="form-control" id="municipio" name="municipio" size = "1"> 
								
								<option value ="Select"> Seleciones un municipio </option>
								<option value ="Guaicaipuros"> Guaicaipuros </option>
								<option value ="Acevedo"> Acevedo </option>
								<option value ="Andres Bello"> Andr&eacutes Bello </option>
								<option value ="Carrizal"> Carrizal </option>
							
							</select> 
									
						</div><br><br>
				
					</div>

					<div class="form-group">
					
						<label for="parroquia" class="control-label col-xs-3">Parroquia</label>
						
						<div class="col-xs-6">
					
							<select class="form-control" id="parroquia" name="parroquia" size = "1"> 
								
								<option value ="Select"> Seleciones una Parroquia </option>
								<option value ="San Pedro"> SanPedro </option>
								<option value ="Paracoto"> Paracoto </option>
								<option value ="Alta Gracia"> Alta Gracia </option>
								<option value ="San Diego"> San Diego </option>
								<option value ="El Jarillo"> El Jarillo </option>
							
							</select> 
							
						</div><br><br>
				
					</div>

					<div class="form-group">
						
						<label for="cargo" class="control-label col-xs-3">Cargo</label>
						
						<div class="col-xs-6">
					
							<input type="text" class="form-control" id="cargo" name="cargo" placeholder="" required>
						
						</div><br><br>
				
					</div>

					<input type="hidden" class="form-control" id="vali" name="vali" value="0">

					<div class="form-group">
					
						<label for="objetoRazon" class="control-label col-xs-3">Ramo de la Razon</label>
						
						<div class="col-xs-7">
					
							<textarea class="form-control" id="objetoRazon" name="objetoRazon" rows="6" placeholder="" required></textarea>
							<br><br>
						</div>
				
					</div><br><br><br><br><br><br><br><br><br>
					
					<center>

				
						<button type="button" class="btn btn-primary" id="solicitarInspeccion" name="solicitarInspeccion" onclick="llenarSolicitud();" >
							
							Agregar Solicitud

						</button>
		
					</center>

				

			</div>
			</center>
			</div>
			</div>

	<center> 
		<div class="container">
			<div class="row"> 
				<div class="col-sm-12">
					<div class="table-responsive">
					  	<table class="table-hover" border="2"  width="100%" id="solicitud" >
					  	
						  	<tr>
						  	
						  		<h2>Registro  de la Solicitud de inspeccion</h2>

						 	</tr>
						 	
						 	<!-- Cabecera de la tabla  -->
							 	<thead> 

								 	<tr>

											<td class="active" width="20%" align="center">Unidad Tributaria</td>
											<td class="active" width="20%" align="center">Fecha de Expediente</td>
											<td class="active" width="20%" align="center">Fecha de Deposito</td>
										
										
											<td class="active" width="20%" align="center">Inmueble</td>
											<td class="active" width="20%" align="center">Direccion</td>
											<td class="active" width="20%" align="center">Municipio</td>
									
								 		
									 		<td class="active" width="20%" align="center">Parroquia</td>
											<td class="active" width="20%" align="center">Cargo</td>
											<td class="active" width="20%" align="center">Razon</td>
								 		
								 	</tr>

								</thead>
						 		
						 		<!-- Cuerpo de la tabla  -->
						 		<tbody align="center"> 
								 	
								 	
								
								</tbody>
					 		
				  			</table>

				  			<br><br>

				  			<button type="submit" class="btn btn-primary" id="solicitarInspeccion" name="solicitarInspeccion" onclick="llenarSolicitud();" >
							
							Registrar Solicitud

						</button>
			
						<button type="button" class="btn btn-primary">

							Cancelar

						</button>

						<?php
					echo form_close();
						?>
		  			</div>
		  		</div>
		  	</div>
		</div>
  	</center>

<br><br><br><br><br><br><br><br><br><br>

