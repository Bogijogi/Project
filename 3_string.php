<?php

    $text = <<< SCHOOL
        ZSŁ - Zespół
        Szkół
        Łączności<br>
SCHOOL;

echo $text;

echo nl2br($text);

$name="JaNusz";
echo strtolower($name)."<br>";

echo strtoupper($name)."<br>";

$data="jaNusZ koWalski";

echo ucfirst($data)."<br>";
echo ucwords($data)."<br>";

$lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam omnis doloremque sunt 
minima alias ipsum distinctio laudantium esse eum voluptates quasi praesentium dolorem nisi debitis 
amet, autem, accusantium a? Pariatur.<br>";

echo $lorem;

echo wordwrap($lorem,40,"<br>");
echo wordwrap($lorem,40,"<hr>");

ob_clean();

 $name1="Anna";
 $name2="    Anna   ";

 echo "ilość znaków \$name1: ".strlen($name1)."<br>";
 
 echo "ilość znaków \$name2: ".strlen($name2)."<br>";

 echo strlen(ltrim($name2))."<br>";
 
 $name1="Łukasz";
 $name2="    Łukasz   ";

 echo "ilość znaków \$name1: ".mb_strlen($name1)."<br>";
 
 echo "ilość znaków \$name2: ".mb_strlen($name2)."<br>";

 echo mb_strlen(ltrim($name2))."<br>";
 echo mb_strlen(rtrim($name2))."<br>";
 echo mb_strlen(trim($name2))."<br>";


 echo strstr("janusz@wp.pl", "@");
 echo strstr("janusz@wp.pl", "w");
 echo stristr("janusz@wp.pl", "w");

 echo strpos("janusz@wp.pl", "a")."<hr>";


$name = "Janusz";
echo substr($name, 3);
echo substr($name, 3,2)."<br>";
echo substr($name, -1, 3)."<br>";

//wyświetlić domenę

echo strstr("janusz@wp.pl", "w");
echo substr("janusz@wp.pl", 4)

?>
