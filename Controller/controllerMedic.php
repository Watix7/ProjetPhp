<?php
function addUser()
{
    $medic= $_POST["id"];
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
    $medic = selectUsers();
    include("view/pageAcc.php");

}

function getAllMedic()
{
    $medic = selectUsers();
    include("view/affichemed.php");
}
?>