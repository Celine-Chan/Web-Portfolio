
<?php

    require_once 'controller/controller_index.php';

?>


<div id="Contacts"></div>

<footer class="bg-dark text-center text-white">
                <!-- Grid container -->
                <div class="container p-4">
                <!-- Section: Social media -->
                <section class="mb-5">
                    <h1 id = "titresParties">Contacts</h1>

                    <!-- Google -->
                    <button onclick="afficheFormulaire()" class="btn btn-outline-light btn-floating m-1 " role="button"
                    ><i class="far fa-envelope"></i
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

        