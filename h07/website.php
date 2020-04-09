<?php
session_start();

if ($_SESSION['email']) {
    echo "<h1>Welkom " . $_SESSION['email'] . " op de website</h1>";
    echo "<p><a href='/h07/formulier.php'>Login</a></p>";
} else {
    header('location: formulier.php?wrong');
}
