<? foreach($catData as $item): ?>
    <div class="well">
        <h1><?= $item->title; ?></h1>
        <a href="<?= \luya\helpers\Url::to('gallery/alben/index', ['catId' => $item->id, 'title' => \yii\helpers\Inflector::slug($item->title)]); ?>">Alben anzeigen</a>
    </div>
<? endforeach; ?>