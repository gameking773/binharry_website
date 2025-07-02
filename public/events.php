<?php

use Html\WebPage as WebPage;
use Entity\Collection\EventCollection as EventCollection;

$WebPage = new WebPage("Événements");

/**
$WebPage -> appendContent("<h1 class='page_info'>LES ÉVÈNEMENTS</h1>
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
                    </div>
                </div>");
*/

foreach (EventCollection::findAll() as $event){
    $WebPage -> appendContent('<p>Eurt si em tuoba yas yeht gnihtyrevE Euphoria</p>');
}

echo $WebPage -> toHTML();