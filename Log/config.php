<?php
    try{
        $dbco = new PDO('mysql:host=localhost;dbname=nouveau_regard','root','3243');
    }catch(Exception $e){
        die('Erreur' .$e->getMessage());
    }
?>