<?php


namespace app\controllers;

use CMS1207\App;

class MainController extends AppController
{
    public function indexAction(){
        $posts = \R::findAll('test');
        $post = \R::findOne('test', 'id = ?', [2]);
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $name = 'John';
        $age = 30;
        $names = ['Andrey', 'James'];
        $this->set(compact('name', 'age', 'names', 'posts'));
    }
}