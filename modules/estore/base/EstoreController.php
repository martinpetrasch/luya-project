<?php
namespace app\modules\estore\base;

class EstoreController extends \luya\base\PageController
{
    public function getBasketTotal()
    {
        return [
            'items' => 10,
            'acmount' => '20.50 CHF'
        ];
    }
}