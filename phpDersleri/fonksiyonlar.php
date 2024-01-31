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
    
        function topla($sayi,$sayi2){
            return $sayi+$sayi2;

        }

        echo topla(1,1)."<br>"."<hr>";

        $b = 40;
        function ekle($a){
            global $b;
            return $a + $b;
        }

        echo ekle(20)."<br>"."<hr>";

        function adsoyad($ad, $soyad = "soy isim girilmedi"){ //soyad girilmez ise eşittirden sonraki kısım çalışır
            return $ad." ".$soyad;
        }

        echo adsoyad("emre"," uludag"."<br>"."<hr>");

        $sabit = 1;
        function faktoriyel($a){
            global $sabit;
            if($a>1){
                $sabit = $sabit + $a;
                $a--;
                faktoriyel($a);
            }
            return $sabit;
        }

        echo faktoriyel(50)."<br>"."<hr>";

        function yaz($c){
            return $c;

        }

        if(function_exists("yaz")){
            echo "fonk var";
        }else{
            echo "fonk yok";
        }
        
        

    
    
    ?>


</body>
</html>