<?php
$servername = "localhost";
$username = "ginokok1996_nl_school";
$password = "4MpJtMQBb4ff";

try {
    $conn = new PDO("mysql:host=$servername;dbname=ginokok1996_nl_school", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



$query = "SELECT * FROM cursist";
$stmt = $conn->prepare($query) or die('error 15');

$stmt->execute or die('error 18');

while ($array = $stmt->fetch()) {
    echo $array . '<br>';
}
