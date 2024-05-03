<?php
    include ("connexion.php");
?>
<?php
    $username = htmlspecialchars($_POST["username"]);
    $pass = htmlspecialchars($_POST["password"]);
    $pass_hashe = password_hash($pass, PASSWORD_DEFAULT);

    $connexion = connexion("localhost", "gestion_user", "root", "");
    $req = $connexion -> prepare("SELECT * FROM utilisateurs WHERE username= ?");
    $req -> execute(array($username));


    // Compter le nombre de ligne ie: verifier si l'user existe ou qu'il est nombreux
    $ligne = $req->rowCount();

    if ($ligne == 0) {
        $req = $connexion -> prepare("INSERT INTO utilisateurs(username, motDePasse) VALUES (:username, :motDePasse)");
        $req -> execute(array(
            'username' => $username,
            'motDePasse' => $pass_hashe
        ));
        header('location: ../login/login.php');
    } else{

        header('location: ../login/signUp.php?messageUserName=le nom d\'utilisateur existe déja');
    }

    
?>