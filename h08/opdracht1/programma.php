<?php

class Programma
{
    private $naam = "";
    private $omschrijving = "";
    private $liedjes = array();

    public function voegLiedjeToe($liedje)
    {
        $this->liedjes[] = $liedje;
    }

    public function getLiedjes()
    {
        return $this->liedjes;
    }

    public function getProgramma()
    {
        return array(
            "naam" => $this->naam,
            "omschrijving" => $this->omschrijving
        );
    }

    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    public function setOmshrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;
    }

    public function getNaam()
    {
        return $this->naam;
    }

    public function getOmschrijving()
    {
        return $this->omschrijving;
    }
}
