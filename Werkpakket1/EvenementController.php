<?php

/**
 * Created by PhpStorm.
 * User: 11500046
 * Date: 23/05/2017
 * Time: 10:21
 */

class EvenementController
{
    private $_repo;
    private $_view;

   function __construct(\Repositories\PDOEventRepository $eventRepository , JsonView $view)
    {

        $this->_repo = $eventRepository;
        $this->_view = $view;

    }
  public function getAllEvents(){

       $evenementen = $this->_repo->findEvents();
        if (count($evenementen) > 0){
            foreach ($evenementen as $evenement) {
               $this->_view->show($evenement);
            }

        }else{
            echo "Niets gevonden";
        }

    }

   public function getAllEventById($id){
        $evenementen = $this->_repo->findEventById($id);
        if (count($evenementen) > 0){
            foreach ($evenementen as $evenement) {
                $this->_view->show($evenement);
            }

        }else{
            echo "Niets gevonden";
        }
    }

   public function getAllEventByPerson($id){
        $evenementen = $this->_repo->findEventByPerson($id);
        if (count($evenementen) > 0){
            foreach ($evenementen as $evenement) {
                $this->_view->show($evenement);
            }

        }else{
            echo "Niets gevonden";
        }
    }

   public function getAllEventByDate($from , $until){
        $evenementen = $this->_repo->findEventByDate($from , $until);
        if (count($evenementen) > 0){
            foreach ($evenementen as $evenement) {
                $this->_view->show($evenement);
        }
        }else{
            echo "Niets gevonden";
        }
    }

   public function getAllEventByDateAndPerson($id , $from , $until){
        $evenementen = $this->_repo->findEventByDateAndPerson($id, $from , $until);
        if (count($evenementen) > 0){
            foreach ($evenementen as $evenement) {
                $this->_view->show($evenement);
            }
        }else{
            echo "Niets gevonden";
        }
    }

   public function addEvent(Evenement $evenement){
       $this->_repo->AddEvent($evenement);
    }
}