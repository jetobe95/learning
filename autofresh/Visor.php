 
<?php

<html >
<head>
<title>Localizador</title>


$mysqli = new mysqli("localhost", "root", "", "syrus");

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>







 setInterval(function (){
			
					
	
					//obtiene de la base de datos los rep
	    			$.get("getter.php?opt=1&r="+Math.random(),"",function(data){
	    				// recorre el objeto data 
						$.each(data, function(i, val) {							
						  latitude=val[2];
						  longitude=val[3];
							
							if(ft==true){
								ft=false;
								initialize();
							}
							
							//crea o edita los marcadores segun vallan apareciendo
							
							var myLatlng = new google.maps.LatLng(latitude,longitude);
							if(markers[i]==null){
								markers[i] = new google.maps.Marker({
									position: myLatlng,
								    map: map,
									icon: pinImageR,
									shadow: pinShadowR,
									title:val[1]								
								});	
							}else{
								 markers[i].setPosition(myLatlng);
	    			
							}
							
						});
						
	    			},"json");
					
	    			

	    			
		    		$("#contador").html(i);
		    		i=i+1;
		    	},3000);

 ?>

 </head>
<body>



</body>
</html>