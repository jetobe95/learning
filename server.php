<?php
// Conectando, seleccionando la base de datos
$conn = new mysqli("localhost", "root", "", "syrus"); // conecta al servidor con user, contraseña


// Realizar una consulta MySQL
$query = "SELECT * FROM datos ORDER BY id_syrus DESC LIMIT 1"; // ultimo valor de la tabla llamada datos
$resultado = mysqli_query($conn, $query) or die("Consulta fallida: " . mysqli_error()); // guardo en resultado lo que saqué de query

$fila = mysqli_fetch_row($resultado); // guardo en un array lo que está en resultado, como string

$var = $fila[3]."\n".$fila[4]."\n".$fila[2]."\n";

echo $var;
mysqli_close($conn);

?>
