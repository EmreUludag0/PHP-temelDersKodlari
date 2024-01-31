<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<select>
    
    <?php

    for($i=1; $i <=84; $i++) {?>

    <option value="?php echo $i ?"><?php echo $i ?></option>

    <?php } ?>



</select>

</body>
</html>