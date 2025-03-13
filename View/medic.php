<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des TEST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">GSB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Médicament</a>
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
$string_decode=json_decode($user, true);


for ($i= 0; $i < count($string_decode); $i++) {
    echo '<form action="index.php" method="post">';

    echo '<input type="hidden" id="id" name="id"
value="'.$string_decode[$i]["id"].'">';

    echo '<label for="nom">nom :</label> <input type="text" id="nom" name="nom" 
value="'.$string_decode[$i]["nom"].'">';

    echo '<label for="type">type :</label> <input type="text" id="type" name="type" 
value="'.$string_decode[$i]["type"].'">';

    echo"</form>";


}
echo '</br></br></br>';


?>
