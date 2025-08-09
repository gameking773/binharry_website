<?php

use Html\WebPage as WebPage;
use Database\MyPdo as MyPdo;

$WebPage = new WebPage("Bin'Harry");

$WebPage -> appendContent("<div class='easter_box'>
                                <h1>???</h1>
                                <form action='action.php' method='get'>
                                    <input type='text' id='search' name='search' placeholder='' class='easter_bar'>
                                </form>
                            </div>");

echo $WebPage -> toHTML();