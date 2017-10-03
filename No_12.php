<?

$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');


echo "Values are in lower case.<br>";
	foreach($color as &$value){
	  $value = strtolower($value);
	}
	print_r($color);
	
echo "<br> <br> Values are in Upper case.<br>";
	foreach($color as &$value){
	  $value = strtoupper($value);
	}
	print_r($color);
	


?>