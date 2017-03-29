<?php
    require_once 'Personeel.php';
    require_once 'Administrator.php';
    require_once 'Klant.php';
    require_once 'Date.php';
    require_once 'Materiaal.php';
    require_once 'EnumTypes.php';
    class Evenement
    {
        private $titel;
        private $datumIngave;
        private $startDatum;
        private $eindDatum;
        private $klant;
        private $omschrijvingEvenement;
        private $verwachteAanwezigheid;
        private $type;
        private $materiaal;
        private $toegewezenPersoneel;

        public function __construct($titel = null, $datum = null, $klant = null, $omschrijvingEvenement = null,
                                    $verwachteAanwzigheid = null, $type = null, $materiaal = null, $toegewezenPersoneel = null,
                                    $startDatum = null, $eindDatum = null)
        {
            $this->titel = $titel;
            $this->datumIngave = $datum;
            $this->klant = $klant;
            $this->omschrijvingEvenement = $omschrijvingEvenement;
            $this->verwachteAanwezigheid = $verwachteAanwzigheid;
            $this->type = $type;
            $this->materiaal = $materiaal;
            $this->toegewezenPersoneel = $toegewezenPersoneel;
            $this->startDatum = $startDatum;
            $this->eindDatum = $eindDatum;
        }

        function __toString()
        {
            return $this->titel  . $this->datumIngave . $this->klant . $this->omschrijvingEvenement .
                   $this->verwachteAanwezigheid . $this->type . $this->materiaal . $this->toegewezenPersoneel;
        }
    }