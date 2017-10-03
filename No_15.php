<?
$min = 11;
$max = 20;
$total = 10;
$rand = array();
while (count($rand) < $total ) {
    $r = mt_rand($min,$max);
    if (!in_array($r,$rand)) $rand[] = $r;
	
}
for($i = 0; $i < 10; $i++){
echo $rand[$i] . " ";

}

?>