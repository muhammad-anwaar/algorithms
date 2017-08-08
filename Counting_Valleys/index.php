<?php 

$_fp = fopen("input.txt", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$n=fscanf($_fp,"%d", $n);
$steps=fgets($_fp);
$steps=str_split($steps);


$upd=0;$ans=0;$prev=0;

for($i=0;$i<count($steps);$i++){
        $prev = $upd;
        if($steps[$i] == 'D')
        { --$upd; }
        else { ++$upd; }
        if($upd == 0 && $prev<0){ $ans++; }
    }

 echo $ans;


?>