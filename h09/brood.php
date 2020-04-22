<?php

class Brood
{
    private $naam;
    private $soort;
    private $vorm;
    private $gewicht;


    function __construct($naam, $soort, $vorm, $gewicht)
    {
        $this->naam = $naam;
        $this->soort = $soort;
        $this->vorm = $vorm;
        $this->gewicht = $gewicht;
    }

    function getNaam()
    {
        return $this->naam;
    }

    function getSoort()
    {
        return $this->soort;
    }
    function getVorm()
    {
        return $this->vorm;
    }
    function getGewicht()
    {
        return $this->gewicht;
    }
}
