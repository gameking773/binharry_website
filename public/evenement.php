<?php

declare(strict_types=1);

use Entity\Exception\EntityNotFoundException;
use Html\WebPage as WebPage;
use Entity\Event as Event;
use Entity\Affiche as Affiche;

$eventId = intval($_GET["eventId"]);

if (empty($eventId)) {
    header('Location: evenements.php');
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
$idAffiche = $event->getAfficheId();


$WebPage = new WebPage("Evènement - $eventName");
$WebPage -> appendCssUrl("style/event.css");

$affiche = "<img src='affiche.php' alt='cover'>";

if ($idAffiche !== NULL) {
    $affiche = "<img src='affiche.php?afficheId={$idAffiche}' alt='cover'>";
}

$WebPage->appendContent("<div class='event_main'>
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
");

echo $WebPage->toHTML();