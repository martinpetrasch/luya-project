<?php

namespace app\assets;

class ProjectAsset extends \yii\web\AssetBundle
{
    public $basePath = '@webroot';
    
    public $baseUrl = '@web';
    
    public $css = [
        "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css",
        "css/style.css",
    ];
}