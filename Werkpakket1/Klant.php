<?php
    require_once 'Persoon.php';
    require_once 'EnumRechten.php';
class Klant extends Persoon
{
    private $klantId;
    private $openstaandeRekening;
    private $aantalEvenementen;

    public function __construct($naam, $adres, $gsmNummer, $telefoonNummer, $klantId, $openstaandeRekening, $aantalEvenementen)
    {
        parent::__construct($naam, $adres, $gsmNummer, $telefoonNummer);
        $this->klantId = $klantId;
        $this->openstaandeRekening = $openstaandeRekening;
        $this->aantalEvenementen = $aantalEvenementen;
    }

    function __toString()
    {
        return parent::__toString() . " " . "Klant: " . $this->klantId  . " " .  $this->openstaandeRekening . " " . $this->aantalEvenementen;
    }
}