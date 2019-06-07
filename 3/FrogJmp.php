<?php

$X = 2;
$Y = 11;
$D = 3;


$X = 10;
$Y = 85;
$D = 30;  


$X = 3;
$Y = 999111321;
$D = 7;  

echo solution($X, $Y, $D);


function solution($X, $Y, $D)
{
    $distance = $Y - $X;
    return (int) ceil($distance/$D);
}
