<?php 
$handle = fopen ("input.txt", "r");
function solve($n, $s, $d, $m){
    // Complete this function

 $result = 0;

    for ($i=0; $i<$n; $i++)
    {
         $limit = $i + $m;
        if ($limit > $n)
        {
            break;
        }
     
        $sum = 0;
        for ($j=$i; $j<$limit; $j++)
        {
            $sum += $s[$j];
        }
        
        if ($sum == $d)
        {
            ++$result;
        }
    }
    
    return $result;

}

fscanf($handle, "%d",$n);
$s_temp = fgets($handle);
$s = explode(" ",$s_temp);
$s = array_map('intval', $s);
fscanf($handle, "%d %d", $d, $m);
$result = solve($n, $s, $d, $m);
echo  $result . "\n";


?>