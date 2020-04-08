<?php


?>

<!doctype html>
<html lang="en">
<head>
    <title>Document</title>

    <style>
        .groen{
            border: 3px solid green;
        }
        .rood{
            border: 3px solid red;
        }
    </style>
</head>
<body>

<?php

    for($i = 1; $i <= 9; $i++){
        if($i % 2 == 0){
            $class = " class='rood'";
        }else {
            $class = " class='groen'";
        }
        echo "<img".$class." src='img/foto".$i.".jpg'>";
    }

?>

</body>
</html>


<br>
<a href="hoofdstuk3.php">Terug</a>