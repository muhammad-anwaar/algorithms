<?php 
$handle = fopen ("input.txt", "r");
function kangaroo($x1, $v1, $x2, $v2) {
    // Complete this function
  $answer='';
  if($v2 > $v1)
  {$answer='NO';}
   else
   {
    if (intval($v1 - $v2)!=0 && ($x2 - $x1) % ($v1 - $v2) == 0)
    {$answer="YES";}
    else
    {$answer="NO";}; 

   }

   return $answer;
}

fscanf($handle, "%i %i %i %i", $x1, $v1, $x2, $v2);
$result = kangaroo($x1, $v1, $x2, $v2);
echo $result . "\n";

?>