<!DOCTYPE html>

<!-- Bienvenue sur mon site -->

<html lang="fr">

    <head>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="shortcut icon" type="image/x-icon" href="/img/icon/favicon.png"/>

        <link rel="stylesheet" href="dist/css/style.css">

        <link rel="stylesheet" href="dist/css/animate.css">

        <link href="https://fonts.googleapis.com/css?family=Jua" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet"> 

        <title>Samier Nicolas CV</title>

    </head>

    <body>

        <?php include('nav2.php'); ?>

        <header>

            <div class="headerDiv animated fadeIn">

                <h1>Samier Nicolas</h1>

                <p>Développeur Web</p>

            </div>

            <a href="#navigation" class="animated infinite bounce"><img src="img/icon/arrow-down.png" alt="icon de flèche vers le bas" class="animated fadeIn"></a>

            <video autoplay loop id="videoHead" poster="img/octogone.png" muted>

                <source src="video/Octagon.mp4" type="video/mp4">

            </video>

        </header>

        <?php include('nav1.php'); ?>

        <section id="aPropos">

            <h2 class="fade">À propos</h2>

                <div class="aProposText fade">

                    <p>Je m’appelle Nicolas, j’ai 29 ans et je suis développeur web. Je suis passionné d’informatique et 

                        par tout ce qui touche de près ou de loin aux nouvelles technologies.</p>

                    <p>Cette passion pour l’informatique m’a amené à me demander comment tout cela pouvait bien 

                        fonctionner, c’est comme ça que j’ai découvert le développement et plus particulièrement le développement web.</p>

                    <p>Je suis quelqu’un de créatif et curieux. J’aime la musique, je joue de la guitare et un peu de basse. 

                        J’aime aussi tout ce qui se rapporte à l’audiovisuelle. J’ai réalisé plusieurs vidéo de présentation pour des petits commerces, 

                        afin qu’ils puissent mettre en avant leurs activités. J’ai aussi réalisé la captation et le montage vidéo pour un spectacle musical.</p>

                </div>

        </section>

        <section id="competence">

            <h2 class="fade">Compétences</h2>

            <div class="divContainerComp">

                <div class="html icon fade"><img src="img/icon/html.png" alt="Icône du logo html"></div>

                <div class="css icon fade"><img src="img/icon/css.png" alt="Icône du logo css"></div>

                <div class="jquery icon fade"><img src="img/icon/jQurery.png" alt="Icône du logo jquery"></div>

                <div class="js icon fade"><img src="img/icon/javaScript.png" alt="Icône du logo javaScript"></div>

                <div class="php icon fade"><img src="img/icon/php7.png" alt="Icône du logo php"></div></a>

                <div class="bootstrap icon fade"><img src="img/icon/bootstrap.png" alt="Icône du logo bootstrap"></div>

                <div class="git icon fade"><img src="img/icon/Git.png" alt="Icône du logo git"></div>

                <div class="visual icon fade"><img src="img/icon/Visual-Studio-Code.png" alt="Icône du logo visual studio code"></div>

                <div class="atom icon fade"><img src="img/icon/Atom.png" alt="Icône du logo atom"></div>

            </div>

        </section>

        <section id="realisation">

            <h2 class="fade">Réalisations</h2>

            <div class="divRealCont">

                <div class="card sncfDiv fade">

                    <img src="img/sncf.jpg" alt="Image de train sncf" class="sncfImg">

                    <h3>SNCF</h3>

                    <p>Réalisation d’une application visant à regrouper plusieurs logiciels sur une seule interface. Le but est de simplifier l’utilisation de ces logiciels qui nécessite de nombreuses actions et peuvent être difficile à prendre en main pour des débutants.</p>

                </div>

                <div class="card happyDiv fade">

                    <a href="http://samier-developpement.fr/Happy-Cats/ " target="_blank"><img src="img/happy-cats.jpg" alt="Image du site Happy Cats" class="happyImg"></a>

                    <h3>Happy Cats</h3>

                    <p>Réalisation d’un site web pour Happy Cats qui est une association de protection des animaux. Le site a pour but de présenter l’association, ses membres et leurs différentes activités.</p>

                </div>

            </div>

        </section>

        <section id="video">

            <h2 class="fade">Réalisations Vidéos</h2>

            <div class="divVideoCont ">

                <div class="card lantreDiv fade">

                <iframe class="dragon" src="https://www.youtube.com/embed/lb5csxvmWdU" allowfullscreen></iframe>

                    <h3>L'antre du Dragon</h3>

                    <p>Réalisation d’une vidéo de présentation de l’antre du dragon qui est une boutique de vente de jeux de société.</p>

                </div>

                <div class="card otageekDiv fade">

                <iframe class="otageek" src="https://www.youtube.com/embed/dXiIKwibny4" allowfullscreen></iframe>

                    <h3>Otageek</h3>

                    <p>Réalisation d’une vidéo de présentation d’Otageek qui est une boutique de vente et d’achat de manga et de comics d’occasion.</p>

                </div>

                <div class="card spectacleDiv fade">

                <iframe class="spectacle" src="https://www.youtube.com/embed/FjuPO2jthU8" allowfullscreen></iframe>

                    <h3>Jours de Fête</h3>

                    <p>Réalisation de la captation et du montage vidéo pour le spectacle musicale Jours de Fête.</p>

                </div>

            </div>

        </section>

        <section id="experience">

            <h2 class="fade">Expériences</h2>

            <div class="divExpCont">

                <div class="sncf fade">

                    <h3>2018</h3>

                    <p>Réalisation d'une application pour la SNCF.</p>

                </div>

                <div class="happyCats fade">

                    <h3>2018</h3>

                    <p>Réalisation d'un site internet pour l'association Happy Cats.</p>

                </div>

                <div class="arvato fade">

                    <h3>2014-2016</h3>

                    <p>Téléconseiller pour Arvato Service à Vendin-le-Vieil.</p>

                </div>

                <div class="unisCite fade">

                    <h3>2012-2013</h3>

                    <p>Animateur en service civique pour Unis cité à lens.</p>

                </div>

                <div class="vendeur fade">

                    <h3>2011-2012</h3>

                    <p>Vendeur d’instruments de musique pour Milonga à Hénin-Beaumont.</p>

                </div>

            </div>
        </section>
        <section id="formation">
            <h2 class="fade">Formations</h2>
            <div class="divFormaCont">
                <div class="popSchool fade">
                    <h3>2018</h3>
                    <p>Titre professionnel développeur logiciel (niveau Bac+2), Pop School, Lens.</p>
                </div>
                <div class="sjt fade">
                    <h3>2011-2012</h3>
                    <p>Titre professionnel d’employé commercial en magasin, SJT, lens.</p>
                </div>
                <div class="bep fade"> 
                    <h3>2006-2008</h3>
                    <p>BEP ROC SM, lycée professionnel Henry-Senez, Hénin-Beaumont.</p>
                </div>
            </div>
        </section>
        <section id="contact">
            <h2 class="fade">Contact</h2>
            <div class="divContactCont">
                <a href="tel:0602717901">
                    <div class="contactPhone fade">
                        <img src="img/icon/phone.png" alt="icon de téléphone">
                        <p>06 02 71 79 01</p>
                    </div>
                </a>
                <a href="mailto:samiernicolas62@gmail.com">
                    <div class="contactMail fade">
                        <img src="img/icon/email.png" alt="Icon de lettre">
                        <p>samiernicolas62@gmail.com</p>
                    </div>
                </a>
                <a href="https://github.com/Weylland" target="_blank">
                    <div class="github fade">
                        <img src="img/icon/github.png" alt="Icon de GhitHub">
                    </div>
                </a>
                <a href="https://www.linkedin.com/in/nicolas-samier-4a9256162/" target="_blank">
                    <div class="linkedin fade">
                        <img src="img/icon/linkedin.png" alt="Icon de linkedin">
                    </div>
                </a>
            </div>
        </section>
        <script src="dist/js/jquery-3.3.1.min.js"></script>
        <script src="dist/js/script.js"></script>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter48658436 = new Ya.Metrika({
                            id:48658436,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true
                        });
                    } catch(e) { }
                });
                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () { n.parentNode.insertBefore(s, n); };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";
                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else { f(); }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/48658436" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->    
    </body>
</html>