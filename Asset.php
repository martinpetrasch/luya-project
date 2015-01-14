<?php

namespace app;

class Asset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/assets';
    
    public $css = [
        "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css",
        "css/style.css",
    ];
}