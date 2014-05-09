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
                                f = (b + e + d - 2*c)%7;
                              }
                               else 
                               {
                                m = m + 10;
                                a = a - 1;
                                c = a /100;
                                e = a% 100;
                                b = ((13*m) - 1)/5 + (e/4) + (c/4);
                                f = (b + e + d - 2*c)% 7;
                                //  alert("La profundidad es menor a los metros que resbala,verifique!!:) ")
                                }

                                switch(parseInt(f))
                                {
                                   case '0':alert("Domingo,Lunes,Martes");
                                   break;
                                   case '1':alert("Lunes,Martes,Miercoles");
                                   break;
                                   case '2':alert("Martes,Miercoles,Jueves");
                                   break;
                                   case '3':alert("Miercoles,Jueves,Viernes");
                                   break;
                                   case '4':alert("Jueves,Viernes,Sabado");
                                   break;
                                   case '5':alert("Viernes,Sabado,Domingo");
                                   break;
                                   case '6':alert("Sabado,Domingo,Lunes");
                                   break;
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