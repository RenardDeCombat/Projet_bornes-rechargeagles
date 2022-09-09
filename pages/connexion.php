<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <video autoplay muted loop plays-inline src="../pages/video_recharge_format_paysage-boucle.mp4"></video>
        <?php require_once 'navbar.php'; ?>
    </div>


    <div class="body_form">

        <form class="box" action="espace_client.php" method="post">

    <!--    Titre    -->
        <h1>Bienvenue sur Station Supervisor</h1>
    <!--     Sous-titre    -->
        <h2>Logiciel de supervision de borne électrique<h2>
    <!--    Champs caché nom de formulaire  -->
        <input type="hidden" name="form" value="connexion">
    <!--    Champs user/mdp   -->
        <input type="text" name="user_nom" placeholder="Votre Nom d'utilisateur">

        <input type="password" name="user_pass" placeholder="Votre Mot De Passe">
    <!--   Bouton de connexion     -->
            <input type="submit" name="connect" value="Connexion">
        
        </form>
    </div>



</body>
    <script src="../js/script.js"></script>
</html>