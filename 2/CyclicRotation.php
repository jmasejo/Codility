<?php
$A = [3, 8, 9, 7, 6];
$K = 3;

/* var_dump($A[count($A) - 1]);
die(); */
echo var_dump(solution($A, $K));

function solution($A, $K)
{
    for ($i = 0; $i < $K; $i++) {
        $lastElem = $A[count($A) - 1];
        array_unshift($A, $lastElem);
        array_pop($A);
    }

    return $A;
}
