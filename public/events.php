<?php

use Html\WebPage as WebPage;
use Entity\Event as Event;
use Entity\Collection\EventCollection as EventCollection;

$WebPage = new WebPage("Événements");

/** ancienne version
$WebPage -> appendContent("
                <div class='content-events'>
                    <div class='card-container'>
                        <article class='card' id='Event1'>
                            <div class='card-content'>
                                <p class='card-description'>  <br><a href='' class='Readmore'>Read More</a></p>
                            </div>
                        </article> 
                    </div>
                    <div class='card-container'>
                        <article class='card' id='Event2'>
                            <div class='card-content'>
                                <p class='card-description'>  <br><a href='' class='Readmore'>Read More</a></p>
                            </div>
                        </article> 
                    </div>
                    <div class='card-container'>
                        <article class='card' id='Event3'>
                            <div class='card-content'>
                                <p class='card-description'>  <br><a href='' class='Readmore'>Read More</a></p>
                            </div>
                        </article> 
                    </div>
                    <div class='card-container'>
                        <article class='card' id='Event4'>
                            <div class='card-content'>
                                <p class='card-description'>  <br><a href='' class='Readmore'>Read More</a></p>
                            </div>
                        </article> 
                    </div>");
*/

$WebPage -> appendContent("<h1 class='page_info'>LES ÉVÈNEMENTS</h1>
    <div class='card_list'>");

foreach (EventCollection::findAll() as $event){
    $eventId = $event->getEventId();
    $idAffiche = $event -> getAfficheId();
    $eventName = $event -> getEventNom();
    $eventDate = $event -> getEventDate();

    if ($idAffiche == NULL) {
        $afficheJpeg = file_get_contents("img/affiche_placeholder.png");
    }
    else {
        $affiche = new \Entity\Affiche()->findById($idAffiche);
        $afficheJpeg = $affiche->getJpeg();
    }

    $WebPage -> appendContent("
        <a href='event.php?eventId={$eventId}'>
            <div class='card'>
                <div class='card_back'>
                    <img src='affiche.php?afficheId={idAffiche}' alt='cover'>
                </div>
                <div class='card_overlay'>
                    <div class='card_name'>
                        <p>{$eventName} </p>
                    </div>
                    <div class='card_date'>
                        <p>{$eventDate->format('d/m/Y')}</p>
                    </div>
                </div>
            </div>
        </a>");
}

$WebPage -> appendContent("</div>");

echo $WebPage -> toHTML();