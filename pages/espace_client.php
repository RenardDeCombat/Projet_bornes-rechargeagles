<?php

require_once 'fonction.php';
session_start();



if(isset($_POST['user_pass']) && isset($_POST['user_nom']))
{

    $user_nom = $_POST['user_nom'];
    $user_pass = $_POST['user_pass'];

    $query=$bdd->prepare("SELECT id_client, user_client, pass_client
			FROM clients");
			$verif_exec = $query->execute();
			$data = $query->fetch();

    /*debug($data);*/
    if ($data['user_client'] == $user_nom && $data['pass_client'] == $user_pass) {
        echo "Bienvenue $user_nom";
   
    } else {
        echo "<p> Mauvais identifiants. Retour au <a href='connexion.php'>menu de connexion </a><p>";
    }
}

    ?>

