<?php

require_once __DIR__ . '/../src/Html/WebPage.php';
use Html\WebPage as WebPage;

$WebPage = new WebPage("À propos");

$WebPage -> appendContent("<nav class='menu'>
            <img src='img/logo_binharry.png' alt='Logo du BDE' class='logo'>
            <ul>
                <li><a href='index.php'>Home</a></li>
                <li><a href='events.php'>Événements</a></li>
                <li><a href='about.php'>À propos</a></li>
            </ul>
        </nav>
        
        <div class='content'>
            <h1>A propos</h1>
            <h2>L'équipe</h2>
            <ul class='team-list'>
                <li>Votre dévoué Président: Khalil El Kadiri</li>
                <li>Votre légendaire Vice-Président & responsable évènementiel : Julien Baetens</li>
                <li>Votre Trésorier: Raphaël Véry</li>
                <li>Votre Secrétaire: Noa Re</li>
                <li>Votre Designer d'affiches & CM: Ruddy Gobillard</li> 
            </ul>
            <h2>Nous contacter</h2>
            <form action='../php/action.php' method='post'>
                <label for='name'>Nom:</label>
                <input type='text' id='name' name='name' required><br>
                <label for='email'>Email:</label>           
                <input type='email' id='email' name='email' required><br>
                <label for='message'>Message:</label><br>   
                <textarea id='message' name='message' rows='4' cols='50' required></textarea><br>
                <input type='submit' value='Envoyer' class='submit-button'>       
            </form>
            <p class='note'>Notez que ce formulaire ne sera très certainement ni lu, ni pris en compte.</p>
        </div>
        <footer>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed non dignissimos quibusdam, ratione id quo voluptas molestiae esse. Voluptates, fuga. Explicabo asperiores quaerat soluta autem molestias porro unde consequatur consequuntur?
        </footer>
");

echo $WebPage -> toHTML();