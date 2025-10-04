<?php

use Html\WebPage as WebPage;

$WebPage = new WebPage("Mentions légales");

$WebPage -> appendCssUrl("style/mentions-legales.css");

$WebPage -> appendContent("
    <h1 class='ml_titre'>
        Titre
    </h1>
    <p class='ml_content'>
        Contenu
    </p>
");

echo $WebPage -> toHTML();