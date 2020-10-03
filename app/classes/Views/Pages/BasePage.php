<?php
namespace App\Views\Pages;

use App\Views\Navigation;
use Core\Abstracts\Views\Page;

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

        $this->addCSS('assets/css/style.css');
        $this->setHeader($nav->render());
        $this->setContent('Main');
        $this->setFooter('Footer');
    }

    /**
     * Čia galėsime nustatyti $data['title'] jau sukūrus Page objektą
     *
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        // TODO: Implement setTitle() method.
    }

    /**
     * Čia galėsime įtraukti CSS'o path'ą į $data['css'] masyvą,
     * kuris paskui foreach'insis page'o template
     *
     * @param string $url
     */
    public function addCSS(string $url): void
    {
        // TODO: Implement addCSS() method.
    }

    /**
     * Čia galėsime įtraukti JS'o path'ą į $data['js'] masyvą,
     * kuris paskui foreach'insis page'o template
     *
     * @param string $url
     */
    public function addJS(string $url): void
    {
        // TODO: Implement addJS() method.
    }

    /**
     * Čia galėsime nustatyti $data['header']`io html'ą
     * kuris bus išspausdinamas page template
     *
     * @param string $header_html
     */
    public function setHeader(string $header_html): void
    {
        // TODO: Implement setHeader() method.
    }

    /**
     * Čia galėsime nustatyti $data['content']`o html'ą
     * kuris bus išspausdinamas page template
     *
     * @param string $content_html
     */
    public function setContent(string $content_html): void
    {
        // TODO: Implement setContent() method.
    }

    /**
     * Čia galėsime nustatyti $data['footer']`io html'ą
     * kuris bus išspausdinamas page template
     *
     * @param string $footer_html
     */
    public function setFooter(string $footer_html): void
    {
        // TODO: Implement setFooter() method.
    }
}