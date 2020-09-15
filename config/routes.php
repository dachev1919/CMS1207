<?php
    use CMS1207\Router;


    // default routes
    Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
    Router::add('^admin/?(?<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

    Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
    Router::add('^(?<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
?>