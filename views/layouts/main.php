<?php
    use \yii;

    $lang = yii::$app->collection->lang;

    $links = \yii::$app->collection->links;
    
    $first = \luya\helpers\Menu::parentNavIdByCurrentLink($links, 1);
    $second = \luya\helpers\Menu::parentNavIdByCurrentLink($links, 2);
    $third = \luya\helpers\Menu::parentNavIdByCurrentLink($links, 3);
    
?>
<html>
    <head>
        <title>Luya-Demo-Webseite // <?= $this->context->pageTitle; ?></title>
        <base href="<?= \yii\helpers\Url::base(true); ?>/" />
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    
    
        <div class="container">
            <div id="teaser">LUYA</div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="nav">
                        <h3>Splitted Navgation</h3>
                        <h4>Depth 1</h4>
                        <ul>
                            <? foreach(Yii::$app->collection->links->findByArguments(['cat' => 'default', 'lang' => $lang->shortCode, 'parent_nav_id' => $first]) as $item): ?>
                                <li><a href="<?= $lang->shortCode; ?>/<?=$item['url'];?>"><?= $item['title']; ?></a> <small>(<?= $item['url'];?>)</small></li>
                            <? endforeach; ?>
                        </ul>
                        SECOND
                        <ul>
                            <? foreach(Yii::$app->collection->links->findByArguments(['cat' => 'default', 'lang' => $lang->shortCode, 'parent_nav_id' => $second]) as $item): ?>
                                <li><a href="<?= $lang->shortCode; ?>/<?=$item['url'];?>"><?= $item['title']; ?></a> <small>(<?= $item['url'];?>)</small></li>
                            <? endforeach; ?>
                            
                        </ul>
                        THIRD
                         <ul>
                            <? foreach(Yii::$app->collection->links->findByArguments(['cat' => 'default', 'lang' => $lang->shortCode, 'parent_nav_id' => $third]) as $item): ?>
                                <li><a href="<?= $lang->shortCode; ?>/<?=$item['url'];?>"><?= $item['title']; ?></a> <small>(<?= $item['url'];?>)</small></li>
                            <? endforeach; ?>
                            
                        </ul>
                         <br /><br />
                        <h3>Navigation</h3>
                        
                        <ul>
                        <? foreach(Yii::$app->collection->links->findByArguments(['cat' => 'default', 'lang' => $lang->shortCode, 'parent_nav_id' => 0]) as $item): ?>
                                <li><a href="<?= $lang->shortCode; ?>/<?=$item['url'];?>"><?= $item['title']; ?></a> <small>(<?= $item['url'];?>)</small>
                                    <ul>
                                        <? foreach(Yii::$app->collection->links->findByArguments(['lang' => $lang->shortCode, 'parent_nav_id' => $item['id']]) as $subItem): ?>
                                        <li><a href="<?= $lang->shortCode; ?>/<?=$subItem['url'];?>"><?= $subItem['title']?></a> <small>(<?= $subItem['url'];?>)</small>
                                        
                                        <ul>
                                            <? foreach(Yii::$app->collection->links->findByArguments(['lang' => $lang->shortCode, 'parent_nav_id' => $subItem['id']]) as $subSubItem): ?>
                                            <li><a href="<?= $lang->shortCode; ?>/<?=$subSubItem['url'];?>"><?= $subSubItem['title']?></a> <small>(<?= $subSubItem['url'];?>)</small>
                                            <? endforeach; ?>
                                        </ul>
                                        
                                        <? endforeach; ?>
                                    </ul>
                                </li>
                            <? endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <div id="content">
                        <?= $content; ?>
                    </div>
                </div>
                <div class="col-md-2">
                    <div id="sidebar">
                        Side Navigation?
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="footer">
                        <p>Footer | &copy; 123 123</p>
                    </div>
                </div>
            </div>
        </div>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
<? /*
<? foreach(Yii::$app->collection->links->findByArguments(['cat' => 'default', 'lang' => $lang->shortCode, 'parent_nav_id' => 0]) as $item): ?>
        <li><a href="<?= $lang->shortCode; ?>/<?=$item['url'];?>"><?= $item['title']; ?></a> <small>(<?= $item['url'];?>)</small>
            <ul>
                <? foreach(Yii::$app->collection->links->findByArguments(['lang' => $lang->shortCode, 'parent_nav_id' => $item['id']]) as $subItem): ?>
                <li><a href="<?= $lang->shortCode; ?>/<?=$subItem['url'];?>"><?= $subItem['title']?></a> <small>(<?= $subItem['url'];?>)</small>
                <? endforeach; ?>
            </ul>
        </li>
    <? endforeach; ?>
*/
?>