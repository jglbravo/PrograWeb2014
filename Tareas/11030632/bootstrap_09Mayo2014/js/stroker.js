$(document).ready(//define todas las funciones cuando el documento esta listo,completamente descargado
          function(){//declaramos una funcion implicita
             
              

//$('#cambiar').fadeTo("fast", 0.0);
                   $('#boton1').click(
                      function()
                           {
                               $('#cambiar').attr('src','img/1.PNG'); 
                           }); 
                   $('#boton2').click(
                      function()
                           {
                               $('#cambiar').attr('src','img/22.PNG'); 
                           }); 
                   $('#boton3').click(
                      function()
                           {
                              $('#cambiar').attr('src','img/3.PNG'); 
                           }); 

/*
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
                                            dia++;
                                            nueva_profun=nueva_profun-((sube*300)/profundidad);
                                         } 


                                      }  
                                   } 
                               }
                               else 
                                  alert("La profundidad es menor a los metros que resbala,verifique!!:) ")
                         }); */
          }
);//llamada a metodos $
//ayuda a tiempo de procesamiento del servidor,


/*
$(document).ready(//define todas las funciones cuando el documento esta listo,completamente descargado
          function(){//declaramos una funcion implicita
              

//$('#cambiar2').fadeTo("fast", 0.0);
                   $('#boton').click(
                      function()
                           {

                            var d=parseInt($('#dato1').val());
                            var m=parseInt($('#dato2').val());
                            var a=parseInt($('#dato3').val());
                            var c=0;
                            var e=0;
                            var b=0;
                            var f=0;
                            //var duracion=sube*1000;
                           // alert(resbala);
                           // var i=0;
                            //var nueva_profun=((sube*300)/profundidad);
                            if(m > 2)
                              {
                                m = m - 2;
                                c = a /100;
                                e = a%100;
                                b = ((13*m) - 1)/5 + (e/4) + (c/4);
                                f = (b + e + d - (2*c))%7;
                              }
                               else 
                               {
                                m = m + 10;
                                a = a - 1;
                                c = a /100;
                                e = a% 100;
                                b = ((13*m) - 1)/5 + (e/4) + (c/4);
                                f = (b + e + d - (2*c))% 7;
                                //  alert("La profundidad es menor a los metros que resbala,verifique!!:) ")
                                }
                                f=Math.round(f-1);
                              
                               
                                 if(f==0){
                                  alert("Sabado,Domingo,Lunes");
                                }
                                 if(f==1){
                                  alert("Domingo,Lunes,Martes");
                                }
                                 if(f==2){
                                  alert("Lunes,Martes,Miercoles");
                                }
                                 if(f==3){
                                  alert("Martes,Miercoles,jueves");
                                }
                                 if(f==4){
                                  alert("Miercoles,jueves,viernes");
                                }
                                 if(f==5){
                                   alert("jueves,viernes,sabado");
                                }
                                 if(f==6){
                                  alert("viernes,sabado,domingo");
                                }

                             
                                
                         }); 
          }
);//llamada a metodos $
//ayuda a tiempo de procesamiento del servidor,
/*1.Si m > 2, entonces vaya al paso 3.
2.Haga m = m + 10 y a = a - 1 y vaya al paso 4.
3.Haga m = m - 2.
4.Haga c = a / 100 y e = a mod 100.
5.Haga b = (13m - 1)/5 + e/4 + c/4.
6.Haga f = (b + e + d - 2c) mod 7.*/