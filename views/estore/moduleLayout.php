<ul>
    <li><a href="<?= \luya\helpers\Url::to('estore/default/basket');  ?>">Basekt</a></li>
</ul>
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