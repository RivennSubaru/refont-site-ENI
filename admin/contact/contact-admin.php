<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
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
                    <!-- <li><a href="../mentions.html">Mentions</a></li> -->
                    <li><a href="../enseignant/enseignant-admin.php">Enseignant</a></li>
                    <li class="active"><a class="active" href="#">Contact</a></li>
                    <li><a href="../gestion admin/gestionAdmin.php">Gestion Admin</a></li>
                    <?php
                        if (!isset($_SESSION['ID_user'])) {?>
                            <li><a href="./login/login.html">Login</a></li></ul></nav><i id="menu" class="fa-solid fa-bars"></i><?php
                        }
                    ?>
                </ul>
            </nav>
            <i id="menu" class="fa-solid fa-bars"></i>
            <div class="mode">
                <a href="./contact_userView.php" class="admin-user admin"><i class="fa-solid fa-unlock"></i> Admin mode</a>
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
        <h2>Contacter nous /</h2>
    </section>

    <!-- Corps Données et Formuaire-->
    <section id="contact">
        <div class="coord">
            <h2>Nos Coordonnées</h2>
            <p>Envie de se renseigner d'avantage? Completer le formulaire et envoyer vos messages.</p>
            <div class="coor-detail">
                <h3>Addresse</h3>
                <div>
                    <i class="fas fa-home get"></i>
                    <p>BP 1487 Tanambao Fianarantsoa, Madagascar</p>
                </div>

                <h3>Phone</h3>
                <div>
                    <i class="fas fa-phone-alt get"></i>
                    <p>+261 34 05 733 36 <br> +261 32 99 959 99</p>
                </div>

                <h3>Email</h3>
                <div>
                    <i class="fas fa-envelope-open-text get"></i>
                    <p>eni@eni.mg</p>
                </div>

                <h3>Suivez-nous</h3>
                <div class="pro-liens">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
        </div>

        <form action="" method="post">
            <h4>Contactez-nous</h4>
            <p>Inscrivez votre information et envoyer votre messages</p>
            <div class="form-ligne">
                <input type="text" name="nom" id="nom" placeholder="Votre nom">
                <input type="email" placeholder="Email">
            </div>
            <div class="form-col">
                <input type="text" name="sujet" id="sujet" placeholder="Sujet">
            </div>
            <div class="form-col">
                <textarea name="mess" id="mess" cols="30" rows="8" placeholder="Comment pouvons-nous vous aider?"></textarea>
            </div>
            <div class="form-col">
                <input id="btn" type="submit" value="Envoyer">
            </div>
        </form>
    </section>

    <!-- MAP -->
    <section id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3713.339604768225!2d47.0908625751175!3d-21.45518748030301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21e7bed737f377b5%3A0xb8558e55587dd811!2sEcole%20Nationale%20d%20Informatique!5e0!3m2!1sfr!2smg!4v1711110335956!5m2!1sfr!2smg" 
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

<!-- Js -->
<script src="../../frontend/script/navigation.js"></script>

<!-- ANIMATION -->
<script src="../../frontend/script/animation.js"></script>
</html>