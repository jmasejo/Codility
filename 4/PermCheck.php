<?php

$A[0] = 4;
$A[1] = 1;
$A[2] = 3;
$A[3] = 2;

echo solution($A);


function solution($A)
{
    $holder = [];
    sort($A);
    for ($i = 0; $i < count($A); $i++) {
        $holder[$i + 1] = $A[$i];
        if (($i + 1) != $A[$i]) { 
            return 0;
        }
    }

    return 1;
}
