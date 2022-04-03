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
            Dons
        </title>
    </head>
    
    <body class="d-flex flex-column min-vh-100 text-light">
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

        <div class="container" style="height: 130vh;">
        <div id="smart-button-container">
          <div style="text-align: center"><label for="description"> </label><input type="text" name="descriptionInput" id="description" maxlength="127" value=""></div>
            <p id="descriptionError" style="visibility: hidden; color:red; text-align: center;">Please enter a description</p>
          <div style="text-align: center"><label for="amount"> </label><input name="amountInput" type="number" id="amount" value="" ><span> EUR</span></div>
            <p id="priceLabelError" style="visibility: hidden; color:red; text-align: center;">Please enter a price</p>
          <div id="invoiceidDiv" style="text-align: center; display: none;"><label for="invoiceid"> </label><input name="invoiceid" maxlength="127" type="text" id="invoiceid" value="" ></div>
            <p id="invoiceidError" style="visibility: hidden; color:red; text-align: center;">Please enter an Invoice ID</p>
          <div style="text-align: center; margin-top: 0.625rem;" id="paypal-button-container"></div>
        </div>
        <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=EUR" data-sdk-integration-source="button-factory"></script>
      </div> 

        <!--
        <div class="text-center" style="height: 81vh; margin-top: 5vh;">
          <form action="https://www.paypal.com/donate" method="post" target="_top">
            <input type="hidden" name="hosted_button_id" value="4KTQD4SH35WZ2" />
            <input type="image" src="../photo/paypalLogo.png" border="0" name="submit" title="PayPal - La manière la plus simple et rapide de faire un don. " alt="Image bouton dons" />
            <img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1" />
          </form>
        </div> -->
        <!--https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donate_LG.gif / ../photo/paypalLogo.png  / https://www.paypal.com/donate/4KTQD4SH35WZ2 -->

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

      <!--Mes scripts-->
      <script src="../js/function.js"></script>

      <!--Script Paypal-->
      <script src="../js/paypal.js"></script>

      <!-- Script necessaire a bootstrap -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
    </body>
</html>
