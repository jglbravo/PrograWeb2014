$(document).ready(

	function(){
		var pozo;
		var sube;
		var resbala;
		$('#btn_aceptar').click(
  
	function(){
		pozo=parseInt($('#txt_pozo').val());
		sube=parseInt($('#txt_sube').val()); 
		resbala=parseInt($('#txt_resbala').val());

				if (resbala>sube){
					alert("¡NO va salir!... Resbala mucho");
				}
				else {
			var resbala_aux;
			var myVar=setInterval(function(){myTimer()},1000);
			var cont_dias=0;
			var band=0;

			function myTimer(){	
					if (pozo>=0){
						if (band==0){
							var ayuda=parseInt($('#caracol_agropecuario').css("top"));
							ayuda=ayuda-30;
							$('#caracol_agropecuario').css({"top": ayuda+"px"});
							$('#cambio_imag').attr('src', 'img/sol.jpg');
							pozo=pozo-sube;
							
							if (pozo>=0){
								resbala_aux=pozo+resbala;
								pozo=resbala_aux;
								cont_dias++;
							};
							band=1;
						}
					else{
						$('#cambio_imag').attr('src', 'img/luna.jpg');
						$('#dia_numero p:first').html(cont_dias);
						band=0;
						}
					}

				if (pozo<=0){
						alert("Logró salir el carol agropecuario");
						window.clearInterval(myVar);
						window.clearInterval(myVar2);
					};
				}
			};
		});
	}
);  