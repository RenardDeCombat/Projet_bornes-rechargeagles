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
            <a href="accueil.html" class="logo">
                <img class="image_logo" src="../Logo.png" alt="exemple de texte alternatif"/>
            </a>
            <div class="navbar_links">
                <ul>
                    <li><a href="accueil.html">Accueil</a></li>
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
        <div class="container">
            <form method="post" action="send_message.php">

            <div class="honeypot"><input type="text" name="fakeField"> </div>
                    
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
    </div>  
</body>
    <script src="../js/script.js"></script>
</html>


