<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <video autoplay muted loop plays-inline src="../pages/video_recharge_format_paysage-boucle.mp4"></video>
        <nav class="navbar">
            <a href="accueil.php" class="logo">
                <img class="image_logo" src="../Logo.png" alt="exemple de texte alternatif"/>
            </a>
            <div class="navbar_links">
                <ul>
                    <li><a href="accueil.php">Accueil</a></li>
                    <li><a href="presentation_prod.php">Produit</a></li>
                    <li><a href="nosvaleurs.php">Nos Valeurs</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                </ul>
            </div>
            <button class="menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
                <svg width="50" height="50" viewBox="0 0 100 100">
                    <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
            </button>
        </nav>
        <div class="contenant2">
            <div class="para1">
                <h1>PARLONS DE NOUS ...</h1>
                <p>
                    Nous sommes une société qui vend un logiciel de qualité, ainsi nous 
                    vous accompagnons tout au long du cycle de vie de vos solutions et produits. 
                    Station Supervisor veille à ce que la mobilité électrique soit accessible à 
                    tous. Nous avons un positionnement de spécialiste dans le domaine, nous 
                    sommes présents sur l’international et des valeurs humaines fortes. 

                </p>
            </div>
            <div class="para2">
                <div class="case">
                    <h3>30</h3>
                    <p>Clients</p>
                </div>
                <div class="case">
                    <h3>7</h3>
                    <p>Salariés</p>
                </div>
                <div class="case">
                    <h3>4 ans</h3>
                    <p>D'ancienneté</p>
                </div>
                <div class="case">
                    <h3>+10</h3>
                    <p>Bornes électriques</p>
                </div>
            </div>
            <div class="para3">
                <h2>L'ÉQUIPE</h2>
                <div class="bloc1">
                    <div class="bloc2">
                        <img src="../portrait_homme_blanc_montrant_a_gauche.png">
                    </div>
                    <div class="bloc3">
                        <h4>John DOE</h4>
                        <p>Président de Station Supervisor</p>
                    </div>
                </div>
                <div class="bloc1">
                    <div class="bloc2">
                        <img src="../portrait_homme_veste_marron.png">
                    </div>
                    <div class="bloc3">
                        <h4>Robin Linville</h4>
                        <p>Vice président de l’application </p>
                    </div>
                </div>
                <div class="bloc1">
                    <div class="bloc2">
                        <img src="../portrait_femme.png">
                    </div>
                    <div class="bloc3">
                        <h4>Stacy Cruz</h4>
                        <p>Responsable commerciale</p>
                    </div>
                </div>
            </div>
            <div class="para4">
                <h2>SUPERVISOR S'ENGAGE</h2>
                <img src="../CO2.png">
                <h3>Réduire les emissions de CO2</h3>
                <p>
                    Nous réduisons les émissions de carbone en favorisant 
                    l’usage de véhicules électriques.
                </p>
            </div>

        </div>

    </div>

</body>
<script src="../js/script.js"></script>
</html>