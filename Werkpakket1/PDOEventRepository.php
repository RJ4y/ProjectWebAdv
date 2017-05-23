<?php
/**
 * Created by PhpStorm.
 * User: 11500046
 * Date: 22/03/2017
 * Time: 10:54
 */

namespace Repositories;




use Evenement;

require "Evenement.php";
 class PDOEventRepository implements IEventRepository
{
    public $connection = null;

    public function __construct(\mysqli $connection)
    {
        $this->connection = $connection;
    }


    public function findEvents()
    {
        try {
            $statementString = "SELECT * FROM evenementen";

            $connection =$this->connection;
            $result = $connection->query($statementString);

            $evenementen = array();
            if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()) {
                    $evenementen[] =
                    new Evenement($row['evenement_id'] , $row['naam'], $row['planning_datum'] , $row['klant_id'] , $row['omschrijving'] ,
                        $row['verwacht_gasten_aantal'] ,  $row['type'] ,$row['personeel_id'] ,$row['start_datum'], $row['eind_datum']  );
                }
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
            $connection =$this->connection;
            $result = $connection->query($statementString);

            $evenementen = array();
            if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()) {
                    $evenementen[] =
                       new Evenement($row['evenement_id'] , $row['naam'], $row['planning_datum'] , $row['klant_id'] , $row['omschrijving'] ,
                           $row['verwacht_gasten_aantal'] ,  $row['type'] ,$row['personeel_id'] ,$row['start_datum'], $row['eind_datum']  );

                }
            }
            return $evenementen;
        } catch (\Exception $exception) {
            return null;
        }
    }
    public function findEventByPerson($id){
       try{
           $statementString = "SELECT * FROM evenementen WHERE klant_id = $id";
           $result = $this->connection->query($statementString);
           $evenementen = array();
           if ($result->num_rows >0){
               while ($row = $result->fetch_assoc()){
               $evenementen[] =
                   new Evenement($row['evenement_id'] , $row['naam'], $row['planning_datum'] , $row['klant_id'] , $row['omschrijving'] ,
                       $row['verwacht_gasten_aantal'] ,  $row['type'] ,$row['personeel_id'] ,$row['start_datum'], $row['eind_datum']  );
               }
           }
           return $evenementen;
       } catch (\Exception $exeption){
           return null;
        }
    }
    public function findEventByDate($fromDate , $toDate){
        try{

            $statementString = "SELECT * FROM evenementen WHERE start_datum >= '$fromDate' AND eind_datum <= '$toDate'";

            $result = $this->connection->query($statementString);
            $evenementen = array();
            echo $result->num_rows;
            if ($result->num_rows >0){
                while ($row = $result->fetch_assoc()){
                   $evenementen[] =
                       new Evenement($row['evenement_id'] , $row['naam'], $row['planning_datum'] , $row['klant_id'] , $row['omschrijving'] ,
                           $row['verwacht_gasten_aantal'] ,  $row['type'] ,$row['personeel_id'] ,$row['start_datum'], $row['eind_datum']  );
                }
            }
            return $evenementen;
        }catch (\Exception $exception){
            return $exception;
        }
    }
    public function findEventByDateAndPerson($id , $startDate , $endDate){
        try{
            $statementString = "SELECT * FROM evenementen WHERE start_datum >= '$startDate' AND eind_datum <= '$endDate' AND klant_id = $id";
            $result = $this->connection->query($statementString);
            $evenementen = array();
            if ($result->num_rows >0){
                while ($row = $result->fetch_assoc()){
                    $evenementen[] =
                        new Evenement($row['evenement_id'] , $row['naam'], $row['planning_datum'] , $row['klant_id'] , $row['omschrijving'] ,
                            $row['verwacht_gasten_aantal'] ,  $row['type'] ,$row['personeel_id'] ,$row['start_datum'], $row['eind_datum']  );
                }
            }
            return $evenementen;
        } catch (\Exception $exception){
            return $exception;
        }
    }
    public function AddEvent(\Evenement $evenement){
        try{
            $id = $evenement->getId();
            $titel = $evenement->getTitel();
            $klant_id = $evenement->getKlant();
            $adres_id = 1;
            $type = $evenement->getType();
            $planningDatum = $evenement->getDatumIngave();
            $omschrijving = $evenement->getOmschrijvingEvenement();
            $personeel_id = $evenement->getToegewezenPersoneel();
            $startDatum = $evenement->startDatum;
            $eindDatum = $evenement->eindDatum;
            $gasten = $evenement->getVerwachteAanwezigheid();



            $statementString="INSERT INTO evenementen VALUES ($id,'$titel',$klant_id,$adres_id,'$type ','$planningDatum','$omschrijving',$personeel_id,'$startDatum','$eindDatum',$gasten)";
            $result = $this->connection->query($statementString);
            if ($result === TRUE) {
                echo "Evenement toegevoegd";
            } else {
                echo "Niet toegevoegd";
            }
        } catch (\Exception $exception){
            return $exception;
        }
    }
}