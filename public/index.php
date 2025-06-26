<?php

require_once __DIR__ . '/../src/Html/WebPage.php';

use Html\WebPage as WebPage;

$WebPage = new WebPage();

$WebPage -> appendContent("wsp");

echo $WebPage -> toHTML();