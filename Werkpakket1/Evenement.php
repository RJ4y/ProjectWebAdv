<?php

    class Evenement
    {

        public $id;
        public $titel;
        public $datumIngave;
        public $klantId;
        public $startDatum;
        public $eindDatum;
        public $omschrijving;
        public $verwachteAanwezigheid;
        public $type;
        public $toegewezenPersoneel;

        /**
         * Evenement constructor.
         */
        public function __construct()
        {
        }

        /**
         * Evenement constructor.
         * @param $id
         * @param $titel
         * @param $datumIngave
         * @param $klantId
         * @param $startDatum
         * @param $eindDatum
         * @param $verwachteAanwezigheid
         * @param $type
         * @param $toegewezenPersoneel
         */
        /**public function __construct($id = null, $titel = null, $datumIngave = null, $klantId = null, $startDatum = null,
                                    $eindDatum = null, $verwachteAanwezigheid = null, $type = null, $toegewezenPersoneel = null)
        {
            $this->id = $id;
            $this->titel = $titel;
            $this->datumIngave = $datumIngave;
            $this->klantId = $klantId;
            $this->startDatum = $startDatum;
            $this->eindDatum = $eindDatum;
            $this->verwachteAanwezigheid = $verwachteAanwezigheid;
            $this->type = $type;
            $this->toegewezenPersoneel = $toegewezenPersoneel;
        }*/

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
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

        public function getKlantId()
        {
            return $this->klantId;
        }

        public function setKlantId($klantId)
        {
            $this->klantId = $klantId;
        }

        public function getOmschrijving()
        {
            return $this->omschrijving;
        }

        public function setOmschrijving($omschrijving)
        {
            $this->omschrijving = $omschrijving;
        }
      
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
      
        public function getStartDatum()
        {
            return $this->startDatum;
        }

        public function setStartDatum($startDatum)
        {
            $this->startDatum = $startDatum;
        }

        public function getEindDatum()
        {
            return $this->eindDatum;
        }

        public function setEindDatum($eindDatum)
        {
            $this->eindDatum = $eindDatum;
        }

        function __toString()
        {
            return $this->titel  . $this->datumIngave . $this->klant . $this->omschrijvingEvenement .
                   $this->verwachteAanwezigheid . $this->type  . $this->toegewezenPersoneel;
        }
    }