<?php
/* 
$A[0] = 1;
$A[1] = 3;
$A[2] = 1;
$A[3] = 4;
$A[4] = 2;
$A[5] = 3;
$A[6] = 5;
$A[7] = 4; */


$A[] = 2;
$A[] = 2;
$A[] = 2;
$A[] = 2;

$X = 2;

echo solution($X, $A);


function solution($X, $A)
{

    if (in_array($X, $A)) {
        for ($i = 0; $i < count($A); $i++) {
            if($A[$i] == $A[$i+1]){
                return -1;
            }
            else if( $A[$i] == $X ){
                return $A[$i];
            }
        }
    }

    return  -1;
}
