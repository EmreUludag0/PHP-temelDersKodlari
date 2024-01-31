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
    
        require_once 'baglan.php';

        if(isset($_POST['insertislemi'])){
            
            $kaydet = $db ->prepare("INSERT into bilgilerim set 

                bilgilerim_ad =: bilgilerim_ad,
                bilgilerim_soyad =: bilgilerim_soyad,
                bilgilerim_mail =: bilgilerim_mai,
                bilgilerim_yas =: bilgilerim_yas          
            "); 
            
            $insert =$kaydet -> execute(array(
                'bilgilerim_ad' => $_POST['bilgilerim_ad'],
                'bilgilerim_soyad' => $_POST['bilgilerim_soyad'],
                'bilgilerim_mail' => $_POST['bilgilerim_mail'],
                'bilgilerim_yas' => $_POST['bilgilerim_yas']
            ));


        }
        
    
    
    ?>
    
</body>
</html>