<?php

/**
 * Created by PhpStorm.
 * User: René
 * Date: 23/05/2017
 * Time: 18:48
 */
require_once 'C:\\Users\\11500046\\Documents\\GitHub\\ProjectWebAdv\\Werkpakket1\\PDOEventRepository.php';
require "C:\\Users\\11500046\\Documents\\GitHub\\ProjectWebAdv\\Werkpakket1\\ConnectionDb.php";
require "C:\\Users\\11500046\\Documents\\GitHub\\ProjectWebAdv\\Werkpakket1\\JsonView.php";
require "C:\\Users\\11500046\\Documents\\GitHub\\ProjectWebAdv\\Werkpakket1\\EvenementController.php";

class EvenementControllerTest extends PHPUnit_Framework_TestCase
{
    private $view;
    private $repo;
    private $controller;

    public function setUp()
    {
        $connection = ConnectionDb::getConnection();
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

        $this->controller = new EvenementController($this->repo, $this->view);
        $this->expectOutputString("Niets gevonden");
        $this->controller->getAllEvents();
    }

    public function testGetAllEventById_EchoIfNone() {

        $this->controller = new EvenementController($this->repo, $this->view);
        $this->expectOutputString("Niets gevonden");
        $this->controller->getAllEventById(1);
    }

    public function testGetAllEventByPerson_EchoIfNone() {

        $this->controller = new EvenementController($this->repo, $this->view);
        $this->expectOutputString("Niets gevonden");
        $this->controller->getAllEventByPerson(3);
    }

    public function testGetAllEventByDate_EchoIfNone() {

        $this->controller = new EvenementController($this->repo, $this->view);
        $this->expectOutputString("Niets gevonden");
        $this->controller->getAllEventByDate("29/05/2017", "30/05/2017");
    }

    public function testGetAllEventByDateAndPerson_EchoIfNone() {
        $this->controller = new EvenementController($this->repo, $this->view);
        $this->expectOutputString("Niets gevonden");
        $this->controller->getAllEventByDateAndPerson(1, "29/05/2017", "30/05/2017");
    }
}
