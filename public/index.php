<?php

use Html\WebPage as WebPage;
use Database\MyPdo as MyPdo;

$WebPage = new WebPage("Bin'Harry");

$WebPage -> appendContent("<h1>Le site officiel de votre BDE</h1>");

echo $WebPage -> toHTML();