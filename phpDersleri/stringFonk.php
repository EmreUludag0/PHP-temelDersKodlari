<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<hr>";

    echo $yazi = "Kocaeli universitesi";
    echo "<br>";
    echo strtolower($yazi); // harfleri küçültür;
    echo "<br>";
    echo strtoupper($yazi); // harfleri büyütür
    echo "<br>";
    echo ucwords($yazi); // ilk harfleri büyütür
    echo "<br>";
    echo strlen($yazi); // karakterleri sayar (boşluğu da dahil eder)
    echo "<br>";
    echo substr($yazi,0,11)."...";

    echo "<hr>";
    



    ?>
</body>
</html>