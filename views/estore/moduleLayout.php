
<? /* \luya\helpers\Url::to('estore/default/artikel', ['art' => 'ja']); */ ?>
<?= \luya\helpers\Url::to('estore/default/artikel', ['art' => 'ja', 'nix' => 'nei']);  ?>
<hr />
<?= \yii::$app->urlManager->createUrl(['estore/default/artikel', 'art' => 'ja', 'nix' => 'nei']);  ?>
<hr />

estore header
<ul>
</ul>
<hr />
<?php echo $content; ?>
<hr />
estore footer

<pre>
<code>
    <?php  print_r($this->context->getBasketTotal());?>
</code>

</pre>