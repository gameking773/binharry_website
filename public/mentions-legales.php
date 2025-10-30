<?php

use Html\WebPage as WebPage;

$WebPage = new WebPage("Mentions légales");

$WebPage -> appendCssUrl("style/mentions-legales.css");

$WebPage -> appendContent(<<<HTML
    <p class='ml_content'>
        Merci de lire attentivement ces informations légales avant de consulter le site.
    </p>

    <h1 class='ml_titre'>
        INFORMATIONS EDITEUR
    </h1>

    <p class='ml_content'>
        BDE Département info de l'IUT de Reims - Bin'Harry<br>
        IUT DE REIMS DEPARTEMENT INFORMATIQUE<br>
        Chemin des Rouliers<br>
        51100 REIMS<br>
        Mail : bdebinharry@gmail.com
    </p>

    <h1 class='ml_titre'>
        HÉBERGEMENT
    </h1>

    <p class='ml_content'>
        Webstrator - OctoGency<br>
        <br>
        SARL au capital de 1000€<br>
        N° TVA : FR79 844 727 594<br>
        Lieu-dit En Roc - 81100 Castres
    </p>

    <h1 class='ml_titre'>
        INFORMATIQUE ET LIBERTÉ
    </h1>

    <p class='ml_content'>
        En tant qu’utilisateur, vous disposez gratuitement d’un droit d’accès, de modification et de suppression de votre contribution. Pour cela, vous pouvez adresser votre demande par courrier ou Email à :<br>
        BDE Département info de l'IUT de Reims - Bin'Harry<br>
        IUT DE REIMS DEPARTEMENT INFORMATIQUE<br>
        Chemin des Rouliers<br>
        51100 REIMS<br>
        Mail : bdebinharry@gmail.com<br>
        <br>
        Nous vous informons que les informations recueillies par le biais des différents formulaires présents sur ce site ne sauraient être divulguées à de tierces parties, ni faire l’objet de quelconques actions de revente ou de toute autre utilisation commerciale.
    </p>

    <h1 class='ml_titre'>
        DROITS D'AUTEURS
    </h1>

    <p class='ml_content'>
        Le contenu de ce site est sous la licence Creative Commons BY 4.0
    </p>

    <h1 class='ml_titre'>
        LIMITATION DE RESPONSABILITÉ
    </h1>

    <p class='ml_content'>
        Le BDE se réserve le droit de modifier ou de corriger le contenu de son site à tout moment, sans préavis.<br>
        <br>
        Le BDE ne pourra être tenu pour responsable en cas de contamination des matériels informatiques des internautes résultant de la propagation d’un virus ou autres infections informatiques. Il appartient à l’utilisateur de ce site de prendre toutes les mesures appropriées de façon à protéger ses propres données et/ou logiciels de la contamination par des éventuels virus circulant sur le réseau Internet.<br>
        <br>
        En aucun cas le BDE, ses employés ou les tiers mentionnés dans son site ne pourront être tenus responsables, au titre d’une action en responsabilité contractuelle, en responsabilité délictuelle ou de tout autre action, de tout dommage direct ou indirect, incident ou accessoire, ou de quelque nature qu’il soit ou de tout préjudice, notamment, de nature financier, résultant de l’utilisation de son site ou d’une quelconque information obtenue sur son site.
    </p>
HTML);

echo $WebPage -> toHTML();