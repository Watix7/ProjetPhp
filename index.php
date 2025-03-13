<?php 
require_once "model/Models.php";
require_once "controller/controller.php";

if ( isset($_POST["actionUser"]))
{
    if ($_POST ["actionUser"]== "inscrire")
    {
        addUser();
    }

else 
if ($_POST["actionUser"]== "modifier")
{
    updUser();
}
else
{
    delUser();

}
}
getAllUsers();

?>