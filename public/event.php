<?php

declare(strict_types=1);

use Entity\Exception\EntityNotFoundException;
use Html\WebPage as WebPage;
use Entity\Event as Event;

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
$affiche = new \Entity\Affiche()->findById($idAffiche);
$afficheJpeg = $affiche -> getJpeg();

$webpage = new WebPage("Evènement - $eventName");

$webpage->appendContent(<<<HTML
<h1>{$eventName} - {$eventDate}</h1>
    <div class="content">
        <div class="affiche">{$afficheJpeg}</div>
        <div class="description">{$eventDesc}</div>
    </div>
HTML
);

echo $webpage->toHTML();