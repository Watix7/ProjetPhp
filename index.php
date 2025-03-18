<?php 
require_once "Model/model.php";
require_once "Controller/controllerMedic.php";

if ( !isset($_GET["action"]) )
   // cas de la consultation : page de départ
   getAllUsers();
 else
   if ($_GET["action"] == 'AM')
      // cas du formulaire d'ajout
      getAllMedic();
   else
   if ($_GET["action"] == 'AA')
      // cas du formulaire d'ajout
      getAllAct();
      else
   if ($_GET["action"] == 'AJ')
      // cas du formulaire d'ajout
      afficheJuridique();
   else 
   if ( $_GET["action"] )
    getAllUsers();
 else
?>