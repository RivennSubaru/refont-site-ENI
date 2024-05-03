<?php
    include ('../connexion.php');
?>
<?php
    $user = $_GET['user'];

    // connexion à la base de donnee
    $connexion = connexion("localhost", "gestion_user", "root", "");

    $req = $connexion -> prepare("UPDATE utilisateurs SET is_admin = 1 WHERE code=:user");
    $req -> execute(array('user' => $user));

    header('location: ../../admin/gestion admin/gestionAdmin.php');
?>