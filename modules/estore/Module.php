<?php
namespace app\modules\estore;

class Module extends \luya\base\Module
{
    public static $urlRules = [
        ['pattern' => 'estore/testof/<id:\d+>', 'route' => 'estore/default/debug'],
        ['pattern' => 'estore/xyz', 'route' => 'estore/default/debug'],
    ];
    
}