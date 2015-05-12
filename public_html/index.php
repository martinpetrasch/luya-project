<?php

// composer & yii include
require(__DIR__ . '/../vendor/autoload.php');


// use the luya boot wrapping class
$boot = new \luya\base\Boot();
$boot->setYiiPath(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
$boot->run();
/*
\yii::$app->mail->compose('Subject', 'luya error:' . print_r(['alles' => 'klar'], true))->address('basil@nadar.io')->send();
echo "<pre>";
print_r(\yii::$app->mail);
*/