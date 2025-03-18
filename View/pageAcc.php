<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des TEST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="jumbotron" style="background-color: rgba(199, 230, 168, 0.9); color: black; height: 150px;">
    <div class="d-flex align-items-center justify-content-between">
        <!-- Logo -->
        <img src="logo2.png" alt="Logo" style="height: 100px; margin-right: 15px;">
        <!-- Titre -->
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
                    <a class="nav-link btn btn-custom" href="#">Accueil</a>
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
    .navbar-light .navbar-nav .nav-link {
        color: #333;
        font-weight: bold;
        font-size: 1rem;
    }

    .navbar-light .navbar-nav .nav-link:hover {
        background-color: #7ed957;
        color: white;
        border-radius: 30px;
    }

    .navbar-light .navbar-toggler-icon {
        background-color: #7ed957; 
    }

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

    .btn-custom:active {
        transform: translateY(0);
        box-shadow: none;
    }
</style>



    <div class="container mt-5" style="padding: 1rem;">
    <div class="row">
        <div class="col-12">
            <div class="card" style="background-color: #f8f9fa; padding: 2rem;">
                <h2 class="text-center mb-4">Présentation de l'entreprise pharmaceutique GSB</h2>
                <p>GSB (Grande Société de Biopharmacie) est un leader mondial dans l'industrie pharmaceutique, spécialisée dans la recherche, le développement, la fabrication et la commercialisation de médicaments innovants. Depuis sa création, GSB s'engage à améliorer la qualité de vie des patients en offrant des solutions thérapeutiques adaptées aux besoins de chaque individu. Grâce à une équipe de chercheurs passionnés et des investissements continus dans l'innovation, GSB a développé une gamme étendue de produits dans divers domaines, incluant les maladies cardiovasculaires, le diabète, l'oncologie, et bien d'autres.</p>

                <p>Le siège de GSB est situé au cœur de l'industrie pharmaceutique, avec des sites de production dans plusieurs pays et une présence internationale importante. L'entreprise œuvre quotidiennement pour faire progresser la santé publique en veillant à offrir des médicaments de qualité tout en respectant les plus hauts standards de sécurité et d'efficacité.</p>

                <p>GSB s'engage également à répondre aux défis actuels du secteur pharmaceutique en adoptant des pratiques durables et en soutenant des initiatives de santé publique à l'échelle mondiale. Grâce à son approche centrée sur le patient et son éthique de travail, GSB est devenue une référence dans le domaine de la biopharmacie.</p>
            </div>
        </div>
    </div>
</div>


<div id="carouselCards" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Premier élément du carrousel (Active) -->
        <div class="carousel-item active">
            <div class="container d-flex justify-content-center">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="card text-center" style="width: 18rem;">
                            <div class="card-body">
                                <h3>💊 Médicament</h3>
                                <p class="card-text">Découvrez les informations sur les médicaments et leur utilisation.</p>
                                <a href="#" class="btn btn-primary">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deuxième élément du carrousel -->
        <div class="carousel-item">
            <div class="container d-flex justify-content-center">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="card text-center" style="width: 18rem;">
                            <div class="card-body">
                                <h3>🏃 Activités</h3>
                                <p class="card-text">Découvrez les différentes activités à faire dans votre région.</p>
                                <a href="#" class="btn btn-primary">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Troisième élément du carrousel -->
        <div class="carousel-item">
            <div class="container d-flex justify-content-center">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="card text-center" style="width: 18rem;">
                            <div class="card-body">
                                <h3>⚖️ Juridique</h3>
                                <p class="card-text">Accédez à des informations légales pour vous protéger.</p>
                                <a href="#" class="btn btn-primary">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contrôles du carrousel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCards" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselCards" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



    <!-- Footer -->
    <footer class="bg-light text-center p-3 mt-5">
        <p>&copy; 2025 GSB. Projet MVC.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
