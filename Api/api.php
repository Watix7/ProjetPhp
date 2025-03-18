<?php
include ("db_connect.php");
$_request_method = $_SERVER["REQUEST_METHOD"];
switch($_request_method)
{
    case 'GET' : 
        if(!empty($_GET["id"]))
        {
            $id = intval($_GET["id"]);
            getMedic($id);
        }
        else
        {
            getMedics();
        }
        break;

    // case 'POST':
    //     AddUsers();
    //     break;

    // case 'PUT':
    //     $id = intval($_GET["id"]);
    //     updateUsers($id);
    //     break;

    // case 'DELETE':
    //     $id = intval($_GET["id"]);
    //     deleteUsers($id);
    //     break;
default :
header("HTTP/1.0 405 Methid Not Allowed");
break;

}

function getMedics()
{
    global $conn;
    $query = "SELECT * FROM medicaments";
    $response =array();

    $conn->query("SET NAMES utf8");
    $result= $conn ->query($query);
    while ($row = $result->fetch())
    {
        $response[] = $row;
    }
$result->closeCursor();
header('Content-Type: application/json');
echo json_encode($response, JSON_PRETTY_PRINT);

}
function getMedic($id=0)
{
    global $conn;
    $query = "SELECT * FROM medicaments";
    if ($id !=0)
    {
        $query= "WHERE id=".$id." LIMIT 1";
    }
$conn->query("SET NAMES UTF8").
$result = $conn->query($query);
while ($row = $result->fetch())
{
    $response[]= $row;

}
header('Content-Type: application/json');
echo json_encode($response, JSON_PRETTY_PRINT);

}

// function AddUsers()
// {
//     global $conn;
//     $nom = $_POST["nom"];
//     $mail = $_POST["mail"];
//     echo $query= "INSERT INTO users(nom , mail) VALUES('".$nom."','".$mail."')";
//     $conn ->query ("SET NAMES UTF8");
//     if($conn->query($query))
//     {
//         $response=array(
//             'status'=> 1,
//             'status_message' =>'etudiant mis a jour avec succès.');

//     }
//     else
//     {
//         $response=array(
//             'status' => 0,
//             'status_message' => 'Echec de mise a jour');
        
//     }
//     header('Content-Type: application/json');
//     echo json_encode($response);


// }

// function deleteUsers($id)
// {
// global $conn;
// $query = " DELETE  FROM users WHERE id=".$id;
// $conn ->query("SET NAMES UTF8");
// if ($conn->query($query))
// {
//     $response=array(
//         'status'=> 1,
//         'status_message' => 'etudiant supprimé avec succès'
//     );

// }
// else
// {
//     $response=array(
//         'status' => 0,
//         'status_message' => ' La suppression du user a echoué'. mysqli_error($conn)

//     );

// }
// header('Content_Type: application/json');
// echo json_encode($response);

// }

// function updateUsers($id)
// {
//     global $conn;

//     $_PUT = array();
//     parse_str(file_get_contents("php://input"), $_PUT);
    
//     $nom = $_PUT["nom"];
//     $mail = $_PUT["mail"];

//     $query = "UPDATE users SET nom='".$nom."', mail='".$mail."' WHERE id=".$id;
//     $conn->query("SET NAMES utf8");

//     if ($conn->query($query)) {
//         $response = array(
//             'status' => 1,
//             'status_message' => 'Jeu mis à jour avec succès'
//         );
//     } else {
//         $response = array(
//             'status' => 0,
//             'status_message' => 'Échec de la mise à jour du jeu. '
//         );
//     }
//     header('Content-Type: application/json');
//     echo json_encode($response);
// }