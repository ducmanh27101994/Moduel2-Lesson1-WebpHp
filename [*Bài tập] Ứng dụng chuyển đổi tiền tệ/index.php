<html>
<head>

</head>

<body>

<form method="post">
    USD <br/>
    <input type="text" name="usd">

    <button type="submit">Change</button><br/>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $usd = $_POST["usd"];
    $rate = 23000;

    $area = $usd * $rate;
    echo $area;
}




?>





</body>
</html>






<?php
