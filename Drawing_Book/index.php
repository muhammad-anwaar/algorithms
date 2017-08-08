<?php

$handle = fopen ("input.txt", "r");
function solve($n, $p){
    // Complete this function
  
	$entire_book = intval(($n + 2) / 2);
    
    $from_front = intval(($p + 2) / 2 - 1);
    $from_back = $entire_book - $from_front - 1;
    return min(intval($from_front), intval($from_back));

}

fscanf($handle,"%d",$n);
fscanf($handle,"%d",$p);
$result = solve($n, $p);
echo $result . "\n";

 ?>