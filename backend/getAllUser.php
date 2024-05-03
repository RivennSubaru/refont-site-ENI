<?php
    // connexion à la base de donnee
    $connexion = connexion("localhost", "gestion_user", "root", "");

    $req = $connexion -> query("SELECT code, username, is_admin FROM utilisateurs");
?>