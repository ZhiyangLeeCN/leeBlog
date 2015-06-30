<?php
/**
 * User: ZhiyangLee
 * Date: 2015/6/30
 * Time: 15:25
 */

use Phalcon\Config\Adapter\Ini as ConfigIni;
use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\Application;
use Phalcon\Loader;

define('APP_PATH', realpath('..') . '/');

/*Read the configuration*/
$config = new ConfigIni(APP_PATH . 'app/config/config.ini');

$di = new FactoryDefault();
$loader = new Loader();

/**
 * Auto-loader configuration
 */
require APP_PATH . 'app/config/loader.php';

require APP_PATH . 'app/config/services.php';

$app = new Application($di);

echo $app->handle()->getContent();