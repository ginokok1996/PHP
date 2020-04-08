<?php

if ($_POST['email'] == "piet@worldonline.nl" && $_POST['wachtwoord'] == "doetje123") {
    echo "Welkom";
} else if ($_POST['email'] == "klaas@carpets.nl" && $_POST['wachtwoord'] == "snoepje777") {
    echo "Welkom";
} else if ($_POST['email'] == "truushendriks@wegweg.nl" && $_POST['wachtwoord'] == "arkiearkie201") {
    echo "Welkom";
} else {
    echo "Sorry, geen toegang! <br>";
    echo '<a href="/h05/opdracht3/formulier.html">Terug</a>';
}
