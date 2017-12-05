<?php

use yii\helpers\Html;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="description" content="">
    <!-- Standard favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <!-- Recommended favicon format -->
    <link rel="icon" type="image/png" href="/favicon.png">
    <!-- Apple Touch Icon (at least 200x200px) -->
    <link rel="apple-touch-icon" href="/custom-icon.png">
    <!-- To run web application in full-screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Status Bar Style (see Supported Meta Tags below for available values) -->
    <!-- Has no effect unless you have the previous meta tag -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- Microsoft Tiles -->
    <meta name="msapplication-config" content="browserconfig.xml" />
    <!-- Helps prevent duplicate content issues -->
    <link rel="canonical" href="<?=\yii\helpers\Url::canonical();?>">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>