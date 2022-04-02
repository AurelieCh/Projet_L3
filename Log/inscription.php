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
            


            try{
                //On se connecte à la BDD
                $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //On insère les données reçues
                if($motdepasse == $remotdepasse){
                $sth = $dbco->prepare("INSERT INTO user(nom, prenom, email, password,date_inscription)
                                       VALUES(:nom, :prenom, :email, :password,SYSDATE())");
                
                $sth->bindParam(':nom',$nom);
                $sth->bindParam(':prenom',$prenom);
                $sth->bindParam(':email',$email);
                $sth->bindParam(':password',$motdepasse);
                $sth->execute();
        
                //On renvoie l'utilisateur vers la page de remerciement
                header("Location:thx.html");
                }else{
                    header("Location : inscription.html");
                }
            }
            catch(PDOException $e){
                echo 'Erreur : '.$e->getMessage();
            }
        ?>
    </body>
</html>