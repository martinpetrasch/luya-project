<?php
namespace app\modules\estore\controllers;

use Yii;

class DefaultController extends \luya\base\Controller
{
    //public $layout = 'main.php';
    
    public function actionIndex()
    {
        return 'ICH BIN DIE ACTION VON ESTORE DEFAULT';
    }
    
    public function actionBasket()
    {   
        $page = new \luya\collection\Page();
        $page->title = "Warenkorb";
        $page->content = 'TEST';
        \yii::$app->collection->page = $page;
        /*
        $links = new \luya\collection\Links();
        $links->addLink('test', ['url' => '?', 'title' => 'WARENKORB']);
        \yii::$app->collection->links = $links;
        */
        return $this->renderPartial('basket.php');
    }
}
