$(document).ready(//define todas las funciones cuando el documento esta listo,completamente descargado
          function(){//declaramos una funcion implicita
              

$('#cambiar2').fadeTo("fast", 0.0);
                   $('#boton').click(
                      function()
                           {

                            var profundidad=parseInt($('#dato1').val());
                            var sube=parseInt($('#dato2').val());
                            var resbala=parseInt($('#dato3').val());
                            var termina=0;
                            var dia=0;
                            var duracion=sube*1000;
                           // alert(resbala);
                            var i=0;
                            var nueva_profun=((sube*300)/profundidad);
                            if(profundidad>resbala)
                              {
                               if(sube>=profundidad)
                                  {
                                   $('#caracol1').animate({ marginBottom:0 });
                                   dia++;
                                   alert("Caracol subio a la cima :)"+"en el dia"+dia);
                                  }
                                  else
                                  {
                                    var myVar = setInterval(function(){myTimer()},duracion);
                                    function myTimer()
                                     { 
                                        if (i==0)
                                         { 
                                            $('#caracol1').animate({ marginBottom:nueva_profun });
                                            $('#cambiar').fadeTo("fast", 0.0);//sol se esconde
                                            $('#cambiar2').fadeTo("fast", 1.0);//sale la luna
                                            i++;
                                            dia++;
                                            termina=termina+sube;
                                            if(parseInt(termina)>=profundidad)
                                              {
                                                 alert("Caracol subio a la cima :)"+"en el dia"+dia);
                                                 $('#caracol1').animate({ marginBottom:300 });
                                                 window.clearInterval(myVar);
                                              }
                                         }
                                         else
                                         { 
                                            nueva_profun=nueva_profun+((resbala*300)/profundidad);
                                            $('#caracol1').animate({ marginBottom:nueva_profun});
                                            $('#cambiar2').fadeTo("fast", 0.0);//luna se esconde
                                            $('#cambiar').fadeTo("fast", 1.0);//sale el sol
                                             i = 0; 
                                            termina=termina-resbala;
                                            nueva_profun=nueva_profun-((sube*300)/profundidad);
                                         } 
                                      }  
                                   } 
                               }
                               else 
                                  alert("La profundidad es menor a los metros que resbala,verifique!!:) ")
                         }); 
          }
);//llamada a metodos $
//ayuda a tiempo de procesamiento del servidor,
