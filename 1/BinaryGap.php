<?php


$N = 32;
echo solution($N);



function solution($N)
{
    $binString = decbin($N);
    $len = strlen($binString);
    $bin_ar = str_split($binString);
    $counter = 0;
    $ans = [];

    for ($i = 0; $i < $len; $i++) {
        if ($bin_ar[$i] == 0) {
            $counter++;
        } else {
            $ans[] = $counter;
            $counter = 0;
        }
    }

    return max($ans);
}
