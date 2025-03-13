<?php
function insertUser($nom ,$prenom, $mail)
{
    $url = 'http://127.0.0.1/ProjetPhp/Api/api.php';
    $data = array('nom' => $nom, 'prenom' => $prenom ,'mail' => $mail);

    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)

        )
        );
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        return $result;

}
/*function updateUsers($id, $nom , $mail)
{
    $url = 'http://127.0.0.1/ProjetPhp/Api/api.php?id='.$id;
    $data = array( 'nom'=> $nom , 'mail' => $mail);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true );
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
    $response= curl_exec($ch);
    if (!$response)
    {
        return false;
    }

    
}

function deleteUsers($id)
{
    $url = "http://127.0.0.1/ProjetPhp/Api/api.php?id=".$id;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($ch);

    curl_close($ch);

    return ;a
}*/

function selectUsers()
{
    $url = "http://127.0.0.1/ProjetPhp/Api/api.php";
    $options= array(
        'http'=> array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'GET'));

$context = stream_context_create($options);
$user = file_get_contents($url, false, $context);
return $user;

}
