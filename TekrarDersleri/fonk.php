<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonksiyonlar</title>
</head>
<body>
    
    <?php

        function yaz(){
            echo "hello world";
        }

        function toplama($sayi1, $sayi2){
            echo $sayi1 + $sayi2;
        }
        
        function returnIleToplama($sayi1, $sayi2){
            return $sayi1 + $sayi2;
        }

        function adSoyad($ad, $soyad="soy isim girilmedi"){
            return $ad." ".$soyad;
        }

        session_start();
        $_SESSION['adsoyad'] = "Emre Uludag";
        echo $_SESSION['adsoyad'];

        echo yaz(); 
        echo "<br>";
        echo toplama(2,2);
        echo "<br>";
        echo returnIleToplama(4,2);
        echo "<br>";
        echo adSoyad("emre");
        echo "<br>";

    ?>


</body>
</html>