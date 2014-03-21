$(document).ready(//define todas las funciones cuando el documento esta listo,completamente descargado
          function(){//declaramos una funcion implicita
                //$('img').hide(1000);
               // $('img').click(
                //	function(){
                //		$(this).hide(1000);
                //	});
                $('img').click(
                	function(){
                		$(this).fadeTo("fast", Math.random());
                            });
             
             //   var imagenes[] = {"../img/1.jpg","../img/2.jpg","3.jpg","4.jpg","5.jpg""6.jpg","7.jpg","8.jpg","9.jpg""10.jpg"}
                      var i=2;
                      var myVar = setInterval(function(){myTimer()},2000);
                      function myTimer()
                           {   
                              if(i < 11)
                                {
                                  $('#cambiar').attr('src','img/'+i+'.jpg'); 
                                  i++;
                                }          
                           }     
          }
);//llamada a metodos $
//ayuda a tiempo de procesamiento del servidor,
