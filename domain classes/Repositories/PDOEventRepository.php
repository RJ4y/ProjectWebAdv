<?php
/**
 * Created by PhpStorm.
 * User: 11500046
 * Date: 22/03/2017
 * Time: 10:54
 */


namespace repo;

use Evenement;
use Connection;

include("Evenement.php");
include("IEventRepository.php");
require_once 'ConnectionDb.php';

class PDOEventRepository implements IEventRepository
{
    private $connection = null;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function findEvents()
    {
        try {
            $connection = Connection::getConnection();
            $statementString = "SELECT * FROM evenementen";

            $statement = $connection->query($statementString);
            //$statement->setFetchMode(\PDO::FETCH_ASSOC);

            $evenementen = array();
            while ($row = $statement->fetch_assoc()) {
                $evenementen[] =
                    new Evenement($row['evenement_id'], $row['naam'], $row['klant_id'], $row['adres_id'],
                        $row['type'], $row['planning_datum'], $row['omschrijving'], $row['personeel_id'],
                        $row['start_datum'], $row['eind_datum'], $row['verwacht_gasten_aantal']);
            }
            return $evenementen;
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function findEventById($id)
    {
        try {
            $connection = Connection::getConnection();
            $statementString = "SELECT *
                            FROM evenementen
                            WHERE evenement_id =$id";
            $statement = $connection->query($statementString);
            $statement->setFetchMode(\PDO::FETCH_ASSOC);
            $row = $statement->fetch();
            $event = null;
            if (count($row) > 0) {
                $event = new \Evenement($row['evenement_id'], $row['naam'], $row['klant_id'], $row['adres_id'],
                    $row['type'], $row['planning_datum'], $row['omschrijving'], $row['personeel_id'],
                    $row['start_datum'], $row['eind_datum'], $row['verwacht_gasten_aantal']);
            }
            return $event;
        } catch (\Exception $exception) {
            return null;
        }
    }
}