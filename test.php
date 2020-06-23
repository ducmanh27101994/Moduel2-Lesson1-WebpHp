<?php

function swap($arr) {
    //your code here

    for ($i=0;$i<count($arr);$i++){
        $arrNew[$i] = $arr[$i];
    }
    $arrNew[0] = $arr[count($arr)-1];
    $arrNew[count($arrNew)-1] = $arr[0];

    return $arrNew;
}

print_r(swap([1,5,10,-2,10,20]));