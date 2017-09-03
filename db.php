<?php


// Create connection

	

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

// Opens a connection to a MySQL server

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "syrus";
		 

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
	
	
	
	
			$query = "SELECT * FROM datos ORDER BY id_syrus DESC LIMIT 100";
						$result= mysqli_query($conn,$query);


// Select all the rows in the markers table



header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row = mysqli_fetch_array($result)){
  // Add to XML document node
  echo '<marker ';
  echo 'id="' . parseToXML($row['id_syrus']) . '" ';
  echo 'Hora="' . parseToXML($row['Hora']) . '" ';
	 echo 'fecha="' . parseToXML($row['Fecha']) . '" ';
  echo 'lat="' . $row['Latitud'] . '" ';
  echo 'lng="' . $row['Longitud'] . '" ';
  echo 'Velocidad="' . $row['Velocidad'] . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';

?>
