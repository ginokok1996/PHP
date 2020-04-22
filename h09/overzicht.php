<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakkerij Wim Vlecht</title>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        table {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <a href="/index.php">Terug naar main page</a> <br> <br>
    <a href="/h09/formulier.php">Broodje Toevoegen</a> <br>
    <table>
        <tr>
            <td>Naam</td>
            <td>Soort</td>
            <td>Vorm</td>
            <td>Gewicht in gram</td>
        </tr>
        <?php
        require("brood.php");
        require("broodlijst.php");

        $broodlijst = new BroodLijst();

        foreach ($broodlijst->getBroodjes() as $brood) {
            echo "<tr>";
            echo "<td>" . $brood->getNaam() . "</td>";
            echo "<td>" . $brood->getSoort() . "</td>";
            echo "<td>" . $brood->getVorm() . "</td>";
            echo "<td>" . $brood->getGewicht() . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>