<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use app\widgets\MetisMenu;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
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
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="wrapper">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => '/admin/default/index',
        'options' => [
            'class' => 'navbar-default navbar-static-top',
            'style' => 'margin-bottom: 0',
        ],
        'innerContainerOptions' => [
                'class' => '',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-top-links navbar-right'],
        'encodeLabels' => false,
        'items' => array_filter([
            ['label' => 'На сайт', 'url' => ['/main/default/index']],
            ['label' => '<i class="fa fa-heart fa-fw"></i> '. Yii::$app->user->identity->username, 'items' => [
                ['label' => '<i class="fa fa-user fa-fw"></i> Профиль', 'url' => ['/admin/profile/index']],
                '<li class="divider"></li>',
                ['label' => '<i class="fa fa-sign-out fa-fw"></i> Выход',
                    'url' => ['/auth/default/logout'],
                    'linkOptions' => ['data-method' => 'post']],
            ]],
        ]),
    ]);
    ?>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <?php
            echo MetisMenu::widget([
                'items' => array_filter([
                    ['label' => ' Главная', 'url' => ['/admin/default/index'], 'icon'=>'dashboard'],

                    ['label' => ' Пользователи', 'url' => ['/admin/user/index'], 'icon'=>'user'],
                    ['label' => ' icons', 'url' => ['/admin/default/icons'], 'icon'=>'icon'],
                ]),
            ]);
            ?>
        </div>
    </div>
    <?php
    NavBar::end();
    ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <?= Breadcrumbs::widget([
                'options' => ['class' => 'breadcrumb text-right'],
                'homeLink' => ['label' => 'Главная', 'url' => '/admin/default/index'],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <?= $content ?>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
