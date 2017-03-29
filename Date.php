<?php
require_once 'EnumMaanden.php';
class Date
{
    private $jaar;
    private $maand;
    private $dag;
    //private $uur;
    //private $minuut;

    public function __construct($jaar, $maand, $dag /*$uur, $minuut*/)
    {
        $this->jaar = $jaar;
        $this->maand = $maand;
        $this->dag = $dag;
        //$this->uur = $uur;
        //$this->minuut = $minuut;
    }

    function __toString()
    {
        return "Datum: " . $this->dag . " " . $this->maand . " " . $this->jaar ;// . $this->uur . " " . $this->minuut;
    }
}