<?php
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
// composer & yii include
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
// use the luya boot wrapping class
use \luya\base\Boot;
// load your local customer repo config
$config = include('../config/local.php');
// start the boot class
$boot = new Boot();
// set configuration values for WEB mode
$boot->setConfig(Boot::SAPI_WEB, $config);
// set configuration values for CONSOLE/CLI mode
$boot->setConfig(Boot::SAPI_CLI, $config);
// run the Yii application (the wrapping class decides between WEB or CLI)
$boot->run();