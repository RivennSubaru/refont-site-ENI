<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enseignants</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../frontend/css/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../../frontend/css/style.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="../../frontend/Fonts/css/all.min.css">

    <!-- Jquery -->
    <script src="../../frontend/script/jquery-3.7.1.min.js"></script>

    <!-- hover d'apparition du bloc de deconnexion -->
    <style>
        .compteUser:hover .infoUser {
            display: flex !important;
        }
        #navigation div {
            display: flex;
            gap: 17px;
        }
    </style>
</head>
<body>
    <!-- En-tete-->
    <header>
        <div id="navigation">
            <p><img src="../../frontend/images/Logo ENI.png" alt="logoEni"></p>
            <nav>
                <ul>
                    <li><a href="../index/index-admin.php">Acceuil</a></li>
                    <li><a href="../a propos/a propos-admin.php">A propos</a></li>
                    <!--<li><a href="../../mentions.html">Mentions</a></li>-->
                    <li class="active"><a class="active" href="">Enseignant</a></li>
                    <li><a href="../contact/contact-admin.php">Contact</a></li>
                    <li><a href="../gestion admin/gestionAdmin.php">Gestion Admin</a></li>
                </ul>
            </nav>
            <i id="menu" class="fa-solid fa-bars"></i>
            <div class="mode">
                <a href="./enseignant_userView.php" class="admin-user admin"><i class="fa-solid fa-unlock"></i> Admin mode</a>
                <i class="fa-solid fa-user-tie"></i>
                <?php
                    include ("../../lienLogAdmin.php");
                ?>
            </div>
        </div>
        <div class="menu2"></div>
    </header>

     <!-- Corps -->
    <section id="Acceuil-other" class="Acceuil-blur propos">
        <p id="lignAnim"></p>
        <h2>Enseignants /</h2>
    </section>
    
    <!-- ENSEIGNANTS -->
    <section id="enseignant" class="page-enseignant">
        <h1>Nos Enseignants Permanent</h1>
        <p>Nous disposant de meilleurs enseignants ayant de très bonne expérience</p>
        <div class="bloc-enseignant">
            <div class="profile">
                <img src="../../frontend/images/Les enseignants/Ando.jpg" alt="photoAndo">
                <h6>Professeur Ando</h6>
                <p>Python & Algorithme Avancé</p>
                <div class="pro-liens">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
            <div class="profile">
                <img src="../../frontend/images/Les enseignants/Giovanni.jpg" alt="photoGio">
                <h6>Docteur Giovanni</h6>
                <p>Java & Data Analyste</p>
                <div class="pro-liens">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
            <div class="profile">
                <img src="../../frontend/images/Les enseignants/Jesse.jpg" alt="photoJesse">
                <h6>Docteur Jesse</h6>
                <p>Developpeur Backend</p>
                <div class="pro-liens">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
            <div class="profile">
                <img src="../../frontend/images/Les enseignants/Romeo.jpg" alt="photoRomeo">
                <h6>Professeur Roméo</h6>
                <p>Développeur full stack</p>
                <div class="pro-liens">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
            <div class="profile">
                <div class="bouton">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="content">
                    <img src="../../frontend/images/Les enseignants/Roberto.jpg" alt="photoAndo">
                    <h6>Docteur Roberto</h6>
                    <p>Expert Intelligence Artificiel</p>
                    <div class="pro-liens">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
            </div>
            <div id="ajout" class="ajouter-enseignant profile">
                <i class="fa-solid fa-plus"></i>
            </div>
        </div>
    </section>

    <!-- Formulaire -->
    <section class="Sec-formulaire">
        <div class="notif reussite">
            bien joué <span class="icone"><i class="fa-solid fa-check"></i></span>
        </div>
        <div class="notif echec">
            ajout échoué <span class="icone"><i class="fa-solid fa-xmark"></i></span>
        </div>
        <i class="fa-solid fa-xmark fermer"></i>
        <h2 class="mt-5 mb-5">Inserer l'enseignant</h2>
        <div class="mb-5">
            <div class="row">
                <div class="formulaire col-md-6-mb-3">
                    <label for="nom">Nom:</label>
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrer le nom" pattern="[a-zA-Z]"/>
                </div>
                <div class="formulaire col-md-6-mb-3">
                    <label for="comp">Compétence:</label>
                    <input type="text" name="comp" class="form-control" id="comp" placeholder="Entrer la compétence ou matière enseignée"/>
                </div>
                <div class="formulaire col-md-6-mb-3">
                    <label for="img">photo:</label>
                    <input type="file" id="img" accept="image/*">
                </div>
                <div class="col-lg mt-5">
                    <button class="btn btn-success" id="submit" onclick="ajouter()">Ajouter</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Pied de page -->
    <footer>
        <div class="footer-col">
            <h3>Liens Rapide</h3>
            <ul>
                <li>inscription</li>
                <li>map</li>
                <li>enseignant</li>
                <li>lorem</li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Licence</h3>
            <ul>
                <li>Info</li>
                <li>Privacy Policy</li>
                <li>Service</li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Contact</h3>
            <ul>
                <li>034 62 515 75</li>
                <li>032 15 841 87</li>
                <li>eni@eni.mg</li>
            </ul>
        </div>
        <div class="footer-col">
            <h3>Journal</h3>
                <p>Envoyer-nous votre mail pour ne pas ratez les dernieres nouvelles</p>
                <form action="" method="post">
                    <input type="text" name="mailAbonne" id="mailAbonne" placeholder="Votre Email">
                    <input id="submitAbonne" type="submit" value="S'ABONNER">
                </form>
        </div>
        <div class="copyright">
            <p>Copyright 2024 Tout droit reservé | Ce refont à été faite par @rivennn</p>
            <div class="pro-liens">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
            </div>
        </div>
    </footer>
</body>
<script src="../../frontend/script/navigation.js"></script>

<!-- JS Bootstrap -->
<script src="../../frontend/script/bootstrap/bootstrap.bundle.min.js"></script>

<!-- JS enseignant admin -->
<script src="./enseignant-admin.js"></script>

<!-- ANIMATION -->
<script src="../../frontend/script/animation.js"></script>

<!-- Notification-->
<script src="./notification.js"></script>
</html>