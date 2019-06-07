<?php

$A[0] = 3;
$A[1] = 1;
$A[2] = 2;
$A[3] = 4;
$A[4] = 3;

echo solution($A);

function solution($A)
{
    $sum = array_sum($A);
    $holder = [];
    $left = 0;
    $right = 0;
    for ($i=0; $i < count($A)-1; $i++) {
        $left =  $A[$i] + $left;
        $right = $sum - $left;
        $holder[] =  abs($right - $left);
    }

    return min($holder);

}