$(document).ready(
  function(){
       var flag=0;
		$('img').click(
		  function(){
			  if (flag==0) {
			 	 $(this).fadeTo( "fast", 0.3); flag=1;  
			  }
			  else{
			  	 $(this).fadeTo("slow",1); flag=0;
			  }
			  
		 }
		);
		
		$('#img1').attr("src","images/"+1+".jpg");
		$('#img2').attr("src","images/"+2+".jpg");
		$('#img3').attr("src","images/"+3+".jpg");
		$('#img4').attr("src","images/"+4+".jpg");
		$('#img5').attr("src","images/"+5+".jpg");
		$('#img6').attr("src","images/"+6+".jpg");
		$('#img7').attr("src","images/"+7+".jpg");
		$('#img8').attr("src","images/"+8+".jpg");
		$('#img9').attr("src","images/"+9+".jpg");
		
		var myVar=setInterval(function(){myTimer()},2000);

			function myTimer(){
				$('#imglol').attr("src","images/"+parseInt((Math.random()*9)+1)+".jpg");
			}
		
		
    }
);



