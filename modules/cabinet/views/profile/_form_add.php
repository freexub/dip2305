<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\cabinet\models\CabinetProfileDepartments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Назначение на должность</h3>

        </div>

        <div class="card-body">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'user_id')->hiddenInput(['value'=>$_GET['id']])->label(false) ?>

            <?= $form->field($model, 'department_id')->dropDownList(ArrayHelper::map($model->getAllDepartments(),'id','name'),['prompt'=>'Выбрать департамент ...']) ?>

            <?= $form->field($model, 'position_id')->dropDownList(ArrayHelper::map($model->getAllPositions(),'id','name'),['prompt'=>'Выбрать должность ...']) ?>

            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>

    </div>


</div>
