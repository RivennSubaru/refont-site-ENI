<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Refont ENI</title>
    <link rel="stylesheet" href="./frontend/css/style.css">
    <link rel="stylesheet" href="./frontend/Fonts/css/all.min.css">
    <script src="./frontend/script/jquery-3.7.1.min.js"></script>
    
    <!-- hover d'apparition du bloc de deconnexion -->
    <style>
        .compteUser:hover .infoUser {
            display: flex !important;
        }
    </style>
</head>
<body>
    <!-- En-tete-->
    <header>
        <div id="navigation">
            <p><img src="./frontend/images/Logo ENI.png" alt="logoEni"></p>
            <nav>
                <ul>
                    <li class="active"><a class="active" href="#">Acceuil</a></li>
                    <li><a href="./a propos.php">A propos</a></li>
                    <!--<li><a href="./mentions.html">Mentions</a></li>-->
                    <li><a href="./enseignant.php">Enseignant</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <?php include ("lienLog.php"); ?>
                <!-- </ul>
            </nav>
            <i id="menu" class="fa-solid fa-bars"></i> -->
        </div>
        <div class="menu2" ></div>
    </header>

    <!-- Corps -->
    <section id="Acceuil" class="Acceuil-blur">
        <p id="lignAnim"></p>
        <h2>École Ingénieuse, La Pépinière Des Élites Informaticiennes</h2>
        <p id="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam odit tenetur nostrum, ducimus magnam rem dolorum tempora excepturi laudantium error voluptatibus officia alias dignissimos quas iure hic ea ipsa in?</p>
        <div class="btn">
            <a href="./a propos.php" class="boutons btn1" style="color: white; background: rgb(74, 74, 136);">Qui sommes-nous <i class="fa-solid fa-circle-info"></i></a>
            <a href="./contact.php#map" class="boutons btn2" style="color: white; background: rgb(0 212 138)">Emplacement <i class="fa-solid fa-map-location-dot"></i></a>
        </div>
    </section>
    
    <!-- caracteristique-->
    <section id="caract" class="caracteristique">
        <h1>Quelques Caractéristiques</h1>
        <p>L'école nationale d'informatique fait la renommée de l'université de fianarantsoa</p>
        <div class="cara-present">
            <div class="cara-box">
                <i class="fas fa-graduation-cap"></i>
                <h3>Programme Académique de Pointe</h3>
                <p>Plus de 100 etudiants diplomé par ans avec un taux de déboucher très élevé</p>
            </div>
            <div class="cara-box">
                <i class="fa-solid fa-star"></i>
                <h3>Reconnue à l'internationnale</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates ad magni.</p>
            </div>
            <div class="cara-box">
                <i class="fa-solid fa-handshake-angle"></i>
                <h3>En collaboration avec diverses entreprises</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore ullam eaque.</p>
            </div>
        </div>
    </section>

    <!-- Mention -->
    <section id="Mention">
        <h1>Nos Mentions</h1>
        <p>ENI dispose de plusieurs mentions</p>
        <div class="bloc-mention">
            <div class="mentions">
                <div class="image">
                    <img src="./frontend/images/illustrations/IG.jpg " alt="IG">
                    <h6>IG (Informatique Générale)</h6>
                </div>
                <div class="detail">
                    <span>mis à jours le 16/03/24</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque adipisci voluptates maiores nostrum quis doloribus officiis</p>
                </div>
            </div>
            <div class="mentions">
                <div class="image">
                    <img src="./frontend/images/illustrations/Pro.jpg " alt="IG">
                    <h6>PRO (Informatique Professionnel)</h6>
                </div>
                <div class="detail">
                    <span>mis à jours le 16/03/24</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque adipisci voluptates maiores nostrum quis doloribus officiis</p>
                </div>
            </div>
            <div class="mentions">
                <div class="image">
                    <img src="./frontend/images/illustrations/GB.jpg" alt="IG">
                    <h6>GB (Génie logiciel et base de données)</h6>
                </div>
                <div class="detail">
                    <span>mis à jours le 16/03/24</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque adipisci voluptates maiores nostrum quis doloribus officiis</p>
                </div>
            </div>
            <div class="mentions">
                <div class="image">
                    <img src="./frontend/images/illustrations/SR.jpg " alt="IG">
                    <h6>SR (Système et Réseaux)</h6>
                </div>
                <div class="detail">
                    <span>mis à jours le 16/03/24</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque adipisci voluptates maiores nostrum quis doloribus officiis</p>
                </div>
            </div>
            <div class="mentions">
                <div class="image">
                    <img src="./frontend/images/illustrations/IA.jpg" alt="IG">
                    <h6>IA (Intélligence Artificiel)</h6>
                </div>
                <div class="detail">
                    <span>mis à jours le 16/03/24</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque adipisci voluptates maiores nostrum quis doloribus officiis</p>
                </div>
                <div class="nouveau">
                    nouveau <i class="fa-solid fa-exclamation fa-beat-fade"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Insription -->
    <section id="inscription">
        <div class="rappel">
            <p>Envie de rejoindre notre groupe d'élite ?</p>
            <p>Ne perdez pas de temps et faites l'inscription en ligne pour faciliter votre inscription au concours</p>
            <h1>Inscrivez-vous dès maintenant</h1>
            <div class="temps">
                <div class="date jrs">
                    18 <br> Jours
                </div>
                <div class="date hrs">
                    29 <br> Heures
                </div>
                <div class="date min">
                    06 <br> Minutes
                </div>
                <div class="date sec">
                    58 <br> Secondes
                </div>
            </div>
        </div>

        <form action="" method="post">
            <h3>L'envoi de dossier est obligatoire même après l'inscription en ligne</h3>
            <input type="text" placeholder="Nom" name="nom" id="nom">
            <input type="email" placeholder="Email" name="email" id="email">
            <input type="tel" placeholder="Téléphone" name="phone" id="phone">
            <input type="submit" value="Envoyer" id="submit">
        </form>
    </section>

    <!-- ENSEIGNANTS -->
    <section id="enseignant">
        <h1>Nos Enseignants</h1>
        <p>Nous disposant de meilleurs enseignants ayant de très bonne expérience</p>
        <div class="bloc-enseignant">
            <div class="profile">
                <img src="./frontend/images/Les enseignants/Ando.jpg" alt="photoAndo">
                <h6>Professeur Ando</h6>
                <p>Python & Algorithme Avancé</p>
                <div class="pro-liens">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
            <div class="profile">
                <img src="./frontend/images/Les enseignants/Giovanni.jpg" alt="photoGio">
                <h6>Docteur Giovanni</h6>
                <p>Java & Data Analyste</p>
                <div class="pro-liens">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
            <div class="profile">
                <img src="./frontend/images/Les enseignants/Jesse.jpg" alt="photoJesse">
                <h6>Docteur Jesse</h6>
                <p>Developpeur Backend</p>
                <div class="pro-liens">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
            <div class="profile">
                <img src="./frontend/images/Les enseignants/Romeo.jpg" alt="photoRomeo">
                <h6>Professeur Roméo</h6>
                <p>Développeur full stack</p>
                <div class="pro-liens">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
            <div class="profile">
                <img src="./frontend/images/Les enseignants/Roberto.jpg" alt="photoAndo">
                <h6>Docteur Roberto</h6>
                <p>Expert Intelligence Artificiel</p>
                <div class="pro-liens">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                </div>
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
                <li>eni@eni.com</li>
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
    <!--<?php include ("./backend/footer.php") ?>-->
</body>

<!-- CUSTOM -->
<script src="./frontend/script/index.js"></script>

<!-- navBar -->
<script src="./frontend/script/navigation.js"></script>

<!-- Afficher enseignant -->
<script src="./backend/afficherIndex.js"></script>

<!-- Compte à rebours -->
<script src="./frontend/script/compte_a_rebours.js"></script>

<!-- Afficher les enseignants et date choisi -->
<script>
    window.addEventListener("load", function () {
        affichage();
        affichageDate();
    });
</script>
</html>