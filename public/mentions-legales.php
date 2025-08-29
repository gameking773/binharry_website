<?php

use Html\WebPage as WebPage;

$WebPage = new WebPage("Mentions légales");

$WebPage -> appendCssUrl("style/partenariats.css");


echo $WebPage -> toHTML();