<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des Médicaments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="jumbotron" style="background-color: rgba(199, 230, 168, 0.9); color: black; height: 150px;">
    <div class="d-flex align-items-center justify-content-between">
        <img src="View/logo.png" alt="logo" style="height: 100px; margin-right: 15px;">
        <h1 class="mx-auto" style="margin: 0;">Bienvenue sur GSB !</h1>
    </div>
</div>
<?php
include('menu.php');
?>


<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card p-4" style="background-color: #f8f9fa;">
                <h2 class="text-center mb-4">Liste des Médicaments</h2>
                <?php
                    $string_decode = json_decode($medic, true);
                    echo '<div class="row">';
                    foreach ($string_decode as $medicament) {
                        echo '<div class="col-md-4">';
                        echo '<div class="card mb-4 shadow-sm p-3">';
                        echo '<h5 class="card-title">' . $medicament["nom"] . '</h5>';
                        echo '<p><strong>Effet Thérapeutique :</strong> ' . $medicament["effet_t"] . '</p>';
                        echo '<p><strong>Effet Secondaire :</strong> ' . $medicament["effet_s"] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                    echo '</div>';
                ?>
                <?php
                    echo'<div class="flex-container">';
                    $string_decode = json_decode($medic, true);
                    echo '<select name="activity" id="activity" class="form-control">';
                    echo '<option value="" disabled selected>Choisir un Medicament</option>'; // Option par défaut

                    foreach ($string_decode as $medicament) {
                        // On affiche l'ID de l'activité comme texte visible à côté du nom
                        echo '<option value="' . $medicament["idA"] . '">' . $medicament["idA"] . ' - ' . $medicament["nom"] . '</option>';
                    }

                    echo '</select>';
                    $string_decode = json_decode($medic, true);
                    echo '<select name="activity" id="activity" class="form-control">';
                    echo '<option value="" disabled selected>Choisir un Medicament</option>'; // Option par défaut

                    foreach ($string_decode as $medicament) {
                        // On affiche l'ID de l'activité comme texte visible à côté du nom
                        echo '<option value="' . $medicament["idA"] . '">' . $medicament["idA"] . ' - ' . $medicament["nom"] . '</option>';
                    }
                    echo'</div>';
                    echo '</select>';
                    ?>
                <button type="submit" class="btn w-100 text-white" style="background: linear-gradient(to right,rgb(78, 252, 43),rgb(5, 173, 240)); border: none;">
                    Voir les effets
                </button>
                <style>
                .flex-container {
                display: flex;
                gap: 10px; /* Espacement entre les éléments */
               }
               </style>

            </div>
            
        </div>
    </div>
</div>

<footer class="bg-light text-center p-3 mt-5">
    <p>&copy; 2025 GSB. Projet Php.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
