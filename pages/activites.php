<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Methode d'encodage qui permet d'afficher les symboles correctement -->
        <meta charset="UTF-8">
        <!-- Responsive de Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="tests.css">
        <!-- Bootstrap + mon css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>
            Activités
        </title>
    </head>
    
    <body class="d-flex flex-column min-vh-100">
      <div class="flex-grow-1 mh-100" style="background-color: rgba(51, 51, 51, 0.9);">
        <header class="container-fluid align-items-center mt-2" style="height: 10vh; margin-bottom: 8vh !important;">
          <div class="d-flex ml-3 flex-column ">
            <div class="row justify-content-between">
              <a href="../index2.php"><h3 class="masthead-brand text-decoration-none text-light">Accueil</h3></a>
              <div class="row">
            <nav class="nav nav-masthead justify-content-center ml-2">
              <b><a class="nav-link nav-item text-light" href="../pages/activites.php">Activités</a></b>
              <b><a class="nav-link nav-item text-light" href="../pages/nouveautes.php">Nouveautés</a></b>
              <b><a class="nav-link nav-item text-light" href="../pages/evenements.php">Événements</a></b>
              <b><a class="nav-link nav-item text-light" href="../pages/dons.php">Dons</a></b>
              <b><a class="nav-link nav-item text-light" href="../pages/contact.php">Contact</a></b>
            </nav>
          <?php
          if(isset($_SESSION['email'])){
            echo '</div>
                    <div class="d-md-flex mr-2 flex-column align-items-end">
                      <a href="../Log/deconnexion.php" class="text-light text-decoration-none">Déconnexion</a> 
                    </div>
                  </div>';
          }else{
            echo '</div>
                    <div class="d-md-flex mr-2 flex-column align-items-end">
                      <a href="../Log/inscription.php" class="text-light text-decoration-none">Inscription</a> 
                      <a href="../Log/connexion.php" class="text-light text-decoration-none">Connexion</a>
                    </div>
                  </div>';
          }
          ?>  
        </div>
        </header>

        <!--Test bouton admin caché, à arranger avec symphony-->
        <div id="boutonAdmin1" style="align-items: flex-start; margin-bottom: 4vh; margin-left: 6%; display: none;">
          <button type="submit"  class="btn btn-primary">Ajouter une activité</button>
        </div>

        <!--Pour toutes les cartes, ce sera max 120 caractères, au moment de l'implémentation de la page upload-->
        <div class="row" style="margin-bottom: 5%; margin-left: 5%; max-width: 95%;">
          <div class="col-sm-6 col-xl-4 mb-4 mt-4">
            <div class="card" style="width: 75%;">
              <img class="card-img-top" src="../photo/PhotoAsso/activites/Cuisine/Crepes.jpg" style="height: 15rem;" alt="Image cuisine">
              <div class="card-body">
                <h5 class="card-title">Cuisine</h5>
                <p class="card-text" style="height: 8rem">Activité cuisine, nous préparons tous ensemble un plat choisi au préalable, ou encore un plat pour un repas de l'amitié.</p>
                <a href="./Repas_Amitie.php" class="btn btn-secondary">Plus d'infos sur le repas de l'amitié</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4 mb-4 mt-4">
            <div class="card" style="width: 75%;">
              <img class="card-img-top" src="../photo/PhotoAsso/activites/Citoyenne/prepaMasque2.jpg" style="height: 15rem" alt="Image masque">
              <div class="card-body">
                <h5 class="card-title">Citoyen</h5>
                <p class="card-text" style="height: 8rem">Nous pratiquons une activité citoyenne quelle qu'elle soit comme la confection de masques.</p>
                <a href="https://www.facebook.com/Association-Nouveau-Regard--258870411437832/" class="btn btn-secondary" target="_blank">Notre page Facebook</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4 mb-4 mt-4">
            <div class="card" style="width: 75%;">
              <img class="card-img-top" src="../photo/PhotoAsso/activites/FormationNumerique/formaNum.jpg" style="height: 15rem" alt="Image formation numérique">
              <div class="card-body">
                <h5 class="card-title">Formation Numérique</h5>
                <p class="card-text" style="height: 8rem">Une activité pour apprendre à se servir d'internet et d'un ordinateur en toute sécurité.</p>
                <a href="#" class="btn btn-secondary">Tous les jeudis après-midi</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4 mb-4 mt-4">
            <div class="card" style="width: 75%;">
              <img class="card-img-top" src="../photo/PhotoAsso/activites/artsPlastiques/artPlastiqueNoel/prepaNoel.jpg" style="height: 15rem" alt="Image art plastique 2">
              <div class="card-body">
                <h5 class="card-title">Arts Plastiques</h5>
                <p class="card-text" style="height: 8rem">Une activité ludique pour les petits et les grands, différentes activités sont proposées en fonction de la période de l'année, etc. </p>
                <a href="#" class="btn btn-secondary">Plus d'infos</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4 mb-4 mt-4">
            <div class="card" style="width: 75%;">
              <img class="card-img-top" src="../photo/PhotoAsso/activites/Citoyenne/prepaMasque.jpg" style="height: 15rem" alt="Image art plastique 2">
              <div class="card-body">
                <h5 class="card-title">Couture</h5>
                <p class="card-text" style="height: 8rem">Nous pratiquons régulièrement de la couture, du trico, ou encore du point de croix, vous pouvez venir vous exercer avec nous !</p>
                <a href="#" class="btn btn-secondary">Plus d'infos</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Fais sans bootstrap
          <div class="row justify-content-center v">
            <div class="d-md-flex align-items-center rounded" style="background-color: rgb(255, 255, 255);">
              <div class="max-size">
                <div class="flex-shrink-0  m-5p">
                  <img class="mw-100 rounded" src="../photo/Association.jpg">
                </div>
              </div>
              <div class="flex-shrink-2 flex-grow-1" style="color: black;"> 
                <div class="m-5p">
                  <p>Titre</p>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis, at!</p>
                </div>
              </div>
            </div>
          </div>
          -->

        <footer class="text-center text-white" style="background-color: rgba(51, 51, 51, 0.9);">
          <div class="container p-4">
            <section class="mb-4">
              <p>
                L'association Nouveau Regard vous accueille tous les Mardis, Jeudis et Vendredis de 9h à 17h.
              </p>
            </section>
  
            <section class="d-flex justify-content-center">
              <div class="row">
                <div>
                  <h5 class="text-uppercase">Contact</h5>
                
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#!" class="text-white">Association Nouveau Regard</a>
                    </li>
                    <li>
                      <a href="#!" class="text-white">(+33) 6 88 50 62 75</a>
                    </li>
                    <li>
                      <a href="#!" class="text-white">asso.nouveauregard.schneider@mail.com</a>
                    </li>
                    <li>
                      <a href="#!" class="text-white">260 Rue Paul Bert (59124)</a>
                    </li>
                    <li>
                      <a href="https://www.facebook.com/Association-Nouveau-Regard--258870411437832/" target="_blank"><img id="imgfb" src="../photo/facebook.png" width="50" height="50" style="cursor:  pointer;"></a>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
        </footer>
        
      </div>
      <video id="background-video" autoplay loop muted style="height: 100vh; width: 100vw; object-fit: cover; position: fixed; left: 0; right: 0; top: 0; bottom: 0; z-index: -1;">
        <source src="https://ak.picdn.net/shutterstock/videos/1075600187/preview/stock-footage-collage-of-group-attractive-people-of-different-ages-and-multi-ethnic-close-up-montage-of-positive.webm" type="video/webm">
      </video> 

      <!-- Script necessaire a bootstrap -->
      <script src="../js/function.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
    </body>
</html>
