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
            Inscription
        </title>
    </head>

    <body class="d-flex flex-column min-vh-100 bg-grey bg-opacity-10 text-light" >
        <div style="min-height: 100vh;  background-color: rgba(51, 51, 51, 0.9);">
          <header class="container-fluid align-items-center mt-2 mb-4" style="height: 10vh;">
            <div class="d-flex ml-3 flex-column ">
              <div class="row justify-content-around">
                <a href="../index2.php"><h3 class="masthead-brand text-decoration-none text-light">Accueil</h3></a>
                <div class="row">
                  <nav class="nav nav-masthead justify-content-center ml-2">
                    <b><a class="nav-link nav-item text-light" href="../pages/activites.php">Activités</a></b>
                    <b><a class="nav-link nav-item text-light" href="../pages/nouveautes.php">Nouveautés</a></b>
                    <b><a class="nav-link nav-item text-light" href="../pages/evenements.php">Événements</a></b>
                    <b><a class="nav-link nav-item text-light" href="../pages/dons.php">Dons</a></b>
                    <b><a class="nav-link nav-item text-light" href="../pages/contact.php">Contact</a></b>
                  </nav>
                </div>
              </div>
            </div>
          </header>

          <div class="container" style="min-height: 90vh;">
            <div class="row w-75">
              <div class="col-12 mb-4">
                <h1>Inscription</h1>
              </div>
              <form method="post" action="../Log/inscription_form.php">
                <div class="col-12 mb-3">
                  <label class="form-label" for="nom">Nom</label><br>
                  <input class="form-control" type="text" id="nom" name="nom" placeholder="Nom" required>
                </div>
                <div class="col-12 mb-3">
                  <label class="form-label" for="prénom">Prénom</label><br>
                  <input class="form-control" type="text" id="prenom" name="prenom" placeholder="Prénom" required>
                </div>
                <div class="col-12 mb-3">
                  <label class="form-label" for="email">E-mail</label><br>
                  <input class="form-control" type="text" id="email" name="email" placeholder="mon-email@mail.com" required>
                </div>
                <div class="col-12 mb-3">
                  <label class="form-label" for="motdepasse">Mot de passe (8 caractères minimum)</label><br>
                  <div class="input-group">
                    <input class="form-control" type="password" id="motdepasse" name="motdepasse" placeholder="Mot de passe" min-length="8" required>
                    <div class="input-group-append">
                      <button type="button" class="btn btn-outline-secondary" onclick="showPassword()"><img id="imgmdp" src="../photo/oeil1.png" width="25" height="20"></button>
                    </div> 
                  </div>
                </div>
                <div class="col-12 mb-3">
                  <label class="form-label" for="Remotdepasse">Répétez le mot de passe</label><br>
                  <div class="input-group">
                    <input class="form-control" type="password" id="remotdepasse" name="remotdepasse" placeholder="Mot de passe" min-length="8" required>
                    <div class="input-group-append">
                      <button type="button" class="btn btn-outline-secondary" onclick="showPassword2()"><img id="reimgmdp" src="../photo/oeil1.png" width="25" height="20"></button>
                    </div> 
                  </div>
                </div>
                <div class="col-12" style="margin-top: 4vh;">
                  <button type="submit"  class="btn btn-secondary" name="submitInscri">S'inscrire</button>
                </div>
              </form>
              <div class="col-12 mt-4">
                Déjà un compte ?<br> <a href="./connexion.php" >Connectez vous</a>
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
        </video>

        <!-- Script necessaire a bootstrap -->
        <script src="../js/function.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>