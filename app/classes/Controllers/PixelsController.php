<?php

namespace App\Controllers;

use App\App;
use App\Pixels\Pixel;
use App\Views\Forms\AddPixelForm;
use Core\Views\Content;
use App\Abstracts\UserController;

class PixelsController extends UserController
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

        $pixels = App::$db->getRowsWhere('pixels', []);

        $content = new Content($pixels);

        $this->page->setContent($content->render('pixels/index.tpl.php'));

        return $this->page->render();
    }

    public function my()
    {
        $UserPixels = ['user_name' => $_SESSION['user_name']];
        $data['pixels'] = App::$db->getRowsWhere('pixels', $UserPixels);
        $content = new Content($data);
        $this->page->setTitle('My pixel');
        $this->page->addCss('../css/style.css');
        $this->page->setContent($content->render('index.tpl.php'));
        return $this->page->render();
    }

    function add(): ?string
    {
        if (!App::$session->getUser()) {
            header('Location: login.php');
            exit;
        }

        $add_form = new AddPixelForm();
        if ($add_form->isSubmitted()) {
            if ($add_form->validate()) {
                $pixel = new Pixel($add_form->getSubmitData());

                App::$db->insertRow('pixels', $pixel->_getData());
                header('Location: my');
            }
        }
        $this->page->setTitle('Add pixel');
        $this->page->addCss('../css/style.css');
        $this->page->setContent($add_form->render());
        return $this->page->render();
    }
}