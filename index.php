<?php 
require_once "Model/model.php";
require_once "Controller/controllerMedic.php";

if ( !isset($_GET["action"]) )
   // cas de la consultation : page de départ
   getAllUsers();
 else
   if ($_GET["action"] == 'AM')
      getAllMedic();
   else
   if ($_GET["action"] == 'AA')
      getAllAct();
   else
   if ($_GET["action"] == 'AJ')
      afficheJuridique();
   else
   if ($_GET["action"] == 'in') {
      //addUsers();
      addAct();
   }
   else
   if ( $_GET["action"] )
    getAllUsers();
 else
?>
