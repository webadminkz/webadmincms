<?php
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\PasswordChangeForm */
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
$this->title = 'Смена пароля';
$this->params['breadcrumbs'][] = ['label' =>  'Пофиль', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-profile-password-change">
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'user-form']); ?>

            <?= $form->field($model, 'currentPassword')->passwordInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'newPassword')->passwordInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'newPasswordRepeat')->passwordInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton( 'Сохранить', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>