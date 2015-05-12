<? foreach($model->getData() as $item): ?>
    <pre>
        <? print_r($item->toArray()); ?>
    </pre>
<? endforeach; ?>