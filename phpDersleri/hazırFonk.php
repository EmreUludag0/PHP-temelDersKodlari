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

    echo $sayi = rand(0,100);

    if($sayi >= 50){
        echo " kazandın";
    }else{
        echo " kaybettin dostum";
    }

    //ekstra: yoksayma işareti
    $ad = "emre";
    echo "<br>"; echo "<br>";
    echo "ben $ad \"udemy\" kursuna kayıt oldum";
    ?>
</body>
</html>