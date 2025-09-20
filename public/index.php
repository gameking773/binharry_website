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

                <div class='blue_dblue_grad'>
                    <img src='img/svg/blue_dblue_grad.svg'>
                    <h2>Qui sommes-nous ?</h2>
                    <p>
                        Nous sommes Bin'Harry, le BDE du département Informatique de l'IUT de Reims Champagne Ardennes, association déclarée devant la préfécture Marnaise.
                        La présidence de notre association est renouvelée démocratiquement par les étudiants du département chaque année à la suite d'un vote.
                    </p>
                </div>

                <div class='doublebox'>
                    <img src='img/svg/doublebox_start.svg'>
                    <div class='doublebox_main'>
                        <h2>Notre objectif</h2>
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
                
                <div class='triplebox'>
                    <img src='img/svg/triplebox_start.svg'>
                    <div class='triplebox_main'>
                        <h2>Le site du BDE</h2>
                        <p>
                            Ce site vous permet de voir les archives des évènements passés (souriez, vous serez peut être sur les photos), de vous informer des prochaines dates évènementielles, et de nous contacter par mail.
                        </p>
                    </div>
                    <img src='img/svg/triplebox_end.svg'>
                </div>");

echo $WebPage -> toHTML();