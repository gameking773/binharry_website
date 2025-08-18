<?php
declare(strict_types=1);

use Html\WebPage;

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
else{
    $search = htmlspecialchars($_GET["search"]);

    if (empty($search)) {
        header('Location: index.php');
        exit();
    }

    $webpage = new WebPage("Résultat de la recherche : $search");

    if ($search == "sandron") {
        $webpage->appendContent(<<<HTML
        <style>
            img{
            width : 100%;
            height : 100%;
            }
        </style>
        <a href="https://iut-info.univ-reims.fr/users/sandron/restricted/">
            <img src='img/sandron.gif'>
        </a>
        HTML);
    }
    else {
        $webpage->appendContent("<p>Nothing to see here, try again</p>");
    }

    echo $webpage->toHtml();
}