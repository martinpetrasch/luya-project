<?php
    use \yii;
    use \app\Asset;
    Asset::register($this);

    $menu = new \cmsadmin\components\Menu();
    $menu->setCatByRewrite('default');
    $menu->setLangByShortCode(Yii::$app->get('collection')->lang->shortCode);
    $nav = $menu->childrenRecursive(0, '__sub');

    // get collection link sahring
    //$links = Yii::$app->get('collection')->getLinks();

?>
<html>
    <head>
        <title>Luya-Demo-Webseite <?= yii::$app->get('collection')->page->title; ?></title>
        <base href="http://localhost/luya-website/application/" />
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
                        <ul>
                            <?php foreach ($nav as $item): $sub = (isset($item['__sub'])) ? $item['__sub'] : []; ?>
                                <li>
                                    <a href="de/<?= $item['rewrite']; ?>"><?= $item['title']; ?></a>
                                    <ul>
                                    <?php foreach ($sub as $subItem): $subsub = (isset($subItem['__sub'])) ? $item['__sub'] : []; ?>
                                        <li>
                                            <a href="de/<?= $item['rewrite']; ?>/<?= $subItem['rewrite']; ?>"><?= $subItem['title']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php endforeach; ?>
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
