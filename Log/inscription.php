<?php
               
            if (isset($_POST['submit']))
            {
               
            $Nom = htmlspecialchars(trim($_POST['Nom']));
            $Prenom = htmlspecialchars(trim($_POST['Prenom']));
            $email = htmlspecialchars(trim($_POST['email']));
            $password = htmlspecialchars(trim($_POST['motdepasse']));
            $repeatpassword = htmlspecialchars(trim($_POST['remotdepasse']));
               
            if ($Nom&&$Prenom&&$email&&$password&&$repeatpassword)
                    {
                    if (strlen($password)>=8)
                        {
                            if ($password==$repeatpassword)
                            {
                        // On crypte le mot de passe
                            $password = md5($password);
             
             // on se connecte à MySQL et on sélectionne la base
                $c = new mysqli ("localhost","root","","utilisateurs");
              
             //On créé la requête
            $sql = "INSERT INTO newclient VALUES ('','$Nom','$Prenom','email','$password')";
              
                // On envoie la requête
            $res = $c->query($sql);
                   // on ferme la connexion
            mysqli_close($c);
              
            }else echo "Les mots de passe ne sont pas identiques";
            }else echo "Le mot de passe est trop court !";
            }else echo "Veuillez saisir tous les champs !";
               
            }   
?>