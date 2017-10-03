<?
	$name = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");	
	
	asort($name);
	echo "A.) ascending order sort by value : <br><br>";
		foreach($name as $x => $x_value) {
		echo "Name : " . $x . ", Age : " . $x_value;
		echo "<br>";
		}
	echo "<br>";	
	ksort($name);
	echo "B.) ascending order sort by key : <br><br>";
	
		foreach($name as $x => $x_value) {
			echo "Name : " . $x . ", Age : " . $x_value;
			echo "<br>";
		}
	echo "<br>";
	arsort($name);
	echo "C.) descending order sort by value : <br><br>";
		foreach($name as $x => $x_value) {
			echo "Name : " . $x . ", Age : " . $x_value;
			echo "<br>";

		}
	echo "<br>";
	krsort($name);
	echo "D.) Descending order sort by key : <br><br>";
	foreach($name as $x => $x_value) {
		echo "Name : " . $x . ", Age : " . $x_value;
		echo "<br>";
	}


?>