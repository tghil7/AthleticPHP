<?php

require_once ('../model/Database.php');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Injury_DB
 *
 * @author Anicet
 */
class Injury_DB {
   //put your code here
    public static function getInjuryByName($name){
        $db = Database::getDB();
        $query = "select * from athleticdb.injury where name like '%$name%'";
        try{
            $statement = $db->prepare($query);
            $statement-> bindValue('%$name%', $name);
            $statement-> execute();
            $result = $statement->fetchAll();
            return $result;
        } catch (PDOException $ex) {
           echo "Error occurred  " + $ex  ;
        }
    }
}
