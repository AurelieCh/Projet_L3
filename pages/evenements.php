<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Methode d'encodage qui permet d'afficher les symboles correctement -->
        <meta charset="UTF-8">
        <!-- Responsive de Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap + mon css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>
            Événements
        </title>
    </head>

    <body class="d-flex flex-column min-vh-100 bg-grey bg-opacity-10">
      <div style="min-height: 100vh;  background-color: rgba(51, 51, 51, 0.9);">
        <header class="container-fluid align-items-center mt-2" style="height: 10vh; margin-bottom: 8vh !important;">
          <div class="d-flex ml-3 flex-column ">
            <div class="row justify-content-between">
              <a href="../index2.php"><h3 class="masthead-brand text-decoration-none text-light">Accueil</h3></a>
              <div class="row">
                <nav class="nav nav-masthead justify-content-center ml-2">
                  <b><a class="nav-link nav-item text-light" href="./activites.php">Activités</a></b>
                  <b><a class="nav-link nav-item text-light" href="./nouveautes.php">Nouveautés</a></b>
                  <b><a class="nav-link nav-item text-light" href="./evenements.php">Événements</a></b>
                  <b><a class="nav-link nav-item text-light" href="./dons.php">Dons</a></b>
                  <b><a class="nav-link nav-item text-light" href="./contact.php">Contact</a></b>
                </nav>
              </div>
              <div class="d-md-flex mr-2 flex-column align-items-end">
                <a href="../Log/inscription.php" class="text-light text-decoration-none">Inscription</a> 
                <a href="../Log/connexion.php" class="text-light text-decoration-none">Connexion</a>
              </div>
            </div>
          </div>
        </header>

        <!--Test bouton admin caché, à arranger avec symphony-->
        <div id="boutonAdmin1" style="align-items: flex-start; margin-bottom: 4vh; margin-left: 6%; display: none;">
          <button type="submit"  class="btn btn-primary">Ajouter un événement</button>
        </div>

        <!--Pour toutes les cartes, ce sera max 120 caractères, au moment de l'implémentation de la page upload-->
        <div class="row" style="margin-left: 5%; margin-bottom: 5%; max-width: 95%;">
          <div class="col-sm-6 col-xl-4 mb-4 mt-4">
            <div class="card" style="width: 75%;">
              <img class="card-img-top" src="../photo/PhotoAsso/evenements/bourseJouet/prepaJouet.jpg" style="height: 18rem;" alt="Image bourse aux jouets">
              <div class="card-body">
                <h5 class="card-title">Bourse aux jouets</h5>
                <p class="card-text" style="height: 6rem">Mise en place d'une bourse aux jouets à l'occasion de Noël !</p>
                <a href="https://www.facebook.com/Association-Nouveau-Regard--258870411437832/photos/pcb.909045606420306/909043493087184/" class="btn btn-secondary" target="_blank">Plus de photos</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4 mb-4 mt-4">
            <div class="card" style="width: 75%;">
              <img class="card-img-top" src="../photo/PhotoAsso/evenements/journeeDeLaFemme/Manucure2.jpg" style="height: 18rem" alt="Image journee de la femme">
              <div class="card-body">
                <h5 class="card-title">Journée de la femme</h5>
                <p class="card-text" style="height: 6rem">Des activités pour la journée de la femme, manucure, massage, etc.</p>
                <a href="https://www.facebook.com/Association-Nouveau-Regard--258870411437832/photos/pcb.982992192358980/982991922359007/" class="btn btn-secondary" target="_blank">Plus de photos</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4 mb-4 mt-4">
            <div class="card" style="width: 75%;">
              <img class="card-img-top" src="../photo/PhotoAsso/evenements/marcheNoel/marcheNoel2021-2.jpg" style="height: 18rem" alt="Image marché de noël">
              <div class="card-body">
                <h5 class="card-title">Marché de Noël</h5>
                <p class="card-text" style="height: 6rem">Marché de Noël en collaboration avec la Mairie.</p>
                <a href="https://www.facebook.com/Association-Nouveau-Regard--258870411437832/photos/938302690161264" class="btn btn-secondary" target="_blank">Plus de photos</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4 mb-4 mt-4">
            <div class="card" style="width: 75%;">
              <img class="card-img-top" src="../photo/PhotoAsso/evenements/repasAmitie/RepasAmitie2.jpg" style="height: 18rem" alt="Image repas amitie">
              <div class="card-body">
                <h5 class="card-title">Repas de l'amitié</h5>
                <p class="card-text" style="height: 6rem">Un repas confectionné par les adhérents les jours précédents. </p>
                <a href="./Repas_Amitie.php" class="btn btn-secondary">Plus d'infos</a>
              </div>
            </div>
          </div>
        </div>

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
        <!-- https://assets.codepen.io/6093409/river.mp4 -->
      </video>

      <!-- Script necessaire a bootstrap -->
      <script src="../js/function.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>