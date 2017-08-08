<?php

$handle = fopen ("input.txt", "r");
function bonAppetit($n, $k, $b, $ar) {
    // Complete this function
    $not_taken=$ar[$k];

    $sum=0;

    for($i=0; $i<count($ar); $i++)
    {
    	if($i!=$k)
    	{
    		$sum=$sum+$ar[$i];
    	}
    }

   $per_person_chrange=$sum/2;
   $remaing=$b - $per_person_chrange;

   if( $remaing == 0)
   {
   	$response='Bon Appetit';
   }
   else
   {
   	 $response=$remaing;
   }

 return $response;

}

fscanf($handle, "%i %i", $n, $k);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
fscanf($handle, "%i",$b);
$result = bonAppetit($n, $k, $b, $ar);
echo $result . "\n";

?>
