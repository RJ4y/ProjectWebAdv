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



        /**
         * @return null
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param null $id
         */
        public function setId($id)
        {
            $this->id = $id;
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
         * @return mixed
         */
        public function getKlantId()
        {
            return $this->klantId;
        }

        /**
         * @param mixed $klantId
         */
        public function setKlantId($klantId)
        {
            $this->klantId = $klantId;
        }

        /**
         * @return mixed
         */
        public function getOmschrijving()
        {
            return $this->omschrijving;
        }

        /**
         * @param mixed $omschrijving
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
    }