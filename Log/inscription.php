<!DOCTYPE html>

<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            
            $serveur = "localhost";
            $dbname = "nouveau_regard";
            $user = "root";
            $pass = "";

            $prenom = $_POST["prenom"];
            $nom = $_POST["nom"];
            $email = $_POST["email"];
            $motdepasse = $_POST["motdepasse"];
            $remotdepasse = $_POST["remotdepasse"];

            /*  Requête pour vérifier si l'email existe déjà dans la base de données.

            $requete = "SELECT count(*) FROM user where 
                    email = '".$email."' ";
            $exec_requete = mysqli_query($db,$requete);
            $reponse = mysqli_fetch_array($exec_requete);
            $count = $reponse['count(*)'];
            */
            
            /** Si le mot de passe est différent du mot de passe répété, ou alors si son nombre de caractères est inférieur à 8,
             *  alors on réactualise la saisie jusqu'à ce qu'elle soit valable pour la base de données.
            */
            while(($motdepasse != $remotdepasse || strlen($motdepasse)<8)){ //  || ($email == "" || $count!=0)
                header("Location : inscription.html");
                $prenom = $_POST["prenom"];
                $nom = $_POST["nom"];
                $email = $_POST["email"];
                $motdepasse = $_POST["motdepasse"];
                $remotdepasse = $_POST["remotdepasse"];
            }
            
                try{
                    //On se connecte à la BDD
                    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
                    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    //On insère les données reçues
                    $sth = $dbco->prepare("INSERT INTO user(nom, prenom, email, password,date_inscription)
                                        VALUES(:nom, :prenom, :email, :password,SYSDATE())");
                    
                    $sth->bindParam(':nom',$nom);
                    $sth->bindParam(':prenom',$prenom);
                    $sth->bindParam(':email',$email);
                    $sth->bindParam(':password',$motdepasse);
                    $sth->execute();
            
                    //On renvoie l'utilisateur vers la page de remerciement
                    header("Location:thx.html");
                }
                catch(PDOException $e){
                    echo 'Erreur : '.$e->getMessage();
                }
        ?>
    </body>
</html>