<!DOCTYPE html>
<html>
    <head>
       
    <meta charset="utf-8">
        <title>Localización Syrus 2G </title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
     
	
     <h1>
	   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "syrus";
		 

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
         <p><em><img src="logos/2.png" width="349" height="130" alt=""/></em></p>
         <p><strong>Localización Syrus 2G </strong></p>
       </center>
       </em></h1>
     </blockquote>
     <table width="247" height="194" border="3"  	align="center">
  <tbody>
   
   
    <tr>
      <td width="107" height="30">Hora</td>
      <td width="168"><iframe id='dynamic-content3' src='refreshh.php' style="border:none;" height="40" width="100" ></iframe></td>
    </tr>
    
    <tr>
      <td height="30" >Fecha</td>
      <td><iframe id='dynamic-content2' src='refresh3.php' style="border:none;" height="40" width="120"   ></iframe></td>
    </tr>
    <tr>
      <td width="107" height="30">Latitud</td>
      <td width="168"><iframe id='dynamic-content3' src='refresh.php' style="border:none;" height="40" width="100" ></iframe></td>
    </tr>
    <tr>
      <td height="30">Longitud</td>
      <td><iframe id='dynamic-content1' src='refresh2.php' style="border:none;" height="40" width="100"   ></iframe></td>
    </tr>
    <tr>
      <td height="30">Velocidad[mph]</td>
      <td><iframe id='dynamic-content2' src='refreshv.php' style="border:none;" height="40" width="100"   ></iframe></td>
    </tr>
    
  </tbody>
</table>
     <center>
       <h1>&nbsp;</h1>
       <h1><img src="logos/3.png" width="63" height="50" alt="" /></h1>
    </center> 
    </p>
</body>
</html>


