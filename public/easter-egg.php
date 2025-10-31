<?php

use Html\WebPage;

$WebPage = new WebPage("Bin'Harry");

$WebPage -> appendContent(<<<HTML
    <div class='easter_box'>
        <h1>???</h1>
        <form action='action.php' method='get'>
            <input type='text' id='search' name='search' placeholder='' class='easter_bar'>
        </form>
    </div>
HTML);

echo $WebPage -> toHTML();