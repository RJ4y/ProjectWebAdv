<?php
    require_once 'Personeel.php';
    require_once 'Administrator.php';
    require_once 'Klant.php';
    require_once 'Date.php';
    require_once 'Materiaal.php';
    require_once 'EnumTypes.php';
    class Evenement
    {
        public $eventId;
        public $naam;
        public $klantId;
        public $adresId;
        public $type;
        public $planningDatum;
        public $omschrijving;
        public $personeelId;
        public $startDatum;
        public $eindDatum;
        public $verwachteAanwezigheid;

        /**
         * Evenement constructor.
         * @param $eventId
         * @param $naam
         * @param $klantId
         * @param $adresId
         * @param $type
         * @param $planningDatum
         * @param $omschrijving
         * @param $personeelId
         * @param $startDatum
         * @param $eindDatum
         * @param $verwachteAanwezigheid
         */
        public function __construct($eventId = null, $naam = null, $klantId = null, $adresId = null, $type = null,
                                    $planningDatum = null, $omschrijving = null, $personeelId = null, $startDatum = null,
                                    $eindDatum = null, $verwachteAanwezigheid = null)
        {
            $this->eventId = $eventId;
            $this->naam = $naam;
            $this->klantId = $klantId;
            $this->adresId = $adresId;
            $this->type = $type;
            $this->planningDatum = $planningDatum;
            $this->omschrijving = $omschrijving;
            $this->personeelId = $personeelId;
            $this->startDatum = $startDatum;
            $this->eindDatum = $eindDatum;
            $this->verwachteAanwezigheid = $verwachteAanwezigheid;
        }

        /**
         * @return null
         */
        public function getEventId()
        {
            return $this->eventId;
        }

        /**
         * @param null $eventId
         */
        public function setEventId($eventId)
        {
            $this->eventId = $eventId;
        }

        /**
         * @return null
         */
        public function getNaam()
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
        public function getPersoneelId()
        {
            return $this->personeelId;
        }

        /**
         * @param null $personeelId
         */
        public function setPersoneelId($personeelId)
        {
            $this->personeelId = $personeelId;
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
    }