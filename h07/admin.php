<?php
session_start();

if ($_SESSION['email'] && $_SESSION['usertype'] == "admin") {
    echo "<h1>Welkom " . $_SESSION['email'] . " In het admin paneel</h1>";
    echo "<p><a href='/h07/formulier.php'>Login</a></p>";
} else {
    header('location: formulier.php?noadmin');
}
