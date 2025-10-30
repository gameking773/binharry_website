<?php

declare(strict_types=1);

use Entity\Exception\EntityNotFoundException;
use Entity\Event;
use Html\WebPage;

if (!isset($_GET["eventId"]) || !is_numeric($_GET["eventId"])) {
    header('Location: evenements.php');
    exit();
}

$eventId = (int) $_GET["eventId"];

try {
    $event= Event::findById($eventId);
} catch (EntityNotFoundException $error) {
    http_response_code(404);
    exit();
}

$eventName = $event -> getEventNom();
$eventDate = $event -> getEventDate();
$eventDesc = $event -> getEventDesc();

$WebPage = new WebPage("Evènement - $eventName");
$WebPage -> appendCssUrl("style/event.css");

$affiche = "<img src='affiche.php' alt='cover'>";

$affiche = $event->getAfficheId() != null
    ? "<img src='affiche.php?afficheId={$event->getAfficheId()}' alt='cover'>"
    : "";

$WebPage->appendContent(<<<HTML
    <div class='event_main'>
        <div class='event_left'>
            {$affiche}
        </div>
        <div class='event_right'>
            <div class='event_right_top'>
                <h2>
                    {$eventName}
                </h2>
                <h3>
                    {$eventDate->format('d/m/Y')}
                </h3>
            </div>
            <p>
                {$eventDesc}
            </p>
        </div>
    </div>
HTML);

echo $WebPage->toHTML();