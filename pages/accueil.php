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
        <?php require_once 'navbar.php'; ?>
        <div class="tour">
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
                    <button onclick="window.location.href = 'presentation_prod.php'" class="call-to-action2 bot" type="button">Nous contacter</button>
                    
                </div>
            </div>
        </div>
        <footer>
            <img class="image_logo_footer" src="../logo_noir.png" alt="exemple de texte alternatif"/>
            <div class="bas">
                <div class="gauche">
                    <h5>Contact</h5>
                    <ul>
                        <li> 02 79 02 73 78</li>
                        <li> jp@gmail.com </li>
                        <li> 22 Place Henri Gadeau de Kerville 76100 Rouen </li>
                    </ul>
                </div>
                <div class="droite">
                    <h5>Nous découvrir</h5>
                    <ul>
                        <li>Accueil</li>
                        <li>Produit</li>
                        <li>Nos Valeurs</li>
                        <li>Contact</li>
                        <li>Connexion</li>
                    </ul>
                </div>
            </div>
            <hr class="trait_centrer2">
        </footer>



    </div>

    
    
    
    
    

</body>
    <script src="../js/script.js"></script>
</html>