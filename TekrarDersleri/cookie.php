<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    

    <?php
    
        $adsoyad = "emre uludag";

        setcookie("adsoyad",$adsoyad,strtotime("+1 hours");



        echo $_COOKIE["adsoyad"];

        //cookie sure arttirma

        /*
        strtotime("+30 seconds");
        strtotime("+1 hours");
        strtotime("+1 day");
        strtotime("+1 week");
        */
    ?>


</body>
</html>