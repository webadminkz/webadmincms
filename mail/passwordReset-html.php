<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user app\modules\auth\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['auth/password-reset', 'token' => $user->password_reset_token]);
?>
<div class="password-reset">
    <p>Здравствуйте, <?= Html::encode($user->username) ?>!</p>

    <p>Пройдите по ссылке, чтобы сменить пароль:</p>

    <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>
</div>
