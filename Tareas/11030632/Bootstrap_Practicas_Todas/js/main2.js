$(document).ready(//define todas las funciones cuando el documento esta listo,completamente descargado
          function(){//declaramos una funcion implicita
                //$('img').hide(1000);
                $('img').click(
                	function(){
                		$(this).fadeTo("fast);
                	});
                $('#btn1').click(
                	function(){
                		$('img').show(1000);
                	});
          }
);//llamada a metodos $
//ayuda a tiempo de procesamiento del servidor,
