<br><br><br><br><br><br><br><br><br><br><br>


	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<center>
					<img src="<?php echo base_url()?>public/images/images.jpg"   class="img-responsive" alt="Aloha">
				</center>
			</div>

			<div class="col-xs-12">
				<?php
					$atributos = array( 'id' => 'miformulario','name'=>'form');
					echo form_open(null, $atributos);
				?>
   	
					<center>
						<legend>Gestion de inspeccion</legend>
					</center>
		
	
		
						<div class="form-group">
							<label for="ai" class="control-label col-xs-3">Seleccion de inspector</label>
								<div class="col-xs-9">
								
									<select class="form-control" id="inspector" name="inspector" size = "1"> 
										<option value ="ven"> Seleccione un Inspector </option>
										<?php 
											foreach ($datos as $data)
											{
										?>
												
										<?php echo '<option value="'.$data->idUsuario.'">'. $data->inspector.'</option>'?>
										
											
										<?php	
											} 
										?>
									</select> 
										
								</div>
						</div>
						
     					<br><br><br>
						<div class="form-group">
					
							<label  class="control-label col-xs-3" for="nExpediente">Nº Expediente</label>
								<div class="col-xs-9">
								
									<select name = "expediente" class="form-control" id="expediente" size = "1"> 
											<option value ="game"> Seleccione un Expediente </option>
											<?php 
												foreach ($expe as $ex)
												{
											?>
													
											<?php echo '<option value="'.$ex->nExpediente.'">'. $ex->nExpediente.'</option>'?>
											
												
											<?php	
												} 
											?>
									</select> 
								</div>
						</div>
						<br><br>
					<center>
			
						<button type="submit" class="btn btn-primary" id="solicitarInspeccion" name="solicitarInspeccion" >Asignar</button>
		
					</center>
	 			
				<?php
					echo form_close();
				?>

				<?php 
					if ( $this->session->flashdata('ControllerMessage') != '' ) 
					    {
					?>
					<p style="color: red;"><?php echo $this->session->flashdata('ControllerMessage'); ?></p>
					<?php 
					} 
					?>
	</div>
	</div>
	</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




