<?php
    try{
        $dbco = new PDO('mysql:host=localhost;dbname=nouveau_regard','root','');
    }catch(Exception $e){
        die('Erreur' .$e->getMessage());
    }
?>