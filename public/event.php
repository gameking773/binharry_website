<?php

declare(strict_types=1);

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

$WebPade = new WebPage("Evènement - $eventName");

