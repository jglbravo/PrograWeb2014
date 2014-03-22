$(document).ready(
  function(){
       var flag=0;
		$('img').click(
		  function(){
			  if (flag==0) {
			 	 $(this).fadeTo( "fast", 0.1); flag=1;  // ATENUAR IMAGEN CON NIVELES DE CAPAS
			  }
			  else{
			  	 $(this).fadeTo("slow",1); flag=0;
			  }  
		 }
		);
		$('#img1').attr("src","images/"+parseInt(+1)+".jpg");
		$('#img2').attr("src","images/"+parseInt(+2)+".jpg");
		$('#img3').attr("src","images/"+parseInt(+3)+".jpg");
		$('#img4').attr("src","images/"+parseInt(+4)+".jpg");
		$('#img5').attr("src","images/"+parseInt(+5)+".jpg");
		$('#img6').attr("src","images/"+parseInt(+6)+".jpg");
		$('#img7').attr("src","images/"+parseInt(+7)+".jpg");
		$('#img8').attr("src","images/"+parseInt(+8)+".jpg");
		$('#img9').attr("src","images/"+parseInt(+9)+".jpg");
		
		var myVar=setInterval(function(){myTimer()},2000);
			function myTimer(){
				$('#variable').attr("src","images/"+parseInt((Math.random()*9)+1)+".jpg");
			}
    }
);



