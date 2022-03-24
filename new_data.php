<?php


echo "Dane użtkownika:<br>";

switch ($_POST['date']) {
    case 'ten':
        $date="10";
        break;

    case 'ele':
        $date="11";
        break;
    
    default:
    $date="Anonymous ;)";
        break;
}

echo <<< DATA
        Company: $_POST[company]<br>
        First Name: $_POST[fname]<br>
        Last Name: $_POST[lname] <br>
        Email: $_POST[email]<br>
        Title: $_POST[title]<br>
        Phone: $_POST[phone]<br>
        Data: $date<br>
        Job Function: $_POST[job] <br>
        Dietary requirements: $_POST[dr] <br>
        Expectations?: $_POST[expe] <br>
DATA;


?>
