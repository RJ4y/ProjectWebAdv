<?php

/**
 * Created by PhpStorm.
 * User: René
 * Date: 23/05/2017
 * Time: 18:48
 */
class EvenementControllerTest extends PHPUnit_Framework_TestCase
{
    private $view;
    private $repo;
    private $controller;

    public function setUp()
    {
        $this->repo = new \Repositories\PDOEventRepository(ConnectionDb::getConnection());
        $this->view = new JsonView();
        $this->controller = new EvenementController($this->repo, $this->view);
    }

    public function tearDown()
    {
        $this->repo = null;
        $this->view = null;
        $this->controller = null;
    }

    public function testGetAllEvents_EchoIfNone() {
        $this->expectOutputString("Niets gevonden");
        $this->controller->getAllEvents();
    }

    public function testGetAllEventById_EchoIfNone() {
        $this->expectOutputString("Niets gevonden");
        $this->controller->getAllEventById(1);
    }

    public function testGetAllEventByPerson_EchoIfNone() {
        $this->expectOutputString("Niets gevonden");
        $this->controller->getAllEventByPerson();
    }

    public function testGetAllEventByDate_EchoIfNone() {
        $this->expectOutputString("Niets gevonden");
        $this->controller->getAllEventByDate("29/05/2017", "30/05/2017");
    }

    public function testGetAllEventByDateAndPerson_EchoIfNone() {
        $this->expectOutputString("Niets gevonden");
        $this->controller->getAllEventByDate(1, "29/05/2017", "30/05/2017");
    }
}
