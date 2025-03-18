<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des medicaments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">GSB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=action">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index?action=AM">Médicament</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Activité</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Page Juridique</a>
                </li>
            </ul>
        </div>
    </nav> 


<?php
    $string_decode=json_decode($medic, true);
    

    for ($i = 0; $i < count($string_decode); $i++) {
        echo '<div>';
    
        echo '<p><strong>Nom :</strong> ' . $string_decode[$i]["nom"] . '</p>';
        echo '<p><strong>Effet T :</strong> ' . $string_decode[$i]["effet_therapeutiques"] . '</p>';
        echo '<p><strong>Effet S :</strong> ' . $string_decode[$i]["effet_secondaires"] . '</p>';
    
        echo '</div>';
    }
    echo '</br></br></br>';
    
?>
