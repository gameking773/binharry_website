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
        $this->appendCssUrl("style/style.css");
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
        $this->head .= "\n";
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
                    $this->head
                </head>
                <body>
                    <header>
                        <div class='wrapper'>
                            <div class='header__logo'>
                                <a href='index.php'>
                                    <img src='img/logo_binharry_rec.png' alt='Logo du BDE' class='logo'>
                                </a>
                            </div>
                            <div class='header__bar'>
                                <form action="action.php" method="get">
                                    <input type="text" placeholder="" class='input_header'>
                                </form>
                            </div>
                            <div class='header__items'>
                                <ul>
                                    <li><a href='events.php'>Events</a></li>
                                    <li><a href='about.php'>Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <hr class="header__line">
                    <div class='content'>
                        $this->body
                    </div>
                    <footer>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed non dignissimos quibusdam, ratione id quo voluptas molestiae esse. Voluptates, fuga. Explicabo asperiores quaerat soluta autem molestias porro unde consequatur consequuntur?
                        </p>
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
