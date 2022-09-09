<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background">
        <video autoplay muted loop plays-inline src="../pages/video_recharge_format_paysage-boucle.mp4"></video>
        <?php require_once 'navbar.php'; ?>
        <div class="body_form2">
            <h1>Contactez-nous</h1>
            <form class="box2" method="post" action="send_message.php">

            <div class="honeypot"><input type="text" name="fakeField"> </div>
                    
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" placeholder="Ex : Thibaut">
            
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Ex : Bourlier">
            
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Ex : bourlier.thibaut@gmail.com">
            
                <label for="sujet">Nom de votre entreprise</label>
                <input type="text" id="nom_entreprise" name="nom_entreprise" placeholder="Ex : TiboCorp">
            
                <label for="com">Message</label>
                <textarea id="com" name="com" placeholder="Ex : Bonjour" style="height:200px"></textarea>
            
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </div>  
</body>
    <script src="../js/script.js"></script>
</html>


