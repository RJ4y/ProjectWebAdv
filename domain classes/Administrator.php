<?php
    require_once 'Persoon.php';
    require_once 'EnumRechten.php';
class Administrator extends Persoon
{
    private $administratorId;
    private $rechten;

    public function __construct($naam, $adres, $gsmNummer, $telefoonNummer, $administratorId)
    {
        parent::__construct($naam, $adres, $gsmNummer, $telefoonNummer);
        $this->administratorId = $administratorId;
        $this->rechten = EnumRechten::Full;
    }

    function __toString()
    {
        return parent::__toString() . " " . "Administrator: " . $this->administratorId  . " " . $this->rechten;
    }
}