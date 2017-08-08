<?php 

$handle = fopen ("input.txt", "r");
function migratoryBirds($n, $ar) {
    // Complete this function
    
    $_1=0;
    $_2=0;
    $_3=0;
    $_4=0;
    $_5=0;

    for($i=0; $i<$n; $i++)
    {
    	if($ar[$i]==1){$_1++;}
    	else if($ar[$i]==2){$_2++;}
    	else if($ar[$i]==3){$_3++;}
    	else if($ar[$i]==4){$_4++;}
    	else if($ar[$i]==5){$_5++;}
    }
   

 $all_num =array($_1,$_2,$_3,$_4,$_5);
 $value = max($all_num);
 $key = array_search($value, $all_num);
 return $key+1;
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = migratoryBirds($n, $ar);
echo $result . "\n";


?>