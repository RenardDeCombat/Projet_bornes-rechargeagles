<nav class="navbar">
    <a href="accueil.php" class="logo">
        <img class="image_logo" src="../Logo_blanc_2" alt="exemple de texte alternatif"/>
    </a>
    <div class="navbar_links">
        <ul>
            <li><a href="accueil.php">Accueil</a></li>
            <li><a href="presentation_prod.php">Produit</a></li>
            <li><a href="nosvaleurs.php">Nos Valeurs</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php if (isset($_SESSION['active']) && $_SESSION['active'] == 1):?>
                <li><a href="espace_client.php">Votre espace</a></li>
                <li><a href="deconnexion.php">Deconnexion</a></li>
            <?php else :?>
                <li><a href="connexion.php">Connexion</a></li>
            <?php endif; ?>

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