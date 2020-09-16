<?php

namespace app\controllers;


use app\models\AppModel;
use app\widgets\currency\Currency;
use CMS1207\App;
use CMS1207\base\Controller;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
        setcookie('currency', 'EUR', time() + 3600*24*7, '/');
        $curr = Currency::getCurrencies();
        App::$app->setProperty('currencies', Currency::getCurrencies());
        App::$app->setProperty('currency', Currency::getCurrency(App::$app->getProperty('currencies')));
        debug(App::$app->getProperties());
    }
}