<html>
<head>

</head>
<body>

<form method="post">
    <input type="type" name="numberInput">
    <button type="submit">Đọc Số</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numberInput = $_POST['numberInput'];

    if ($numberInput >=0 && $numberInput <10) {
        switch ($numberInput) {
            case "0":
                echo "Zero";
                break;
            case "1":
                echo "One";
                break;
            case "2":
                echo "Two";
                break;
            case "3":
                echo "Three";
                break;
            case "4":
                echo "Four";
                break;
            case "5":
                echo "Five";
                break;
            case "6":
                echo "Six";
                break;
            case "7":
                echo "Seven";
                break;
            case "8":
                echo "Eight";
                break;
            case "9":
                echo "Nice";
                break;
            default :
                echo "out of ability";
        }
    }


}



?>



</body>

</html>



