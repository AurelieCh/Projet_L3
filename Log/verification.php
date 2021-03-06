
<?php
   session_start();
      require_once 'config.php';




   if(isset($_POST['email']) && isset($_POST['motdepasse'])) {

      // connexion à la base de données

      // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars pour éliminer toute attaque de type injection SQL et XSS
      $email = htmlspecialchars($_POST['email']); 
      $password = htmlspecialchars($_POST['motdepasse']);


      $check = $dbco->prepare('SELECT email, password FROM user WHERE email = ?');
      $check->execute(array($email));
      $data = $check->fetch();
      $row = $check->rowCount();

      if($row == 1){
         if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $password = hash('sha256',$password);
            $data['password'] = hash('sha256',$data['password']);
            if($data['password'] === $password){
               $_SESSION['email'] = $data['email'];
               header("Location: ../index2.php");
            }else header('Location: connexion.php?login_err=password');
         }else header('Location: connexion.php?login_err=email');
      }else header('Location: connexion.php?login_err=already');
   }else header('Location: connexion.php');
?> 
