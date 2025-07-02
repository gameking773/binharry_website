<?php

use Html\WebPage as WebPage;
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
    $WebPage -> appendContent("
        <a>
            <div class='card'>
                <div class='card_upper'>
                    <img>
                </div>
                <div class='card_lower'>
                    <div class='card_desc'>
                        <p></p>
                    </div>
                    <div class='card_date'>
                        <p></p>
                    </div>
                </div>
            </div>
        </a>");
}

$WebPage -> appendContent("</div>");

echo $WebPage -> toHTML();