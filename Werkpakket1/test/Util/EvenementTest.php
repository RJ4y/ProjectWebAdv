<?php

/**
 * Created by PhpStorm.
 * User: René
 * Date: 23/05/2017
 * Time: 15:39
 */
require_once 'C:\\Users\\11500046\\Documents\\GitHub\\ProjectWebAdv\\Werkpakket1\\Evenement.php';
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
        $this->evenement->setKlantId(1);
        $this->assertTrue(1 === $this->evenement->getKlantId());
    }

    public function testCanGetOmschrijvingEvenement()
    {
        $this->evenement->setOmschrijving("omschrijving");
        $this->assertTrue("omschrijving" === $this->evenement->getOmschrijving());
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
