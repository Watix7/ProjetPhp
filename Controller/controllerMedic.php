<?php
function addUsers()
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    insertUser($nom,$prenom,$mail);

    $activity = selectAct();
    include("view/afficheActi.php");
    
}
<<<<<<< HEAD

function addAct()
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    date_default_timezone_set("UTC");
    $date = date("Y-m-d H:i:s");
    $idA = $_POST["idA"];
    insertAct($nom,$prenom,$mail,$date,$idA);

    $activity = selectAct();
    include("view/afficheActi.php");
    
}

=======
>>>>>>> 9226828fd66ed9be0e37d566224cf9df11734749

function getAllUsers()
{
    include("view/pageAcc.php");

}

function afficheJuridique()
{
    include("view/pageLeg.php");

}

function getAllMedic()
{
    $medic = selectUsers();
    include("view/affichemed.php");
}

function getAllAct()
{
    
    $activity = selectAct();
    include("view/afficheActi.php");
}
?>