<?php

require_once __DIR__ . '/../src/Html/WebPage.php';

use Html\WebPage as WebPage;

$WebPage = new WebPage("Événements");

$WebPage -> appendContent("<nav class='menu'>
            <img src='img/logo_binharry.png' alt='Logo du BDE' class='logo'>
            <ul>
                <li><a href='index.php'>Home</a></li>
                <li><a href='events.php'>Événements</a></li>
                <li><a href='about.php'>À propos</a></li>
            </ul>
        </nav>
        <h1>Les évènements organisés par votre BDE</h1>

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
        <footer>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed non dignissimos quibusdam, ratione id quo voluptas molestiae esse. Voluptates, fuga. Explicabo asperiores quaerat soluta autem molestias porro unde consequatur consequuntur?
        </footer>
");

echo $WebPage -> toHTML();