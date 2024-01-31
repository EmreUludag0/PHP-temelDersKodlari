<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hazır Fonk</title>
</head>
<body>

    <?php
    
    $dizi = array(10,9,8,7,6,12,18,5,4,3,2,1,);
    $dizi2 = array("a","b","c","d","e");

    //sort= buyukten kucuge
    //rsort = kucukten buyuge
    
    echo "<pre>";
    sort($dizi2);
    print_r ($dizi2);
    echo "<pre>";

    echo "<br>";

    echo "<pre>";
    rsort($dizi);
    print_r ($dizi);
    echo "<pre>";

    echo $sonuc = in_array("z",$dizi2);  //dizi icerisinde aradigimiz deger olup olmadigini denetler, varsa 1 dondurur

    if($sonuc){
        echo "var";
    }else{        
        echo "yok";    
    }
    echo "<br>";

    echo implode("+",$dizi2); //degerlerin arasina konulmasi icin kullanilir

    $zaman = "24-02-23 20.20";
    $sonuc2 = explode(" ", $zaman);
    echo "<pre>";
    echo $sonuc2;
    echo "<pre>";  


    
    ?>

    
</body>
</html>