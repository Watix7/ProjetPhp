<?php
function addUsers()
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail= $_POST["mail"];
    insertUser($nom,$prenom,$mail);

    $activity = selectAct();
    include("view/afficheActi.php");
    
}

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