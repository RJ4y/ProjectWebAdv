<?php
/**
 * Created by PhpStorm.
 * User: 11500046
 * Date: 22/03/2017
 * Time: 10:54
 */


namespace repo;
use Event;
include ("Event.php");
include ("EventRepository.php");
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
                return new Event($results[0]['event_id'], $results[0]['event_name'] , $results[0]['start_date'] , $results[0]['end_date'] , $results[0]['person_id']);
            } else {
                return null;
            }
        } catch (\Exception $exception) {
            return null;
        }
    }
}