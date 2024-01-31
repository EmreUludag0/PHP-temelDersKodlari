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
    
    $atama = 400; 
    echo "$atama degiskenin degeri: ".$atama;
    echo "<hr>";
    
    $atama += 500;
    echo "\$atama degiskeni degeri: ".$atama;
    echo "<hr>";

    $atama /= 500;
    echo "\$atama degiskeni degeri: ".$atama;
    echo "<hr>";
    
    $atama -= 500;
    echo "\$atama degiskeni degeri: ".$atama;
    echo "<hr>";

    //Arttırma ve Eksiltme Operatörü

    $atama++;
    echo "\$atama degiskenin degeri: ".$atama;
    echo "<hr>";
    
    $atama--;
    echo "\$atama degiskenin degeri: ".$atama;
    echo "<hr>";
    ?>
    
    

</body>
</html>