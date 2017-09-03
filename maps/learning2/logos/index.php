<!DOCTYPE html>
<html>
    <head>
       
    <meta charset="utf-8">
        <title>Syrus location </title>
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
     <h1>&nbsp;</h1>
     <blockquote>
       <h1><em>DATOS DE LA SYRUS</em></h1>
     </blockquote>
     <table width="415" height="331" border="3">
  <tbody>
   
   
    <tr>
      <td width="193"><h1>HORA</h1></td>
      <td width="229"><iframe id='dynamic-content3' src='refreshh.php' style="border:none;" height="50" width="200" ></iframe></td>
    </tr>
    
    <tr>
      <td height="63"><h1>FECHA</h1></td>
      <td><iframe id='dynamic-content2' src='refresh3.php' style="border:none;" height="50" width="200"   ></iframe></td>
    </tr>
    <tr>
      <td width="193"><h1>LATITUD</h1></td>
      <td width="229"><iframe id='dynamic-content3' src='refresh.php' style="border:none;" height="50" width="200" ></iframe></td>
    </tr>
    <tr>
      <td><h1>LONGITUD</h1></td>
      <td><iframe id='dynamic-content1' src='refresh2.php' style="border:none;" height="50" width="200"   ></iframe></td>
    </tr>
    <tr>
      <td height="88"><h1>VELOCIDAD</h1></td>
      <td><iframe id='dynamic-content2' src='refreshv.php' style="border:none;" height="50" width="200"   ></iframe></td>
    </tr>
    
  </tbody>
</table>
    </p>
    <table width="1242" border="3">
  <tbody>
    <tr>
      <td width="1228"><iframe id='dynamic-content3' src='ms.html' style="border:none;" height="100%" width="1000" ></iframe></td>
    </tr>
  </tbody>
</table>

    
    
	 
	 
</body>
</html>


