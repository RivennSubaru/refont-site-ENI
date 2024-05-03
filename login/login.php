<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- En-tete-->
    <header>
        <div id="navigation">
            <p><img src="../frontend/images/Logo ENI.png" alt="logoEni"></p>
            <nav>
                <ul>
                    <li><a href="../index.php">Acceuil</a></li>
                    <li><a href="../a propos.php">A propos</a></li>
                    <!--<li><a href="./mentions.html">Mentions</a></li>-->
                    <li><a href="../enseignant.php">Enseignant</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                    <li class="active"><a class="active" href="">Login</a></li>
                </ul>
            </nav>
            <i id="menu" class="fa-solid fa-bars"></i>
        </div>
        <div class="menu2" ></div>
    </header>
    <form action="../backend/authentification.php" method="post">
        <p><img src="../frontend/images/Logo ENI.png" alt="logoEni"></p>
        <?php
            if (!isset($_GET['messageUser'])) {?>
                <input class="text" type="text" name="username" id="username" placeholder="Entrer email/username"><?php
            } else {?>
                <input class="text" type="text" name="username" id="username" placeholder="Entrer email/username" style="border: 1px solid red;">
                <span class="message" style="color: red"><?php echo $_GET['messageUser']; ?></span><?php
            }

            if (!isset($_GET['messagePassword'])) {?>
                <input class="text" type="password" name="password" id="password" placeholder="Entrer mot de passe"><?php
            } else {?>
                <input class="text" type="password" name="password" id="password" placeholder="Entrer mot de passe" style="border: 1px solid red;">
                <span class="message" style="color: red"><?php echo $_GET['messagePassword']; ?></span><?php
            }
        ?>
        <div class="liens"><a href="./signUp.php">s'inscrire</a><a href="#">mot de passe oublié?</a></div>
        <input type="submit" value="se connecter">
    </form>
</body>
</html>