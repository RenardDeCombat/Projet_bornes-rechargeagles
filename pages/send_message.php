<?php

require_once 'fonction.php';

if($_SERVER ['REQUEST_METHOD']=='POST') :
    if(isset($_POST['fakeField']) && $_POST['fakeField'] != '') : ?>
        <p> Erreur, message non envoyé </p>;
    <?php else:
    
        $nom = $_POST['prenom'];
        $prenom = $_POST['nom'];
        $entreprise = $_POST['nom_entreprise'];
        $mail = $_POST['email'];
        $com = $_POST['com'];
        
        $data = [ 
            'envoi_nom' => $nom, 
            'envoi_prenom' => $prenom,
            'envoi_entreprise' => $entreprise,
            'envoi_mail' => $mail,
            'envoi_texte' => $com
        ];

        $query = $bdd->prepare("INSERT INTO contact (prenom_contact, nom_contact, mail_contact, entreprise_contact, message_contact ) VALUES (:envoi_prenom, :envoi_nom, :envoi_mail, :envoi_entreprise, :envoi_texte)");
        $query->execute($data); ?>
        <p>Votre message a bien été envoyé. Retour à <a href="accueil.php">l'accueil.</a> </p>


<?php 
endif;
endif;

?>

    