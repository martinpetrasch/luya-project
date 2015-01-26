<?php
namespace app\modules\estore;

class Module extends \luya\base\Module
{
    public $useAppLayoutPath = false;
    
    public static $urlRules = [
        ['pattern' => 'estore/warenkorb', 'route' => 'estore/default/basket'],
    ];
    
}