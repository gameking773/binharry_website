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

$WebPage = new WebPage("Evènement - $eventName");
$WebPage -> appendCssUrl("style/event.css");

$affiche = "<img src='affiche.php' alt='cover' class='affiche'>";

if ($idAffiche = $event -> getAfficheId() !== NULL){
    $affiche = "<img src='affiche.php?afficheId={idAffiche}' alt='cover' class='affiche'>";
}

$WebPage->appendContent("<div class='event_btop'></div>
                <div class='event_page'>
                    <div class='event_panel'>
                        <div class='event_panel_left'>
                            <h2>
                                {$eventName}
                            </h2>
                            <h3>
                                {$eventDate->format('d/m/Y')}
                            </h3>
                        </div>
                        <div class='event_panel_right'>
                            {$affiche}
                        </div>
                    </div>

                    <h2>DESCRIPTION</h2>

                    <p>
                        {$eventDesc}
                    </p>
                <img src='img/dblue_transition.svg' class='dblue_transition_end'>
                </div>");

echo $WebPage->toHTML();