<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session deneme</title>
</head>
<body>
    

    <?php
        ob_start();
        session_start();

        echo $_SESSION['adsoyad'];
        echo "<br>";
        echo $_SESSION['il'];

    
    ?>


</body>
</html>