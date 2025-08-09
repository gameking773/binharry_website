<?php

use Html\WebPage as WebPage;
use Database\MyPdo as MyPdo;

$WebPage = new WebPage("Bin'Harry");

$WebPage -> appendContent("<h1>???</h1>
                            <div class='header__bar'>
                                <form action='action.php' method='get'>
                                    <input type='text' id='search' name='search' placeholder='' class='input_header'>
                                </form>
                            </div>");

echo $WebPage -> toHTML();