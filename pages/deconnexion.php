<?php

session_start();
if (isset($_SESSION['active']) && $_SESSION['active'] == 1):
    unset($_SESSION['active']);
    unset($_SESSION['pseudo']);
    session_destroy();
    header('Location:connexion.php');

else:
    header('Location:connexion.php');

endif;

?>