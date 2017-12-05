<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\User */

$this->title = 'Профиль';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-profile-index">
    <p>
        <?= Html::a('Редактировать', ['update'], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Сменить пароль', ['password-change'], ['class' => 'btn btn-default']) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'username',
            'email',
        ],
    ]) ?>

</div>