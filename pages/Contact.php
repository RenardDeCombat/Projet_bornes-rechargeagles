<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form method="post" action="contact.php">
                
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Prénom">
            <div class = "rouge cache" id="fname">
                <strong> Veuillez rentrer votre prenom </strong>
            </div>
        
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="Nom">
            <div class = "rouge cache" id="lname">
                <strong> Veuillez rentrer votre nom </strong>
            </div>
        
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Adresse mail">
            <div class = "rouge cache" id="mail">
                <strong> Veuillez rentrer votre adresse email </strong>
            </div>
        
            <label for="sujet">Nom de votre entreprise</label>
            <input type="text" id="nom_entreprise" name="nom_entreprise" placeholder="Nom de l'entreprise">
            <div class = "rouge cache" id="nomcorp">
                <strong> Veuillez selectionner votre nom d'entreprise </strong>
            </div>
        
            <label for="com">Message</label>
            <textarea id="com" name="com" placeholder="Écrivez votre message ..." style="height:200px"></textarea>
            <div class = "rouge cache" id="mess">
                <strong> Veuillez rentrer un message </strong>
            </div>
        
            <input type="submit" value="envoyer">
        </form>
    </div>
</body>
</html>


