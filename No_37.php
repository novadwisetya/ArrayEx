<?
	$colors = array("c1"=>"Red", "c2"=>"Green", "c3"=>"Yellow", "c4"=>"Red");
	$count = 0; 
	$input = "Red";
	
	foreach ($colors as $key => $value) 
    { 
        if ($value == $input) 
        { 
            $count++; 
        } 
    }
	
    echo $input . " color appears " .$count . " times";	
?>