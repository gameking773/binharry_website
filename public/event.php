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

$WebPage->appendContent("
                <div class='event_panel'>
                    <div class='event_left'>
                        {$affiche}
                    </div>
                    <div class='event_right'>
                        <h2 class='event_header'>
                            {$eventName}
                        </h2>
                        <h3 class='event_date'>
                            {$eventDate->format('d/m/Y')}
                        </h3>
                    </div>
                </div>
                
                <div class='event_info'>
                    <img src='img/event-info_transition.svg' class='event_transition'>
                    <div class='event_content'>
                        <p class='event_text'>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis reiciendis fugiat laboriosam cum fuga sequi delectus pariatur modi molestias hic? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis reiciendis fugiat laboriosam cum fuga sequi delectus pariatur modi molestias hic? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis reiciendis fugiat laboriosam cum fuga sequi delectus pariatur modi molestias hic? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis reiciendis fugiat laboriosam cum fuga sequi delectus pariatur modi molestias hic?
                        </p>
                    </div>
                    <img src='img/event-info_transition.svg' class='event_transition'>
                </div>");
/** {$eventDesc} */
echo $WebPage->toHTML();