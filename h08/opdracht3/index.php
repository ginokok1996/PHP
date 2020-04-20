<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="get">
        <label for="minPrijs">Minimale Prijs</label>
        <input type="text" name="minPrijs" id="minPrijs" />
        <label for="maxPrijs">Maximale Prijs</label>
        <input type="text" name="maxPrijs" id="maxPrijs" />
        <label for="merk">Merk</label>
        <select name="merk" id="merk">
            <option value="">Alle merken</option>
            <option value="Audi">Audi</option>
            <option value="Ferrari">Ferarri</option>
            <option value="Fiat">Fiat</option>
            <option value="Mercedes">Mercedes</option>
            <option value="Opel">Opel</option>
            <option value="Volkswagen">Volkswagen</option>
        </select>
        <input type="submit" />
    </form>
    <a href="/h08/hoofdstuk8.php">Terug</a>
    <br>

    <?php

    require('Auto.php');
    require('Autooverzicht.php');


    $merk = isset($_GET["merk"]) ? $merk = $_GET["merk"] : "";
    $minprijs = isset($_GET["minPrijs"]) && !empty($_GET["minPrijs"]) ? $minprijs = $_GET["minPrijs"] : 0;
    $maxprijs = isset($_GET["maxPrijs"]) && !empty($_GET["maxPrijs"]) ? $maxprijs = $_GET["maxPrijs"] : 99999999;

    $autoos = new Autooverzicht();

    foreach ($autoos->getGefilterdeLijst($minprijs, $maxprijs, $merk) as $auto) {
        echo $auto->getMerk() . " - " .
            $auto->getPrijs() . "<br />";
        echo '<img src="' . $auto->getImg_url() . '"alt=""/> <br/>';
    } ?>
</body>

</html>