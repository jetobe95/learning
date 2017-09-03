
<!doctype html>
<html>
<head>

<meta http-equiv="refresh" content="10">
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learning";
		 

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
	
	// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
	
	