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

        /**
         * @return null
         */
        public function getAdministrator()
        {
            return $this->administrator;
        }

        /**
         * @param null $administrator
         */
        public function setAdministrator($administrator)
        {
            $this->administrator = $administrator;
        }

        /**
         * @return null
         */
        public function getTitel()
        {
            return $this->titel;
        }

        /**
         * @param null $titel
         */
        public function setTitel($titel)
        {
            $this->titel = $titel;
        }

        /**
         * @return null
         */
        public function getDatumIngave()
        {
            return $this->datumIngave;
        }

        /**
         * @param null $datumIngave
         */
        public function setDatumIngave($datumIngave)
        {
            $this->datumIngave = $datumIngave;
        }

        /**
         * @return null
         */
        public function getKlant()
        {
            return $this->klant;
        }

        /**
         * @param null $klant
         */
        public function setKlant($klant)
        {
            $this->klant = $klant;
        }

        /**
         * @return null
         */
        public function getOmschrijvingEvenement()
        {
            return $this->omschrijvingEvenement;
        }

        /**
         * @param null $omschrijvingEvenement
         */
        public function setOmschrijvingEvenement($omschrijvingEvenement)
        {
            $this->omschrijvingEvenement = $omschrijvingEvenement;
        }

        /**
         * @return null
         */
        public function getVerwachteAanwezigheid()
        {
            return $this->verwachteAanwezigheid;
        }

        /**
         * @param null $verwachteAanwezigheid
         */
        public function setVerwachteAanwezigheid($verwachteAanwezigheid)
        {
            $this->verwachteAanwezigheid = $verwachteAanwezigheid;
        }

        /**
         * @return null
         */
        public function getType()
        {
            return $this->type;
        }

        /**
         * @param null $type
         */
        public function setType($type)
        {
            $this->type = $type;
        }

        /**
         * @return null
         */
        public function getMateriaal()
        {
            return $this->materiaal;
        }

        /**
         * @param null $materiaal
         */
        public function setMateriaal($materiaal)
        {
            $this->materiaal = $materiaal;
        }

        /**
         * @return null
         */
        public function getToegewezenPersoneel()
        {
            return $this->toegewezenPersoneel;
        }

        /**
         * @param null $toegewezenPersoneel
         */
        public function setToegewezenPersoneel($toegewezenPersoneel)
        {
            $this->toegewezenPersoneel = $toegewezenPersoneel;
        }



        function __toString()
        {
            return $this->titel . $this->administrator . $this->datumIngave . $this->klant . $this->omschrijvingEvenement .
                   $this->verwachteAanwezigheid . $this->type . $this->materiaal . $this->toegewezenPersoneel;
        }
    }