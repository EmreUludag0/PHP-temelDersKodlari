<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if uygulama</title>
</head>
<body>

    <?php

        $kadi = "emre";
        $pass = "1234";

        $_POST['kullanici_adi'];
        $_POST['kullanici_password'];

        if($kadi == $_POST['kullanici_adi'] and $pass == $_POST['kullanici_password']){
            echo "giris basarili";
        }else{
            echo "basarisiz giris";    
        }   




    ?>

    <h3>kullanici girisi</h3>
    <form action="" method ="POst">

    kullanici adi <input type="text" name= "kullanici_adi" placeholder="kullanici adini giriniz">
    sifre <input type="password" name= "kullanici_password" placeholder ="sifrenizi giriniz">

    <button type="submit"> GIRIS </button>


    </form>


    
</body>
</html>