<?php
    /*require_once 'Personeel.php';
    require_once 'Administrator.php';
    require_once 'Klant.php';
    require_once 'Date.php';
    require_once 'Materiaal.php';
    require_once 'EnumTypes.php';*/
    class Evenement
    {

        public $id;
        public $titel;
        public $datumIngave;
        public $startDatum;
        public $eindDatum;
        public $verwachteAanwezigheid;
        public $type;
        public $toegewezenPersoneel;

        public function __construct($id = null , $titel = null, $datum = null, $klant = null, $omschrijvingEvenement = null,
                                    $verwachteAanwzigheid = null, $type = null, $toegewezenPersoneel = null,
                                    $startDatum = null, $eindDatum = null)
        {
            $this->id = $id;
            $this->titel = $titel;
            $this->datumIngave = $datum;
            $this->klant = $klant;
            $this->omschrijvingEvenement = $omschrijvingEvenement;
            $this->verwachteAanwezigheid = $verwachteAanwzigheid;
            $this->type = $type;

            $this->toegewezenPersoneel = $toegewezenPersoneel;
            $this->startDatum = $startDatum;
            $this->eindDatum = $eindDatum;
            $this->verwachteAanwezigheid = $verwachteAanwezigheid;
        }

        public function getId(){
            return$this->id;
        }

        public function getTitel()
        {
            return $this->naam;
        }

        /**
         * @param null $naam
         */
        public function setNaam($naam)
        {
            $this->naam = $naam;
        }

        /**
         * @return null
         */
        public function getKlantId()
        {
            return $this->klantId;
        }

        /**
         * @param null $klantId
         */
        public function setKlantId($klantId)
        {
            $this->klantId = $klantId;
        }

        /**
         * @return null
         */
        public function getAdresId()
        {
            return $this->adresId;
        }

        /**
         * @param null $adresId
         */
        public function setAdresId($adresId)
        {
            $this->adresId = $adresId;
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
        public function getPlanningDatum()
        {
            return $this->planningDatum;
        }

        /**
         * @param null $planningDatum
         */
        public function setPlanningDatum($planningDatum)
        {
            $this->planningDatum = $planningDatum;
        }

        /**
         * @return null
         */
        public function getOmschrijving()
        {
            return $this->omschrijving;
        }

        /**
         * @param null $omschrijving
         */
        public function setOmschrijving($omschrijving)
        {
            $this->omschrijving = $omschrijving;
        }

        /**
         * @return null
         */
        public function getStartDatum()
        {
            return $this->startDatum;
        }

        /**
         * @param null $startDatum
         */
        public function setStartDatum($startDatum)
        {
            $this->startDatum = $startDatum;
        }

        /**
         * @return null
         */
        public function getEindDatum()
        {
            return $this->eindDatum;
        }

        /**
         * @param null $eindDatum
         */
        public function setEindDatum($eindDatum)
        {
            $this->eindDatum = $eindDatum;
        }

        /**
         * @return null
         */
        public function getVerwachteAanwezigheid()
        {
            return $this->verwachteAanwezigheid;
        }

        public function __toString()
        {
            return $this->titel  . $this->datumIngave . $this->klant . $this->omschrijvingEvenement .
                   $this->verwachteAanwezigheid . $this->type  . $this->toegewezenPersoneel;
        }
    }