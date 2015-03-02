<?php
namespace app\modules\estore;

class Module extends \luya\base\Module
{   
    public static $urlRules = [
        ['pattern' => 'estore/warenkorb', 'route' => 'estore/default/basket'],
        ['pattern' => 'estore/artikel-detail/<art:\w+>', 'route' => 'estore/default/artikel']
    ];
    
    public $moduleLayout = 'moduleLayout';
    
    public $assets = [
        'app\modules\estore\EstoreAsset'
    ];
}