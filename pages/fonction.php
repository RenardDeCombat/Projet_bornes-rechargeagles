<?php
/*---------------CONNEXION A LA BDD----------------*/
try {
		$bdd =new PDO("mysql:host=localhost;dbname=station_supervision", "root", "");
	}
	catch(PDOException $e){
		die('Erreur : SITE INDISPONIBLE ! ! ! ! ' . $e->getMessage());
	}
/*----------------FIN CONNEXION A LA BDD----------------*/


/*FONCTION VARDUMP*/
function debug($data) {
	echo '<pre>';
	var_dump($data);
	echo'</pre>';
	die(); 
}

?>