<?php

function isPrime($number)
{
    if ($number < 2) {
        return false;
    } else if ($number === 2) {
        return true;
    } else {
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i === 0) {
                return false;
            }

        }
        return true;
    }
}

function showPrime()
{
    $num = 1;
    $showNumber = 100;
    for ($count = 0; $count < $showNumber;) {
        if (isPrime($num)) {
            echo "$num <br/>";
            $count++;
        }
        $num++;
    }
}

    showPrime();