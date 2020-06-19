<html>
<head>
</head>
<body>
<form method="post" >
    <input type="text" name="amount" placeholder="Inventment Amount">
    <input type="text" name="rate" placeholder="Yearly Interest Rate">
    <input type="text" name="years" placeholder="Number of Years">

    <button type="submit">Calculate</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $amount = $_POST['amount'];
    $rate = $_POST['rate'];
    $years = $_POST['years'];


    $area = $amount * ((1 +  $rate/100) ** $years);
    echo $area;
}




?>

</body>




</html>





<?php
