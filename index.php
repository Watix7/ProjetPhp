<?php 
require_once "Model/model.php";
require_once "Controller/controller.php";

if ( isset($_POST["actionUser"]))
{
    if ($_POST ["actionUser"]== "inscrire")
    {
        addUser();
    }

// else 
// if ($_POST["actionUser"]== "modifier")
// {
//     updUser();
// }
// else
// {
//     delUser();

// }
}
getAllUsers();

?>