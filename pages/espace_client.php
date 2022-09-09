<?php

require_once 'fonction.php';
session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace client</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
<div class="background">
            <video autoplay muted loop plays-inline src="../pages/video_recharge_format_paysage-boucle.mp4"></video>

            

            <?php



if(isset($_POST['user_pass']) && isset($_POST['user_nom'])) :


    $user_nom = $_POST['user_nom'];
    $user_pass = $_POST['user_pass'];
    

    $query=$bdd->prepare("SELECT * FROM clients");
    $query2=$bdd->prepare("SELECT * FROM facture");
			$verif_exec = $query->execute();
			$data = $query->fetch();
        /**     $verif_exec2 = $query2->execute(); **/
			$data = $query->fetch();
        /**    $data2 = $query2->fetch();  ***/

    /*debug($data);*/
    if ($data['user_client'] == $user_nom && $data['pass_client'] == $user_pass) :
        $_SESSION["active"] = 1;
        $_SESSION["pseudo"] = $user_nom;  
        require_once 'navbar.php';
    ?>
        <div class="infos"> 
            <p class='msg_connecte'>Bienvenue sur votre espace client <?php echo $_SESSION['pseudo']; ?>. </p>
            <div class="listeInfoUser">
            <ul >
            <h2>Informations personnelles</h2>
                <li>Votre nom d'utilisateur :  <?php echo $data['user_client'] ?></li>
                <li>Votre Email : <?php  echo $data['mail_client'] ?></li>
            
            <h2>Historique de vos factures</h2>

            <table class="tab_client">
                <thead>
                    <tr>

                        <th>Nom de facture</th>
                        <th>Télécharger</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>            
                        <th> Facture 1  </th>
                        <th><a href="../factures/invoice.pdf" download="Facture_1"> <img src="../téléchargement.png"></a></th>
                    </tr>
                    <tr>            
                        <th> Facture 2 </th>
                        <th><a href="../factures/invoice.pdf" download="Facture_1"> <img src="../téléchargement.png"></a></th>
                    </tr>
                    <tr>            
                        <th> Facture 2 </th>
                        <th><a href="../factures/invoice.pdf" download="Facture_1"> <img src="../téléchargement.png"></a></th>
                    </tr>
                        </tbody>
            </table>
                    </ul>
   
                
    </div>
    </div>

   <?php
    else: ?>
        <p class='msg_err'> Mauvais identifiants. Retour au <a href='connexion.php'>menu de connexion </a><p>
    <?php
    endif;
endif;


    ?>
    </div>
</body>
    <script src="../js/script.js"></script>
</html>



