<!DOCTYPE html>

<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            
            require_once('../Log/config.php');
            $serveur = "localhost";
            $dbname = "nouveau_regard";
            $user = "root";
            $pass = "";


            $prenom = $_POST["prenom"];
            $nom = $_POST["nom"];
            $email = $_POST["email"];
            $motdepasse = $_POST["motdepasse"];
            $remotdepasse = $_POST["remotdepasse"];

            $check = $dbco->query ('SELECT id FROM user WHERE email = "'.$_POST['email'].'"');
            $row = $check->rowCount();

            /*  Requête pour vérifier si l'email existe déjà dans la base de données.
            $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
             or die('Erreur durant la connexion à la base de donnée');
            
            $requete = "SELECT count(*) FROM user where 
                    email = '".$email."' ";
            $exec_requete = mysqli_query($db,$requete);
            $reponse = mysqli_fetch_array($exec_requete);
            $count = $reponse['count(*)'];
            */
            
            /** Si le mot de passe est différent du mot de passe répété, ou alors si son nombre de caractères est inférieur à 8,
             *  alors on réactualise la saisie jusqu'à ce qu'elle soit valable pour la base de données.
            */
            while(($motdepasse != $remotdepasse || strlen($motdepasse)<8 || $row!=0)){
                if($motdepasse != $remotdepasse){
                    header("Location : inscription.php?erreur=1"); //  Les mots de passe ne correspondent pas
                }
                if(strlen($motdepasse)<8){
                    header("Location : inscription.php?erreur=2"); //  Le mot de passe est trop court.
                }
                if($row!=0){
                    header("Location : inscription.php?erreur=3");
                }
                //echo "Les mots de passe ne correspondent pas, ou le mot de passe est trop court.";
                $prenom = $_POST["prenom"];
                $nom = $_POST["nom"];
                $email = $_POST["email"];
                $motdepasse = $_POST["motdepasse"];
                $remotdepasse = $_POST["remotdepasse"];
                $check = $dbco->query ('SELECT id FROM user WHERE email = "'.$_POST['email'].'"');
                $row = $check->rowCount();
            }


                //On insère les données reçues
                $sth = $dbco->prepare("INSERT INTO user(nom, prenom, email, password,date_inscription)
                                    VALUES(:nom, :prenom, :email, :password,SYSDATE())");
                
                $sth->bindParam(':nom',$nom);
                $sth->bindParam(':prenom',$prenom);
                $sth->bindParam(':email',$email);
                $sth->bindParam(':password',$motdepasse);
                $sth->execute();
        
                //On renvoie l'utilisateur vers la page de remerciement
                header("Location:thx_inscription.php");

        ?>
    </body>
</html>