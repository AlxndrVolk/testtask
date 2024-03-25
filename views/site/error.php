<?php

/* @var $this yii\web\View */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = 'Error';
?>

<div class="site-error">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($exception->getMessage())) ?>
    </div>
</div>