<?php
    require_once 'Persoon.php';
    require_once 'EnumRechten.php';
class Personeel extends Persoon
{
    private $personeelId;
    private $kwaliteiten;
    //private $rechten;

    public function __construct($naam, $adres, $gsmNummer, $telefoonNummer, $personeelId, $kwaliteiten)
    {
        parent::__construct($naam, $adres, $gsmNummer, $telefoonNummer);
        $this->$personeelId = $personeelId;
        $this->$kwaliteiten = $kwaliteiten;
        //$this->rechten = EnumRechten::Personeel;
    }

    public function getPersoneel($index)
    {
        return array (new Personeel("John", new Adres("TestStraat", "31", "a", "3500", "Belgie"), "048978254", "04862568", 1, array("Acteren", "Geluid regeling")),
                      new Personeel("Oliver", new Adres("StraatTest", "59", "z", "3000", "Nederland"), "01544578254", "58549655", 1, array("Verwelkomen", "Bediening")));
    }

    function __toString()
    {
        return parent::__toString() . " " . "Personeel: " . $this->personeelId . " " . $this->kwaliteiten; //. " " . $this->rechten;
    }
}