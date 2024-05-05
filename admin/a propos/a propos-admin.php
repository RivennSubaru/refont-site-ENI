<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A propos</title>
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
                    <li class="active"><a class="active" href="#">A propos</a></li>
                    <!-- <li><a href="../mentions.html">Mentions</a></li> -->
                    <li><a href="../enseignant/enseignant-admin.php">Enseignant</a></li>
                    <li><a href="../contact/contact-admin.php">Contact</a></li>
                    <li><a href="../../backend/autorisation.php">Gestion Admin</a></li>
                </ul>
            </nav>
            <i id="menu" class="fa-solid fa-bars"></i>
            <div class="mode">
                <a href="./a propos_userView.php" class="admin-user admin"><i class="fa-solid fa-unlock"></i> Admin mode</a>
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
        <h2>A propos de ENI /</h2>
    </section>

    <!-- presentation1 -->
    <section class="presentation pre-1">
        <div class="pres-img">
            <img src="../../frontend/images/about/3.png" alt="">
        </div>

        <div class="pres-texte">
            <h2>L'Ecole Nationale d'Informatique, votre passerelle vers l'avenir de la technologie</h2>
            <p>Située au cœur de Fianarantsoa, notre université est dédiée à l'excellence dans l'enseignement 
            de l'informatique et à la formation de professionnels compétents et innovants.</p>
            <div class="pres-illu">
                <img src="../../frontend/images/illustrations/fe1.png" alt="">
                <div class="illu-texte">
                    <h5>+4 mentions informatiques</h5>
                    <p>Un enseignement excellent qui vous garantie un avenir meilleurs</p>
                </div>
            </div>
            <div class="pres-illu">
                <img src="../../frontend/images/illustrations/fe2.png" alt="">
                <div class="illu-texte">
                    <h5>Taux d'employabilité élevé</h5>
                    <p>ENI assure votre vie dans le monde professionnel. Ainsi le taux de déboucher après l'obtention du diplôme reste haute</p>
                </div>
            </div>
        </div>
        <a href="#" class="redirection"><i id="redirect-ico" class="fa-solid fa-chevron-up"></i></a>
    </section>

    <!-- caracteristique-->
    <section id="caract" class="caracteristique a-propos">
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

    <!-- MISSION -->
    <section class="mission">
        <h2>Mission et vision</h2>
        <div>
            <p>
                Notre mission est de former une génération de professionnels de l'informatique créatifs et éthiques, 
                prêts à exceller dans un monde numérique en constante évolution. Nous nous engageons à contribuer au 
                développement durable de Madagascar en offrant une éducation de qualité qui transcende les frontières.
            </p>
            <p>
                Notre Vision est d'être reconnus comme un centre d'excellence en informatique, formant des leaders 
                influents dans l'industrie technologique mondiale. Nous aspirons à créer un environnement d'apprentissage 
                dynamique et inclusif, favorisant l'innovation et contribuant au progrès socio-économique de notre nation et du monde.
            </p>
        </div>
    </section>

    <!-- presentation2 -->
    <section class="presentation pre-2">
        
        <div class="pres-texte">
            <h2>Vie Étudiante Dynamique:</h2>
            <p> 
                L'expérience étudiante à l'ENI va au-delà des salles de classe. 
                Des clubs d'informatique aux compétitions technologiques, notre campus 
                est un terrain fertile pour cultiver des passions, établir des connexions 
                significatives et créer des souvenirs durables. <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus dicta, 
                accusamus atque itaque laudantium minus dolor fuga eos iusto at reprehenderit
            </p>
        </div>

        <div class="pres-img">
            <img src="../../frontend/images/about/pres1.png" alt="">
        </div>
    </section>

    <!-- presentation3 -->
    <section class="presentation pre-3">
        
        <div class="pres-img">
            <img src="../../frontend/images/about/pres2.png" alt="">
        </div>
        <div class="pres-texte">
            <h2>Mention et parcours</h2>
            <p> 
                La formation en vue de l’obtention du diplôme de Licence Professionnelle 
                en Informatique a été mise en place à l’ENI avec les trois parcours de formation : <br>
                ➣ Génie Logiciel et base de Données. <br>
                ➣ Administration des Système et réseaux. <br>
                ➣ Informatique Générale. <br><br>

                En 2023, une nouvelle mention Intelligence Artificielle (IA) a été ouvert au sein de l’Ecole 
                pour répondre les besoins des entreprises. La formation est destinée aux étudiants titulaires 
                du diplôme de licence (Bac +3) en Mathématiques ou en Statistiques ou en Informatique, etc. 
                La mention IA comporte deux parcours : <br>
                ➣ Gouvernance et Ingénierie de Données (GID). <br>
                ➣ Objets connectés et Cybersécurité (OCC).
            </p>
        </div>
    </section>
    
    <!-- PARTENARIAT -->
    <section id="partenariat">
        <h2>Nos Partenaires</h2>
        <div class="bloc-partenariat swiper">
            <div class="slide swiper-wrapper">
                <div class="carte swiper-slide"><img src="../../frontend/images/partenariat/Ambatovy-150x150.jpg" alt="ambatovy"></div>
                <div class="carte swiper-slide"><img src="../../frontend/images/partenariat/AUF-150x150.jpg" alt="AUF"></div>
                <div class="carte swiper-slide"><img src="../../frontend/images/partenariat/axian-logo-1-150x150.png" alt="axian"></div>
                <div class="carte swiper-slide"><img src="../../frontend/images/partenariat/Bianco-150x150.jpg" alt="bianco"></div>
                <div class="carte swiper-slide"><img src="../../frontend/images/partenariat/BNGRC-150x150.jpg" alt="BNGRC"></div>
                <div class="carte swiper-slide"><img src="../../frontend/images/partenariat/Hello-Tana-150x150.jpg" alt="Hello-Tana"></div>
                <div class="carte swiper-slide"><img src="../../frontend/images/partenariat/INSTAT-150x150.jpg" alt="INSTAT"></div>
                <div class="carte swiper-slide"><img src="../../frontend/images/partenariat/MESUPRES-150x150.jpg" alt="MESUPRES"></div>
                <div class="carte swiper-slide"><img src="../../frontend/images/partenariat/Relia-150x150.jpg" alt="Relia"></div>
            </div>
            <div class="swiper-button-next slide-navBtn"></div>
            <div class="swiper-button-prev slide-navBtn"></div>
            <div class="swiper-pagination"></div>
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
<!-- Swiper -->
<script src="../../frontend/swiper/swiper-bundle.min.js"></script>

<!-- navBar -->
<script src="../../frontend/script/navigation.js"></script>

<!-- Custom -->
<script src="../../frontend/script/a-propos.js"></script>

<!-- ANIMATION -->
<script src="../../frontend/script/animation.js"></script>
</html>