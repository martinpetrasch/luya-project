<table border="1">
<tr>
    <td><img src="<?= \yii::$app->luya->storage->image->filterApply($model->cover_image_id, 'medium-thumbnail')->source; ?>" border="0" /></td>
    <td>
        <h2><?= $model->title; ?></h2>
        <p><?= $model->description; ?></p>
        <p><a href="<?= $model->getDetailUrl(); ?>"><?= $model->getDetailUrl(); ?></a>
        
        <h3>Bilder</h3>
        <div class="row">
            <? foreach($model->images() as $image): ?>
                <div class="col-md-3">
                    <img class="img-responsive" src="<?= \yii::$app->luya->storage->image->filterApply($image['image_id'], 'medium-thumbnail')->source; ?>" border="0" />
                </div>
            <? endforeach; ?>
        </div>
        
    </td>
</tr>
</table>