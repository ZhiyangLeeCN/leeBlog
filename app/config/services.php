<?php
/**
 * User: ZhiyangLee
 * Date: 2015/6/30
 * Time: 15:48
 */

use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Session\Adapter\Files as Session;

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