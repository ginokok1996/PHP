<?php

include_once("programma.php");
include_once("liedje.php");

$ditprogramma = new Programma();
$ditprogramma->setNaam("Nieuw Programma");
$ditprogramma->setOmshrijving("Omschrijving van het nieuwe programma");

foreach ($ditprogramma->getProgramma() as $p) {
    echo $p . "<br>";
}

$nieuwLiedje =  new Liedje("Mockingbird", "Eminem");
$ditprogramma->voegLiedjeToe($nieuwLiedje);

foreach ($ditprogramma->getLiedjes() as $liedje) {
    echo $liedje->getTitel() . " - " . $liedje->getArtiest() . "<br";
}
