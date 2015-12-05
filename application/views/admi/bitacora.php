<br><br><br><br><br><br><br><br><br><br><br><br>


<center> 
		<div class="container">
			<div class="row"> 
				<div class="col-sm-12">
					<div class="table-responsive">
					  	<table class="table-hover" border="2"  width="100%" id="bitacora" >
					  	
						  	<tr>
						  	
						  		<h2>Bitacora</h2>

						 	</tr>
						 	
						 	<!-- Cabecera de la tabla  -->
							 	<thead> 

								 	<tr>

											<td class="active" width="10%" align="center">ID</td>
											<td class="active" width="10%" align="center">Accción</td>
											<td class="active" width="10%" align="center">Usuario</td>
											<td class="active" width="10%" align="center">Fecha</td>
											
								 		
								 	</tr>

								</thead>
						 		
						 		<!-- Cuerpo de la tabla  -->
						 		<tbody align="center"> 
								 	
								 	<?php 
											foreach ($datos as $dato)
											{
										?>
										<?php echo '<tr>'?>		
										<?php echo '<td class="info">'.$dato->id_bitacora.'</td>'?>
										<?php echo '<td class="info">'.$dato->accion.'</td>'?>
										<?php echo '<td class="info">'.$dato->usuario.'</td>'?>
										<?php echo '<td class="info">'.$dato->fecha.'</td>'?>
										<?php echo '</tr>'?>		
										<?php	
											} 
										?>
								 	
								
								</tbody>
					 		
				  			</table>
		  			</div>
		  		</div>
		  	</div>
		</div>
  	</center>

 <br><br><br><br><br><br><br><br><br><br><br><br>
