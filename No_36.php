<?php
$names = array( "Ahmad", "Junaidi", "Subur", "Zaenudin"); 

$lowerCase = array_map('strtolower', $names);
$upperCase = array_map('strtoupper', $names);

for($x = 0; $x < count($names); $x++){
	echo $lowerCase[$x] . " " . $upperCase[$x] . "<br> ";
}

?>