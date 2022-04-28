<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "./bogacz.php" method = "post">    
        <input type = "text" name = "name" placeholder = "Podaj imię"><br>
        <input type = "text" name = "lastname" placeholder = "Podaj Nazwisko"><br>
        <input type="radio" name="color" value="Czarny">Czarny
        <input type="radio" name="color" value="Biały">Biały <br>
        
        <select name="date">
                        <optgroup label="--Select a city--">
                            <option default style="display:none">--Select a city--</option>
                            <option value="ten">Poznań</option>
                            <option value="ele">Bydgoszcz</option>
                        </optgroup>
</select><br>
<input type="checkbox" name="terms">Regulamin <br>
<input type="submit" name="button" value="Submit">
    </form>
</body>
</html>