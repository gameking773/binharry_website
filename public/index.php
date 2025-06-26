<?php

require_once __DIR__ . '/../src/Html/WebPage.php';

use Html\WebPage as WebPage;

$WebPage = new WebPage("Bin'Harry");

$WebPage -> appendContent("
        <div class='content'>
            <h1>Le site officiel de votre BDE</h1>
            
        </div>
");

echo $WebPage -> toHTML();