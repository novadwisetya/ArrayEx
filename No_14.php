<?
$myArray = array("abcd","abc","de","hjjj","g","wer");
$keyLength = array("");

	
	for($index = 0; $index < count($myArray); $index++){
		$length = strlen($myArray[$index]);		
		$keyLength[$index] = $length;
	}
	$max = $keyLength[0];
	$min = $keyLength[0];
	for($index = 0; $index < count($myArray); $index++){
		if($min > $keyLength[$index]){
			$min = $keyLength[$index];
		}elseif($max < $keyLength[$index]){
			$max = $keyLength[$index];
		}
	}
	
	echo "The shortest array length is " . $min . ". The longest array length is " . $max;;
	
	



?>