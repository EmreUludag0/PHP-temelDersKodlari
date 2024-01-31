<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>KULLANICI GİRİŞİ</h3>
    <form action="" method="POST">
        kullanici Adı <input type="text" name="Kullanici_ad" placeholder="kullanici adınızı giriniz">
        şifre <input type="password" name="kullanici_password" placeholder="şifrenizi giriniz">
        <button type="submit">Giriş</button>
    </form>

    <?php

    $kadi = "emre";
    $pass = "123456";

    echo $_POST['Kullanici_ad'];
    echo $_POST['kullanici_password'];

    if($kadi == $_POST['kullanici_ad'] && $pass == $_POST['kullanici_password']){
        echo "Giriş Başarılı";
    } else{
        echo "Giriş hatalı";
    }

?>
</body>
</html>