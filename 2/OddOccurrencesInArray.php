<?php

$A[0] = 9;
$A[1] = 3;
$A[2] = 9;
$A[3] = 3;
$A[4] = 9;
$A[5] = 7;
$A[6] = 9;

echo solution($A);

function solution($A)
{
    $counter = array();
    foreach ($A as $key => $number) {

        if (!isset($counter[$number])) {
            $counter[$number] = 1;
        }
        else if($counter[$number] === 1){
            unset($counter[ $number]);
        }
    }
    
    return key($counter);
}
