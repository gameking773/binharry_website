<?php
declare(strict_types=1); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et nettoyage des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Remplissage de l'entête du mail
    $to = "bdebinharry@gmail.com"; 
    $subject = "Nouveau formulaire";
    $headers = "De: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Mail
    $body = "You have received a new message:\n\n";
    $body .= "Nom: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Envoi du mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Nous avons bien reçu votre message. Merci de nous avoir contactés, $name.";
    } else {
        echo "Oopsie, le message ne s'est pas envoyé. Essaie encore.";
    }
}