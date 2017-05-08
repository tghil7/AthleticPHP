<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Diagnostic_DB
 *
 * @author Anicet
 */
class Diagnostic_DB {
    //put your code here
    public static function getDiagnosticByName($name){
        $db = Database::getDB();
        $query = "select * from athleticdb.diagnostic where name ='%$name%'";
        try{
            $statement = $db->prepare($query);
            $statement-> bindValue('%$name%', $name);
            $statement-> execute();
            $result = $statement->fetch();
            return $result;
        } catch (PDOException $ex) {
           echo "Error occurred  " + $ex  ;
        }
    }
}
