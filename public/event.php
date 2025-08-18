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

$WebPage = new WebPage("Evènement - $eventName");
$WebPage -> appendCssUrl("style/event-card.css");

$affiche = "<img src='affiche.php' alt='cover'>";

if ($idAffiche !== NULL){
    $affiche = "<img src='affiche.php?afficheId={idAffiche}' alt='cover'>";
}

$WebPage->appendContent("<h1>{$eventName} - {$eventDate->format('d/m/Y')}</h1>
                {$affiche}
                <div class='description'>
                    {$eventDesc}
                </div>");

echo $WebPage->toHTML();