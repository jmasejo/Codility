 <?php


    $A[0] = 1;
    $A[1] = 3;
    $A[2] = 4;
    $A[3] = 5;

    /*    $A[0] = 2;
    $A[1] = 3;
    $A[2] = 1;
    $A[3] = 5; */

    echo solution($A);


    function solution($A)
    {
        sort($A);


        for ($i = 0; $i < count($A); $i++) {

            if ($A[$i] != $i + 1) {
                return $i + 1;
            }

        }

        return count($A) + 1;
    }
