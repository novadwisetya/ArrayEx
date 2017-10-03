<?

$temperature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$arrLength = count($temperature);
$average = array_sum($temperature) / $arrLength;

echo "Average temperature is : " . $average . "<br><br>";

sort($temperature);
echo "List of seven lowest temperatures: ";
for($x = 0; $x < $arrLength; $x++) {
	if($x > 6){
		continue;
	}else{
	echo $temperature[$x] . ", ";
	}
}

	
rsort($temperature);
echo "<br> List of seven Highest temperatures: ";
for($x = 0; $x < $arrLength; $x++) {
	if($x > 6){
		continue;
	}else{
	echo $temperature[$x] . ", ";
	}

}
	
?>