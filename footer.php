
<?php
require_once 'controller/controller_index.php';

header('Content-type: text/html; charset=UTF-8');
$errors = [];


$name = 'Formulaire de contact ' . $_POST['lastname'] . ' ' . $_POST['firstname'];
$message = $_POST['message'];
$headers = 'FROM : ' . $_POST['mail'];
$headers .= "\nContent-Type: text/plain; charset=iso-8859-1"; // Type MIME

mail('jeanbaptiste.theroulde@gmail.com', $name, $message, $headers);

if ($_POST['lastname']!= "" && $_POST['firstname']!= "" &&
    $_POST['mail']!= "" && $_POST['message']!= "") {

    ?>

        <script>
            alert("Merci ! Votre email a bien été envoyé !");
        </script>

    <?php
    }

?>
      
<footer class="bg-dark text-center text-white" id="Contacts">
                <!-- Grid container -->
                <div class="container p-4">
                <!-- Section: Social media -->
                <section class="mb-5">
                    <h3>Contacts</h3>
                    <!-- Google -->
                    <button class="btn btn-outline-light btn-floating m-1 " role="button"
                    id="toggle"><i class="far fa-envelope"></i
                    ></button>
                      
                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/jeanbaptistetheroulde/" role="button"
                    ><i class="fab fa-linkedin-in"></i
                    ></a>
            
                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/J-BT" role="button"
                    ><i class="fab fa-github"></i
                    ></a>
                </section>
                <!-- Section: Social media -->

                <!-- Formulaire contact -->

                <div id="contactAnchor"></div>

                <div class="contact mt-5 pb-5 d-flex justify-content-center" >

                    <div class="container col-10 col-md-10 col-xl-6" id="formulaireContact"
                    >

                        <h2 class="text-light pt-5 titleh2 text-center">Contactez-moi</h2>

                            <form action="index.php" method="POST" class="mt-5">

                                <div class="mb-3">
                                    <label for="lastname" class="form-label text-light">Votre nom :</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" 
                                    placeholder="ex : Doe" value=""
                                    onfocus="this.value=''">
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['lastname']) ? $errorMessages['lastname'] : '' ?></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="firstname" class="form-label text-light">Votre prénom :</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control" 
                                    placeholder="ex : John" value=""
                                    onfocus="this.value=''">
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['firstname']) ? $errorMessages['firstname'] : '' ?></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="mail" class="form-label text-light">Votre adresse mail :</label>
                                    <input type="email" id="mail" name="mail" class="form-control" 
                                    placeholder="name@gmail.com" value=""
                                    onfocus="this.value=''">
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['mail']) ? $errorMessages['mail'] : '' ?></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label text-light">Votre message</label>
                                    <textarea class="form-control" id="message" rows="6" 
                                    name="message"></textarea
                                    onfocus="this.value=''">
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['message']) ? $errorMessages['message'] : '' ?></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary" type="submit" 
                                    name="submit" id="buttonSubmit">Envoyer</button>
                                </div>

                            </form>
                    </div>
                </div>

                <!-- Formulaire contact -->

            
                <!-- Section: Links -->
                <section class="liens_utiles mt-5">
                    <!--Grid row-->
                    <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Programmation</h5>
            
                        <ul class="list-unstyled mb-0">
                        <li>
                            <a href="https://www.w3schools.com/"
                            class="text-white">W3Schools</a>
                            <i class="fab fa-html5"></i>
                            <i class="fab fa-css3"></i>
                            <i class="fab fa-js"></i>
                            <i class="fab fa-python"></i>
                            <i class="fab fa-php"></i>
                        </li>
                        <li>
                            <a href="https://stackoverflow.com/"
                            class="text-white">Stackoverflow</a>
                            <i class="fas fa-globe"></i>
                        </li>
                        <li>
                            <a href="https://realpython.com/"
                            class="text-white">RealPython</a>
                            <i class="fab fa-python"></i>
                        </li>
                        <li>
                            <a href="https://openclassrooms.com/fr/"
                            class="text-white">Openclassrooms</a>
                            <i class="fab fa-python"></i>
                            <i class="fab fa-php"></i>
                            <i class="fab fa-js"></i>
                            
                        </li>
                        </ul>
                    </div>
                    <!--Grid column-->
            
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Voyages</h5>
            
                        <ul class="list-unstyled mb-0">
                        <li>
                            <a href="http://kansainobouken.celinelouvel.fr/index.php"
                            class="text-white">Kansai no Bouken</a>
                            <i class="flag flag-france"></i>
                        </li>
                        <li>
                            <a href="https://www.skyscanner.fr/" 
                            class="text-white">Skyscanner</a>
                            <i class="flag flag-united-kingdom"></i>
                        </li>
                        <li>
                            <a href="https://gaijinpot.com/" 
                            class="text-white">GaijinPot</a>
                            <i class="flag flag-japan"></i>
                            <i class="flag flag-united-kingdom"></i>
                        </li>
                        <li>
                            <a href="https://pvtistes.net/"
                            class="text-white">Pvtistes</a>
                            <i class="flag flag-france"></i>
                        </li>
                        </ul>
                    </div>
                    <!--Grid column-->
            
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Etude des langues</h5>
            
                        <ul class="list-unstyled mb-0">
                        <li>
                            <a href="https://jisho.org/"
                            class="text-white">Jisho </a>  
                            <i class="flag flag-japan"></i>
                        </li>
                        <li>
                            <a href="https://www.wordreference.com/" 
                            class="text-white">WordReference.com </a> 
                            <i class="flag flag-united-kingdom"></i>
                        </li>
                        <li>
                            <a href="https://japanesetest4you.com/" 
                            class="text-white">jtest4you </a>
                            <i class="flag flag-japan"></i>
                        </li>
                        <li>
                            <a href="http://aqstream.com/jp" 
                            class="text-white">AQ Stream </a>
                            <i class="flag flag-japan"></i>
                        </li>
                        </ul>
                    </div>
                    <!--Grid column-->
            
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Karate</h5>
            
                        <ul class="list-unstyled mb-0">
                        <li>
                            <a href="https://www.ffkarate.fr/"
                            class="text-white">FFKAMA</a>
                            <i class="flag flag-france"></i>
                        </li>
                        <li>
                            <a href="https://www.jkf.ne.jp/"
                            class="text-white">JKF</a>
                            <i class="flag flag-japan"></i>
                        </li>
                        <li>
                            <a href="https://www.osaka-karate.jp/dojo-list.html"
                            class="text-white">Osaka Karatedo Federation</a>
                            <i class="flag flag-japan"></i>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/c/RafaelAghayevOfficialYouTubeChannel/playlists" class="text-white">Rafael Aghayev</a>
                            <i class="fab fa-youtube"></i>
                        </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->
                </div>
                <!-- Grid container -->
            
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright:
                <a class="text-white" href="https://github.com/J-BT">Jean-Baptiste Theroulde</a>
                </div>
                <!-- Copyright -->
            </footer>

        