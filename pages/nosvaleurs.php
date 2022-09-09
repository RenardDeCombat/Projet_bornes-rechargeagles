<?php

session_start();



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos valeurs</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <video autoplay muted loop plays-inline src="../pages/video_recharge_format_paysage-boucle.mp4"></video>
        <?php require_once 'navbar.php'; ?>
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