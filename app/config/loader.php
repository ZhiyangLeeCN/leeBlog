<?php
/**
 * User: ZhiyangLee
 * Date: 2015/6/30
 * Time: 15:51
 */

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    array(
        APP_PATH . $config->application->controllersDir,
        APP_PATH . $config->application->pluginsDir,
        APP_PATH . $config->application->libraryDir,
        APP_PATH . $config->application->modelsDir,
        APP_PATH . $config->application->formsDir,
    )
)->register();
