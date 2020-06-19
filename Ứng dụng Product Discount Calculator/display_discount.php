<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $listPrice = $_POST['listPrice'];
    $discountPercent = $_POST['discountPercent'];

    $discountAmount = $listPrice * $discountPercent * 0.01;

    $discountPrice = $listPrice - $discountAmount;
    echo $discountPrice;
    echo "</br>";
    echo $discountAmount;

}