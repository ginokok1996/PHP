<?php

?>
<!doctype html>
<html lang="en">
<head>
    <title>Opdracht 1</title>
</head>
<body>
<?php
    for($i = 1; $i <= 10; $i++){
        echo "<img src='img/foto".$i.".jpg'>";
    }

    $dieren = array("pet1.jpg","pet2.jpg","pet3.jpg","pet4.jpg","pet5.jpg");

    foreach($dieren as $dier){
        echo "<img src='img/img2/".$dier."'>";
    }

?>
</body>
</html>


<br>
<a href="hoofdstuk3.php">Terug</a>