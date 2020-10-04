<?php

namespace App\Views\Pages;

use App\Views\Navigation;
use Core\Views\Footer;
use Core\Views\Page;

class BasePage extends Page
{

    /**
     * Čia galėsime nustatyti
     * $data['title'], $data['css'], $data['content']...
     * extend'inę šią klasę pvz.: App\Views\Pages\BasePage.php
     *
     * BasePage bus atsakinga už pagrindinius dalykus, tai
     * css, js, header ir footer
     *
     * Po to galėsime extendinti BasePage su App\Views\Pages\LoginPage.php,
     * kur nustatysime title ir content.
     */
    public function __construct()
    {
        $nav = new Navigation();
        $footer = new Footer();

        $this->addCSS('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
        $this->addCSS('assets/css/style.css');
        $this->setHeader($nav->render());
        $this->setContent('Content');
        $this->setFooter($footer->render('footer.tpl.php'));
    }
}