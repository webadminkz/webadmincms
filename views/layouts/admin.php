<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php $this->beginContent('@app/views/layouts/layout.php'); ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => ['/admin/default/index'],
        'options' => [
            'class' => 'navbar-default navbar-static-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => array_filter([
            ['label' => 'На сайт', 'url' => ['/main/default/index']],
        ]),
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => array_filter([
            ['label' => 'Пользователи', 'url' => ['/admin/user/index']],
            !Yii::$app->user->isGuest ?
                '<li>'
                . Html::beginForm(['/auth/default/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>' :
                false,
        ]),
    ]);
    NavBar::end();
    ?>
    <div class="container">
        <?= Breadcrumbs::widget([
            'homeLink' => ['label' => 'Главная', 'url' => '/admin/default/index'],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy;<?= date('Y') ?> <?= Yii::$app->name ?></p>
    </div>
</footer>
<?php $this->endContent(); ?>
