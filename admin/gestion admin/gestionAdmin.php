<?php
  session_start();
?>

<?php
  include ("../../backend/connexion.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../frontend/css/style.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="../../frontend/Fonts/css/all.min.css">

    <!-- hover d'apparition du bloc de deconnexion -->
    <style>
        .compteUser:hover .infoUser {
            display: flex !important;
        }
        #navigation div {
            display: flex;
            gap: 17px;
        }

        span.logoCompte {
            padding: 8% 14% !important;
        }

        a{
          text-decoration: none !important;
        }

    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../frontend/bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <!-- En-tete-->
    <header style="position: initial;">
        <div id="navigation">
            <p><img src="../../frontend/images/Logo ENI.png" alt="logoEni"></p>
            <nav>
                <ul>
                    <li><a href="../index/index-admin.php">Acceuil</a></li>
                    <li><a href="../a propos/a propos-admin.php">A propos</a></li>
                    <!-- <li><a href="../mentions.html">Mentions</a></li> -->
                    <li><a href="../enseignant/enseignant-admin.php">Enseignant</a></li>
                    <li><a href="../contact/contact-admin.php">Contact</a></li>
                    <li class="active"><a href="#" class="active">Gestion Admin</a></li>
                </ul>
            </nav>
            <i id="menu" class="fa-solid fa-bars"></i>
            <?php include ("../../lienLogAdmin.php");?>
        </div>
        <div class="menu2"></div>
    </header>

    <?php
      include ('../../backend/getAllUser.php');
    ?>
    
    <?php
      include ("../../frontend/displayUserList.php");
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../frontend/bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../../frontend/bootstrap/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../../frontend/bootstrap/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>