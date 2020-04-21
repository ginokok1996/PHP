<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Broodje toevoegen - Bakkerij Vlecht</title>

  <style></style>
</head>

<body>
  <div id="form">
    <form action="formulier.php" method="get">
      <label for="naam">Naam van het broodje:</label>
      <input type="text" name="naam" id="naam">
      <br>
      <label for="soort">soort van het broodje:</label>
      <select name="soort" id="soort">
        <option value="wit">Wit</option>
        <option value="bruin">Bruin</option>
        <option value="volkoren">Volkoren</option>
        <option value="rogge">Rogge</option>
        <option value="spelt">Spelt</option>
        <option value="meergranen">Meergranen</option>
      </select>
      <br />
      <label for="vorm">Vorm van het broodje:</label>
      <select name="vorm" id="vorm">
        <option value="rond">Rond</option>
        <option value="vierkant">Vierkant</option>
        <option value="rechthoek">Rechthoek</option>
        <option value="driehoek">Driehoek</option>
      </select>
      <br />
      <label for="gewicht">Gewicht van het broodje in gram:</label>
      <input type="text" name="gewicht" id="gewicht" /> <br />
      <input type="submit" name="" id="" />
    </form>
    <?php
    require("brood.php");
    require("broodlijst.php");

    $broodlijst = new BroodLijst();

    $broodlijst->voegBroodToe("Gino", "wit", "rond", 50);

    $broodlijst->voegBroodToe($_GET['naam'], $_GET['soort'], $_GET['vorm'], $_GET['gewicht']);

    foreach ($broodlijst->getBroodjes() as $brood) {
      echo $brood->getNaam();
    }

    ?>
  </div>
</body>

</html>