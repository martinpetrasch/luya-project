<?php foreach($model::find()->all() as $item): ?>
    <h1><?= $item->title; ?></h1>
    <p><?= $item['text']; ?></p>
    <hr />
<?php endforeach; ?>