<?php
 $color = array('white', 'green', 'red');
	sort($color);
	
	$clength = count($color);

	for($x = 0; $x < $clength; $x++) {
		echo $color[$x];
		echo "<br>";	
	}	
 
 ?>