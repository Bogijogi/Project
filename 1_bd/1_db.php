<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Użytkownicy</h3>

    <?php
        require_once './script/connect.php';
        $sql="SELECT `name`,`surname` , `city` , `color` FROM `uczen` JOIN `city`ON `uczen`.`city_id`=`city`.`id` Join `color` on `uczen`.`color_id`=`color`.`id` ;";
        $result = $connect->query($sql);
        $count = 1;
        while($user = $result->fetch_assoc())
        {
            echo "użytkownik nr: $count <br>Imię i nazwisko: ".$user['name']." ".$user['surname'];
            $count++;
            echo "<br>Miasto: $user[city]";
            echo "<br>Ulubiony kolor: $user[color] <hr>";
        }
        $connect ->close();
    ?>
</body>
</html>