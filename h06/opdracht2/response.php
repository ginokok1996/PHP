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


$query = "SELECT * FROM loginopdracht";
$stmt = $conn->prepare($query) or die('17');
$stmt->execute() or die('error 19');
