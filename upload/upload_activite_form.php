<!DOCTYPE html>

<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            
            require_once '../Log/config.php';


            $titre = $_POST["titre"];
            $description = $_POST["description"];
            $corps = $_POST["corps"];
            $photo = $_POST["photo"];

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
            while($titre =="" || $description=="" || $corps=="" || $photo==""){ //  || ($email == "" || $count!=0)
                header("Location : upload_activite.php?Up_err=Missing_arg"); //  Le mot de passe est trop court.
                //echo "Les mots de passe ne correspondent pas, ou le mot de passe est trop court.";
                $titre = $_POST["titre"];
                $description = $_POST["description"];
                $corps = $_POST["corps"];
                $photo = $_POST["photo"];
                $slug = $_POST["slug"];
            }
            
            try{
                //On se connecte à la BDD
                $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                if(isset($_SESSION['email'])){
                    $check = $dbco->query ('SELECT id FROM user WHERE email = "'.$_SESSION['email'].'"');
                    $data = $check->fetch();
                    $check2 = $dbco->query('SELECT id FROM admin WHERE user="'.$data['id'].'"');
                    $data2 = $check2->fetch();
                }
                //On insère les données reçues
                $sth = $dbco->prepare("INSERT INTO activite(titre, description, corps, photo,date_creation,admin,slug)
                                    VALUES(:titre, :description, :corps, :photo,SYSDATE(),:admin,:slug");
                
                $sth->bindParam(':titre',$titre);
                $sth->bindParam(':description',$description);
                $sth->bindParam(':corps',$corps);
                $sth->bindParam(':photo',$photo);
                $sth->bindParam(':admin',$data2->id);
                $sth->bindParam(':slug',$slug);
                $sth->execute();
        
                //On renvoie l'utilisateur vers la page de remerciement
                header("Location: article_ajoute.php");
            }
            catch(PDOException $e){
                echo 'Erreur : '.$e->getMessage();
            }
        ?>
    </body>
</html>