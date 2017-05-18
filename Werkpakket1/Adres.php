<?php
    include "EnumLanden.php";
class Adres
{
    private $straat;
    private $huisNummer;
    private $busNummer;
    private $postcode;
    private $land;

    public function __construct($straat, $huisNummer, $busNummer, $postcode, $land)
    {
        $this->straat = $straat;
        $this->huisNummer = $huisNummer;
        $this->busNummer = $busNummer;
        $this->postcode = $postcode;
        $this->land = $land;
    }

    function __toString()
    {
        return "Adres: " . $this->straat . " " . $this->huisNummer . " " . $this->busNummer . " " . $this->postcode . " " . $this->land;
    }
}