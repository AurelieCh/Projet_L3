<?php

    $prenom = $_POST["nom"];
    $email = $_POST["email"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];

    if (isset($message)) {
        $retour = mail('ChevryAu@gmail.com', $sujet, $message, 'From: ' . $email); //test
        //asso.nouveauregard.shneider@gmail.com
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>