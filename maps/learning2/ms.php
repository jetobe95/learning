<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
   
   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "syrus";
		 

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
	
	
	
	
			$query = "SELECT * FROM datos ORDER BY id_syrus DESC LIMIT 1";
						$resultado= mysqli_query($conn,$query);

						while ($fila = mysqli_fetch_array($resultado))
						{
						?>
		       
		        
		           
               <?php echo $fila ['Longitud']   
	  
	  
	  
	  
	  
	  
	  ?>
		       
		        
							<?php
							}
							?>
	
	

   
    <h3>Syrus location</h3>
    <div id="map"></div>
    <script>
		
		while ($fila = mysqli_fetch_array($resultado))
						{
						?>
		       
		        
		           
               <?php echo $fila ['Longitud']   
	  
							
	  
	  
	  
	  
	  ?>
		       
		        
							<?php
							
							?>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
      function initMap() {
        var uluru = {lat: -74.82881  , lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyArdcycOsKBDZx4qRWrLhFllMXRzXgDKsU &callback=initMap">
    </script>
  </body>
</html>