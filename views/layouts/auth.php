<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use app\assets\AuthAsset;

AuthAsset::register($this);
?>
<?php $this->beginContent('@app/views/layouts/layout.php'); ?>
    <div class="container">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
<?php $this->endContent(); ?>