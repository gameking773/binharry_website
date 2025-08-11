<?php

declare(strict_types=1);

namespace Html;

class WebPage
{
    private string $head;
    private string $title;
    private string $body;

    /**
     * Constructeur
     *
     * @param string $title Titre de la page
     */
    public function __construct(string $title = "")
    {
        $this->title = $title;
        $this->head = "";
        $this->body = "";
    }

    /**
     * Retourne le contenu de $this->head.
     *
     * @return string
     */
    public function getHead(): string
    {
        $copie = clone $this;
        return $copie->head;
    }

    /**
     * Retourner le contenu de $this->title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        $copie = clone $this;
        return $copie->title;
    }

    /**
     * Affecter le titre de la page.
     *
     * @param string $title Le titre
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Retourner le contenu de $this->body.
     *
     * @return string
     */
    public function getBody(): string
    {
        $copie = clone $this;
        return $copie->body;
    }

    /**
     * Ajouter un contenu dans $this->head.
     *
     * @param string $content Le contenu à ajouter
     * @return void
     */
    public function appendToHead(string $content): void
    {
        $this->head .= $content;
    }

    /**
     * Ajouter un contenu CSS dans $this->head.
     *
     * @param string $css Le contenu CSS à ajouter
     * @return void
     */
    public function appendCss(string $css): void
    {
        $content = <<<HTML
            <style>
                $css
            </style>
        HTML;
        $this->head .= $content;
        $this->head .= "\n";
    }

    /**
     * Ajouter l'URL d'un script CSS dans $this->head.
     *
     * @param string $url L'URL du script CSS
     * @return void
     */
    public function appendCssUrl(string $url): void
    {
        $this->head .= <<<HTML
        <link href="$url" rel="stylesheet" type="text/css">
        HTML;
    }

    /**
     * Ajouter un contenu JavaScript dans $this->head.
     *
     * @param string $js Le contenu JavaScript à ajouter
     * @return void
     */
    public function appendJs(string $js): void
    {
        $content = <<<HTML
            <script>
                $js
            </script>
        HTML;
        $this->head .= $content;
        $this->head .= "\n";
    }

    /**
     * Ajouter l'URL d'un script JavaScript dans $this->head.
     *
     * @param string $url L'URL du script JavaScript
     * @return void
     */
    public function appendJsUrl(string $url): void
    {
        $this->head .= <<<HTML
            <script src="$url" ></script>
        HTML;
        $this->head .= "\n";
    }

    /**
     * Ajouter un contenu dans $this->body.
     *
     * @param string $content
     * @return void
     */
    public function appendContent(string $content): void
    {
        $this->body .= $content;
    }

    /**
     * Produire la page Web complète.
     *
     * @return string
     */
    public function toHTML(): string
    {
        $page = <<<HTML
            <!doctype html>
            <html lang="fr">
                <head>
                    <meta charset="UTF-8">
                    <title>$this->title</title>
                    <link href='https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap' rel='stylesheet'>
                    <link href="style/style.css" rel="stylesheet" type="text/css">
                    <link href="style/header.css" rel="stylesheet" type="text/css">
                    <link href="style/footer.css" rel="stylesheet" type="text/css">
                    $this->head
                </head>
                <body>
                    <header>
                        <div class='wrapper'>
                            <div class='header__logo'>
                                <a href='index.php'>
                                    <img src='img/header_logo_box.png' alt='Logo du BDE' class='logo_box'>
                                    <img src='img/header_logo_text.png' alt='Texte du BDE' class='logo_text'>
                                </a>
                            </div>
                            <div class='header__items'>
                                <ul>
                                    <li><a href='events.php'>ÉVÉNEMENTS</a></li>
                                    <li><a href='about.php'>CONTACT</a></li>
                                </ul>
                            </div>
                        </div>
                    </header>

                    <div class='content'>
                        $this->body
                    </div>

                    <footer>
                        <div class='footer_top'>
                            <h2>BIN'HARRY</h2>
                            <hr class='footer_line'>
                            <div class='footer_socials'>
                                <a class='logo_box' href='http://www.discord.com/invite/wXpRMds6BC'>
                                    <img src='img/icon-discord.png' alt='Lien Discord'>
                                </a>
                                <a class='logo_box' href='https://www.instagram.com/bdebinharry/'>
                                    <img src='img/icon-instagram.png' alt='Lien Instagram'>
                                </a>
                            </div>
                        </div>
                        <div class='footer_bottom'>
                            <p>
                                @2025 Bin'Harry |
                                <a href='about.php'>Mentions Légales</a>
                            </p>
                        </div>
                    </footer>
                </body>
            </html>
        HTML;
        return $page;
    }

    public function escapeString(string $string): string
    {
        $string = htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML5 | ENT_DISALLOWED, 'UTF-8');
        return $string;
    }

    public function getLastModification(): string
    {
        $date = date("j/n/o - G:i", getlastmod());
        return $date;
    }
}
