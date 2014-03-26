$(document).ready(//VA A DEFINIR TODOS LOS ELEMENTOS YA CUANDO LA PAGINA ESTE LISTA

function()
{




  var pozo;
  var sube;
  var resbala;
  $('#btn_aceptar').click(
  function()
  {
    pozo=parseInt($('#caja_pozo').val()); //---> PASAR DE TEXTO A TIPO NUMERICO
    sube=parseInt($('#caja_sube').val()); //---> PASAR DE TEXTO A TIPO NUMERICO 
    resbala=parseInt($('#caja_resbala').val()); //---> PASAR DE TEXTO A TIPO NUMERICO

				if ((pozo<=0) || (sube<=0) || (resbala<=0) || (isNaN(pozo)) || (isNaN(sube)) || (isNaN(resbala)))
				{
					
					alert("Introduzca valores");
					
					
				}
				else if (resbala>sube)
				{
					alert("No puede resbalar mas de los que sube");
				}
				else {
			var resbala_aux;
			var myVar=setInterval(function(){myTimer()},1000);
			var cont_dias=0;
			var band=0;

			function myTimer()
			{	
					if (pozo>=0)
					{
						if (band==0) 
						{
						var ayuda=parseInt($('#caracola_magica').css("top"));
						ayuda=ayuda-30;
						$('#caracola_magica').css({"top": ayuda+"px"});
						$('#cambio_imag').attr('src', 'img/dia.jpg');
						pozo=pozo-sube;
						if (pozo>=0) 
							{
								resbala_aux=pozo+resbala;
								pozo=resbala_aux;
								cont_dias++;
							};
							band=1;
						}
					else
					{
						$('#cambio_imag').attr('src', 'img/noche.jpg');
						$('#dia_numero p:first').html(cont_dias);
						band=0;
					}

					//alert(pozo)
											
					}

				if (pozo<=0)
					{
						alert("El caracol ha salido");
						window.clearInterval(myVar);
						window.clearInterval(myVar2);
					};
			}
					};//ELSE


			//var ayuda=$('#caracola_magica').css("top");
			//alert(ayuda);
			//$('#caracola_magica').css({"top": "200px"}); //DEMASIADO IMPORTANTE LAS LLAVES
			//var ayuda2=$('#caracola_magica').css("top");
			//alert(ayuda2);
  });
}


/*	function valores()
	{
		$('button').click( //EL EVENTO CLICK SE LE PUEDE AGREGAR A CUALQUIER ELEMENTO QUE YO PUEDA SELECCIONAR
			function()
			{
				var prim_valor=document.getElementsByClassName('caja')[0].value;
				var segu_valor=document.getElementsByClassName('caja')[1].value;
				var terc_valor=document.getElementsByClassName('caja')[2].value;

				if (prim_valor==12) 
				{
					$('asde').attr('id', 'b');
				}
			}
	}*/
		);  //.ready ES UNA FUNCION jQuery es una libreria de javascript, NO LLEVA PARAMETROS EL FUNCTION






//----------------------------------------FUNCIONAL--------------------------
/*$(document).ready(//VA A DEFINIR TODOS LOS ELEMENTOS YA CUANDO LA PAGINA ESTE LISTA

function() 
{
  var x;
  var y;
  $('button').click(
  function()
  {
    x=parseInt($('#caja_pozo').val()); //---> PASAR DE TEXTO A TIPO NUMERICO 
    y=(x * 10);
    alert(y);
			var cont=1;
			var myVar=setInterval(function(){myTimer()},1000);

			function myTimer()
			{
				cont ++;
				if ((cont%2)==0) {
					$('#cambio_imag').attr('src', 'img/CARACOL/luna.jpg');
				} else{
					$('#cambio_imag').attr('src', 'img/CARACOL/sol.jpg');
				};
			}
  });
}*/


//----------------------------------------FUNCIONAL--------------------------
/*$(document).ready(//VA A DEFINIR TODOS LOS ELEMENTOS YA CUANDO LA PAGINA ESTE LISTA

function()
{
  var x;
  var y;
  $('button').click(
  function()
  {
    x=parseInt($('#caja_pozo').val()); //---> PASAR DE TEXTO A TIPO NUMERICO 
    y=(x * 10);
    alert(y);
			var cont=1;
			var myVar=setInterval(function(){myTimer()},1000);

			function myTimer()
			{
				cont ++;
				if ((cont%2)==0) {
					$('#cambio_imag').attr('src', 'img/CARACOL/luna.jpg');
					var ayuda=parseInt($('#caracola_magica').css("top"));
					ayuda=ayuda-30;
					$('#caracola_magica').css({"top": ayuda+"px"});
				} else{
					$('#cambio_imag').attr('src', 'img/CARACOL/sol.jpg');
					var ayuda=parseInt($('#caracola_magica').css("top"));
					ayuda=ayuda-30;
					$('#caracola_magica').css({"top": ayuda+"px"});
				};

			}
			//var ayuda=$('#caracola_magica').css("top");
			//alert(ayuda);
			//$('#caracola_magica').css({"top": "200px"}); //DEMASIADO IMPORTANTE LAS LLAVES
			//var ayuda2=$('#caracola_magica').css("top");
			//alert(ayuda2);
  });
}*/
