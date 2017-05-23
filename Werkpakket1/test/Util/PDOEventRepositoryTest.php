<?php
/**
 * Created by PhpStorm.
 * User: René
 * Date: 23/05/2017
 * Time: 12:21
 */

use Repositories\PDOEventRepository;
require_once "C:\\Users\\11500046\\Documents\\GitHub\\ProjectWebAdv\\Werkpakket1\\PDOEventRepository.php";
require_once "C:\\Users\\11500046\\Documents\\GitHub\\ProjectWebAdv\\Werkpakket1\\ConnectionDb.php";
class PDOEventRepositoryTest extends PHPUnit_Framework_TestCase
{
    private $mock;
    private $mockStatement;
    private $event;
    private $repository;

    public function setUp()
    {
        $this->mock = $this->getMockBuilder('mysqli')
            ->disableOriginalConstructor()
            ->getMock();
        $this->mockStatement =
            $this->getMockBuilder('mysqliStatement')
                ->disableOriginalConstructor()
                ->getMock();
        $this->event = new Evenement(1,"Titel","17-08-2017",1,"Omschrijving",100,"Type",1,"18-09-2017","19-09-2017");
        $this->mockStatement->expects($this->atLeastOnce())
            ->method('fetch_assoc')->will($this->returnValue(
                [
                    [
                        'id' => $this->event->getId(),
                        'datumIngave'=> $this->event->getDatumIngave(),
                        'eindDatum'=> $this->event->getEindDatum(),
                        '$startDatum'=> $this->event->getStartDatum(),
                        'klant'=> $this->event->getKlantId(),
                        'omschrijvingEvenement'=> $this->event->getOmschrijving(),
                        'verwachteAanwezigheid'=> $this->event->getVerwachteAanwezigheid(),
                        'type'=> $this->event->getType(),
                        'toegewezenPersoneel'=> $this->event->getToegewezenPersoneel()
                    ]
                ]
            ));

        $this->mock->expects($this->atLeastOnce())->method('query')->will($this->returnValue($this->mockStatement));

        $this->repository = new \Repositories\PDOEventRepository(ConnectionDb::getConnection());
    }

    public function tearDown() {
        $this->event = null;
    }

    public function testFindEvents_returnsAllEvents_isCalled() {
        $actualEvent = $this->repository->findEvents();
        $this->assertEquals($this->event, $actualEvent);
    }

    public function testFindEventByPersonId() {
        $actualEvent = $this->repository->findEventById($this->event->getId());
        $this->assertEquals($this->event, $actualEvent);
    }

    public function testFindEventByDate() {
        $actualEvent = $this->repository->findEventByDate($this->event->getStartDatum(), $this->event->getEindDatum());
        $this->assertEquals($this->event, $actualEvent);
    }

    public function testFindEventByDateAndPerson() {
        $actualEvent = $this->repository->findEventByDateAndPerson($this->event->getId(), $this->event->getStartDatum(), $this->event->getEindDatum());
        $this->assertEquals($this->event, $actualEvent);
    }

    public function testAddEvent_ThrowsException() {
        $this->setExpectedException(Exception::class);
        $this->repository->AddEvent("test");
    }
}
