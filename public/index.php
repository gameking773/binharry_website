<?php

use Html\WebPage as WebPage;
use Database\MyPdo as MyPdo;

$WebPage = new WebPage("Bin'Harry");

$WebPage -> appendCssUrl("style/index.css");

$WebPage -> appendContent("<div class='page_top'>               
                    <h1>BIENVENUE</h1>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'>
                        <path fill='#00bff3' fill-opacity='1' d='M0,64L60,69.3C120,75,240,85,360,101.3C480,117,600,139,720,128C840,117,960,75,1080,48C1200,21,1320,11,1380,5.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z'></path>
                    </svg>
                </div>

                <div class='news'>
                    <h2 class='part_title'>NEWS</h2>
                    <p>
                        Aucune news pour le moment.
                    </p>
                </div>


                <div class='blue_dblue_grad'>
                    <img src='img/svg/blue_dblue_grad.svg'>
                    <h2 class='part_title'>Qui sommes-nous ?</h2>
                    <p>
                        Nous sommes Bin'Harry, le Bureau des Étudiants (BDE) du département Informatique de l’IUT de Reims Champagne Ardenne. Notre association, déclarée devant la préfecture marnaise, représente les étudiants du département et œuvre tout au long de l’année pour dynamiser la vie étudiante. La présidence de notre structure est renouvelée chaque année de manière démocratique, grâce à un vote organisé parmi les étudiants du département, garantissant ainsi un fonctionnement participatif et équitable.
                        <br><br>
                        Notre site a pour vocation de rassembler et partager les différents aspects de la vie associative du département. Vous y trouverez les archives de nos évènements passés, retraçant les moments forts qui ont marqué la communauté étudiante, ainsi que les prochaines dates évènementielles à venir, pour ne rien manquer des activités organisées par votre BDE.
                        <br><br>
                        Enfin, cet espace vous offre la possibilité de nous contacter facilement par mail, afin d’échanger, de poser vos questions ou de proposer des idées de projets pour enrichir encore davantage la vie au sein du département Informatique.
                    </p>
                </div>

                <div class='doublebox'>
                    <img src='img/svg/doublebox_start.svg'>
                    <div class='doublebox_main'>
                        <h2 class='part_title'>Notre objectif</h2>
                        <p>
                            Créer une bonne cohésion entre les étudiants du département, peu importe l'année d'étude, grace à des sorties organisées régulièrement chaques mois, traditionnellement le Jeudi soir, sois simplement au bar, sois dans des activités plus ludiques telles qu'au Laser Game, au Bowling et bien plus. 
                            L'évènement le plus connu étant la LAN, organisée chaque année, un évènement qui permet aux étudiants comme aux professeurs de jouer aux jeux vidéos ensembles durant un après midi entier en Avril.
                            <br><br>
                            Nous proposons aux étudiants des promotions intéressantes en partenariat avec des entreprises, telles que Emblem Reims, qui proposent une carte offrant des réductions sur de nombreux établissements.
                            <br><br>
                            Nous mettons également à disposition de tous un serveur discord, dans le quel nous pouvons rire, nous entraider, et jouer ensemble dans une ambiance décontractée.
                        </p>
                    </div>
                    <img src='img/svg/doublebox_end.svg'>
                </div>

                <a class='easter_egg' href='easter-egg.php'>
                    <img src='img/easter-egg.png'>
                </a>
                
                <div class='part_adherer'>
                    <div class='part_adh_logo'>
                        <img src='img/header_logo_box.png'>
                    </div>
                    
                    <div class='part_adh_description'>
                        <h2>Adhérer au BDE</h2>
                        <p>
                            Adhérer au BDE, c'est nous soutenir et nous aider à financer les futurs événements pour seulement 5€
                            <br><br>
                            Les avantages qui vous sont donnés avec une adhésion sont :
                        </p>

                        <ul class='liste_avantages'>
                            <li>
                                Avantages lors des tombolas
                            </li>
                            <li>
                                Prix préférentiels lors des sorties
                            </li>
                            <li>
                                Un rôle qui fait joli sur discord, afin de montrer à quel point vous êtes riches.
                            </li>
                            <li>
                                Articles gratuits lors des ventes (crêpes, boissons etc.)
                            </li>
                        </ul>

                        <p>
                            Si vous avez des suggestions d'avantages, n'hésitez pas à nous les soumettre
                            <br><br>
                            Pour adhérer, contactez nous!
                        </p>
                    </div>
                </div>
                ");

echo $WebPage -> toHTML();

/* Bloc inutilisée
<div class='triplebox'>
    <img src='img/svg/triplebox_start.svg'>
    <div class='triplebox_main'>
        
    </div>
    <img src='img/svg/triplebox_end.svg'>
</div>
*/
