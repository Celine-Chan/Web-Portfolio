<!doctype html>

<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
        rel="stylesheet"
        />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
        <link rel="stylesheet" href="style.css" />

        <title>Jean-Baptiste Theroulde</title>

    </head>

    <body>
        <?php include("menu.php"); ?>
        <div class="container-fluid">
            <!-- Background image -->
            <div
            class="p-5 text-center bg-image mb-5"
            style="
                background-image: url('img/geejay-sabordo-GpJ9p1QH7O4-unsplash.jpg');
                height: 600px;
                background-position: center;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            "
            >
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white">
                            <h1>Jean-Baptiste Theroulde...
                                <span class="txt-type" data-wait="3000" 
                                data-words='["Développeur",
                                 "&lt very &gt Passionné &lt /very &gt"]'></span>
                            </h1>
                            <h2>Bienvenue sur mon site !</h2>
                            <a class="btn btn-outline-light btn-lg mt-2" href="#!" role="button"
                            >Présentation Video <i class="flag flag-france "></i></a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <!-- Background image -->

            <!-- Sous menu HERO (Parcours - Portfolio - CV) -->
            <div class="row mt-2 mb-5 ms-2 me-2 p-2" id="hero">
                <div class="col-12 col-md-12 col-lg-3 
                d-flex align-items-center justify-content-center" id="__parcours">
                    <div class="card " 
                    style="width: 18rem;">
                        <img src="img/ian-schneider-TamMbr4okv4-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Présentation</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3
                d-flex align-items-center justify-content-center" id="__portfolio">
                    <div class="card " style="width: 18rem;">
                        <img src="img/markus-spiske-Skf7HxARcoc-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body ">
                          <h5 class="card-title">Portfolio</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3
                d-flex align-items-center justify-content-center" id="__cv">
                    <div class="card" style="width: 18rem;">
                        <img src="img/kira-auf-der-heide-8s1wfA6aB-4-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Parcours</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3
                d-flex align-items-center justify-content-center" id="__contacts">
                    <div class="card" style="width: 18rem;">
                        <img src="img/logan-weaver-78iLIC2FUdA-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Contacts</h5>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description parcours grandes tailles ecran-->
            <div class="container" id="description_gd_ecrans">
                <div class="row m-2 p-2  text-center bg-image"
                style="
                    background-image: url('img/michael-shannon-iIrB37J5yfA-unsplash.jpg');
                    height: auto;
                    background-position: center;
                    background-attachment: fixed;
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                " 
                >
                    
                    <div class="col-9 col-md-8 col-lg-5 ms-n4" id="__parcours">
                        <div class="jumbotron mt-n4 mb-n5 me-5 pe-5" 
                        style="background-color:rgb(255, 255, 255); color: rgb(0, 0, 0); ">
                            <h1 class="display-3 " id= "presentation">Présentation</h1>
                            <p class="lead mt-3" >Qui suis-je ?</p>
                            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim.   
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
            <div class="container" id="description_pt_ecrans">
                
                <div class="jumbotron mx-3 my-3 px-3 py-3" 
                id="__parcours" 
                style="background-color:rgb(255, 255, 255); color: rgb(0, 0, 0); ">
                    <h1 class="display-3 " id= "presentation">Présentation</h1>
                    <p class="lead">Qui suis-je ?</p>
                    <hr class="my-4">
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.
                         Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.
                          Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet
                           erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim.
                            Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue.
                            Praesent egestas leo in pede. Praesent blandit odio eu enim.   
                    </p>
                </div>
            </div>
            <!-- Parcours professionel -->
            <div class="row mb-2 pb-2 ms-2 ps-4 me-2 pe-4" id="centres-interet">
                <div class="col-12 col-md-12 col-lg-6
                d-flex align-items-center justify-content-center " 
                style="background-color:rgb(255, 255, 255); color: rgb(0, 0, 0);" 
                id="__centres-interet_tg_gd_md">
                        <img
                        src="img/photo_profile.jpeg"
                        class="img-fluid p-4 "
                        alt="photo de profil"
                        style="height: auto; width: 75%;">
                </div>
                
                <div class="col-12 col-md-12 col-lg-6
                d-flex align-items-center justify-content-center" id="__centres-interet">
                    <div class="jumbotron m-4 p-4">
                        <h1 class="display-3">Pourquoi la programmation?</h1>
                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class="my-4">
                        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.  
                        </p>
                    </div>
                </div>
            </div>
            <!--Parcours professionel-->

            <!-- Titre portfolio -->
            <div class="row mt-n5 pt-n5" id="parcoursPro">
                <div class="col-1 col-md-2 col-lg-3">
                    <p>
                        
                    </p>
                </div>
                <div class="col-10 col-md-8 col-lg-6" id="__portfolio">
                    <div class="jumbotron
                    d-flex justify-content-center align-items-center">
                        <h1 class="display-3">Portfolio</h1>
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
                <div class="col-12 col-md-4 col-lg-4 
                d-flex align-items-center justify-content-center" id="__projet_1">
                    <div class="bg-image ripple" data-mdb-ripple-color="light">
                        <img src="img/andrew-neel-1-29wyvvLJA-unsplash.jpg" class="w-100" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="d-flex flex-column 
                            justify-content-center align-items-center h-100 text-center">
                              <p class="text-white mb-0"><h3>Quelle est ma destination</h3></p>
                              <p class="text-white m-n2 p-n2"><h3>
                                  <i class="fab fa-python"></i>
                                  <i class="fab fa-html5"></i>
                                  <i class="fab fa-css3-alt"></i>
                                </h3></p>
                            </div>
                          </div>
                          <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                          </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4
                d-flex align-items-center justify-content-center" id="__projet_2">
                    <div class="bg-image ripple" data-mdb-ripple-color="light">
                        <img src="img/chuttersnap-BNBA1h-NgdY-unsplash.jpg" class="w-100" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="d-flex flex-column 
                            justify-content-center align-items-center h-100 text-center
                            mt-3 pt-3 ">
                                <p class="text-white mb-0"><h3>Gestion des Stocks</h3></p>
                                <p class="text-white m-n2 p-n2"><h3> 
                                    <i class="fab fa-python"></i>
                                    <i class="fab fa-html5"></i>
                                    <i class="fab fa-css3-alt"></i>
                                    <i class="fab fa-js"></i>
                                </h3></p>
                            </div>
                          </div>
                          <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                          </div>
                        </a>
                    </div>

                </div>
                <div class="col-12 col-md-4 col-lg-4
                d-flex align-items-center justify-content-center" id="__projet_3">
                    <div class="bg-image ripple" data-mdb-ripple-color="light">
                        <img src="img/michael-dziedzic-dSyhpTGhNHg-unsplash.jpg" class="w-100" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="d-flex flex-column 
                            justify-content-center align-items-center h-100 text-center
                            mt-3 pt-3">
                                <p class="text-white mb-0"><h3>Approximation de Pi</h3></p>
                                <p class="text-white m-n2 p-n2"><h3><i class="fab fa-python"></i></h3></p>
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
            <div class="row mt-3 ms-3 me-3 pt-3 ps-3 pe-3" id="portfolio">
                <div class="col-12 col-md-4 col-lg-4 
                d-flex align-items-center justify-content-center" id="__projet_1">
                    <div class="bg-image ripple" data-mdb-ripple-color="light">
                        <img src="img/lucas-santos-Qdvm-Qr1FYw-unsplash.jpg" class="w-100" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="d-flex flex-column 
                            justify-content-center align-items-center h-100 text-center
                            mt-3 pt-3">
                                <p class="text-white mb-0"><h3>Projets Arduino</h3></p>
                                <p class="text-white m-n2 p-n2"><h3>C/C++</h3></p>
                            </div>
                          </div>
                          <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                          </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4
                d-flex align-items-center justify-content-center" id="__projet_2">
                    <div class="bg-image ripple" data-mdb-ripple-color="light">
                        <img src="img/brett-jordan-94GiZLiWD8Y-unsplash.jpg" class="w-100" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="d-flex flex-column 
                            justify-content-center align-items-center h-100 text-center
                            mt-3 pt-3">
                                <p class="text-white mb-0"><h3>Le Pendu</h3></p>
                                <p class="text-white m-n2 p-n2"><h3>C</h3></p>
                            </div>
                          </div>
                          <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                          </div>
                        </a>
                    </div>

                </div>
                <div class="col-12 col-md-4 col-lg-4
                d-flex align-items-center justify-content-center" id="__projet_3">
                    <div class="bg-image ripple" data-mdb-ripple-color="light">
                        <img src="img/anete-lusina-zwsHjakE_iI-unsplash.jpg" class="w-100" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                            <div class="d-flex flex-column 
                            justify-content-center align-items-center h-100 text-center
                            mt-3 pt-3">
                                <p class="text-white mb-0"><h3>A venir</h3></p>
                                <p class="text-white m-n2 p-n2"><h3>
                                    <i class="fab fa-react"></i>
                                    <i class="fab fa-python"></i>
                                </h3></p>
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
            <div class="row m-2 p-2" id="parcoursPro">
                <div class="col-1 col-md-2 col-lg-3">
                    <p>
                        
                    </p>
                </div>
                <div class="col-10 col-md-8 col-lg-6" id="__cv">
                    <div class="jumbotron">
                        <h1 class="display-3">Parcours professionel</h1>
                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class="my-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.  
                        </p>
                    </div>
                </div>
                <div class="col-1 col-md-2 col-lg-3">
                    <p>
                        
                    </p>
                </div>
            </div>
            <!--Parcours professionel-->

            

            <!-- Valeurs -->
            <div class="row mt-2 pt-2" id="valeurs">
                <!-- Carousel wrapper -->
                <div
                id="carouselBasicExample"
                class="carousel slide carousel-fade"
                data-mdb-ride="carousel"
                >
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        <button
                            type="button"
                            data-mdb-target="#carouselBasicExample"
                            data-mdb-slide-to="0"
                            class="active"
                            aria-current="true"
                            aria-label="Slide 1"
                        ></button>
                        <button
                            type="button"
                            data-mdb-target="#carouselBasicExample"
                            data-mdb-slide-to="1"
                            aria-label="Slide 2"
                        ></button>
                        <button
                            type="button"
                            data-mdb-target="#carouselBasicExample"
                            data-mdb-slide-to="2"
                            aria-label="Slide 3"
                        ></button>
                    </div>

                    <!-- Inner -->
                    <div class="carousel-inner">
                        <!-- Single item -->
                        <div class="carousel-item active">
                            <img
                            src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                            class="d-block w-100"
                            alt="..."
                            />
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Première valeur</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>

                        <!-- Single item -->
                        <div class="carousel-item">
                            <img
                            src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg"
                            class="d-block w-100"
                            alt="..."
                            />
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Deuxième valeur</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>

                        <!-- Single item -->
                        <div class="carousel-item">
                            <img
                            src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
                            class="d-block w-100"
                            alt="..."
                            />
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Troisième valeur</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Inner -->

                    <!-- Controls -->
                    <button
                    class="carousel-control-prev"
                    type="button"
                    data-mdb-target="#carouselBasicExample"
                    data-mdb-slide="prev"
                    >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button
                    class="carousel-control-next"
                    type="button"
                    data-mdb-target="#carouselBasicExample"
                    data-mdb-slide="next"
                    >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- Carousel wrapper -->
            </div>
            <!--Valeurs-->
            <!-- CV -->
            <div class="row mt-2 pt-2 mb-2 pb-2 ms-5 ps-5 me-5 pe-5" 
            id="parcoursPro">
                <div class="col-12 col-md-12 col-lg-6" id="__cv">
                    <div class="jumbotron">
                        <h1 class="display-3">Curriculum vitae</h1>
                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class="my-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.  
                        </p>
                    </div>
                </div>
                <div class="col-0 col-md-0 col-lg-1">
                    <p>
                       
                    </p>
                </div>
                <div class="col-12 col-md-12 col-lg-5
                d-flex align-items-center justify-content-center">
                    <div class="card text-center">
                        <div class="card-header">
                            Si vous le souhaitez, vous pouvez...
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Télécharger mon Curriculum vitae</h5>
                          <p class="card-text">En cliquant sur le bouton ci-dessous:</p>
                          <a href="#" class="btn btn-primary">Télécharger</a>
                        </div>
                        <div class="card-footer text-muted">
                          Mis à jour le 28/11/2021
                        </div>
                      </div>
                </div>
            </div>
            <!--CV-->

            <!-- Footer -->
            <?php include("footer.php");?>
            <!-- Footer -->
        
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <!-- MDB -->
        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
        ></script>
        <script src="main.js"></script>
    </body>
</html>
