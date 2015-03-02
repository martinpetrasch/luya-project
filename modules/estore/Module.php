<?php
namespace app\modules\estore;

class Module extends \luya\base\Module
{   
    public static $urlRules = [
        ['pattern' => 'estore/warenkorb', 'route' => 'estore/default/basket', 'composition' => [
            'en' => 'estore/the-basket',
            'de' => 'estore/der-warenkorb'
        ]],
        ['pattern' => 'estore/artikel-detail/<art:\w+>', 'route' => 'estore/default/artikel']
    ];
    
    public $moduleLayout = 'moduleLayout';
    
    public $assets = [
        'app\modules\estore\EstoreAsset'
    ];
}