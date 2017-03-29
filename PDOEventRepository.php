<?php
/**
 * Created by PhpStorm.
 * User: 11500046
 * Date: 22/03/2017
 * Time: 10:54
 */


namespace repo;

use Event;

include("Evenement.php");
include("EventRepository.php");
require_once 'ConnectionDb.php';

class PDOEventRepository implements EventRepository
{
    private $connection = null;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function findEvents()
    {
        try {
            $statement = $this->connection->prepare("SELECT * FROM events");
            $statement->execute();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);

            if (count($results) > 0) {
                return new Event($results[0]['event_id'], $results[0]['event_name'], $results[0]['start_date'], $results[0]['end_date'], $results[0]['person_id']);
            } else {
                return null;
            }
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function findEventById($id)
    {
        $connection = ConnectionDb::getConnection();
        $statementString = "SELECT *
                            FROM events
                            WHERE eventid =$id";
        $statement = $connection->query($statementString);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $row = $statement->fetch();
        if(count($row)==1) {
            $event = new \Evenement();
            $event->setAdministrator($row[0]);
            $event->setTitel($row[1]);
            $event->setDatumIngave($row[2]);
            $event->setKlant($row[3]);
            $event->setOmschrijvingEvenement($row[4]);
            $event->setVerwachteAanwezigheid($row[5]);
            $event->setType($row[6]);
            $event->setMateriaal($row[7]);
            $event->setToegewezenPersoneel($row[8]);

            return event;
        }else{
            return null;
        }
    }
}