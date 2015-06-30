<?php
/**
 * User: ZhiyangLee
 * Date: 2015/6/30
 * Time: 15:48
 */
use Phalcon\Mvc\View;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Session\Adapter\Files as Session;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

// Setup the view component
$di->set('view', function() use ($config) {
    $view = new View();
    $view->setViewsDir($config->application->viewsDir);
    return $view;
});

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->set('url', function() use ($config){
    $url = new UrlProvider();
    $url->setBaseUri($config->application->baseUri);
    return $url;
});

// Start the session the first time a component requests the session service
$di->set('session', function() {
    $session = new Session();
    $session->start();
    return $session;
});

// Database connection is created based on parameters defined in the configuration file
$di->set('db', function() use ($config) {
    return new DbAdapter(array(
        "host"     => $config->database->host,
        "username" => $config->database->username,
        "password" => $config->database->password,
        "dbname"   => $config->database->name
    ));
});