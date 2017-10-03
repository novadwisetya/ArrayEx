<?php
function lowestInteger(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(lowestInteger(array(3,0,2,12,100,3))."\n");
?>