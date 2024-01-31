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
    
    try{

        $db = new PDO("mysql:host=localhost;dbname=udemy;charset=utf8",'root','123456789');  // uzak bir server'a bağlanılacaksa localhost yerine ip adresi yazılır
        // database'e verilen isim yazılır, sonra kullanıcı adı ve sonra da şifre yazılır
        //echo "veritabanı bağlantısı başarılı";
    } catch(PDOExpception $e){
        echo $e -> getMessage();
    }
        


    ?>    



</body>
</html>