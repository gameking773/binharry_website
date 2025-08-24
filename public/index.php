<?php

use Html\WebPage as WebPage;
use Database\MyPdo as MyPdo;

$WebPage = new WebPage("Bin'Harry");

$WebPage -> appendContent("<h1>Le site officiel de votre BDE</h1>
                <div class='blue_dblue_grad'>
                    <img src='img/svg/' class=''>
                    <p>
                        Nous sommes Bin'Harry, le BDE du département Informatique de l'IUT de Reims Champagne Ardennes, association déclarée devant la préfécture Marnaise.
                        La présidence de notre association est renouvelée démocratiquement par les étudiants du département chaque année à la suite d'un vote.
                    </p>
                </div>

                <div class='doublebox'>
                    <img src='img/svg/' class=''>
                    <p>
                        Créer une bonne cohésion entre les étudiants du département, peu importe l'année d'étude, grace à des sorties organisées régulièrement chaques mois, traditionnellement le Jeudi soir, sois simplement au bar, sois dans des activités plus ludiques telles qu'au Laser Game, au Bowling et bien plus. 
                        L'évènement le plus connu étant la LAN, organisée chaque année, un évènement qui permet aux étudiants comme aux professeurs de jouer aux jeux vidéos ensembles durant un après midi entier en Avril. 
                        Nous proposons aux étudiants des promotions intéressantes en partenariat avec des entreprises, telles que Emblem Reims (faire un lien vers leur site), qui proposent une carte offrant des réductions sur de nombreux établissements.
                        Nous mettons également à disposition de tous un serveur discord, dans le quel nous pouvons rire, nous entraider, et jouer ensemble dans une ambiance décontractée.
                    </p>
                    <img src='img/svg/' class=''>
                </div>

                <a class='easter_egg' href='easter-egg.php'>
                    <img src='img/easter-egg.png'>
                </a>
                
                <div class='triplebox'>
                    <img src='img/svg/' class=''>
                    <p>
                        Ce site vous permet de voir les archives des évènements passés (souriez, vous serez peut être sur les photos), de vous informer des prochaines dates évènementielles, et de nous contacter par mail.
                    </p>
                    <img src='img/svg/' class=''>
                </div>");

echo $WebPage -> toHTML();