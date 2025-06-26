<?php

require_once __DIR__ . '/../src/Html/WebPage.php';

use Html\WebPage as WebPage;

$WebPage = new WebPage("Bin'Harry");

$WebPage -> appendContent("
        <div class='content'>
            <h1>Le site officiel de votre BDE</h1>
            
        </div>
        <footer>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed non dignissimos quibusdam, ratione id quo voluptas molestiae esse. Voluptates, fuga. Explicabo asperiores quaerat soluta autem molestias porro unde consequatur consequuntur?
        </footer>
");

echo $WebPage -> toHTML();