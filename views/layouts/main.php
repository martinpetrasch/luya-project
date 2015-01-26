<?php
    use \yii;
    use \app\Asset;
    Asset::register($this);

    $lang = yii::$app->collection->lang;
?>
<html>
    <head>
        <title>Luya-Demo-Webseite <?= yii::$app->get('collection')->page->title; ?></title>
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
                        <h5>Cat: default, Lang: <?= $lang->shortCode; ?></h5>
                        <ul>
                            <? foreach(Yii::$app->collection->links->getByArguments(['cat' => 'default', 'lang' => $lang->shortCode, 'parent_nav_id' => 0]) as $item): ?>
                                <li><a href="<?= $lang->shortCode; ?>/<?=$item['url'];?>"><?= $item['title']; ?></a> <small>(<?= $item['url'];?>)</small>
                                    <ul>
                                        <? foreach(Yii::$app->collection->links->getByArguments(['lang' => $lang->shortCode, 'parent_nav_id' => $item['id']]) as $subItem): ?>
                                        <li><a href="<?= $lang->shortCode; ?>/<?=$subItem['url'];?>"><?= $subItem['title']?></a> <small>(<?= $subItem['url'];?>)</small>
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
