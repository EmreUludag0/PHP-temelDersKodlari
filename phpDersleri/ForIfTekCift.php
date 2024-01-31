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

        echo "<br>";
        echo "<hr>";

        $tek = 0;
        $cift = 0;

        for($i=1; $i <=100; $i++){

            echo"$i. sayi: ".$i;

            if($i%2==0){
                echo " Bu sayi çifttir"."<br>"."<hr>";
                $tek++;
            }else{
                echo " Bu sayi tektir"."<br>"."<hr>";
                $cift++;
            }

 
        }

        echo "tek sayilar: $tek"."<br>";
        echo "cift sayilar: $cift"."<br>";


    ?>
    
</body>
</html>