<br><br><br><br><br><br><br><br><br><br><br>
 
 
<div class="container">
	<div class="row">
	<div class="col-xs-8 ">
		
			<form class ="form-horizontal" action="" method="POST" role="form">
				<?php
			$atributos = array( 'id' => 'miformulario','name'=>'form');
			//echo form_open(null, $atributos);
			echo form_open(null, $atributos);
				?>
				<?php 
					if ( $this->session->flashdata('ControllerMessage') != '' ) 
					    {
					?>
					<p style="color: red;"><?php echo $this->session->flashdata('ControllerMessage'); ?></p>
					<?php 
					} 
					?>
   	

		<center>
		
	
				<legend>Inspeccion</legend>
			</center>
	
			<div class="form-group">
					
							<label  class="control-label col-xs-3" for="nExpediente">Nº Expediente</label>
								<div class="col-xs-6">
								
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

			<div class="form-group">
				<label for="razon" class="control-label col-xs-3">Ramo de la razon</label>
				<div class="col-xs-6">
					
				<textarea class="form-control" id="razon" name="razon"
					rows="6"placeholder="" required></textarea>
				</div>
				
			</div>		
		
	
			<div class="form-group">
					<label for="ubicado" class="control-label col-xs-3">Ubicado en</label>
				<div class="col-xs-6">
					
					<input type="text" class="form-control" id="ubicado"  name="ubicado" placeholder="" required>
				</div>
				</div>
     
				<div class="form-group">
				     <label for="ciudadano" class="control-label col-xs-3">Representado por el ciudadano</label>
				<div class="col-xs-6">
					
					<input type="text" class="form-control" id="representante" name="representante" placeholder="" required>
				</div>
				
			</div>
	

			<div class="form-group">
					<label for="titular" class="control-label col-xs-3">Titular de la CI</label>
				<div class="col-xs-3">
					
					<input type="text" class="form-control" id="direccion" placeholder="" name ="titular" required>
		
				</div>
				
			</div>

			<div class="form-group">
				
		<label for="fechaS" class="control-label col-xs-3">Fecha de solicitud</label>
				<div class="col-xs-3">
					
	<input type="date" class="form-control" id="fechaSoli" name="fechaSoli" placeholder="" required>
		
				</div>
			</div>
			
			<div class="form-group">
				<label for="fechaS" class="control-label col-xs-3">Fecha de Inspeccion</label>
				<div class="col-xs-3">
					
	<input type="date" class="form-control" id="fecha" name="fechaInspe"placeholder="" required>
		
				</div>
			</div>	
	
			
			   <center><legend> Prevencion y control de incendio</legend></center><br>
			
			<div class="form-group" >
				<label for="depo" class="control-label col-xs-3"> N° de deposito</label>
				<div class="col-xs-3">
					
					<input type="text" class="form-control" id="depositoo" name="depositoo"placeholder="" >
				</div>
				
			</div>

			<div class="form-group">
				<label for="fecha" class="control-label col-xs-3">fecha de deposito</label>
				<div class="col-xs-3">
					
					<input type="date" class="form-control" id="fechaDepo" name="fechaDepo" placeholder="" >
				</div>
				
			</div>
		
		

			<div class="form-group">
				<label for="ut" class="control-label col-xs-3">Unidad tributaria</label>
				<div class="col-xs-3">
					
					<input type="text" class="form-control" id="unidad" name="unidad" placeholder="" >
				</div>
				
			</div>
		
	

			<div class="form-group">
				<label for="depo" class="control-label col-xs-3"> N° de solicitud</label>
				<div class="col-xs-3">
					
					<input type="text" class="form-control" id="nSolici" name="nSolici" placeholder="" >
				</div>
				
			</div>
		
		

			<div class="form-group">
				<label for="insp" class="control-label col-xs-3"> Inspeccion realizada por</label>
				<div class="col-xs-6">
					
					<input type="text" class="form-control" id="inspector" placeholder="" name="inspector" >
				</div>
				
			</div>
		
		

			<div class="form-group">
				<label for="insig" class="control-label col-xs-3"> N° de Insignia</label>
				<div class="col-xs-3">
					
					<input type="text" class="form-control" id="depositoo" placeholder="" name="nInsignia" >
				</div>
				
			</div>
</form>
			<br><br>
		<center>
			
			<button type="submit" class="btn btn-primary">Registrar</button>
			<button type="button" class="btn btn-primary">Cancelar</button>
		
		</center>
		</div>

  <div class="col-md-4 ">
                 <img src="<?php echo base_url()?>public/imagenes/images.jpg" width="100%" height="auto">
                 <br><br><br><br>
                 <img src="<?php echo base_url()?>public/imagenes/inspeccion1.jpg" width="100%" height="auto">
            <br><br><br><br>
                  <img src="<?php echo base_url()?>public/imagenes/inspeccion.jpg"  width="100%" height="auto">
            
            </div>
		

		</div>
		</div>



<br><br><br><br><br><br>