<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../login/style.css">
    <link rel="stylesheet" href="../frontend/css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div id="navigation">
            <p><img src="../frontend/images/Logo ENI.png" alt="logoEni"></p>
            <nav>
                <ul>
                    <li><a href="../admin/index/index_userView.php">Acceuil</a></li>
                    <li><a href="../admin/a propos/a propos_userView.php">A propos</a></li>
                    <!--<li><a href="./mentions.html">Mentions</a></li>-->
                    <li><a href="../admin/enseignant/enseignant_userView.php">Enseignant</a></li>
                    <li><a href="../admin/contact/contact_userView.php">Contact</a></li>
                    <li class="active"><a class="active" href="#">Gestion Admin</a></li>
                </ul>
            </nav>
            <i id="menu" class="fa-solid fa-bars"></i>
        </div>
        <div class="menu2"></div>
    </header>

    <?php
        if (!isset($_POST['pass'])) {?>
            <form action="autorisation.php" method="post">
                <p><img src="../frontend/images/Logo ENI.png" alt="logoEni"></p>
                <h3>Vous devez entrer le mot de passe pour pouvoir acceder à cette page</h3>
                <input class="text" type="password" name="pass" id="password" placeholder="Entrer mot de passe">
                <input type="submit" value="confirmer">
            </form><?php
        } else if ($_POST['pass'] == 'stevenadmin') {
                header("location: ../admin/gestion admin/gestionAdmin.php");
            } else {?>
            <form action="autorisation.php" method="post">
                <p><img src="../frontend/images/Logo ENI.png" alt="logoEni"></p>
                <h3>Vous devez entrer le mot de pass pour pouvoir acceder à cette page</h3>
                <input class="text" type="password" name="pass" id="password" placeholder="Entrer mot de passe" style="border: 1px solid red;">
                <span class="message" style="color: red">mot de passe incorrect</span>
                <input type="submit" value="confirmer">
            </form><?php
            }
    ?>
</body>
</html>