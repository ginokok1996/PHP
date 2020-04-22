<?php

class BroodLijst
{
    private $broodjes = [];

    function __construct()
    {
        $this->broodjes = [
            new Brood("test", "wit", "rond", 50)
        ];
    }


    function voegBroodToe($naam, $soort, $vorm, $gewicht)
    {
        $nieuwBrood = new Brood($naam, $soort, $vorm, $gewicht);
        $this->broodjes[] = $nieuwBrood;
    }

    function getBroodjes()
    {
        return $this->broodjes;
    }
}
