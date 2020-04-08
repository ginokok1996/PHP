<?php

echo "20 graden Celcius staat gelijk aan " . cNaarF(20) . " Fahrenheit. <br>";

echo "Het getal 9 is deelbaar door 3: ";
echo var_export(deelbaar(9)) . "<br>";
echo "Het getal 8 is deelbaar door 3: ";
echo var_export(deelbaar(8)) . "<br>";
echo "Classroom omgekeerd is: " . reverseString("Classroom");


function cNaarF($c)
{
    return $f = ($c * 9 / 5) + 32;
}

function deelbaar($a)
{
    if ($a % 3 == 0) {
        return true;
    } else {
        return false;
    }
}

function reverseString($a)
{
    return strrev($a);
}

?>

<br>
<a href="/index.php">Terug naar main page</a>