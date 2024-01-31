<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Get</title>
</head>
<body>


    <form action="PostGetDeneme.php" method="GET">

        ad <input type="text" name="ad" placeholder="adınız ">
        soyad <input type="text" name="soyad" placeholder="soyadınız">
        <input type="submit" value= "gönder" name="">        
        <br>

    </form>

    <a href="PostGetDeneme.php?kullanici_id=<?php echo $kullanici_id?>"><button>kullaniciyi sil</button></a>

   <?php
        
        echo $_GET['ad']."<br>";
        echo $_GET['soyad'];
        $kullanici_id = 151;    

        // echo $_POST['ad']."<br>";
        // echo $_POST['soyad'];



    ?>

</body>
</html>