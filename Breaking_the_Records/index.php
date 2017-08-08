<?php 
$handle = fopen ("input.txt", "r");
function getRecord($s){
    // Complete this function
    
    $high=array();
    $low=array();
    
    $prev_val='';
    $high_prev_val='';
    $low_prev_val='';
    for($i=0; $i<count($s); $i++)
    {
    	$current_val=$s[$i];
           
         if($i==0)
         { 

         array_push($high, $current_val);
         array_push($low, $current_val);
         ///set last value
         $prev_val=$current_val;
         }
         else
         {   
              $last_val_high=max($high);
              $last_val_low=min($low);
                


               if($current_val >= $last_val_high)
               { 
                     

               	array_push($high, $current_val);
               	array_push($low, $last_val_low);
               }
               else
               {
                  
                  if($current_val > $last_val_low){
                      array_push($low, $last_val_low);
                   	array_push($high, $last_val_high);     
                  }
                  else
                  {
               	array_push($low, $current_val);
               	array_push($high, $last_val_high);
               }


               }

               $prev_val=$current_val;
         }  


    }

    $count_high= count(array_unique($high))-1;
    $count_low= count(array_unique($low))-1;
    return  array($count_high,$count_low);
}

fscanf($handle,"%d",$n);
$s_temp = fgets($handle);
$s = explode(" ",$s_temp);
$s = array_map('intval', $s);
$result = getRecord($s);
echo implode(" ", $result)."\n";


?>