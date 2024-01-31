<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post ve Get</title>
</head>
<body>
    
    <?php

    echo $_GET['ad'];
    echo "<br>";
    echo $_GET['soyad'];
    $kullanici_id = 151;
    /*
        echo $_POST['ad'];
        echo "<br>";
        echo $_POST['soyad'];
    */
    ?>
    <form action="ıslem.php" method="GET">
        ad <input type="text" name="ad" placeholder= "Adinizi giriniz">
        soyad <input type="text" name="soyad" placeholder="Soyadinizi giriniz">
        <input type="submit" value = "formu gonder" name="">

    </form>

    <a href="ıslem.php?kullanici_id= <?php echo $kullanici_id?>"> <button>kullaniciyi sil</button></a>


</body>
</html>