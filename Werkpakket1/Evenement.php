<?php

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

        public function setTitel($titel)
        {
            $this->titel = $titel;
        }


        public function getDatumIngave()
        {
            return $this->datumIngave;
        }


        public function setDatumIngave($datumIngave)
        {
            $this->datumIngave = $datumIngave;
        }


        public function getKlant()
        {
            return $this->klant;
        }


        public function setKlant($klant)
        {
            $this->klant = $klant;
        }


        public function getOmschrijvingEvenement()
        {
            return $this->omschrijvingEvenement;
        }


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


        public function setVerwachteAanwezigheid($verwachteAanwezigheid)
        {
            $this->verwachteAanwezigheid = $verwachteAanwezigheid;
        }


        public function getType()
        {
            return $this->type;
        }


        public function setType($type)
        {
            $this->type = $type;
        }


        public function getToegewezenPersoneel()
        {
            return $this->toegewezenPersoneel;
        }


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