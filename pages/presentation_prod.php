<?php

session_start();



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation du produit</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <video autoplay muted loop plays-inline src="../pages/video_recharge_format_paysage-boucle.mp4"></video>
        <?php require_once 'navbar.php'; ?>
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
            <button onclick="window.location.href = 'contact.php'" class="call-to-action3" type="button">Optez pour cette version</button>
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
            <button onclick="window.location.href = 'contact.php'" class="call-to-action3" type="button">Optez pour cette version</button>
        </div>
        







    </div>
</body>
    <script src="../js/script.js"></script>
</html>