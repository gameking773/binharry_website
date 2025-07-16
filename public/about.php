<?php

use Html\WebPage as WebPage;

$WebPage = new WebPage("À propos");

$WebPage -> appendContent("<div class='page_top'>               
                    <h1>CONTACT</h1>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'>
                        <path fill='#00bff3' fill-opacity='1' d='M0,64L60,69.3C120,75,240,85,360,101.3C480,117,600,139,720,128C840,117,960,75,1080,48C1200,21,1320,11,1380,5.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z'></path>
                    </svg>
                </div>
                <div class='about_info'>
                    <h1>INFORMATIONS</h1>
                </div>
                
                <h2>Nous contacter</h2>
                <form action='action.php' method='post' class='about_form'>
                    <label for='name'>Nom:</label>
                    <input type='text' id='name' name='name' required><br>
                    <label for='email'>Email:</label>           
                    <input type='email' id='email' name='email' required><br>
                    <label for='message'>Message:</label><br>   
                    <textarea id='message' name='message' rows='4' cols='50' required></textarea><br>
                    <input type='submit' value='Envoyer' class='submit-button'>       
                </form>
                <p class='note'>Notez que ce formulaire ne sera très certainement ni lu, ni pris en compte.</p>");

echo $WebPage -> toHTML();