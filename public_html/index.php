<?php

// composer & yii include
require(__DIR__ . '/../vendor/autoload.php');


// use the luya boot wrapping class
$boot = new \luya\base\Boot();
$boot->setYiiPath(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
$boot->run();