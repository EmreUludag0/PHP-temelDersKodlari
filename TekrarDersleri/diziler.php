<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diziler</title>
</head>
<body>


    <?php
    date_default_timezone_set('Europe/Istanbul');
    $dizi = array("emre","uludag",10,20,30,40);
    
    print_r ($dizi);
    echo "<br>";
    echo "<br>";

    echo $dizi[0]; echo "<br>";
    echo $dizi[1]; echo "<br>";
    echo $dizi[2]; echo "<br>";
    echo $dizi[3]; echo "<br>";
    echo $dizi[4]; echo "<br>";
    echo $dizi[5]; echo "<br>";

    echo "<br>";
    echo "<pre>";
    print_r($dizi);
    echo "<pre>";
    echo "<br>";

    echo date("d-m-y h:i:s");
    
    ?>

    
</body>
</html>