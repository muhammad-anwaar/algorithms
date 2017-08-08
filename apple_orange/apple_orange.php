<?php
$handle = fopen ("input.txt","r");
fscanf($handle,"%d %d",$s,$t);
fscanf($handle,"%d %d",$a,$b);
fscanf($handle,"%d %d",$m,$n);
$apple_temp = fgets($handle);
$apple = explode(" ",$apple_temp);
array_walk($apple,'intval');
$orange_temp = fgets($handle);
$orange = explode(" ",$orange_temp);
array_walk($orange,'intval');

///apples falls counts
$apple_count=0;
for($i=0; $i< count($apple);$i++)
{

      if(in_array(($a+$apple[$i]) , range($s, $t)) ){
      	$apple_count+=1;
      }
}

echo $apple_count."\n";
///orange falls count 
$orange_count=0;
for($i=0; $i< count($orange); $i++)
{
	if(in_array( ($b+$orange[$i]) , range($s, $t)))
	{
		$orange_count+=1;
	}
}

echo $orange_count."\n";
 ?>

