<?php
namespace app\modules\estore\controllers;

use Yii;

class DefaultController extends \luya\base\Controller
{
    public function actionIndex()
    {
        $links = new \estore\collection\Links();
        $links->setLink('ja', ['yuhu']);
        Yii::$app->get('collection')->links = $links;
        $page = new \luya\collection\Page();
        $page->title = 'e_store';
        $page->content = 'e_store content';

        Yii::$app->get('collection')->page = $page;

        return $this->render("index", ['page' => $page]);
    }
}
