<?php
  
require_once ('../model/Database.php');
require_once ('../model/Diagnostic_DB.php');
require_once ('../model/Injury_DB.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$action = filter_input(INPUT_POST, 'action');

if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL){
    header('Location:../view/homePage.php');
    }
}

else if ($action == 'diagnostic.php'){
    header('Location:../view/diagnostic.php');
}

else if ($action =="Elbow"){
         $name = filter_input(INPUT_GET, 'action');
         $retrieved = Diagnostic_DB::getDiagnosticByName($name);
        
}

else if ($action =="Ankle sprain"){
         $name = "ankle";
         $retrieved = Diagnostic_DB::getDiagnosticByName($name);
         
}

else if ($action =="Groin"){
        $name = filter_input(INPUT_POST, 'action');
         $retrieved = Diagnostic_DB::getDiagnosticByName($name);
         
}

else if ($action =="Neck"){
     $name = filter_input(INPUT_POST, 'action');
         $retrieved = Diagnostic_DB::getDiagnosticByName($name);
         
}

else if ($action =="Thighs"){
         $name = filter_input(INPUT_POST, 'action');
         $retrieved = Diagnostic_DB::getDiagnosticByName($name);
       
}



else {
    require_once ('../model/Injury_DB.php');
        $name = filter_input(INPUT_POST, 'action');
        $result = Injury_DB::getInjuryByName($name);
         require_once('../view/injuries.php');
}





