<?php 
$text = <<< TEXT
    ZSŁ - Zespół
    Szkół
    Łączności<br>
TEXT;
echo $text;
echo ni2br($text);

$name="jANuSz"
$echo "$name<br>";
$echo strtolower($name).'<br>';
$echo strtoupper($name).'<br>';

$text = "PAweł noWak";
echo "$text<br>"
echo ucfirst($text).'<br>';
echo "$text<br>";
echo ucwords($text).'<br>';

echo ucwords(strtolower($text)).'<br>';

$lorem="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit ab consectetur doloribus incidunt. Officia nobis aperiam harum, adipisci ratione ducimus, itaque architecto repudiandae quos, corrupti dicta dolorem! Beatae, quo deleniti.";

echo = "$lorem<br>";
echo wordwrap($lorem, 50, "<br>");

?>
