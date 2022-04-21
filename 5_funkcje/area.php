<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="POST">
    <input type="radio" name="geometricFigure" value="cube" checked>Sześcian<br><br>
    <input type="radio" name="geometricFigure" value="rectangle">Prostokąt<br><br>
    <input type="submit" value="Zatwierdź">

    </form>
    <?php 
        if (isset($_POST['geometricFigure'])) {
            echo '<h3>Oblicz pole</h3><form action="./scripts/calculate.php" method="post">';
            switch ($_POST['geometricFigure']) {
                case 'cube':
                    echo '<input type="hidden" name="geometricFigure" value="cube">';
                    echo '<br><input type="range" name="a" id="rangeID" min="0" max="1000" onmousemove="setValue()">';
                    echo '<input type="number" id="numID" name="poleNum" ><br><br>';

                    break;
                case 'rectangle':
                    echo '<input type="hidden" name="geometricFigure" value="rectangle">';
                    echo '<br><input type="text" name="a" placeholder="Podaj bok a"><br>';
                    echo '<br><input type="text" name="b" placeholder="Podaj bok b"><br><br>';
                    break;
            }
            echo '<input type="submit" value="Oblicz">'  ;
            echo '</form>';
        }

    ?>

   <script>
         function setValue()
         {
            var rangeValue = document.getElementById('rangeID').value;
            var textValue = document.getElementById('numID').value = rangeValue;
        }
    </script>


</body>
</html>