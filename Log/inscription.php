<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $serveur = "localhost";
            $dbname = "Base_de_Donnees_Nouveauregard";
            $user = "root";
            $pass = "3243";

            $id = uniqid();
            $prenom = $_POST["nom"];
            $nom : = $_POST["prenom"];
            $email : = $_POST["email"];
            $motdepasse : = $_POST["motdepasse"];

            try{
                //On se connecte à la BDD
                $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                //On insère les données reçu
                $sth = $dbco->prepare("INSERT INTO form(prenom, mail, age, sexe, pays)
                                       VALUES(:id, :nom, :prenom, :email, :motdepasse)");
                $sth->bindParam(':id',$id);
                $sth->bindParam(':nom',$nom);
                $sth->bindParam(':prenom',$prenom);
                $sth->bindParam(':email',$email);
                $sth->bindParam(':motdepasse',$motdepasse);
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