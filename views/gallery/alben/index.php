<table border="1">
<? foreach($albenData as $item): ?>
<tr>
    <td><img src="<?= \yii::$app->luya->storage->image->filterApply($item->cover_image_id, 'medium-thumbnail')->source; ?>" border="0" /></td>
    <td>
        <pre>
            <? print_r($item->toArray()); ?>
        </pre>
        <h2><?= $item->title; ?></h2>
        <p><?= $item->description; ?></p>
        <p><a href="<?= $item->getDetailUrl(); ?>"><?= $item->getDetailUrl(); ?></a>
    </td>
</tr>
<? endforeach; ?>
</table>