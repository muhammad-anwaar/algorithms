<?php 
$handle = fopen ("input.txt", "r");
function getMoneySpent($keyboards, $drives, $s){
    // Complete this function
    $max_spent = -1;

  for($i=0; $i <count($keyboards); $i++)
  {
  	for($j=0; $j<count($drives); $j++)
  	{
  		$sum=$keyboards[$i]+$drives[$j];
  		if($sum > $max_spent && $sum <= $s)
  		{
  			//$max_spent=$sum;
                $max_spent=max($max_spent,$keyboards[$i]+$drives[$j]);
  		}
  	}
  }

  return $max_spent;

}

fscanf($handle,"%d %d %d",$s,$n,$m);
$keyboards_temp = fgets($handle);
$keyboards = explode(" ",$keyboards_temp);
$keyboards = array_map('intval', $keyboards);
$drives_temp = fgets($handle);
$drives = explode(" ",$drives_temp);
$drives = array_map('intval', $drives);
//  The maximum amount of money she can spend on a keyboard and USB drive, or -1 if she can't purchase both items
$moneySpent = getMoneySpent($keyboards, $drives, $s);
echo $moneySpent . "\n";

?>