<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Вход в систему';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>
<div class="login-page" style="background-color:#ffffff; height:0%">
    <div class="row">
        <div class="col-xs-6">
            <p class="login-box-msg">Для входа в систему введите ваши Логин и Пароль</p>

            <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

            <?= $form
                ->field($model, 'username', $fieldOptions1)
                ->label(false)
                ->textInput(['placeholder' => 'Логин']) ?>

            <?= $form
                ->field($model, 'password', $fieldOptions2)
                ->label(false)
                ->passwordInput(['placeholder' => 'Пароль']) ?>

            <div class="row">
                <div class="col-md-8">
                    <?= $form->field($model, 'rememberMe')->checkbox()->label('Оставаться в системе') ?>
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                    <?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-block float-right', 'name' => 'login-button']) ?>
                </div>
                <!-- /.col -->
            </div>


            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>