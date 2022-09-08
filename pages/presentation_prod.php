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
                    <li><a href="nosvaleurs.html">Nos Valeurs</a></li>
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
        <div class="contenant">
            <div class="p1">
                <h1>DÉCOUVREZ NOTRE APP !</h1>
                <h2>Une application adapté à vos besoins !</h2>
                <p>
                    Pour accompagner les mutations de la distribution 
                    d’énergie et répondre aux exigences de nos clients 
                    nous mettons à votre disposition notre logiciel de 
                    supervision borne de recharge qui serait le gestionnaire 
                    de charge pour les voitures électriques.
                </p>
                <button onclick="window.location.href = '#p3'" class="call-to-action" type="button">Découvrir les abonnements </button>
            </div>
            <div class="p1_mockup">
                <img src="../mockup_blanc.png">
            </div>
            <div class="p2">
                <h3>01.</h3>
                <hr class="trait">
                <h3>Équipe à l’écoute</h3>
                <p>
                    Nous sommes à l’écoute en permanence et nous orientons 
                    nos clients vers leurs offres bien au-delà des équipements 
                    électriques.
                </p>
                <h3>02.</h3>
                <hr class="trait">
                <h3>Optimisation des perfomances</h3>
                <p>
                    Nous aidons nos clients à améliorer leur efficacité et 
                    à optimiser leurs performances.
                </p>
                <h3>03.</h3>
                <hr class="trait">
                <h3>Proximité </h3>
                <p>
                    Nous avons des experts proches de vous, partout pour vous 
                    assister et vous aider dans le long du cycle de vie de vos 
                    solutions et produits.
                </p>
            </div>
            <div class="p3" id="p3">
                <hr class="trait_centrer">
                <h2>NOS FORMULES</h2>
                <p class="para">
                    L’application possède deux versions.
                </p>
                <p>
                    Une dispose d’un portefeuille d’activités 
                    basique pour répondre à vos besoins de solutions traditionnelles.
                </p>
                <p>
                    L’autre dispose d’un portefeuille d’activités diversifiées 
                    et complémentaires pour répondre à vos besoins de solutions 
                    traditionnelles, spécifiques, globales et clé en main.
                </p>
            </div>
            <div class="p4">
                <h3>2€ / mois</h3>
                <h3>Version basique</h3>
                <div class="classes">
                    <div class="checkbox">
                        <img src="../check.png">
                        <p>Historique des transactions</p>
                    </div>
                    <div class="checkbox">
                        <img src="../check.png">
                        <p>Gestion des utilisateurs</p>
                    </div>
                    <div class="checkbox">
                        <img src="../check.png">
                        <p>Administration d’activité</p>
                    </div>
                </div>
            </div>
            <div class="p4">
                <h3>6€ / mois</h3>
                <h3>Version platinium</h3>
                <div class="classes">
                    <div class="checkbox">
                        <img src="../check.png">
                        <p>Synchronisation avec le compte bancaire</p>
                    </div>
                    <div class="checkbox">
                        <img src="../check.png">
                        <p>Détecteur véhicule de vitesse</p>
                    </div>
                    <div class="checkbox">
                        <img src="../check.png">
                        <p>Système de ticketing</p>
                    </div>
                    <div class="checkbox">
                        <img src="../check.png">
                        <p>Redémarrage de la borne</p>
                    </div>
                </div>

            </div>
        </div>
        







    </div>
</body>
    <script src="../js/script.js"></script>
</html>