<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logout'])) {
        // efface tous les variables de session
        session_unset();
        //detruit la session
        session_destroy();

        //redirection vers la page de connexion
        header("Location: ../login/login.php");
        exit(); //arret d'execution du script
    }

?>