<?php
session_start();

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

$melding = $_SESSION['melding'];

$query = "SELECT * FROM loginopdracht";
$stmt = $conn->prepare($query) or die('17');
$stmt->execute() or die('error 19');

if (isset($_GET['wrong'])) {
  $melding = "Incorrect email/wachtwoord ingevoerd";
}

if (isset($_GET['noadmin'])) {
  $melding = "U heeft admin rechten nodig om hier te komen";
}

if (isset($_GET['logout'])) {
  $_SESSION = array();
  session_destroy();

  $melding = "Uitgelogd!";
}




while ($array = $stmt->fetch()) {
  if ($_POST['email'] == $array['email'] && $_POST['wachtwoord'] == $array['wachtwoord']) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['wachtwoord'] = $_POST['wachtwoord'];
    $_SESSION['usertype'] = $array['usertype'];
    $message = "Welkom " . $_SESSION['email'] . ". U bent ingelogd als: " . $_SESSION['usertype'];
    $melding = " ";
    break;
  } else {
    $message = "Inloggen";
  }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>formulier</title>
</head>

<body>
  <h1><?php echo $message; ?></h1>
  <h2><?php echo $melding; ?></h2>
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    E-mail:
    <input type="text" name="email" /> <br />
    Wachtwoord:
    <input type="password" name="wachtwoord" /> <br />
    <input type="submit" name="knop" />
  </form>
  <p><a href="/h07/website.php">Website</a></p>
  <p><a href="/h07/admin.php">Admin area</a></p>
  <p><a href="/h07/formulier.php?logout">Uitloggen</a></p>
  <p><a href="/index.php">Terug naar main page</a></p>
</body>

</html>