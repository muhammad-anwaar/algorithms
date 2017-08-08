<?php

$handle = fopen ("input.txt", "r");
function solve($year){
	
    // Complete this function
    $f_day=256;
    ///for julian calender
    if($year <= 1917)
    {
	    $days_month_1=cal_days_in_month(CAL_JULIAN ,1,$year);
	    $days_month_2=cal_days_in_month(CAL_JULIAN ,2,$year);
	    $days_month_3=cal_days_in_month(CAL_JULIAN ,3,$year);
	    $days_month_4=cal_days_in_month(CAL_JULIAN ,4,$year);
	    $days_month_5=cal_days_in_month(CAL_JULIAN ,5,$year);
	    $days_month_6=cal_days_in_month(CAL_JULIAN ,6,$year);
	    $days_month_7=cal_days_in_month(CAL_JULIAN ,7,$year);
	    $days_month_8=cal_days_in_month(CAL_JULIAN ,8,$year);
	    $programmer_day=$f_day-($days_month_1+$days_month_2+$days_month_3+$days_month_4+$days_month_5+$days_month_6+$days_month_7+$days_month_8);
	    $current_day=$programmer_day.'.09.'.$year;
    }
    else if($year==18)
    {
    	$programmer_day='26.09.'.$year;
	    $current_day=$programmer_day;

    }
    else
    {
	    $days_month_1=cal_days_in_month(CAL_GREGORIAN,1,$year);
	    $days_month_2=cal_days_in_month(CAL_GREGORIAN,2,$year);
	    $days_month_3=cal_days_in_month(CAL_GREGORIAN,3,$year);
	    $days_month_4=cal_days_in_month(CAL_GREGORIAN,4,$year);
	    $days_month_5=cal_days_in_month(CAL_GREGORIAN,5,$year);
	    $days_month_6=cal_days_in_month(CAL_GREGORIAN,6,$year);
	    $days_month_7=cal_days_in_month(CAL_GREGORIAN,7,$year);
	    $days_month_8=cal_days_in_month(CAL_GREGORIAN,8,$year);

	    $programmer_day=$f_day-($days_month_1+$days_month_2+$days_month_3+$days_month_4+$days_month_5+$days_month_6+$days_month_7+$days_month_8);
	    $current_day=$programmer_day.'.09.'.$year;
    }

     
   

     return $current_day;

}



fscanf($handle, "%d",$year);
$result = solve($year);
echo $result . "\n";

?>