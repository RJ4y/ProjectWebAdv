<?php
    require_once 'EnumLeverbaarheid.php';
class Materiaal
{
    private $naam;
    private $aantal;
    private $prijs;
    private $leverbaarheid;

    public function __construct($naam, $aantal, $prijs)
    {
        $this->naam = $naam;
        $this->aantal = $aantal;
        $this->prijs = $prijs;
        $this->leverbaarheid = EnumLeverbaarheid::Week;
    }

    function __toString()
    {
        return "Materiaal: " . $this->naam . $this->aantal . $this->prijs . $this->leverbaarheid;
    }
}