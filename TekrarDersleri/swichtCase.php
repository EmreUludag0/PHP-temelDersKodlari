<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swicht Case</title>
</head>
<body>
    
    <?php
    
    if(isset($_POST['notunuz'])){

        echo "Notunuz: ".$not =$_POST['not'];

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
                echo "gecer";
                break;

                case '1':
                echo "kaldi!";
                break;

                default:
                echo "tanimsiz sonuc";
                break;
        }


    }

    ?>

    <form action="" method="post">
        notunuzu giriniz <input type="number" max="5" name="not">
        <input type="submit" name="notunuz">
    </form>


</body>
</html>