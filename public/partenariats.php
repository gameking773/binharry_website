<?php

use Html\WebPage as WebPage;

$WebPage = new WebPage("Partenariats");

$WebPage -> appendCssUrl("style/partenariats.css");

$WebPage -> appendContent(<<<HTML
    <div class='page_top'>               
        <h1>PARTENARIATS</h1>
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'>
            <path fill='#00bff3' fill-opacity='1' d='M0,64L60,69.3C120,75,240,85,360,101.3C480,117,600,139,720,128C840,117,960,75,1080,48C1200,21,1320,11,1380,5.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z'></path>
        </svg>
    </div>

    <img src='img/svg/blue_dblue_grad.svg' class='part_transition'>

    <div class='part_box'>
        <div class='part_left'>
            <a href='https://www.emblemreims.com/home' class='part_image'>
                <img src='img/logo-emblem.png' alt="logo_emblem">
            </a>
            <p class='part_text'>
                &nbsp&nbsp&nbsp Voici Emblem Reims, une entreprise qui vous propose des tas de cadeaux et de réductions, que ce soit dans les restos, les cafés, les loisirs, et mêmes pour les vacances d'Hiver 🌨️ ! <br>&nbsp<br>
                &nbsp&nbsp&nbsp Pour bénéficier de ces réductions, c'est simple : <br>
                A partir du 8 Septembre, la billetterie sera ouverte dans la bio instagram de emblem reims. <br>&nbsp<br>
                &nbsp&nbsp&nbsp La carte coute 19.90€ (pour déjà 200€ de cadeaux), vous devrez choisir un relai pour récupérer votre carte, évidemment, il s'agira de notre local.
            </p>
        </div>
        <div class='part_mid'>
            <a href='https://nordvpn.com/fr/' class='part_image'>
                <img src='img/logo-nordvpn.png' alt="logo_nordVPN">
            </a>
            <p class='part_text'>
                &nbsp&nbsp&nbspVotre BDE préféré a fait une collaboration commerciale avec Nord Vpn ! <br>&nbsp<br>
                Avec le code : konect147, vous soutenez le BDE tout en économisant 15% sur l'abonnement 2 ans à Nord VPN !
            </p>
        </div>
        <div class='part_right'>
            <a href='https://fr.weareholy.com/' class='part_image'>
                <img src='img/logo-holy.png' alt="logo_holy">
            </a>
            <p class='part_text'>
                &nbsp&nbsp&nbsp Votre BDE favori a aussi conclu une collaboration commerciale avec Holy !<br>&nbsp<br>
                &nbsp&nbsp&nbsp Avec le code &#34BINHARRY5&#34, vous soutenez le BDE tout en économisant 5% sur votre première commande !<br>&nbsp<br>
                &nbsp&nbsp&nbsp Déjà commandé chez eux ? On a quelque chose pour ça aussi. Avec le code &#34BINHARRY&#34, économisez 10% sur votre commande !
            </p>
        </div>
    </div>
    
    <img src='img/svg/dblue_transparent_grad.svg' class='part_transition'>
HTML);

echo $WebPage -> toHTML();