<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tek çift bulma</title>
</head>
<body>
    <?php
    
    if(isset($_POST['notunuz'])){

        echo "sayi: ".$not=$_POST['not']; echo " - ";

        if($not%2){
            echo "bu sayi tektir";
        } else{
            echo "bu sayi çifttir";
        }

    }
    
    
    ?>

    
        <form action="" method="POST">
            notunuzu girin <input type="number" max="5" name ="not">
            <input type="submit" name="notunuz">
        </form>
    
</body>
</html>