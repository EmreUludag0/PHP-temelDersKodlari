<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Veritabanı PDO Kayıt İslemleri</h1>
    <hr>
    <form action="islem.php" method="POST">


         <input type="text" required="" name="bilgilerim_Ad" placeholder="adınızı giriniz">
         <input type="text" required="" name="bilgilerim_soyad" placeholder="soyadınızı giriniz">
         <input type="mail" required="" name="bilgilerim_mail" placeholder="mailinizi giriniz">
         <input type="text" required="" name="bilgilerim_yas    " placeholder="yas giriniz">
        <button type="submit" name="insertislemi">formu Gönder</button>
    </form>


</body>
</html>