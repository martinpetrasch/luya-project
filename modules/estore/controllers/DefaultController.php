<?php
namespace app\modules\estore\controllers;

use Yii;

class DefaultController extends \luya\base\Controller
{
    public function actionIndex()
    {
        return 'ICH BIN DIE ACTION VON ESTORE DEFAULT';
    }
    
    public function actionDebug()
    {
        return 'ICB BIN DEBUG CONTEXT!';
    }
}
