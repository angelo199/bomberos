

	function eliminar(url)
	{
		if(confirm("Realmente desea eliminar este registro?"))
		{
			window.location=url;
		}	
	}

	/*function carga_ajax(ruta, valor1, valor2,  div)
	{
		$.post(ruta,{primer:valor1, segundo:valor2}, function(resp)
			{
				$("#"+div+"").html(resp);
			});
	}*/


	function carga_ajax(ruta,id,div) 
        {
          // alert(ruta );
           $.post(ruta,{id:id,},function(resp)
           {
                $("#"+div+"").html(resp);
           });
        }


      //Funcion para llenar los datos de la solicitud luego que llena los datos
    function llenarSolicitud()
	{
    
    	if(document.getElementById('vali').value == '0')
    	{
			//Guardamos todos los valores cargados de la solicitud
			var nSolicitud 				= 			document.getElementById('nSolicitud').value;
			var nExpediente 			=		 	document.getElementById('nExpediente').value;
			var nOperativo 				= 			document.getElementById('nOperativo').value;
			var fechaSolicitud 			= 			document.getElementById('fechaSolicitud').value;
			var tributarias 			= 			document.getElementById('tributarias').value;
			var fechaDeposito 			= 			document.getElementById('fechaDeposito').value;
			var inmueble 				=			document.getElementById('inmueble').value;
			var direccion 				= 			document.getElementById('direccion').value;
			var municipio 				= 			document.getElementById('municipio').value;
			var parroquia 				= 			document.getElementById('parroquia').value;
			var cargo 					= 			document.getElementById('cargo').value;
			var objetoRazon 			= 			document.getElementById('objetoRazon').value;

			
			//Validaciones
			if(fechaSolicitud == '' || tributarias == '' || fechaDeposito == '' || inmueble == '' || direccion == '' ||
			   municipio == '' || parroquia == '' || cargo == '' || objetoRazon == '')
			{

				alert("Debe llenar todos los campos !!");
				return false;
			}


			//Ahora voy agregar una nueva fila 

					var x= document.getElementById('solicitud').insertRow(1);

					//Creo nuevos td a la fila
					var a=x.insertCell(0);
					var b=x.insertCell(1);
					var c=x.insertCell(2);
					var d=x.insertCell(3);
					var e=x.insertCell(4);
					var f=x.insertCell(5);
					var g=x.insertCell(6);
					var h=x.insertCell(7);
					var i=x.insertCell(8);
					var j=x.insertCell(9);
					
					//Los alineo a la derecha
					a.align='Center';
					b.align='Center';
					c.align='Center';
					d.align='Center';
					e.align='Center';
					f.align='Center';
					g.align='Center';
					h.align='Center';
					i.align='Center';

					//Agrego mi fila y columnas al html
					a.innerHTML= '<span>'+tributarias+'</span> <input type="hidden" value="'+tributarias +'" id="tribu" name="tribu" readonly="readonly">';
					b.innerHTML= '<span>'+fechaSolicitud+'</span> <input type="hidden" value="'+fechaSolicitud +'" id="fechaSoli" name="fechaSoli" readonly="readonly">';
					c.innerHTML= '<span>'+fechaDeposito+'</span> <input type="hidden" value="'+fechaDeposito +'" id="fechaDepo" name="fechaDepo" readonly="readonly">';
					d.innerHTML= '<span>'+inmueble+'</span> <input type="hidden" value="'+inmueble +'" id="inmue" name="inmue" readonly="readonly">';
					e.innerHTML= '<span>'+direccion+'</span> <input type="hidden" value="'+direccion +'" id="direc" name="direc" readonly="readonly">';
					f.innerHTML= '<span>'+municipio+'</span> <input type="hidden" value="'+municipio +'" id="muni" name="muni" readonly="readonly">';
					g.innerHTML= '<span>'+parroquia+'</span> <input type="hidden" value="'+parroquia +'" id="parro" name="parro" readonly="readonly">';
					h.innerHTML= '<span>'+cargo+'</span> <input type="hidden" value="'+cargo +'" id="car" name="car" readonly="readonly">';
					i.innerHTML= '<span>'+objetoRazon+'</span> <input type="hidden" value="'+objetoRazon +'" id="obje" name="obje" readonly="readonly">';
					j.innerHTML='<img src="http://localhost/bomber/public/images/Eli.png" width="17px" height="17px" style="cursor:pointer" title="Eliminar esta fila" onclick="deleteRowSoli(this.parentNode.parentNode.rowIndex);" />';

					document.getElementById('vali').value = '1';
		}
	}

	function deleteRowSoli(i)
	{	
		
		if(confirm("¿Está seguro que desea eliminar la solicitud ?"))
		{

			document.getElementById('solicitud').deleteRow(i);	
			document.getElementById('vali').value = '0';

		}
		
			
	}


 