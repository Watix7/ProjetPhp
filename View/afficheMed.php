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
        <img src="logo.png" alt="Logo" style="height: 100px; margin-right: 15px;">
        <h1 class="mx-auto" style="margin: 0;">Bienvenue sur GSB !</h1>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light py-3" style="background-color: rgba(199, 230, 168, 0.9);">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-3">
                    <a class="nav-link btn btn-custom" href="index.php?action=action">Accueil</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link btn btn-custom" href="index.php?action=AM">Médicament</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link btn btn-custom" href="#">Activité</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link btn btn-custom" href="#">Page Juridique</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .btn-custom {
        background-color: #7ed957;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 30px;
        font-size: 1rem;
        font-weight: bold;
        transition: all 0.3s ease-in-out;
    }

    .btn-custom:hover {
        background-color: #4CAF50;
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
</style>

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
                        echo '<p><strong>Effet Thérapeutique :</strong> ' . $medicament["effet_therapeutiques"] . '</p>';
                        echo '<p><strong>Effet Secondaire :</strong> ' . $medicament["effet_secondaires"] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                    echo '</div>';
                ?>
            </div>
        </div>
    </div>
</div>

<footer class="bg-light text-center p-3 mt-5">
    <p>&copy; 2025 GSB. Projet MVC.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
