<!doctype html>
<html lang="en">
<head>

    <title>Document</title>

    <style>
        img{
            width: 40px;
            height: 40px;
        }

        td, tr, table{
            border: 1px solid black;
            border-collapse: collapse;
        }

        td{
            padding: 10px;
        }

        .border{
            border: 1px solid white;
        }


    </style>

</head>
<body>
<table>
<?php

$clubs = array(
  "De spartelkuikens" => 25,
  "De waterbuffels" => 32,
  "Plonsmderin" => 11,
  "Bommetje" => 23
);

foreach ($clubs as $clubnaam => $zwemmers){
    echo '<tr>';


    echo "<td> $clubnaam </td>";
    echo "<td> $zwemmers </td>";

    $plaatjes = floor($zwemmers / 5);
    echo '<td class="border">';
    for($i = 0; $i < $plaatjes; $i++ ){
        echo '<img src="img/swimmer.png" alt="">';
    }
    echo '</td>';

    echo '</tr>';
}

?>
</table>

</body>
</html>

<br>
<a href="hoofdstuk3.php">Terug</a>