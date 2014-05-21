$(document).ready(
	function(){
		

		$( "#btnAjax" ).click(function() {

			$.ajax({
				   type: "POST",
				   
				   cache: false,
				   
				   url: "tabla.php",
				   
				   beforeSend: function( xhr ) {
						$('#loadAjax').html('beforeSend');
						$('#loadAjax').hide("slow");
				   },
				   
				   error: function( ){
						$('#loadAjax').html('error');
				   }, 
				   
				   data: "profundidad="+$("#profundidad").val()+"&sube="+$("#sube").val()+"&baja="+$("#baja").val()+"&dias="+$("#dias").val(),
				   
				   success: function(data){
				   	$('#loadAjax').show("slow");
						$('#loadAjax').html('success'+data);
					$("#profundidad").val("");
					$("#sube").val("");
					$("#baja").val("");
					$("#dias").val("");
				 }
			});// fin ajax
		
		});	// fin click #btnAjax

		$( "#ENVIAR" ).click(function() {

			$.ajax({
				   type: "POST",
				   
				   cache: false,
				   
				   url: "tabladatos.php",
				   
				   beforeSend: function( xhr ) {
						$('#loadAjax').html('beforeSend');
						$('#loadAjax').hide("slow");
				   },
				   
				   error: function( ){
						$('#loadAjax').html('error');
				   }, 
				   
				   data: "nombre="+$("#nombre").val()+"&apellido_pat="+$("#apellido_mat").val()+"&apellido_mat="+$("#apellido_mat").val()+
				   "&edad="+$("#edad").val()+"&sexo="+$("#sexo").val()+"&ciudad="+$("#ciudad").val()+"&colonia="+$("#colonia").val()+
				   "&calle="+$("#calle").val()+"&numero="+$("#numero").val()+"&correo="+$("#correo").val(),
				   
				   success: function(data){
				   	$('#loadAjax').show("slow");
						$('#loadAjax').html('success'+data);
							$("#nombre").val("");
							$("#apellido_pat").val("");
							$("#apellido_mat").val("");
							$("#edad").val("");
							$("#sexo").val("");
							$("#ciudad").val("");
							$("#colonia").val("");
							$("#calle").val("");
							$("#numero").val("");
							$("#correo").val("");
							
						 }
			});// fin ajax
		
		});	// fin click #btnAjax

	$( "#ENVIAR2" ).click(function() {

			$.ajax({
				   type: "POST",
				   
				   cache: false,
				   
				   url: "tablahistorial.php",
				   
				   beforeSend: function( xhr ) {
						$('#loadAjax').html('beforeSend');
						$('#loadAjax').hide("slow");
				   },
				   
				   error: function( ){
						$('#loadAjax').html('error');
				   }, 
				   
				   data: "nombre="+$("#nombre").val()+"&apellido_pat="+$("#apellido_mat").val()+"&apellido_mat="+$("#apellido_mat").val()+
				   "&edad="+$("#edad").val()+"&sexo="+$("#sexo").val()+"&telefono="+$("#telefono").val()+"&peso="+$("#peso").val()+
				   "&talla="+$("#talla").val()+"&tipo="+$("#tipo").val()+"&nacimiento="+$("#nacimiento").val()+
				   "&enfermedades="+$("#enfermedades").val()+"&desarrollo="+$("#desarrollo").val(),
				   
				   success: function(data){
				   	$('#loadAjax').show("slow");
						$('#loadAjax').html('success'+data);
							$("#nombre").val("");
							$("#apellido_pat").val("");
							$("#apellido_mat").val("");
							$("#edad").val("");
							$("#sexo").val("");
							$("#telefono").val("");
							$("#peso").val("");
							$("#talla").val("");
							$("#tipo").val("");
							$("#nacimiento").val("");
							$("#enfermedades").val("");
							$("#desarrollo").val("");
							
						 }
			});// fin ajax
		
		});	// fin click #btnAjax

		$( "#ENVIAR3" ).click(function() {

			$.ajax({
				   type: "POST",
				   
				   cache: false,
				   
				   url: "tablaregistro.php",
				   
				   beforeSend: function( xhr ) {
						$('#loadAjax').html('beforeSend');
						$('#loadAjax').hide("slow");
				   },
				   
				   error: function( ){
						$('#loadAjax').html('error');
				   }, 
				   
				   data: "username="+$("#username").val()+"&email="+$("#email").val()+"&password="+$("#password").val()+
				   "&rfc="+$("#rfc").val()+"&cp="+$("#cp").val()+"&foto="+$("#foto").val(),
				   
				   success: function(data){
				   	$('#loadAjax').show("slow");
						$('#loadAjax').html('success'+data);
							$("#username").val("");
							$("#email").val("");
							$("#password").val("");
							$("#rfc").val("");
							$("#cp").val("");
							$("#foto").val("");
							
						 }
			});// fin ajax
		
		});	// fin click #btnAjax

	}
);
	