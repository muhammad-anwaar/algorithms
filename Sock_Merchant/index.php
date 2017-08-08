<?php 

$handle = fopen ("input.txt", "r");
function sockMerchant($n, $ar) {
    // Complete this function
    $count=0;
 
    for($i=0; $i<$n; $i++)
    {   
          if(!empty($ar[$i]))
          {
    	for($j=$i+1; $j<$n; $j++)
    	{   
    		if(!empty($ar[$i]) && !empty($ar[$j]))
    		{

    		if($ar[$i]==$ar[$j])
    		{   unset($ar[$i]);
    			unset($ar[$j]);
    			$count++;
    			
    			break;

    		}
        }
      }

    }

    }

    return $count;
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = sockMerchant($n, $ar);
echo $result . "\n";

?>