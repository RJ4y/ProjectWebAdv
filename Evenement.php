<?php
    require_once 'Personeel.php';
    require_once 'Administrator.php';
    require_once 'Klant.php';
    require_once 'Date.php';
    require_once 'Materiaal.php';
    require_once 'EnumTypes.php';
    class Evenement
    {
        private $administrator;
        private $titel;
        private $datumIngave;
        private $klant;
        private $omschrijvingEvenement;
        private $verwachteAanwezigheid;
        private $type;
        private $materiaal;
        private $toegewezenPersoneel;

        public function __construct($admin = null, $titel = null, $datum = null, $klant = null, $omschrijvingEvenement = null,
                                    $verwachteAanwzigheid = null, $type = null, $materiaal = null, $toegewezenPersoneel = null)
        {
            $this->administrator = $admin;
            $this->titel = $titel;
            $this->datumIngave = $datum;
            $this->klant = $klant;
            $this->omschrijvingEvenement = $omschrijvingEvenement;
            $this->verwachteAanwezigheid = $verwachteAanwzigheid;
            $this->type = $type;
            $this->materiaal = $materiaal;
            $this->toegewezenPersoneel = $toegewezenPersoneel;

            /*
            $this->administrator = new Administrator();
            $this->titel = "TestEvenement";
            $this->datumIngave = new Date();
            $this->klant = new Klant();
            $this->omschrijvingEvenement = "Test evenement";
            $this->verwachteAanwezigheid = 5;
            $this->type = EnumTypes::VliegendePastoors;
            $this->materiaal = new Materiaal("Stoel", "1", "5");
            $toegewezenPersoneel = new Personeel();
            $this->toegewezenPersoneel = array($toegewezenPersoneel->getPersoneel(5),$toegewezenPersoneel->getPersoneel(7));
            */
        }

        function __toString()
        {
            return $this->titel . $this->administrator . $this->datumIngave . $this->klant . $this->omschrijvingEvenement .
                   $this->verwachteAanwezigheid . $this->type . $this->materiaal . $this->toegewezenPersoneel;
        }
    }