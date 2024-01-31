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

    if(isset($_POST['notunuz'])){ // isset fonksiyonu ile bir değişkenin varlığını ile yokluğunu kontrol eder,
        //bu sayede de değişken yoksa parentez içindeki olaylar okunmadan atlanır.

        echo $not=$_POST['not']; echo " ";

    
        switch($not){
            case '5':
                echo "pek iyi";
                break;

            case '4':
                echo "iyi";
                break;
                
            case '3':
                echo "orta";
                break;
                
            case '2':
                echo "geçer";
                break;

            case '1':
                echo "başarısız";
                break;
                
        }    
        


    }


    ?>


    <form action="" method="POST">
        notunuzu girin <input type="number" max="5" name ="not">
        <input type="submit" name="notunuz">
    </form>
    

    
</body>
</html>