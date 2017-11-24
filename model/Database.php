<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author Anicet
 */
class Database {
    public static function getDB(){
        $username = 'athleticdb';  // Your username provided by instructor
$password = 'Wg5K~amPK?9B';  // Your password provided by instructor
  $dsn = "mysql:host=mysql3.gear.host;dbname=athleticdb";
    try {
    $db = new PDO($dsn, $username, $password);
    return $db;
   } 
   catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../view/database_error.php');
    exit();
   }
 }
}
