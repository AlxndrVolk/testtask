<?php

/** @var yii\web\View $this */
/**
 * @var array $data
 */

$this->title = 'Hawking';
?>
<div>
    <?php foreach ($data as $item) {
        echo '<b>id:</b> ' . $item['id'] . " | ",
            '<b>script_name:</b> ' . $item['script_name'] . " | ",
            '<b>start_time:</b> ' . $item['start_time'] . " | ",
            '<b>end_time:</b> ' . $item['end_time'] . " | ",
            '<b>result:</b> ' . $item['result'], '<br>';

    } ?>
</div>
