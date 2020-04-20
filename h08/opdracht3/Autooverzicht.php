<?php

class Autooverzicht
{

    private $autoos;

    function __construct()
    {
        $this->autoos = [
            new Auto("Audi", 102500.00, "https://source.unsplash.com/300x150/?audi,car"),
            new Auto("Audi", 108500.00, "https://source.unsplash.com/301x150/?audi,car"),
            new Auto("Ferrari", 99500.00, "https://source.unsplash.com/300x150/?ferrari,car"),
            new Auto("Ferrari", 122500.00, "https://source.unsplash.com/301x150/?ferrari,car"),
            new Auto("Ferrari", 152500.00, "https://source.unsplash.com/302x150/?ferrari,car"),
            new Auto("Fiat", 10500.00, "https://source.unsplash.com/300x150/?fiat,car"),
            new Auto("Fiat", 11500.00, "https://source.unsplash.com/301x150/?fiat,car"),
            new Auto("Mercedes", 82500.00, "https://source.unsplash.com/300x150/?mercedes,car"),
            new Auto("Mercedes", 132700.00, "https://source.unsplash.com/301x150/?mercedes,car"),
            new Auto("Mercedes", 87500.00, "https://source.unsplash.com/302x150/?mercedes,car"),
            new Auto("Mercedes", 222650.00, "https://source.unsplash.com/303x150/?mercedes,car"),
            new Auto("Opel", 13500.00, "https://source.unsplash.com/300x150/?opel,car"),
            new Auto("Opel", 9500.00, "https://source.unsplash.com/301x150/?opel,car"),
            new Auto("Opel", 19500.00, "https://source.unsplash.com/302x150/?opel,car"),
            new Auto("Volkswagen", 16340.00, "https://source.unsplash.com/300x150/?volkswagen,car"),
            new Auto("Volkswagen", 18340.00, "https://source.unsplash.com/301x150/?volkswagen,car"),
            new Auto("Volkswagen", 21670.00, "https://source.unsplash.com/302x150/?volkswagen,car"),
        ];
    }

    function getAutoLijst()
    {
        return $this->autoos;
    }

    function voegAutoToe($merk, $prijs, $image_url)
    {
        $newAuto = new Auto($merk, $prijs, $image_url);
        $this->autoos[] = $newAuto;
    }

    function getGefilterdeLijst($minprijs, $maxprijs, $merk)
    {
        $gefilterdeLijst = [];

        foreach ($this->autoos as $auto) {
            if ($auto->getPrijs() > $minprijs && $auto->getPrijs() < $maxprijs && $auto->getMerk() == $merk) {
                $gefilterdeLijst[] = $auto;
            } else if ($auto->getPrijs() > $minprijs && $auto->getPrijs() < $maxprijs && $merk == "") {
                $gefilterdeLijst[] = $auto;
            }
        }

        return $gefilterdeLijst;
    }
}
