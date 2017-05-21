<?php
/**
 * Created by PhpStorm.
 * User: 11500046
 * Date: 22/03/2017
 * Time: 10:54
 */


namespace repo;

use ConnectionDb;
use Evenement;

include './domain classes/Repositories/IEventRepository.php';
include './domain classes/Evenement.php';
include './ConnectionDb.php';


class PDOEventRepository //implements IEventRepository
{
    private $connection = null;

    public function __construct(\mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function findPerson($id)
    {
        try {
            $statement = $this->connection->prepare("SELECT * FROM evenementen WHERE klant_id = $id");
            $statement->execute();
            $sql = "SELECT * FROM evenementen WHERE klant_id = $id";
            $results = $this->connection->query($sql);
            //$results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            if (count($results) > 0) {
                return new Evenement($results[0]['event_id'], $results[0]['event_name'], $results[0]['start_date'], $results[0]['end_date'], $results[0]['person_id']);
            } else {
                return null;
            }

        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function findEvents()
    {
        try {
            $statementString = "SELECT * FROM evenementen";

            $statement = $this->connection->query($statementString);
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
            $statementString = "SELECT *
                            FROM evenementen
                            WHERE evenement_id =$id";
            $statement = $this->connection->query($statementString);
            $row = $statement->fetch_assoc();
            $event = null;
            if (count($row) > 0) {
                $event = new Evenement($row['evenement_id'], $row['naam'], $row['klant_id'], $row['adres_id'],
                    $row['type'], $row['planning_datum'], $row['omschrijving'], $row['personeel_id'],
                    $row['start_datum'], $row['eind_datum'], $row['verwacht_gasten_aantal']);
            }
            return $event;
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function CreateEvent($event){
        try {
            $evenement = $event;
            $event_id = $evenement['eventId'];
            $naam = $evenement['naam'];
            $klant_id = 1;
            $adres_id = 1;
            $type = "TypeTest";
            $planning_datum = '2017-01-01';
            $omschrijving = "Omschrijving test";
            $personeel_id = 1;
            $start_datum = '2017-01-02';
            $eind_datum = '2017-01-03';
            $aantalGasten = 123;
            /*$klant_id = $evenement['klantId'];
            $adres_id = $evenement['adres_id'];
            $type = $evenement['type'];
            $planning_datum = $evenement['planningDatum'];
            $omschrijving = $evenement['omschrijving'];
            $personeel_id = $evenement['personeelId'];
            $start_datum = $evenement['startDatum'];
            $eind_datum = $evenement['eindDatum'];
            $aantalGasten = $evenement['aantalGasten'];*/
            $statementStr = "INSERT INTO evenementen VALUES ($event_id, $naam , $klant_id ,$adres_id, $type ,$planning_datum , $omschrijving, $personeel_id ,$start_datum , $eind_datum , $aantalGasten )";
            if($this->connection->query($statementStr) === TRUE){
                return $event;
            }else{
                return "Error: " . $statementStr . "<br>" . $this->connection->error;
            }

        } catch (\Exception $exception) {
            return $exception;
        }
    }

    }