<?php

use App\Abstracts\Controller;
use App\App;
use App\Views\Forms\LoginForm;
use App\Views\Pages\BasePage;
use Core\Views\Content;

class LoginController extends Controller
{
    /**
     * This method builds or sets
     * current $page content
     * renders it and returns HTML
     *
     * So if we have ex.: ProductsController,
     * it can have methods responsible for
     * index() (main page, usualy a list),
     * view() (preview single),
     * create() (form for creating),
     * edit() (form for editing)
     * delete()
     *
     * These methods can then be called on each page accordingly, ex.:
     * add.php:
     * $controller = new PixelsController();
     * print $controller->add();
     *
     *
     * my.php:
     * $controller = new ProductsController();
     * print $controller->my();
     *
     * @return string|null
     */
    function index(): ?string
    {
        if (App::$session->getUser()) {
            header('Location: my.php');
        }

        $loginForm = new LoginForm();

        if ($loginForm->isSubmitted()) {
            if ($loginForm->validate()) {
                App::$session->login($loginForm->getSubmitData()['email'], $loginForm->getSubmitData()['password'])
                    ? header('Location: index.php') : $error = 'Something wrong!';
            }
        }

        $this->page->setTitle('Login');
        $this->page->addCss('../css/style.css');
        $this->page->setContent($loginForm->render());
        return $this->page->render();
    }
}