<?php

require_once __DIR__ . '/../src/Html/WebPage.php';

use Html\WebPage as WebPage;

$WebPage = new WebPage("Bin'Harry");

$WebPage -> appendContent("<nav class='menu'>
            <img src='img/logo_binharry.png' alt='Logo du BDE' class='logo'>
            <ul>
                <li><a href='index.php'>Home</a></li>
                <li><a href='evenement.php'>Événements</a></li>
                <li><a href='about.html'>À propos</a></li>
            </ul>
        </nav>

        <div class='content'>
            <h1>Le site officiel de votre BDE</h1>
            
        </div>
        <footer>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed non dignissimos quibusdam, ratione id quo voluptas molestiae esse. Voluptates, fuga. Explicabo asperiores quaerat soluta autem molestias porro unde consequatur consequuntur?
        </footer>
");

echo $WebPage -> toHTML();