<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <title>Learning HTML </title>
    </head>
    <body>
	
	 <p>

	 <?php 
header("Cache-Control: no-cache"); 
// Ideally, you'd put these in a text file or a database.  
// Put an entry on each line of 'a.txt' and use $prefixes = file("a.txt"); 
// You can do the same with a separate file for $suffixes. 
$prefixes = array('Mashup','2.0','Tagging','Folksonomy'); 
$suffixes = array('Web','Push','Media','GUI'); 
// This selects a random element of each array on the fly 
echo $prefixes[rand(0,count($prefixes)-1)] . " is the new "  
   . $suffixes[rand(0,count($prefixes)-1)]; 
// Example output: Tagging is the new Media 
?>  
	   
	   
	   
   </p>
	 
	 
   </body>
</html>


