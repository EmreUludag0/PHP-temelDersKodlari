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
    date_default_timezone_set('Europe/Istanbul');

        $adsoyad ="emre uludag";

        setcookie("adsoyad", $adsoyad).strtotime("+1 week");

        echo $_COOKIE["adsoyad"];

        /** COOKİE süre arttırma
         * strtotime("+30 seconds") 30 saniye 
         * strtotime("+1 hours") 1 saat 
         * strtotime("+1 day") 1 gün 
         * strtotime("+1 week") 1 hafta 
         *  */ 



    ?>
    
</body>
</html>