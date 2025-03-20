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
/*function updUser()
{
    $user= $_POST["id"];
    $nom = $_POST["nom"];
    $mail = $_POST["mail"];
    updateUsers($user, $nom, $mail);

}

function delUser()
{
    $user= $_POST["id"];
    deleteUsers($user);
}*/

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