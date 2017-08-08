<?php
$handle = fopen ("input.txt", "r");
function getTotalX($a, $b) {
$high=current($b);
$low=end($a);


$factors=0;
for($x=$low; $x <= $high; $x++)
{
$count=0;
for($i=0; $i<count($a); $i++)
{
	if($x % $a[$i] !=0)
	{
$count=1;}
}
for($k=0; $k<count($b); $k++)
		{    //if($x==6){echo $b[$k].'--- '.intval($b[$k] % $x).' inside'; }
			if( $b[$k] % $x) {$count=1; break;}
		}
if($count == 0)
{$factors++;}
}
return $factors;

}
fscanf($handle, "%i %i", $n, $m);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);
$b_temp = fgets($handle);
$b = explode(" ",$b_temp);
$b = array_map('intval', $b);
$total = getTotalX($a, $b);
echo $total . "\n";
?>