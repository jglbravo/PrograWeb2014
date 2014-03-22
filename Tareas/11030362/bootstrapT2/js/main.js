 $(document).ready(
	function(){
		//$('img').hide(1000); //Selecciona todas las imagenes
		
		$('img').click(
				function(){
					$(this).hide(1000);
				}
	);
	
		$('#btn1').click(
			function(){
				$('img').show(1000);
			}
		
		);
	
	}
);