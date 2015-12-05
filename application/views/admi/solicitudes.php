<br><br><br><br><br><br><br><br><br><br><br>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>

	$(document).ready(function(){
		
		$(".boton").on("click", function(){


			$.get("<?php echo base_url('admi/obtenerSolicitud') ?>", "", function(data){

				var json = JSON.parse(data);
				//console.log(json);
				var html = "";
				for(datos in json)
				{

			
					html += "<li>" + json[datos].nExpediente + "";
					html += "---" + json[datos].content + "</li>";
				}

				$("#content").html(html);
			});
		});
	});
	


	


</script>

	<button class="boton">Prueba </button>

<div id="content"></div>