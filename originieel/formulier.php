<?php
$servername = "localhost";
$username = "ginokok1996_nl_school";
$password = "4MpJtMQBb4ff";

try {
  $conn = new PDO("mysql:host=$servername;dbname=ginokok1996_nl_school", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


?>

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
    <a href="/h09/overzicht.php">Terug naar het overzicht</a>


    <?php
    require("brood.php");
    require("broodlijst.php");

    $broodlijst = new BroodLijst();


    $broodlijst->voegBroodToe($_GET['naam'], $_GET['soort'], $_GET['vorm'], $_GET['gewicht']);
    ?>


  </div>
</body>

</html>