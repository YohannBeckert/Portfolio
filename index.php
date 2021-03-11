<?php require_once 'php/layout/header.php'; ?>
<?php require_once 'php/boards.php'; ?>

    <section class="sidebar invisible" id="menu">

        <div class="sidebar-title">
            <div class="content-img">
                <div id="me"></div>
            </div>
            <div class="content-text-title">
                <div class="my-name">
                    <p>Yohann Beckert</p>
                </div>
                <div class="my-job">
                    <p>Developpeur Web</p>
                </div>
            </div>
        </div>

        <div class="content-nav">
            <div class="content-nav-menu">
                <nav>
                    <ul class="content-nav-item">
                    <?php foreach ($navItem as $item) { ?>
                        <a href="#<?= $item ?>">
                            <div class="content-item">
                                <li class="nav-item"><p><?= $item ?></p></li>
                            </div>
                        </a>
                    <?php } ?>                       
                    </ul>
                </nav>
            </div>         
        </div>

        <div class="footer-sidebar">
        <div class="content-nav-social">
            <nav>
                <ul class="nav-social-items">
                <?php foreach ($networks as $key => $value) { ?>
                    <div class="content-social-item">
                        <a href="<?= $value ?>" target="_blank">
                            <li class="social-item">
                            <img class="<?= $key ?>" src="assets/images/icons/<?= $key ?>.png" alt="">
                            </li>
                        </a>
                    </div>
                <?php }?>
                </ul>
            </nav>
        </div>

        <div class="copyright">
            <p>&copy; 2021 YOHANN BECKERT - Tous droits réservés</p>
        </div>
        </div>
    </section>

    <section id="main">
        <main>

            <section id="accueil">
                <div class="content-aera">
                    <div id="menu-burger">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                    <div class="content-home">
                        <div class="title-home">
                            <h1>Bienvenue sur mon Portfolio</h1>
                        </div>
                        <div class="title-text-home">
                            <h2>Développeur web d'applications web et mobiles</h2>
                        </div>
                        <div class="text-home">
                            <h3>Je vous laisse le parcourir pour en savoir d'avantage</h3>
                        </div>
                    </div>
                    <div class="container">
                        <div class="chevron"></div>
                        <div class="chevron"></div>
                        <div class="chevron"></div>
                        <span class="scroll-text">Scrollez en-bàs</span>
                    </div>
                </div>
            </section>

            <section id="presentation">

                <div class="content-presentation">

                    <div class="me-img">
                        <div class="dim-me">
                            <img class="me" src="assets/images/others/moi.png" alt="">
                        </div>
                    </div>

                    <div class="content-text-presentation">
                        <div class=" content-title presentation">
                            <h2>Présentation</h2>
                            <p>Developpeur web & web mobile</p>
                        </div>
                        <div class="text-presentation">
                            <p>
                                J'ai récemment été formé à l'école O'Clock au developpement web et web mobile en téléprésentiel. Mes outils actuels sont HTML, CSS, Javascript, SQL, PHP et le framework Symfony. Je suis dans la capacité de progresser de manière autonome sur d'autres langages et framework comme Python ou encore REACT JS. <br><br>
                                Très appliquée, je tends à produire un code de qualité et maintenable dans le temps en utilisant la méthode agile.
                                Je mets à votre service et au service des clients mon dynamisme, ma curiosité et ma rapide capacité d'adaptation.
                                Même si je suis plus à l'aise avec back-end, je suis aussi capable de travailler sur le front. <br><br>
                                Sociable, autonome, autodidacte, bonne capacité de recherche,et dynamique, je travaille en anglais et/ou français.
                            </p>
                        </div>  
                        <div class="content-btn-presentation">
                            <div class="btn-presentation">
                                <div class="item-btn-presentation">
                                    <a href="../assets/doc/CV dev.pdf" target="_blank" rel="noopener noreferrer">
                                    <div class="btn-pres">
                                        <p>Télécharger CV</p>
                                    </div>
                                </a>
                                </div>
                                
                                <div class="item-btn-presentation">
                                    <a href="https://www.linkedin.com/in/yohann-beckert-4903a1203/" target="_blank" rel="noopener noreferrer">
                                    <div class="btn-pres">
                                        <p>LinkedIn</p>
                                    </div>
                                    </a>
                                </div>    
                            </div>
                        </div>                     
                    </div>
                </div>
            </section>

            <section id="services">
                <div class="content-services">
                    <div class="content-title service">
                            <h2>Services</h2>
                    </div>

                    <div class="content-service-items">

                        <div class="service-item">
                            <div class="icon-item developpement"></div>
                            <div class="title-item-service">
                                <h3>Développement Web</h3>
                            </div>
                            <div class="text-item">
                                <p>
                                    Je m'occupe de la réalisation de l’ensemble des fonctionnalités techniques de votre site Internet ou application web. En fonction de vos exigences, j'analyse les besoins et définis la solution technique adaptée. Les missions incluent également le diagnostic et la résolution de problèmes détectés sur votre site déjà en ligne.
                                </p>
                            </div>
                        </div>                    

                        <div class="service-item">
                            <div class="icon-item">
                            </div>
                            <div class="title-item-service">
                                <h3>SEO</h3>
                            </div>
                            <div class="text-item">
                                <p>
                                    Si vous avez un e-commerce, une boutique vitrine ou un blog, si vous souhaitez monter une communauté ou faire du business, il vous faut une grande visibilité. Je vous accompagne dans toutes les actions SEO que vous souhaitez mettre en place (technique, contenu et netlinking), afin de construire une stratégie marketing.
                                </p>
                            </div>
                        </div>

                        <div class="service-item">
                            <div class="icon-item responsive">
                            </div>
                            <div class="title-item-service">
                                <h3>Responsive Design</h3>
                            </div>
                            <div class="text-item">
                                <p>
                                    J'adapte la mise en page de votre site en fonction de la résolution d'affichage. J'optimise l’expérience utilisateur afin de diposer d'un contenu parfaitement lisible sur tablette ou smartphone par exemple. Enfin, votre site obtiendra un meilleur référencement de par cette auto-adaptation.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section id="portfolio">
                <div class="content-all-pf">
                    <div class="content-title pf">
                        <h2>Portfolio</h2>
                    </div>
                    <div class="content-nav-filter-pf">
                    <?php foreach ($filter as $nameFilter) { ?>
                        <div class="item-filter-btn">
                            <button class="filter-btn"><?= $nameFilter ?></button>  
                        </div>
                    <?php } ?>
                    </div>
                    <div class="content-all-projects">
                        <?php foreach ($portfolio as $nameWebsite => $infoWebsite) {?>
                        <div class="project-container">
                            <img class="project-picture" src="assets/images/others/<?=$nameWebsite?>.png" alt="">
                            <div class="overlay">
                                <div class="title-project">
                                    <h3><?=$nameWebsite?></h3>                                 
                                </div>
                                <div class="language-project">
                                    <h4>Langage(s) et framwork(s) utilisé(s) :</h4>
                                    <p><?=$infoWebsite[0]?></p>
                                </div>
                                <div class="all-link-project">
                                    <h4>Lien(s) :</h4>
                                    <a href="<?=$infoWebsite[1]?>" target="_blank">
                                        <div class="link-project">
                                            <img class="link-github" src="assets/images/icons/github.png" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php }?>                         
                    </div>
            </section>

            <section id="contact">

                <div class="content-all-contact">

                    <div class="content-title contact">
                        <h2>Contact</h2>
                    </div>
                    <div class="content-text-contact">
                        <p>Vous trouverez ici tout les moyens pour me contacter ou consulter mes travaux:</p>  
                    </div>

                    <div class="content-item-contact">

                    <?php foreach ($contact as $nameItem => $contactItem) {?>
                        <div class="item-contact">
                            <section class="left-side">
                                <div class="img-item">
                                    <img src="assets/images/icons/<?= $nameItem ?>.png" alt="<?= $nameItem ?>">
                                </div>
                            </section>
                            <section class="right-side">
                                    <div class="title-item">
                                        <h3><?= $nameItem ?></h3>
                                    </div>
                                    <div class="link-item">
                                        <a href="<?= $contactItem[1]?>" target="_blank" rel=""><?= $contactItem[0]?></a>
                                    </div>
                            </section>
                        </div>
                    <?php }?>                     
                    </div>

                </div>
            </section>
        </main>

<?php require_once 'php/layout/footer.php'; ?>