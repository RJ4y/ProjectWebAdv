<?php
    require_once 'Persoon.php';
    require_once 'EnumRechten.php';
class Klant extends Persoon
{
    private $klantId;
    private $rekeningNummer;
    private $aantalEvenementen;

    public function __construct($naam, $adres, $gsmNummer, $telefoonNummer, $klantId, $rekeningNummer, $aantalEvenementen)
    {
        parent::__construct($naam, $adres, $gsmNummer, $telefoonNummer);
        $this->klantId = $klantId;
        $this->rekeningNummer = $rekeningNummer;
        $this->aantalEvenementen = $aantalEvenementen;
    }

    function __toString()
    {
        return parent::__toString() . " " . "Klant: " . $this->klantId  . " " .  $this->rekeningNummer . " " . $this->aantalEvenementen;
    }
}