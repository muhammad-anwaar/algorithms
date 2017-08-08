<?php 

$handle = fopen ("input.txt", "r");
$s = array();
for($s_i = 0; $s_i < 3; $s_i++) {
   $s_temp = fgets($handle);
   $s[] = explode(" ",$s_temp);
   $s[$s_i] = array_map('intval', $s[$s_i]);
}

$magic_sequare=[
    [ [8, 1, 6] , [3, 5, 7], [4, 9, 2] ],
    [ [6, 1, 8] , [7, 5, 3], [2, 9, 4] ],
    [ [4, 9, 2] , [3, 5, 7], [8, 1, 6] ],
    [ [2, 9, 4] , [7, 5, 3], [6, 1, 8] ],
    [ [8, 3, 4] , [1, 5, 9], [6, 7, 2] ],
    [ [4, 3, 8] , [9, 5, 1], [2, 7, 6] ],
    [ [6, 7, 2] , [1, 5, 9], [8, 3, 4] ],
    [ [2, 7, 6] , [9, 5, 1], [4, 3, 8] ],    
];

$order=count($s);
$cost=array();

foreach($magic_sequare as $row_matrix => $rl)
{

	$result_count=0;
	///evaluating with current input
	for($row=0; $row < 3; $row++)
	{
		for($col=0; $col < 3; $col++)
		{
             //// $row_matrix[$row][$col] .' - '. $s[$row][$col];
             $result_count+=abs($s[$row][$col] - $rl[$row][$col]);
		     
		}
	}

 array_push($cost, $result_count);
	
}

echo min($cost);



?>