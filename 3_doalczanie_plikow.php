<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dołączanie plików</title>
</head>
<body>
   <h3>Początek strony</h3>
    <?php 
    require './3_1_name.php';
    require_once './3_1_name.php';

    include './3_1_name.php'
    include_once './3_1_name.php'
    ?>
   <h3>Koniec strony</h3>
</body>
</html>