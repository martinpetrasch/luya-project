<?php
namespace app\modules\estore\controllers;

use Yii;

class DefaultController extends \app\modules\estore\base\EstoreController
{
    
    public function actionIndex()
    {
        return $this->renderLayout([
               "content" => $this->renderPartial('_index')  
        ]);
        
    }
    
    public function actionBasket()
    {   
        return $this->renderLayout([
            "content" => $this->renderPartial('_basket')        
        ]);
    }
    
    public function actionArtikel($art)
    {
        return $art;
    }
}
