<?php

declare(strict_types=1);

use Entity\Exception\EntityNotFoundException;
use Html\WebPage as WebPage;
use Entity\Event as Event;
use Entity\Affiche as Affiche;

$eventId = intval($_GET["eventId"]);

if (empty($eventId)) {
    header('Location: events.php');
    exit();
}

try {
    $event= Event::findById($eventId);
} catch (EntityNotFoundException $error) {
    http_response_code(404);
    exit();
}

$eventName = $event -> getEventNom();
$eventDate = $event -> getEventDate();
$eventDesc = $event -> getEventDesc();
$idAffiche = $event -> getAfficheId();

$webpage = new WebPage("Evènement - $eventName");

$webpage->appendContent(<<<HTML
<h1>{$eventName} - {$eventDate->format('d/m/Y')}</h1>
HTML);

if ($idAffiche !== NULL){
    $webpage -> appendContent("\n\t\t\t\t<img src='affiche.php?afficheId={idAffiche}' alt='cover'>");
} else {
    $webpage -> appendContent("\n\t\t\t\t<img src='affiche.php' alt='cover'>");
}

$webpage->appendContent("\n\t\t\t\t<div class='description'>
                    {$eventDesc}
                </div>");

echo $webpage->toHTML();