<?php

/**
 * Created by PhpStorm.
 * User: René
 * Date: 23/05/2017
 * Time: 15:39
 */
class EvenementTest extends PHPUnit_Framework_TestCase
{
    protected $evenement;

    public function setUp()
    {
        $this->evenement = new Evenement();
    }

    public function tearDown()
    {
        $this->evenement = null;
    }

    public function testCanGetTitel()
    {
        $this->evenement->setTitel("titel");
        $this->assertTrue("titel" === $this->evenement->getTitel());
    }

    public function testCanGetDatumIngave()
    {
        $this->evenement->setDatumIngave("datum");
        $this->assertTrue("datum" === $this->evenement->getDatumIngave());
    }

    public function testCanGetKlant()
    {
        $this->evenement->setKlant("klant");
        $this->assertTrue("klant" === $this->evenement->getKlant());
    }

    public function testCanGetOmschrijvingEvenement()
    {
        $this->evenement->setOmschrijvingEvenement("omschrijving");
        $this->assertTrue("omschrijving" === $this->evenement->getOmschrijvingEvenement());
    }

    public function testCanGetVerwachteAanwezigheid()
    {
        $this->evenement->setVerwachteAanwezigheid("aanwezigheid");
        $this->assertTrue("aanwezigheid" === $this->evenement->getVerwachteAanwezigheid());
    }

    public function testCanGetType()
    {
        $this->evenement->setType("type");
        $this->assertTrue("type" === $this->evenement->getType());
    }

    public function testCanGetToegewezenPersoneel()
    {
        $this->evenement->setToegewezenPersoneel("personeel");
        $this->assertTrue("personeel" === $this->evenement->getToegewezenPersoneel());
    }
}
