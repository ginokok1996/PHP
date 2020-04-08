<?php

if (login($_POST['email'], $_POST['wachtwoord'])) {
    echo "Welkom";
} else {
    echo "Sorry, geen toegang!";
}


function login($a, $b)
{

    if ($a == "piet@worldonline.nl" && $b == "doetje123") {
        return true;
    } else if ($a == "klaas@carpets.nl" && $b == "snoepje777") {
        return true;
    } else if ($a == "truushendriks@wegweg.nl" && $b == "arkiearkie201") {
        return true;
    } else {
        return false;
    }
}
