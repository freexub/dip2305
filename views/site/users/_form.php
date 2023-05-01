<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\widgets\SwitchInput;


/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $profile app\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cathedra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true])->label('Логин') ?>
    <?= $form->field($model, 'email')->textInput(['maxlength' => true])->label('E-mail') ?>
    <?= $form->field($model, 'password')->textInput(['maxlength' => true])->label('Пароль') ?>
    <?= $form->field($model, 'retypePassword')->textInput(['maxlength' => true])->label('Повтор пароля') ?>

    <div class="form-group">
        <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
