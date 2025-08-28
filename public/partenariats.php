<?php

use Html\WebPage as WebPage;

$WebPage = new WebPage("Partenariats");

$WebPage -> appendCssUrl("style/partenariats.css");

$WebPage -> appendContent("
<div class='page_top'>               
    <h1>PARTENARIATS</h1>
    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'>
        <path fill='#00bff3' fill-opacity='1' d='M0,64L60,69.3C120,75,240,85,360,101.3C480,117,600,139,720,128C840,117,960,75,1080,48C1200,21,1320,11,1380,5.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z'></path>
    </svg>
</div>
<div class='part_emblem'>
    <div class='logo'> 
        <img src='img/logo-emblem.png'>
    </div>
    <div class='description'>
        <h2>Emblem</h2>
        <p>
        Voici Emblem Reims, une entreprise qui vous propose des tas de cadeaux et de réductions, que ce soit dans les restos, les cafés, les loisirs, et mêmes pour les vacances d'Hiver 🌨️ !<br>
Pour bénéficier de ces réductions, c'est simple :<br>
A partir du 8 Septembre, la billetterie sera ouverte dans la bio instagram de emblem reims.<br>
La carte coute 19.90€ (pour déjà 200€ de cadeaux), vous devrez choisir un relai pour récupérer votre carte, évidemment, il s'agira de notre local.<br>
        </p>
    </div>
</div>
<div class='part_adherer'>
    <div class='logo'> 
        <img src='img/header_logo_box.png'>
    </div>
    <div class='description'>
        <h2>Adhérer au BDE</h2>
        <p>
        Adhérer au BDE, c'est nous soutenir et nous aider à financer les futurs événements pour seulement 5€<br>
        Les avantages qui vous sont donnés avec une adhésion sont :<br>
            • Avantages lors des tombola<br>
            • Prix préférentiels lors des sorties<br>
            • Un rôle qui fait joli sur discord, afin de montrer à quel point vous êtes riches.<br>
            • Articles gratuits lors des ventes (crêpes, boissons etc.)<br>
        Si vous avez des suggestions d'avantages, n'hésitez pas à nous les soumettre<br>
        Pour adhérer, contactez nous !!<br>
        </p>
    </div>
</div>
");

echo $WebPage -> toHTML();