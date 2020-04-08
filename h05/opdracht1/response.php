<?php

if ($_POST['voornaam'] == "") {
    echo "Geen naam ingevuld. <br>";
    echo '<a href="formulier.html">Terug naar het forumier</a>';
}

if ($_POST['adres'] == "") {
    echo "Geen adres ingevuld. <br>";
    echo '<a href="formulier.html">Terug naar het forumier</a>';
}

if ($_POST['email'] == "") {
    echo "Geen e-mail ingevuld. <br>";
    echo '<a href="formulier.html">Terug naar het forumier</a>';
}

if ($_POST['wachtwoord'] == "") {
    echo "Geen wachtwoord ingevuld. <br>";
    echo '<a href="formulier.html">Terug naar het forumier</a>';
}

echo "Voornaam: " . $_POST["voornaam"] . "<br>";
echo "Adres: " . $_POST["adres"] . "<br>";
echo "E-mail: " . $_POST["email"] . "<br>";
echo "Wachtwoord: " . $_POST["wachtwoord"] . "<br>";
