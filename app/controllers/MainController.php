<?php


namespace app\controllers;

use CMS1207\App;
use CMS1207\cache;

class MainController extends AppController
{
    public function indexAction(){
        $brands = \R::find('brand', 'LIMIT 3');
        $hits = \R::find('product', "hit = '1' AND status = '1' LIMIT 8");
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $this->set(compact('brands', 'hits'));
    }
}