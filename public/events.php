<?php

require_once __DIR__ . '/../src/Html/WebPage.php';

use Html\WebPage as WebPage;

$WebPage = new WebPage("Événements");

$WebPage -> appendContent("<h1>Les évènements organisés par votre BDE</h1>
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
            </div>
");

echo $WebPage -> toHTML();