<?php 

$handle = fopen ("input.txt","r");
fscanf($handle,"%d",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle,"%d %d %d",$x,$y,$z);
    
    $distance_A=abs($z-$x);
  $distance_B=abs($z-$y);

   if($distance_A < $distance_B)
   {
   	echo "Cat A \n";
   }
   else if($distance_B < $distance_A)
   {
   	echo "Cat B \n";
   }
   else
   {
   	echo "Mouse C \n";
   }
    
}

?>