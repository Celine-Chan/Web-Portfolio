<!doctype html>

<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/gh/StephanWagner/svgMap@v2.2.1/dist/svgMap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.12.0/devicon.min.css">

    <!-- Devicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css" />

    <title>Jean-Baptiste Theroulde</title>

</head>

<body>
    <?php include("menu.php"); ?>
    <div class="container-fluid ">
        <!-- Background image -->
        <div class="p-5 text-center bg-image mb-5" style="
                background-image: url('img/geejay-sabordo-GpJ9p1QH7O4-unsplash.jpg');
                height: 600px;
                background-position: center;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            ">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1>Jean-Baptiste Theroulde...
                            <span class="txt-type" data-wait="3000" data-words='["Développeur",
                                 "&lt very &gt Passionné &lt /very &gt"]'></span>
                        </h1>
                        <h2>Bienvenue sur mon site !</h2>
                        <a class="btn btn-outline-light btn-lg mt-2" href="#!" role="button">Présentation video <i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->

        <!-- Sous menu HERO (Parcours - Portfolio - CV) -->
        <div class="row mt-2 mb-5 ms-2 me-2 p-2" id="hero">
            <div class="col-12 col-md-12 col-lg-3 
                d-flex align-items-center justify-content-center text-justify" id="cards">
                <div class="card " style="width: 18rem;">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="img/ian-schneider-TamMbr4okv4-unsplash.jpg" class="card-img-top" alt="...">
                        <a href="#__parcours">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Présentation</h5>
                        <p class="card-text">
                            Qui suis-je ? Qu'ai-je fait dans la vie ?
                            D'où est-ce que je viens ? Si cela vous intéresse rendez-vous
                            juste en dessous.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-3
                d-flex align-items-center justify-content-center text-justify" id="cards">
                <div class="card " style="width: 18rem;">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="img/markus-spiske-Skf7HxARcoc-unsplash.jpg" class="card-img-top" alt="...">
                        <a href="#Portfolio">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Portfolio</h5>
                        <p class="card-text">
                            Codés en Python, PHP, C ou C++(Arduino), cette section vous presentera
                            les principaux projets que j'ai réalisés jusqu'à présent.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-3
                d-flex align-items-center justify-content-center text-justify" id="cards">
                <div class="card " style="width: 18rem;">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="img/kira-auf-der-heide-8s1wfA6aB-4-unsplash.jpg" class="card-img-top" alt="...">
                        <a href="#parcoursPro">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Parcours Professionnel</h5>
                        <p class="card-text">
                            En France ou au Japon, vous allez avoir un aperçu de
                            mes diverses expériences professionnelles
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-3
                d-flex align-items-center justify-content-center text-justify" id="cards">
                <div class="card " style="width: 18rem;">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="img/logan-weaver-78iLIC2FUdA-unsplash.jpg" class="card-img-top" alt="...">
                        <a href="#Contacts">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Contacts</h5>
                        <p class="card-text">
                            Vous êtes recruteur.se ? Ou vous souhaitez tout
                            simplement me contacter par email, linkedin ou
                            github ? C'est par ici !
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-12 mt-5 pt-5" id="__parcours">
        </div>
        <!-- Description parcours grandes tailles ecran-->
        <div class="container my-5 py-5" id="description_gd_ecrans">
            <div class="row m-2 p-2 mx-2 text-justify bg-image" style="
                    background-image: url('img/michael-shannon-iIrB37J5yfA-unsplash.jpg');
                    height: auto;
                    background-position: center;
                    background-attachment: fixed;
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                ">

                <div class="col-9 col-md-8 col-lg-5 ms-n4 me-3">
                    <div class="jumbotron mt-n4 mb-n4 me-0 px-3 text-justify"
                    style="background-color:rgb(255, 255, 255); color: rgb(0, 0, 0); ">
                        <h1 id = "titresParties" class="" id="presentation">Présentation</h1>
                        <p class="lead mt-3">Qui suis-je ?</p>
                        <p class="text-left me-5 pe-5" id="texte_presentation">
                        Bonjour, enchanté moi c’est Jean-Baptiste !
                        Tout d’abord, je vous remercie d’avoir pris un peu de votre 
                        temps pour visiter mon site internet ...
                        Ainsi, le temps étant précieux, je vais essayer de faire court.
                        Je suis un Franco-Brésilien, ayant vécu principalement en France
                        et au Japon, passionné par les nouvelles technologies et 
                        les langues étrangères.
                        En reconversion professionnelle dans le domaine du 
                        développement informatique depuis près d’un an et demi, 
                        je suis actuellement à la recherche d’une alternance d’un ou deux
                        ans en développement d’application web /  mobile … 
                        N’hésitez pas à me contacter si vous êtes intéressé.e !
                        Bonne visite !
                            
                        </p>
                    </div>
                </div>
                <div class="col-1 col-md-1 col-lg-2">
                    <p>

                    </p>
                </div>
                <div class="col-1 col-md-1 col-lg-2">
                    <p>

                    </p>
                </div>
                <div class="col-1 col-md-1 col-lg-2">
                    <p>

                    </p>
                </div>
            </div>
        </div>

        <!-- Description parcours petites tailles ecran-->
        <div class="container px-3 my-5 py-5 text-justify" id="description_pt_ecrans">

            <div class="jumbotron text-justify ">
                <h1 class="d-flex justify-content-center " id = "titresParties">Présentation</h1>
                <p class="text-left mx-2 my-3 py-3" id="texte_presentation">
                Bonjour, enchanté moi c’est Jean-Baptiste !
                Tout d’abord, je vous remercie d’avoir pris un peu de votre 
                temps pour visiter mon site internet ...
                Ainsi, le temps étant précieux, je vais essayer de faire court.
                Je suis un Franco-Brésilien, ayant vécu principalement en France
                et au Japon, passionné par les nouvelles technologies et 
                les langues étrangères.
                En reconversion professionnelle dans le domaine du 
                développement informatique depuis près d’un an et demi, 
                je suis actuellement à la recherche d’une alternance d’un ou deux
                ans en développement d’application web /  mobile … 
                N’hésitez pas à me contacter si vous êtes intéressé.e !
                Bonne visite !
                    
                </p>
            </div>
        </div>
        <!-- Parcours professionel -->
        <div class="row mb-5 mx-2 pb-2 px-2" id="centres-interet">
            <div class="col-12 col-md-12 col-lg-5
                d-flex align-items-center justify-content-center " style="background-color:rgb(255, 255, 255); color: rgb(0, 0, 0);" id="__centres-interet_tg_gd_md">
                <img src="img/photo_profile.jpeg" class="img-fluid p-4 " 
                alt="photo de profil" id="photoProfil">
            </div>

            <div class="col-12 col-md-12 col-lg-7
                d-flex align-items-center justify-content-around text-justify
                px-2" id="__centres-interet">
                <div class="jumbotron">
                    <h1 class="d-flex align-items-center
                        justify-content-center text-center my-5 py-5"
                        id = "titresParties">
                        Langages & Technologies</h1>

                    <div class="d-flex flex-wrap align-items-center justify-content-center text-justify mx-3">
                        <img src="img/languages_tools/france-svgrepo-com.svg" alt="français" class="logoLanguages" title="français">

                        <img src="img/languages_tools/united-kingdom-svgrepo-com.svg" alt="anglais" class="logoLanguages" title="anglais">

                        <img src="img/languages_tools/japan-svgrepo-com.svg" id="japan_flag" alt="japonais" class="logoLanguages" title="japonais">

                        <img src="img/languages_tools/python-original-wordmark.svg" alt="python" class="logoLanguages" title="python">

                        <img src="img/languages_tools/php-original.svg" alt="php" class="logoLanguages" title="php">

                        <img src="img/languages_tools/html5-original-wordmark.svg" alt="html5" class="logoLanguages" title="html5">

                        <img src="img/languages_tools/css3-original-wordmark.svg" alt="css3" class="logoLanguages" title="css3">

                        <img src="img/languages_tools/javascript-original.svg" alt="javascript" class="logoLanguages" title="javascript">

                        <img src="img/languages_tools/c-original.svg" alt="c" class="logoLanguages" title="c">

                        <img src="img/languages_tools/arduino-original-wordmark.svg" alt="arduino" class="logoLanguages" title="arduino">

                        <img src="img/languages_tools/flask-original-wordmark.svg" alt="flask" class="logoLanguages" title="flask">

                        <img src="img/languages_tools/bootstrap-plain-wordmark.svg" alt="bootstrap" class="logoLanguages" title="bootstrap">

                        <img src="img/languages_tools/apache-original-wordmark.svg" alt="apache" class="logoLanguages" title="apache">

                        <img src="img/languages_tools/nginx-original.svg" alt="ngix" class="logoLanguages" title="ngix">

                        <img src="img/languages_tools/ubuntu-plain-wordmark.svg" alt="ubuntu" class="logoLanguages" title="ubuntu">

                        <img src="img/languages_tools/bash-original.svg" alt="bash" class="logoLanguages" title="bash">

                        <img src="img/languages_tools/git-original-wordmark.svg" alt="git" class="logoLanguages" title="git">


                    </div>
                </div>
            </div>
        </div>
        <!--Parcours professionel-->

        <!-- Titre portfolio -->
        <div class="row mt-5 pt-5" id="Portfolio">
            <div class="col-1 col-md-2 col-lg-3">
                <p>

                </p>
            </div>
            <div class="col-10 col-md-8 col-lg-6 mt-5" id="__portfolio">
                <div class="jumbotron
                    d-flex justify-content-center align-items-center">
                    <h1 class="" id = "titresParties">Portfolio</h1>
                </div>
            </div>
            <div class="col-1 col-md-2 col-lg-3">
                <p>

                </p>
            </div>
        </div>
        <!--Titre portfolio-->

        <!-- Portfolio 1 -->
        <div class="row mt-3 ms-3 me-3 pt-3 ps-3 pe-3" id="portfolio">
            <div class="col-12 portfolio_img col-md-4 col-lg-4 portfolio_img_gd
                d-flex align-items-center justify-content-center" id="__projet_1">
                <div class="bg-image ripple" data-mdb-ripple-color="light">
                    <img src="img/andrew-neel-1-29wyvvLJA-unsplash.jpg" class="w-100" />
                    <a href="https://madestination.pandasprojects.com/">
                        <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="d-flex flex-column 
                            justify-content-center align-items-center h-100 text-center
                            mt-3 pt-3">
                                <p class="text-white mb-0">
                                <h3>Quelle est ma destination</h3>
                                </p>
                                <p class="text-white m-n2 p-n2">
                                <h3>
                                    <img src="img/languages_tools/python-original.svg" alt="logo_python" class="minilogoLanguages" title="logo_python">
                                    <img src="img/languages_tools/html5-original.svg" alt="logo_html5" class="minilogoLanguages" title="logo_html5">
                                    <img src="img/languages_tools/css3-original.svg" alt="logo_css3" class="minilogoLanguages" title="logo_css3">
                                </h3>
                                </p>
                            </div>
                        </div>
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 portfolio_img col-md-4 col-lg-4
                d-flex align-items-center justify-content-center" id="__projet_2">
                <div class="bg-image ripple" data-mdb-ripple-color="light">
                    <img src="img/chuttersnap-BNBA1h-NgdY-unsplash.jpg" class="w-100" />
                    <a href="https://gestionstocks.pandasprojects.com/">
                        <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="d-flex flex-column 
                            justify-content-center align-items-center h-100 text-center
                            mt-3 pt-3 ">
                                <p class="text-white mb-0">
                                <h3>Gestion des Stocks</h3>
                                </p>
                                <p class="text-white m-n2 p-n2">
                                <h3>
                                    <img src="img/languages_tools/python-original.svg" alt="logo_python" class="minilogoLanguages" title="logo_python">
                                    <img src="img/languages_tools/javascript-plain.svg" alt="logo_js" class="minilogoLanguages" title="logo_js">
                                    <img src="img/languages_tools/html5-original.svg" alt="logo_html5" class="minilogoLanguages" title="logo_html5">
                                    <img src="img/languages_tools/css3-original.svg" alt="logo_css3" class="minilogoLanguages" title="logo_css3">
                                </h3>
                                </p>
                            </div>
                        </div>
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-12 portfolio_img col-md-4 col-lg-4
                d-flex align-items-center justify-content-center" id="__projet_3">
                <div class="bg-image ripple" data-mdb-ripple-color="light">
                    <img src="img/michael-dziedzic-dSyhpTGhNHg-unsplash.jpg" class="w-100" />
                    <a href="https://pi.jeanbaptistetheroulde.com/">
                        <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="d-flex flex-column 
                            justify-content-center align-items-center h-100 text-center
                            mt-3 pt-3">
                                <p class="text-white mb-0">
                                <h3>Approximation de Pi</h3>
                                </p>
                                <p class="text-white m-n2 p-n2">
                                <h3>
                                    <img src="img/languages_tools/python-original.svg" alt="logo_python" class="minilogoLanguages" title="logo_python">
                                    <img src="img/languages_tools/php-plain.svg" alt="logo_php" class="minilogoLanguages" title="logo_php">
                                    <img src="img/languages_tools/javascript-plain.svg" alt="logo_js" class="minilogoLanguages" title="logo_js">
                                    <img src="img/languages_tools/html5-original.svg" alt="logo_html5" class="minilogoLanguages" title="logo_html5">
                                </h3>
                                </p>
                            </div>
                        </div>
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Portfolio 1 -->

        <!-- Portfolio 2 -->
        <div class="row mt-0 ms-3 me-3 pt-0 ps-3 pe-3 mb-5 " id="portfolio">
            <div class="col-12 portfolio_img col-md-4 col-lg-4 
                d-flex align-items-center justify-content-center" id="__projet_1">
                <div class="bg-image ripple" data-mdb-ripple-color="light">
                    <img src="img/lucas-santos-Qdvm-Qr1FYw-unsplash.jpg" class="w-100" />
                    <a href="https://github.com/J-BT/huitLED--Arduino--">
                        <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="d-flex flex-column 
                            justify-content-center align-items-center h-100 text-center
                            mt-3 pt-3">
                                <p class="text-white mb-0">
                                <h3>Projets Arduino</h3>
                                </p>
                                <img src="img/languages_tools/arduino-original.svg" alt="logo_arduino" class="minilogoLanguages" title="logo_arduino">
                            </div>
                        </div>
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 portfolio_img col-md-4 col-lg-4
                d-flex align-items-center justify-content-center" id="__projet_2">
                <div class="bg-image ripple" data-mdb-ripple-color="light">
                    <img src="img/brett-jordan-94GiZLiWD8Y-unsplash.jpg" class="w-100" />
                    <a href="https://lependu.jeanbaptistetheroulde.com/">
                        <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="d-flex flex-column 
                            justify-content-center align-items-center h-100 text-center
                            mt-3 pt-3">
                                <p class="text-white mb-0">
                                <h3>Le Pendu</h3>
                                </p>
                                <p class="text-white m-n2 p-n2">
                                <h3>
                                    <img src="img/languages_tools/c-line.svg" alt="logo_c" class="minilogoLanguages" title="logo_c">
                                    <img src="img/languages_tools/php-plain.svg" alt="logo_php" class="minilogoLanguages" title="logo_php">
                                </h3>
                                </p>
                            </div>
                        </div>
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col-12 portfolio_img col-md-4 col-lg-4
                d-flex align-items-center justify-content-center" id="__projet_3">
                <div class="bg-image ripple" data-mdb-ripple-color="light">
                    <img src="img/anete-lusina-zwsHjakE_iI-unsplash.jpg" class="w-100" />
                    <a href="https://github.com/J-BT/Web-Portfolio">
                        <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="d-flex flex-column  
                            justify-content-center align-items-center h-100 text-center text-break
                            mt-3 pt-3">
                                <p class="text-white mb-0 ">
                                <h3>jeanbaptistetheroulde.com</h3>
                                </p>
                                <p class="text-white m-n2 p-n2">
                                <h3>
                                    <img src="img/languages_tools/php-plain.svg" alt="logo_php" class="minilogoLanguages" title="logo_php">
                                    <img src="img/languages_tools/html5-original.svg" alt="logo_html5" class="minilogoLanguages" title="logo_html5">
                                    <img src="img/languages_tools/css3-original.svg" alt="logo_css3" class="minilogoLanguages" title="logo_css3">
                                    <img src="img/languages_tools/javascript-plain.svg" alt="logo_js" class="minilogoLanguages" title="logo_js">
                                </h3>
                                </p>
                            </div>
                        </div>
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Portfolio 2 -->
        <!-- Parcours professionel -->
        <div class="py-5 mt-5" id="parcoursPro"></div>

        <div class="parcoursCarteOuPas d-flex flex-column align-items-center 
                justify-content-center text-justify">

            <div id="parcoursGdMoyensEcrans" 
            class="container mx-2 px-2 ">
                
                <div class="jumbotron text-justify d-flex flex-column align-items-center 
                justify-content-center" id="carte_legende">
                    <h1 id = "titresParties" class="">Mon parcours...en carte</h1>

                        <!-- Pour en savoir plus -->

                        <a class="d-flex flex-row flex-wrap justify-content-end" 
                        id="savoirPlusReconversion" 
                        href="" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                            <p id="enSavoirPlusTexte">Pour en savoir plus cliquez ici</p>
                        </a>

                        <!-- Modal -->
                        <div
                        class="modal fade"
                        id="exampleModal2"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel2"
                        aria-hidden="true"
                        >
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" 
                                id="exampleModalLabel2">Pourquoi la programmation ?</h5>
                                <button
                                type="button"
                                class="btn-close"
                                data-mdb-dismiss="modal"
                                aria-label="Fermer"
                                ></button>
                            </div>
                            <div class="modal-body">

                            <p class="mx-1 px-1 text-justify d-flex flex-column
                             align-items-center justify-content-center">
                            
                                Les sciences me passionnent depuis très longtemps, c’est d’ailleurs 
                                pour cela que j’ai souhaité intégrer la filière scientifique au lycée,
                                pour mieux comprendre les phénomènes qui nous entourent...
                                C’est pendant la classe de première que j’ai découvert la programmation.
                                Mon sujet de TPE étant la relativité, j’avais choisi de présenter le
                                paradoxe des jumeaux Langevin à travers un mini programme sur 
                                calculatrice Casio en me basant sur la transformation de Lorentz.
                                Le « Basic Casio » est, certes, simple et limité par rapport à 
                                d’autres langages de programmation tels que le C ou Python, mais 
                                il permet de se familiariser avec les grands principes de l'algorithmique…
                                Je fus totalement conquis ! Cependant, je découvris le japonais 
                                la même année, et la perspective de pouvoir voyager puis vivre en Asie
                                grâce à cette langue fût plus séduisante. J’ai donc choisi un cursus
                                universitaire plutôt centré sur le commerce et le langues 
                                étrangères :  Licence Administration Économique et Sociale 
                                puis Master Échanges avec l’Asie .
                                Ce parcours m’a offert l’opportunité de vivre en Asie pendant près 
                                de 2 ans, mais en faisant divers jobs pas forcement en lien avec mon
                                parcours ni mes envies. J’étais là où je souhaitais au prix d’une 
                                routine professionnelle peu épanouissante. Il était donc vital que 
                                je recentre mes choix professionnels…
                                Après une période d’introspection, je suis revenu vers mon autre 
                                passion du lycée, la programmation. Tout d’abord en autodidacte via
                                le site Openclassroom puis à travers la formation de développeur
                                data de l’école Digifab, du groupe Simplon. Aujourd’hui,
                                en attendant de trouver une alternance, je fini mon application
                                de gestion des stocks, principalement codée en Python/Javascript
                                et j’aide ma compagne à réaliser une application web / mobile
                                pour son entreprise en PHP. 
                            </p>
                                        
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                                Fermer
                                </button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- Pour en savoir plus fin-->

                   
                    
                    <p class="d-flex flex-row flex-wrap lead mt-3">
                        <span class="legende d-flex flex-wrap"><span id="vert_map">Vert </span> = Naissance</span>
                        <span class="legende d-flex flex-wrap"><span id="bleu_map">Bleu </span> = Travail</span> 
                        <span class="legende d-flex flex-wrap"><span id="orange_map">Orange </span> = Séjour linguistique</span>
                        <span class="legende d-flex flex-wrap"><span id="rouge_map">Rouge </span> = Tourisme  </span>
                    </p>
                    <div class="d-flex flex-row align-items-center justify-content-center" id="svgMap"></div>
                </div>
            </div>

            <!-- text-justify d-flex flex-column align-items-center 
                    justify-content-center
            -->
            <div id="parcoursPetitsEcrans" 
            class="container mx-2 px-2">
                
                    <div class="jumbotron text-justify d-flex flex-column align-items-center 
                    justify-content-center" id="descriptionParcours">
                        <h1 id = "titresParties" class="">Mon parcours...</h1>
                        <p class="indicationPetitsEcrans">(RDV sur grand écran pour le voir en carte)</p>
                        <p class="mx-2 px-2 my-3 py-3 text-justify d-flex flex-column align-items-center 
                        justify-content-center">
                        J’ai toujours été fasciné par les langues et cultures
                        étrangères, notamment asiatiques, et c’est d’ailleurs
                        ce sentiment qui a motivé mes choix universitaires et
                        professionnels après le lycée. Par exemple, les postes de
                        « Commercial », « Téléconseiller » et
                        « Professeur Particulier » m’ont, respectivement,
                        permis d’économiser pour mes trois premiers séjours
                        au Japon. Et n’ayant pas de difficultés pour sociabiliser
                        avec les personnes je me suis souvent tourné vers les
                        postes où les interactions sociales étaient prédominantes
                        comme : « Professeur de français », « Conseiller Pédagogique »,
                         « Réceptionniste » ou encore « Bartender ».
                        Aujourd’hui, je souhaite vivre de mon autre passion…
                        Et avoir travaillé au sein du service
                        informatique d’un hôpital me conforte dans ce choix.
                        </p>

                        <!-- Pour en savoir plus -->

                        <a class="d-flex flex-row flex-wrap justify-content-end" 
                        id="savoirPlusReconversion" 
                        href="" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                            <p id="enSavoirPlusTexte">Pour en savoir plus cliquez ici</p>
                        </a>

                        <!-- Modal -->
                        <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true"
                        >
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" 
                                id="exampleModalLabel">Pourquoi la programmation ?</h5>
                                <button
                                type="button"
                                class="btn-close"
                                data-mdb-dismiss="modal"
                                aria-label="Fermer"
                                ></button>
                            </div>
                            <div class="modal-body">

                            <p class="mx-1 px-1 text-justify d-flex flex-column
                             align-items-center justify-content-center">
                            
                                Les sciences me passionnent depuis très longtemps, c’est d’ailleurs 
                                pour cela que j’ai souhaité intégrer la filière scientifique au lycée,
                                pour mieux comprendre les phénomènes qui nous entourent...
                                C’est pendant la classe de première que j’ai découvert la programmation.
                                Mon sujet de TPE étant la relativité, j’avais choisi de présenter le
                                paradoxe des jumeaux Langevin à travers un mini programme sur 
                                calculatrice Casio en me basant sur la transformation de Lorentz.
                                Le « Basic Casio » est, certes, simple et limité par rapport à 
                                d’autres langages de programmation tels que le C ou Python, mais 
                                il permet de se familiariser avec les grands principes de l'algorithmique…
                                Je fus totalement conquis ! Cependant, je découvris le japonais 
                                la même année, et la perspective de pouvoir voyager puis vivre en Asie
                                grâce à cette langue fût plus séduisante. J’ai donc choisi un cursus
                                universitaire plutôt centré sur le commerce et le langues 
                                étrangères :  Licence Administration Économique et Sociale 
                                puis Master Échanges avec l’Asie .
                                Ce parcours m’a offert l’opportunité de vivre en Asie pendant près 
                                de 2 ans, mais en faisant divers jobs pas forcement en lien avec mon
                                parcours ni mes envies. J’étais là où je souhaitais au prix d’une 
                                routine professionnelle peu épanouissante. Il était donc vital que 
                                je recentre mes choix professionnels…
                                Après une période d’introspection, je suis revenu vers mon autre 
                                passion du lycée, la programmation. Tout d’abord en autodidacte via
                                le site Openclassroom puis à travers la formation de développeur
                                data de l’école Digifab, du groupe Simplon. Aujourd’hui,
                                en attendant de trouver une alternance, je fini mon application
                                de gestion des stocks, principalement codée en Python/Javascript
                                et j’aide ma compagne à réaliser une application web / mobile
                                pour son entreprise en PHP.
                            </p>
                                        
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                                Fermer
                                </button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <!-- Pour en savoir plus fin-->
                    </div>
            </div>
        </div>



        <!--Parcours professionel-->



        <!-- Valeurs -->
        <div class="row mt-5 mb-5 mx-2 px-0 pt-3 pb-3" id="valeurs">
            <div class="jumbotron text-center">
                <h5 id="titresValeurs">Les valeurs qui me definissent</h5>
            </div>
            <!-- Carousel wrapper -->
            <div id="carouselBasicExample" class="carousel slide carousel-fade mt-3 pt-3 mb-5 " data-mdb-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <!-- Inner -->
                <div class="carousel-inner">
                    <!-- Single item -->
                    <div class="carousel-item active">
                        <img src="img/hannah-busing-Zyx1bK9mqmA-unsplash.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-md-block">
                            <h5 class="valeurs_carousel">Empathie</h5>
                            <p class="texte_carousel text-center">Se mettre à la place de ses amis,
                                collègues ou clients pour mieux cibler leurs attentes.</p>
                        </div>
                    </div>

                    <!-- Single item -->
                    <div class="carousel-item">
                        <img src="img/bady-abbas-XAkPN7aEGJM-unsplash.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-md-block">
                            <h5 class="valeurs_carousel">Optimisme</h5>
                            <p class="texte_carousel text-center">Voir le bon côté
                                des choses pour ne pas rater d'opportunité.</p>
                        </div>
                    </div>

                    <!-- Single item -->
                    <div class="carousel-item">
                        <img src="img/ozan-safak-1jOQNSc4P-c-unsplash.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-md-block">
                            <h5 class="valeurs_carousel">Resilience</h5>
                            <p class="texte_carousel text-center">Ne pas se laisser abattre
                                par les aléas de la vie mais en faire une force.</p>
                        </div>
                    </div>
                </div>
                <!-- Inner -->

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Carousel wrapper -->
        </div>
        <!--Valeurs-->
        <!-- CV -->
        <div class="py-3 my-3 text-center" id="rubriqueCV"></div>
        <h1 class="text-center" id = "titresParties" >Curriculum vitae</h1>
        <div class="text-justify d-flex flex-row align-items-center 
            justify-content-around flex-wrap py-3 my-3" id="CV">

            <div class="col-12 col-md-12 col-lg-6 d-flex flex-row align-items-center 
            justify-content-around" id="__cv">
                <div class="jumbotron">
                    <h4 class="my-0 py-0">
                        Si vous le souhaitez vous pouvez 
                            <span class="txt-type2" 
                            data-wait2="1000" 
                            data-words2='["consulter mon CV...",
                                 "télécharger mon CV.."]'></span>
                        
                    </h4>
                </div>
            </div>
            <div id="rubriqueCVDDL" class="col-12 col-md-12 col-lg-5
                d-flex align-items-center justify-content-center">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Afficher ou Télécharger</h5>
                        <p class="card-text">En cliquant sur l'un des boutons ci-dessous:</p>

                        <div class="d-flex flex-row align-items-center justify-content-center">

                            <a href="pdf/cv_jbtheroulde_simulation_entretien.pdf" 
                            class="btn btn-success mx-1" id="boutonsCV">Afficher</a>

                            <a href="download.php?file=cv_jbtheroulde_simulation_entretien.pdf" 
                            class="btn btn-primary mx-1" target="_new" id="boutonsCV">Télécharger</a>

                        </div>


                    </div>
                    <div class="card-footer text-muted">
                        Mis à jour le 28/11/2021
                    </div>
                </div>
            </div>
        </div>
        <!--CV-->

        <!-- Footer -->
        <?php include("footer.php"); ?>
        <!-- Footer -->

    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/svg-pan-zoom@3.6.1/dist/svg-pan-zoom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/StephanWagner/svgMap@v2.2.1/dist/svgMap.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
    <script src="main.js"></script>
    
</body>

</html>