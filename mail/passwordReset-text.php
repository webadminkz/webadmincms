<?php
/* @var $this yii\web\View */
/* @var $user app\modules\auth\models\User */
$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['auth/password-reset', 'token' => $user->password_reset_token]);
?>
Здравствуйте, <?= $user->username ?>,

Пройдите по ссылке, чтобы сменить пароль:

<?= $resetLink ?>
