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
        public $klant;
        public $omschrijvingEvenement;
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
        }

        public function getId(){
            return$this->id;
        }

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


        /**
         * @param null $materiaal
         */


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
            return $this->titel  . $this->datumIngave . $this->klant . $this->omschrijvingEvenement .
                   $this->verwachteAanwezigheid . $this->type  . $this->toegewezenPersoneel;
        }
    }