 $(document).ready(function(){
			load(1);
		});

		function load(page){
			var q= $("#q").val();
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'../process/ajax/productos_factura.php?action=ajax&page='+page+'&q='+q,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}
		  
		  
		  
		  
		  
		  
	 function VentanaCentrada(theURL,winName,features, myWidth, myHeight, isCenter) { //v3.0
	  if(window.screen)if(isCenter)if(isCenter=="true"){
		var myLeft = (screen.width-myWidth)/2;
		var myTop = (screen.height-myHeight)/2;
		features+=(features!='')?',':'';
		features+=',left='+myLeft+',top='+myTop;
	  }
	  window.open(theURL,winName,features+((features!='')?',':'')+'width='+myWidth+',height='+myHeight);
	}
	 
	function agregar(id, siguiente, longitud)
		{
			var id = document.getElementById("id");
			 if((id.value) == id.value)
			 //siguiente.focus();
			//alert(id.value);
			
			//Fin validacion
			
			$.ajax({
        type: "POST",
        url: "../process/ajax/agregar_facturacion_2.php",
        data: "id="+id.value,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: YUBKK...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		document.getElementById("id").value = "";
		}
			});
		}
		
		function agregarProd(id)
		{
			
			$.ajax({
        type: "POST",
        url: "../process/ajax/agregar_facturacion.php",
        data: "id="+id,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: YUBKK...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		document.getElementById("id").value = "";
		}
			});
		}
		
			function eliminar (id)
		{
			
			$.ajax({
        type: "GET",
        url: "../process/ajax/agregar_facturacion_2.php",
        data: "id="+id,
		 beforeSend: function(objeto){
			$("#resultados").html("Mensaje: Cargando...");
		  },
        success: function(datos){
		$("#resultados").html(datos);
		}
			});

		}
		$("#datos_factura").submit(function(){
		  var ID = $("#ID").val();
		  var CodVend = $("#CodVend").val();
		  var condiciones = $("#condiciones").val();
		  var dinero = $("#dinero").val();
		  var comprobantes = $("#comprobantes").val();
		  var MedioBancarizado = $("#MedioBancarizado").val();
		  var numero_operacion = $("#numero_operacion").val();
		  var banco = $("#banco").val();
		  if (ID==""){
			  alert("Debes seleccionar un cliente");
			  $("#NombreEmpresa").focus();
			  return false;
		  }
		  
		 VentanaCentrada('../process/regFactura.php?ID='+ID+'&CodVend='+CodVend+'&condiciones='+condiciones+'&dinero='+dinero+'&comprobantes='+comprobantes+'&MedioBancarizado='+MedioBancarizado+'&numero_operacion='+numero_operacion+'&banco='+banco,'Factura','','1024','768','true');
	 	});
	 	
	 	$("#datos_ecoFact").submit(function(){
		  var ID = $("#Ruc").val();
		  var RZ = $("#NombreEmpresa").val();
		  var DR = $("#Direccion").val();
		  var Timpresion = $("#Timpresion").val();
		  var comprobantes = $("#comprobantes").val();
		  if (ID==""){
			  alert("Debes seleccionar un cliente");
			  $("#NombreEmpresa").focus();
			  return false;
		  }
		  
		 VentanaCentrada('../process/regFactura.php?ruc='+ID+'&NombreEmpresa='+RZ+'&Direccion='+DR+'&Timpresion='+Timpresion+'&comprobantes='+comprobantes,'Factura','','1024','768','true');
	 	});
	 	
	 	
	 	
	 	
	 	
	 	
	 	
	 	
	 	
	 	
	 	
	 	
	 	$("#datos_cotizacion").submit(function(){
		  var ruc = $("#ruc").val();
		  var nombre = $("#nombre").val();
		  var correo = $("#correo").val();
		  var telefono = $("#telefono").val();
		  var direccion = $("#direccion").val();
		  var CodCotiza = $("#CodCotiza").val();
		  var fecha = $("#fecha").val();
		  var option = $("#option").val();
		   var estatus = $("#estatus").val();
		   //option2=document.datos_cotizacion.option.value;
		  var total = $("#total").val();
		  if (ruc==""){
			  alert("Debes seleccionar un cliente!!!!");
			  $("#ruc").focus();
			  return false;
		  }
		 VentanaCentrada('../process/RegCotiza.php?ruc='+ruc+'&nombre='+nombre+'&correo='+correo+'&telefono='+telefono+'&direccion='+direccion+'&CodCotiza='+CodCotiza+'&fecha='+fecha+'&option='+option+'&estatus='+estatus+'&total='+total,'Factura','','1024','768','true');
	 	});
		//?ID='+ID+'&CodVend='+CodVend+'&condiciones='+condiciones,
		 //VentanaCentrada('pdf/documentos/factura_pdf.php?id_cliente='+id_cliente+'&id_vendedor='+id_vendedor+'&condiciones='+condiciones,'Factura','','1024','768','true');
	 	//VentanaCentrada('pdf/documentos/factura_pdf.php?id_cliente='+id_cliente+'&id_vendedor='+id_vendedor+'&condiciones='+condiciones,'Factura','','1024','768','true');
	 	
