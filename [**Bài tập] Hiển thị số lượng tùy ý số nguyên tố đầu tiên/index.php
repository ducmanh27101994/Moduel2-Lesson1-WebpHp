<html>

<head>

</head>
<body>

<form method="post">
    <input type="text" name="numberPrime">
    <button type="submit">Show</button>
</form>


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

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $numberPrime = $_POST["numberPrime"];

    function showPrime()
    {
        global $numberPrime;
        $num = 1;
        for ($count = 0; $count < $numberPrime;) {
            if (isPrime($num)) {
                echo "$num <br/>";
                $count++;
            }
            $num++;
        }
    }

    showPrime();

}
?>

</body>
</html>
