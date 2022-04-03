<?php
   session_start();
   if(isset($_POST['email']) && isset($_POST['password'])) {

      // connexion à la base de données
      $db_username = 'root';
      $db_password = '';
      $db_name     = 'nouveau_regard';
      $db_host     = 'localhost';

      $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
             or die('Erreur durant la connexion à la base de donnée');

      // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars pour éliminer toute attaque de type injection SQL et XSS
      $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
      $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));

      if($email !== "" && $password !== "") {
          $requete = "SELECT count(*) FROM user where 
                email = '".$email."' and password = '".$password."' ";
          $exec_requete = mysqli_query($db,$requete);
          $reponse = mysqli_fetch_array($exec_requete);
          $count = $reponse['count(*)'];
          if($count!=0) { // nom d'utilisateur et mot de passe corrects
             $_SESSION['email'] = $email;
             header('Location: /index2.html');
          }
          else {
             header('Location: connexion.html?erreur=1'); // utilisateur ou mot de passe incorrect
          }
      }
      else {
         header('Location: connexion.html?erreur=2'); // utilisateur ou mot de passe vide
      }
   }
   else {
      header('Location: connexion.html');
   }
   mysqli_close($db); // fermer la connexion
?>