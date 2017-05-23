<?php
/**
 * Created by PhpStorm.
 * User: 11500046
 * Date: 29/03/2017
 * Time: 9:16
 */

namespace Repositories;


interface IEventRepository
{
    public function findEvents();
    public function findEventById($id);
    public function findEventByPerson($id);
    public function findEventByDate($fromDate , $toDate);
    public function findEventByDateAndPerson($id , $startDate , $endDate);
    public function AddEvent(\Evenement $evenement);
}