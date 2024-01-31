<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tek yada cift bulma</title>
</head>
<body>
    
    <?php

        if(isset($_POST['notislemi'])){

            echo "sayi: ".$not = $_POST['not']; echo "-";

            if($not%2){
                echo "bu sayi tektir";
            } else{
                echo "bu sayi cifttir";
            }

        }

        

    ?>
    <hr>
        <form action="" method = "POST">
            sayi girin: <input type="text" name= "not" placeholder = "notunuzu giriniz">
            <button type="submit" name = "notislemi"> sonuclandır</button>
        </form>


</body>
</html>