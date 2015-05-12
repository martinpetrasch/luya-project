<?php foreach($model::find()->all() as $item): ?>
<pre>
<? foreach($item->tags as $tag): ?>
    <? print_r($tag->toArray()); ?>
<? endforeach; ?>
</pre>
<p><a href="<?= $item->getDetailUrl(); ?>">News Detail Url</a></p>
<?php endforeach; ?>