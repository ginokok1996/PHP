<!doctype html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>

<?php
$bedrag = 10;
$leeftijd = 2;

if($leeftijd > 65){
    $bedrag = $bedrag * 0.5;
} elseif($leeftijd >= 3 && $leeftijd <= 12){
    $bedrag = $bedrag * 0.5;
} elseif($leeftijd < 3){
    $bedrag = 0;
}

echo $bedrag;


?>

</body>
</html>

<br>
<a href="hoofdstuk3.php">Terug</a>