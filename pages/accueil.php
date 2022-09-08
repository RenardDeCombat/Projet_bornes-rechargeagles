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
        <div class="title">
            <h1>STATION SUPERVISOR</h1>
        </div>
        <div class="accroche">
            <p>
                Le meilleur logiciel pour gérer vos bornes de rechargement
            </p>
        </div>
        <button onclick="window.location.href = 'presentation_prod.php'" class="call-to-action" type="button">Voir plus de détails </button>
        <div class="container">
            <div class="paraph1">
                <h2>01. Produit</h2>
                <img src="../image_telephone.jpg">
                <p>
                    Station Supervisor met à votre disposition son logiciel de supervision de 
                    bornes de recharge qui serait le gestionnaire de charge pour les véhicules 
                    électriques.
                </p>
                <button onclick="window.location.href = 'presentation_prod.php'" class="call-to-action2" type="button">Découvrir l'app </button>
                <p class="ou">OU</p>
                <button onclick="window.location.href = 'contact.php'" class="call-to-action2" type="button">Se Renseigner </button>
                
            </div>
            <div class="paraph1">
                <h2>02. Nos valeurs</h2>
                <p>
                    Nous existons depuis 4 ans sur le marché, nous travaillons en équipe 
                    de sept salariés. Dans le but de vous offrir un service complet nous mettons 
                    à disposition, un logiciel de supervision pour les bornes de recharge.
                </p>
                <img src="../image_recharge.jpg">
                <button onclick="window.location.href = 'nosvaleurs_prod.php'" class="call-to-action2" type="button">En savoir davantage</button>
                
            </div>
            <div class="paraph1">
                <h2>03. Contact</h2>
                <p>
                    Vous avez des questions ?
                </p>
                <p>
                    Notre équipe d'experts est prête à répondre à vos questions, à 
                    vous donner plus d'informations et à vous aider.
                </p>
                <button onclick="window.location.href = 'presentation_prod.php'" class="call-to-action2" type="button">Nous contacter</button>
                
            </div>
        </div>




    </div>

    
    
    
    
    

</body>
    <script src="../js/script.js"></script>
</html>