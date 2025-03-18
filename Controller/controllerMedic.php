<?php
function addAcct()
{
    $nom = $_POST["nom"];
    $mail = $_POST["mail"];
    $prenom= $_POST["prenom"];
    insertUser($nom,$prenom,$mail);
    
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