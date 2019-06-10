<?php

/* $A[0] = 1;
$A[1] = 3;
$A[2] = 1;
$A[3] = 4;
$A[4] = 2;
$A[5] = 3;
$A[6] = 5;
$A[7] = 4;
 */

$A[] = 2;
$A[] = 2;
$A[] = 2;
$A[] = 2; 

/* $A[] = 1;  */

$X = 2;

echo solution($X, $A);


function solution($X, $A)
{
    $holder  = [];
    for ($i = 0; $i < count($A); $i++) {
        $j = $A[$i] - 1;
        if (!isset( $holder[$j])) {
            $X--;
            $holder[$j] = true;
        }
        if (!$X) {
            return $i;
        }
    }
    return -1;
}

