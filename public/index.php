<?php
    require_once dirname(__DIR__).'/config/init.php';
    require_once LIBS.'/functions.php';
    require_once CONFIG.'/routes.php';
    new \CMS1207\App();
//    throw new Exception('Страница не найдена', 404)
//    debug(\CMS1207\Router::getRoutes());
?>
