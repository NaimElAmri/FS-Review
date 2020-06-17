<?php

namespace App\Controller;

use App\View\View;

class KategorieController
{
    public function index(){
        $view = new View('kategorie/index');
        $view->title = 'Kategorien';
        $view->heading = 'Kategorien';
        $view->display();
    }

    public function komoedie(){
        $view = new View('kategorie/komödie');
        $view->title = 'Komödien';
        $view->heading = 'Komödien';
        $view->display();
    }

    public function action(){
        $view = new View('kategorie/action');
        $view->title = 'Action';
        $view->heading = 'Action';
        $view->display();
    }

    public function drama(){
        $view = new View('kategorie/drama');
        $view->title = 'Drama';
        $view->heading = 'Drama';
        $view->display();
    }
}