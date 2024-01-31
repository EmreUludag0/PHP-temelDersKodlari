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
    
    $dizi = array("emre","uludag",10,20,30);
    $dizi2 = array(10,9,8,7,15,6,5,4,3,2,1);
    $diziAlfabetik = array("a","b","c","d");


    print_r($dizi);
    echo "<br>";
    echo "<hr>";

    echo $dizi[0]."<br>"; 
    echo $dizi[1]."<br>";
    echo $dizi[2]."<br>";
    echo $dizi[3]."<br>";
    echo $dizi[4]."<br>";
    echo "<hr>";

    //sort => küçükten büyüğe doğru sıralar

    echo "<pre>";
    sort($dizi2);
    print_r($dizi2);
    "</pre>";
    echo "<hr>";
    //rsort => büyükten küçüğe doğru sıralar

    echo "<pre>";
    rsort($dizi2);
    print_r($dizi2);
    "</pre>";
    echo "<hr>";

    // alfabetik sıralama

    echo "<pre>";
    rsort($diziAlfabetik);
    print_r($diziAlfabetik);
    "</pre>";
    echo "<hr>";
    
    //in_array => dizinin içinde aradığımız terim olup olmadığını söyler

    echo $sonuc = in_array("h",$diziAlfabetik);

    if($sonuc){
        echo "var";
    }else{
        echo "yok";
    }
    echo "<br>";
    echo "<hr>";
    //implode => dizi değerlerini birleştirmeye yarar

    echo implode(",",$diziAlfabetik); 

    // Time Zone Ayarları
    echo "<br>";
    echo "<hr>";
    date_default_timezone_set('Europe/Istanbul');
    echo date("d-m-y h:i:s");

    
    


    ?>
</body>
</html>