<?php

use Html\WebPage as WebPage;
use Entity\Event as Event;
use Entity\Affiche as Affiche;
use Entity\Collection\EventCollection as EventCollection;

$WebPage = new WebPage("Événements");

$WebPage -> appendCssUrl("style/event-card.css");

$WebPage -> appendContent("<div class='page_top'>               
                    <h1>ÉVÈNEMENTS</h1>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'>
                        <path fill='#00bff3' fill-opacity='1' d='M0,64L60,69.3C120,75,240,85,360,101.3C480,117,600,139,720,128C840,117,960,75,1080,48C1200,21,1320,11,1380,5.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z'></path>
                    </svg>
                </div>
                <div class='card_list'>");

foreach (EventCollection::findAll() as $event){
    $eventId = $event->getEventId();
    $eventName = $event -> getEventNom();
    $eventDate = $event -> getEventDate();
    $idAffiche = $event->getAfficheId();

    if ($idAffiche !== NULL) {
        $affiche = Affiche::findById($idAffiche);
    }

    $WebPage -> appendContent("
                    <div class='card'>
                        <a href='event.php?eventId={$eventId}' class='card_link'>
                            <div class='card_back'>
                                <img src='miniature.php?afficheId={$idAffiche}' alt='cover'>
                            </div>
                            <div class='card_overlay'>
                                <div class='card_name'>
                                    <p>{$eventName} </p>
                                </div>
                                <div class='card_date'>
                                    <p>{$eventDate->format('d/m/Y')}</p>
                                </div>
                            </div>
                        </a>
                    </div>");
}

$WebPage -> appendContent("\n\t\t\t\t</div>
                <div class='gradiant_end_blue'></div>");

echo $WebPage -> toHTML();