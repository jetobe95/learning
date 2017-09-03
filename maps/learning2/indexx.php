<!DOCTYPE html>
<html>
    <head>
       
    <meta charset="utf-8">
        <title>Localización Syrus 2G </title>
    <link href="../learning/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
     
	
     <h1>
	   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "syrusp";
		 

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



		 
		 
		 
		 
		 
		 

		 
		 
		 
		 
		 
		 ?>
     </h1>
     <blockquote>
       <h1><em>  <center>
         <p><em><em><img src="../learning/logos/2.png" width="400" height="130" alt=""/></em></em></p>
         <p><strong>Localización Syrus 2G </strong></p>
       </center>
       </em></h1>
     </blockquote>
     
     
     <table width="295" height="194" border="3"  	align="center">
  <tbody>
   
   
    <tr>
      <td width="107" height="30">Hora</td>
      <td width="168"><iframe id='dynamic-content3' src='../refreshh.php' style="border:none;" height="30" width="100" ></iframe></td>
    </tr>
    
    <tr>
      <td height="30" >Fecha</td>
      <td><iframe id='dynamic-content2' src='../refresh3.php' style="border:none;" height="30" width="120"   ></iframe></td>
    </tr>
    <tr>
      <td width="107" height="30">Latitud</td>
      <td width="168"><iframe id='dynamic-content3' src='../refresh.php' style="border:none;" height="30" width="100" ></iframe></td>
    </tr>
    <tr>
      <td height="30">Longitud</td>
      <td><iframe id='dynamic-content1' src='../refresh2.php' style="border:none;" height="30" width="100"   ></iframe></td>
    </tr>
    <tr>
      <td height="30">Velocidad[mph]</td>
      <td><iframe id='dynamic-content2' src='../refreshv.php' style="border:none;" height="30" width="100"   ></iframe></td>
    </tr>
  </tbody>
</table>
     
     <center>
    <h1>Google Maps</h1>
    <div id="map"></div>
    <script>
      function initMap() {
        var uninorte = {lat: 11.019627, lng: -74.850759};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uninorte
        });
        var marker = new google.maps.Marker({
          position: uninorte,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB49ECWnKZPz5_LWn_plIz8QjaWaiX84Os&callback=initMap">
    </script>
  </center>
     <p>&nbsp;</p>
     <center>
       <h1><img src="../learning/logos/3.png" width="99" height="74" alt="" /></h1>
       <h1>&nbsp;</h1>
    </center> 
</body>
</html>


