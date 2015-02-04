<?php
namespace app\modules\estore\components;

class UrlRule extends \yii\web\UrlRule
{
    public $pattern = '</controller:\w+>/</action:\w+>';

    public $route = '<controller>/<action>';
}
