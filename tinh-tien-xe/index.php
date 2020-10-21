<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TAXI</title>
</head>
<body>
<form method="post">
    <fieldset style="width: 500px">
        <legend>Taxi</legend>
        <label>
            <input name="KM" placeholder="enter the km">
        </label>
        <button type="submit">Calculator</button>
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $km = $_REQUEST["KM"];
    $oneKm = 15000;
    $twoTofive = 13500;
    $outSix = 11000;
//    $price = 0;
    if ($km <= 0) {
        echo "Vui long nhap so km lon hon 1 ";
    } elseif ($km == 1) {
        echo $km * $oneKm . " VND";
    } elseif ($km >= 2 && $km <= 5) {
        echo ($oneKm + ($km - 1) * $twoTofive) . " VND";
    } elseif ($km <= 120){
        echo ($oneKm + (4 * $twoTofive) + ($km-5) * $outSix) . " VND";
    }elseif ($km > 120){
        echo ($oneKm + (4 * $twoTofive) + ($km-5) * $outSix) * 0.9 . " VND";
    }
}
