<?php
namespace app\modules\estore\controllers;

use Yii;

class DefaultController extends \app\modules\estore\base\EstoreController
{
    
    public function actionIndex()
    {
        // i18n
        $i18n = Yii::t('app', 'yes');
        
        return $this->renderLayout([
            "content" => $this->renderPartial('_index'),
            "i18n" => $i18n,
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
