<?php

function hello($name="++",int $a,int $b):int
    {
        $sum = $a + $b
        echo "반가워요룰루" .$name . "=" .$sum . "<br>";

        return $sum;
    }

    $user = "대남이";
    $s = hello($User, '1', '2');
    echo "합계는=".$s;
    hello($User,1,2);
