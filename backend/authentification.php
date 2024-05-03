<?php
    session_start();
?>
<?php
    include ("connexion.php");
?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // Securiser les données
        $username = htmlspecialchars($_POST["username"]);
        $pass = htmlspecialchars($_POST["password"]);

        // connexion à la base de donnee
        $connexion = connexion("localhost", "gestion_user", "root", "");

        // La requete pour recupérer l'user correspondant
        $req = $connexion -> prepare("SELECT * FROM utilisateurs WHERE username= ?");
        $req -> execute(array($username));

        // Compter le nombre de ligne ie: verifier si l'user existe ou qu'il est nombreux
        $ligne = $req->rowCount();

        if ($ligne == 1) {
            $user = $req -> fetch();
            if (password_verify($pass, $user['motDePasse'])) {
                // Enregistrement des informations de l'utilisateur
                $_SESSION['ID_user'] = $user['code'];
                $_SESSION['nom_user'] = $user['username'];
                $_SESSION['is_admin'] = $user['is_admin'];

                if ($user['is_admin']) {

                    // Si l'user est admin
                    header("location: ../admin/index/index-admin.php");
                    exit();
                }
                else {

                    // Si l'user n'est pas admin
                    header("location: ../index.php");
                    exit();
                }
            }
            else {
                // Si le mot de passe entrer et inscrit ne corresponde pas
                header('location: ../login/login.php?messagePassword=mot de passe incorrect');
            }
        }
        else {
            // Si l'on trouve aucun ou plusieurs user
            header('location: ../login/login.php?messageUser=nom d\'utilisateur introuvable');
        }
    }
?>