<?php
    require_once 'Adres.php';
abstract class Persoon
{
    protected $naam;
    protected $adres;
    protected $gsmNummer;
    protected $telefoonNummer;

    public function __construct($naam, $adres, $gsmNummer, $telefoonNummer)
    {
        $this->naam = $naam;
        $this->adres = $adres;
        $this->gsmNummer = $gsmNummer;
        $this->telefoonNummer = $telefoonNummer;
    }

    function __toString()
    {
        return "Persoon:" . $this->naam . " " . $this->gsmNummer . " " . $this->telefoonNummer . " " . $this->adres;
    }
}
